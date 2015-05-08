<?php
namespace ParagonIE\AwesomeAppsec;

class Util 
{
    public static $toc;
    public static $compiled;
    
    /**
     * Compile a function
     * 
     * @param string $base
     * @param int $depth
     * @return type
     */
    public static function compile($base, $depth = 1)
    {
        $children = 0;

        $dirs = [];
        foreach (glob($base.'/*') as $file) {
            ++$children;

            if (\is_dir($file)) {
                $dirs[] = $file;
            } elseif (preg_match('#/([^/]+)\.json$#', $file)) {
                self::$toc .= self::tocFileTitle(
                    $file, 
                    $depth
                );
                self::$compiled .= self::jsonMarker($file, $depth);
            }
        }
        foreach ($dirs as $file) {
            ++$children;
            self::$toc .= self::tocDirTitle(
                $file, 
                $depth
            );
            self::$compiled .= self::bodyTitle(
                $file,
                $depth
            );

            self::compile(
                $file,
                $depth + 1
            );
        }
        return [self::$toc, self::$compiled];
    }
    
    /**
     * Markdown header
     * 
     * @param string $dirname
     * @param int $depth
     * @return string
     */
    protected static function bodyTitle($dirname, $depth = 1)
    {
        if (\preg_match('#^.+/([^/]+)$#', $dirname, $m)) {
            $dirname = $m[1];
        }
        if (\preg_match('#^[0-9]+\-(.*)$#', $dirname, $m)) {
            $dirname = $m[1];
        }
        $dirname = \str_replace('-', ' ', $dirname);
        
        return "\n".str_repeat('#', $depth).' '.\ucfirst($dirname)."\n";
    }

    /**
     * Generate a directory's title for the table of contents.
     * 
     * @param string $dirname
     * @param int $depth
     * @return string
     */
    protected static function tocDirTitle($dirname, $depth = 1)
    {
        if (\preg_match('#^.+/([^/]+)$#', $dirname, $m)) {
            $dirname = $m[1];
        }
        if (\preg_match('#^[0-9]+\-(.*)$#', $dirname, $m)) {
            $dirname = $m[1];
        }
        
        $dirname = \ucfirst(\str_replace('-', ' ', $dirname));
        
        return \str_repeat('  ', $depth).
            '* ['.
                $dirname.
            '](#'.
                self::makeSlug($dirname).
            ")\n";
    }
    

    /**
     * Generate a file's title for the table of contents.
     * 
     * @param string $file
     * @param int $depth
     * @return string
     */
    protected static function tocFileTitle($file, $depth = 1)
    {
        if (!\preg_match('#^.+/([^/]+)\.json$#', $file, $m)) {
            return '';
        }
        $fd = \json_decode(
            \file_get_contents($file),
            true
        );
        if (isset($fd['date'])) {
            $dt = new \DateTime($fd['date']);
        }
        $label = str_repeat('  ', $depth).
            '* ['.
                $fd['name'].
            '](#'.
            self::makeSlug(
                $fd['name'].
                (
                    isset($fd['date']) 
                        ? ('-'.$dt->format('Y'))
                        : ''
                )
            ).
            ')';
        
        if (isset($fd['date'])) {
            $label .= ' ('.$dt->format('Y').')';
        }
        
        return $label."\n";
    }

    /**
     * Builds a piece of a Markdown document, given a JSON file
     * 
     * @param string $file
     * @param int $depth
     * @return string
     */
    public static function jsonMarker($file, $depth = 1)
    {
        $fd = \json_decode(
            \file_get_contents($file),
            true
        );
        if (!empty($fd['url'])) {
            $header = str_repeat('#', $depth).' ['.$fd['name'].']('.$fd['url'].')';
        } else {
            $header = str_repeat('#', $depth).' '.$fd['name'];
        }
        if (!empty($fd['date'])) {
            $dt = new \DateTime($fd['date']);
            $header .= ' ('.$dt->format('Y').')';
        }
        
        $body = "\n".$header."\n\n"; 
        
        if (isset($dt)) {
            $body .= '**Released**: '.$dt->format('F j, Y')."\n\n";
        }
        
        $body .= $fd['remark']."\n";

        return $body;
    }
    
    /**
     * Make a unique URL slug
     * 
     * @staticvar array $slugs
     * @param string $string
     * @return string
     */
    public function makeSlug($string)
    {
        // So we don't repeat.
        static $slugs = [];
        
        // Handle duplication
        $desired = \str_replace("'", '', $string);
        $i = 2;
        while(\in_array($desired, $slugs)) {
            $desired = \str_replace("'", '', $string).'.'.$i;
            ++$i;
        }
        
        return \trim(
            \preg_replace(
                '#\-{2,}#', 
                '', 
                \preg_replace('#[^0-9a-z]#', '-', \strtolower($desired))
            ),
            '-'
        );
    }
}
