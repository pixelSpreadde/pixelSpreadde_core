<?php

$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'redirecter_protected';
$GLOBALS['TL_DCA']['tl_module']['palettes']['redirecter'] = '{title_legend},name,headline,type;{config_legend},jumpTo,redirecter_guests,redirecter_protected;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_module']['subpalettes']['redirecter_protected'] = 'redirecter_groups';

$GLOBALS['TL_DCA']['tl_module']['fields']['redirecter_guests'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['guests'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['redirecter_protected'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['protected'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['redirecter_groups'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['groups'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'foreignKey'              => 'tl_member_group.name',
	'eval'                    => array('mandatory'=>true, 'multiple'=>true),
	'sql'                     => "blob NULL",
	'relation'                => array('type'=>'hasMany', 'load'=>'lazy')
);