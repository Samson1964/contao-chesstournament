<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'chesstournament_class'    => 'system/modules/chesstournament/classes/chesstournament.php',
	'chesstournament'          => 'system/modules/chesstournament/classes/chesstournament_ce.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_chesstournament'      => 'system/modules/chesstournament/templates',
)); 
