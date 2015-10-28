<?php

/**
 * Hooks
 **/
$GLOBALS['TL_HOOKS']['replaceInsertTags']['environment_inserttags'] = array('EnvironmentInsertTags', 'replaceTags');

/**
 * Copyright
 **/
$GLOBALS['TL_HEAD']['pixelSpreadde'] = "<!--\n\n    This Contao OpenSource CMS use Modules from pixelSpreadde\n    Copyright (c)2012 - 2014 by Sascha Brandhoff :: Extensions of pixelSpreadde are copyright of their respective owners\n    Visit the our website at http://www.pixelSpread.de for more information\n\n-->\n";

/**
 * FE-Modules
 **/
array_insert($GLOBALS['FE_MOD']['miscellaneous'], count($GLOBALS['FE_MOD']['miscellaneous']), array
(
	'redirecter'  => 'ModuleRedirecter',
));