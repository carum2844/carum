<?php
/**
*
* @package Carum
* @copyright (c) 2016 Carlos Cusi ( Carum )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(

		'CARUM_COUNTRY'			=> 'Pays',
		'CARUM_STATE'			=> 'State/Province',
		'CARUM_CITY'			=> 'Ville',

		'CARUM_COUNTRY_SELECT'	=> 'Choisissez un pays',
		'CARUM_STATE_SELECT'	=> 'Choisissez une province',
		'CARUM_CITY_SELECT'		=> 'Choisissez une ville',
		'CARUM_NOT_IN_LIST'		=> 'Pas dans la liste',

		'CARUM_NO_COUNTRY'		=> 'Vous devez sélectionner un pays',
		'CARUM_NO_STATE'		=> 'Vous devez sélectionner une province',
		'CARUM_NO_CITY'			=> 'Vous devez sélectionner une ville',
		
	));
