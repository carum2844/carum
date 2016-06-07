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

					'GROUP_1'	=> 'Invitados',
					'GROUP_2'	=> 'Usuarios registrados',
					'GROUP_3'	=> 'Usuarios COPPA',
					'GROUP_4'	=> 'Moderadores Globales',
					'GROUP_5'	=> 'Administradores',
					'GROUP_6'	=> 'Robots',
					'GROUP_7'	=> 'Nuevos Registrados',
					'GROUP_8'	=> 'Distribuidores / Fabricantes',
					'GROUP_10'	=> 'Rotulistas',
					'GROUP_11'	=> 'Agencias Publicidad',
					'GROUP_12'	=> 'Tecnicos',
					'GROUP_13'	=> 'Manipuladores',
					'GROUP_14'	=> 'Imprentas',
					'GROUP_15'	=> 'Org. Públicos',
					'GROUP_16'	=> 'Moderadores',
					'GROUP_17'	=> 'Colaboradores',
					'GROUP_18'	=> 'Serigrafías',
					'GROUP_19'	=> 'Asociaciones',
					'GROUP_20'	=> 'Particulares',
					'GROUP_21'	=> 'Organización de eventos',
					'GROUP_22'	=> 'Fotógrafos',
					'GROUP_23'	=> 'Externos',
					'GROUP_24'	=> 'Ver presupuestos',
					'GROUP_25'	=> 'Ver ofertas',

));
