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

		'CARUM_COUNTRY'			=> 'Country',
		'CARUM_STATE'			=> 'State/Province',
		'CARUM_CITY'			=> 'City',

		'CARUM_COUNTRY_SELECT'	=> 'Choose a country',
		'CARUM_STATE_SELECT'	=> 'Choose a state/province',
		'CARUM_CITY_SELECT'		=> 'Choose a city',
		'CARUM_NOT_IN_LIST'		=> 'Not in the list',

		'CARUM_NO_COUNTRY'		=> 'You must select a country',
		'CARUM_NO_STATE'		=> 'You must select a state/province',
		'CARUM_NO_CITY'			=> 'You must select a city',
		
	));
