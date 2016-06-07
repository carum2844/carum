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

		'CARUM_COUNTRY'			=> 'Pais',
		'CARUM_STATE'			=> 'Provincia',
		'CARUM_CITY'			=> 'Población',

		'CARUM_COUNTRY_SELECT'	=> 'Escoja su pais',
		'CARUM_STATE_SELECT'	=> 'Escoja su provincia',
		'CARUM_CITY_SELECT'		=> 'Escoja su población',
		'CARUM_NOT_IN_LIST'		=> 'No est&aacute; en la lista',

		'CARUM_NO_COUNTRY'		=> 'Debe seleccionar un pais',
		'CARUM_NO_STATE'		=> 'Debe seleccionar una provincia',
		'CARUM_NO_CITY'			=> 'Debe seleccionar una población',
		
	));
