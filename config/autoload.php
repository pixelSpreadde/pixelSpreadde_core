<?php

ClassLoader::addNamespaces(array
(
	'Contao',
	'pixelSpreadde',
	'pixelSpreadde\Frontend'
));
 
ClassLoader::addClasses(array
(
	'Contao\EnvironmentInsertTags'                => 'system/modules/pixelSpreadde_core/classes/Environment/EnvironmentInsertTags.php',
	'pixelSpreadde\Frontend\ModuleRedirecter'     => 'system/modules/pixelSpreadde_core/modules/ModuleRedirecter.php'
));

TemplateLoader::addFiles(array
(
	'mod_redirecter'          => 'system/modules/pixelSpreadde_core/templates/modules'
));