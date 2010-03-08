<?php

t3lib_div::loadTCA('sys_language');

$GLOBALS['TCA']['sys_language']['columns']['flag']['config']['fileFolder']='EXT:syslanguage_flags/gfx/';
$GLOBALS['TCA']['sys_language']['columns']['flag']['config']['selicon_cols'] = 15;

?>
