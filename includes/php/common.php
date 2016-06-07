<?php
/**
*
* @package Carum - Market
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

		'ACP_MARKET_TITLE'				=> 'Mercado',
		'ACP_MARKET_CONFIG_TITLE'		=> 'Configuración',
		'ACP_MARKET_ADS_TITLE'			=> 'Anuncios',
		'ACP_MARKET_USERS_TITLE'		=> 'Usuarios',

		'ACP_CARUM_MARKET_ENABLED'			=> 'Activar mercado',
		'ACP_CARUM_MARKET_BIDS_ENABLED'		=> 'Activate bids',
		'ACP_CARUM_MARKET_BOOKS_ENABLED'	=> 'Activate booking system',

		'ACP_MARKET_SETTINGS_SAVED'			=> 'Configuración guardada satisfactoriamente',

		'MARKET_LINK'	=> 'market', 
	));
