<?php

$GLOBALS['TL_DCA']['tl_settings']['fields']['minPasswordLength']  = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['minPasswordLength'],
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true)
);

$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{pixelSpreadde_core},minPasswordLength';
