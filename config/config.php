<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   bdf
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2014
 */

/**
 * Backend-Modul BdF anlegen und einfügen
 */

array_insert($GLOBALS['BE_MOD']['content'], 4, array
(
	'chesstournament' => array
	(
		'tables'         => array('tl_chesstournament', 'tl_chesstournament_players', 'tl_chesstournament_results'),
		'icon'           => 'system/modules/chesstournament/assets/images/icon.png',
		'pairs_generate' => array('chesstournament_class', 'generatePairs'),
	)
));

/**
 * -------------------------------------------------------------------------
 * CONTENT ELEMENTS
 * -------------------------------------------------------------------------
 */
$GLOBALS['TL_CTE']['schach']['chesstournament'] = 'chesstournament';

?>