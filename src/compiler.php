<?php
/**
 * This code just recursively hacks together the README.md file based on the 
 * data/ directory and builds a table of contents at the top.
 */

define('DATADIR', dirname(__DIR__).'/data');
require_once "Util.php";

$compiled = \file_get_contents(DATADIR.'/header.md')."\n\n";
$compiled .= \implode(
    "\n", 
    \ParagonIE\AwesomeAppsec\Util::compile(DATADIR)
);

\file_put_contents(dirname(__DIR__).'/README.md', $compiled);