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
     * @param array $indices
     * @return type
     */
    public static function compile($base, $depth = 1, array $indices = [])
    {
        $children = 0;

        foreach (glob($base.'/*') as $file) {
            ++$children;
            $pass = $indices;
            $pass[] = $children;

            if (\is_dir($file)) {
                self::$toc .= self::tocDirTitle(
                    $file, 
                    $depth, 
                    $pass
                );
                self::$compiled .= self::bodyTitle(
                    $file,
                    $depth
                );
                
                self::compile(
                    $file,
                    $depth + 1,
                    $pass
                );
                
            } elseif (preg_match('#/([^/]+)\.json$#', $file)) {
                self::$toc .= self::tocFileTitle(
                    $file, 
                    $depth, 
                    $pass
                );
                self::$compiled .= self::jsonMarker($file, $depth);
            }
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
        
        return "\n".str_repeat('#', $depth).' '.\ucfirst($dirname)."\n";
    }

    /**
     * Generate a directory's title for the table of contents.
     * 
     * @param string $dirname
     * @param int $depth
     * @param array $indices
     * @return string
     */
    protected static function tocDirTitle($dirname, $depth = 1, array $indices = [])
    {
        if (\preg_match('#^.+/([^/]+)$#', $dirname, $m)) {
            $dirname = $m[1];
        }
        if (\preg_match('#^[0-9]+\-(.*)$#', $dirname, $m)) {
            $dirname = $m[1];
        }
        
        $dirname = \ucfirst(\str_replace('-', ' ', $dirname));
        
        
        return str_repeat('  ', $depth).'* ['.$dirname.'](#title.'.implode('.', $indices).')'."\n";
    }
    

    /**
     * Generate a file's title for the table of contents.
     * 
     * @param string $file
     * @param int $depth
     * @param array $indices
     * @return string
     */
    protected static function tocFileTitle($file, $depth = 1, array $indices = [])
    {
        if (!\preg_match('#^.+/([^/]+)\.json$#', $file, $m)) {
            return '';
        }
        $fd = \json_decode(
            \file_get_contents($file),
            true
        );
        
        return str_repeat('  ', $depth).'* ['.$fd['name'].'](#title.'.implode('.', $indices).')'."\n";
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

        return "\n".$header."\n\n".$fd['remark']."\n";
    }
}
