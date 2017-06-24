<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   chesstable
 * Version    1.0.0
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2013
 */

class chesstournament extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_chesstournament';

	/**
	 * Generate the module
	 */
	protected function compile()
	{

		//global $objPage,$objArticle;
		//print_r($GLOBALS);
		//echo "ID=".$objPage->id;

		// Parameter zuweisen
		$csv = $this->chesstable_csv;
		$file = $this->chesstable_file;
		// Template ausgeben
		//$this->Template = new \FrontendTemplate($this->strTemplate);
		//$this->Template->class = "ce_chesstable";
		//$this->Template->tabelle = $content;

		return;

	}

}
?>