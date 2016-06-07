<?php
/**
*
* @package Mass Mail Gestion
* @copyright (c) 2013 Carlos Cusi
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

use carum\carum\includes\php\tables;

/**
* Obtain the mail footer ads
*/
function mail_footer_ads(){

	global $config, $db, $phpbb_root_path;
	//include($phpbb_root_path . 'ads/constants.php');

	$position = array();

	// Obtain positions
	$sql = 'SELECT position_id, width, height FROM ' . $config['table_prefix'] . tables::PORTAL_ADS_POSITIONS_TABLE . '
			WHERE place = "mail_footer" 
			AND active = 1';
	//echo $sql."<br />";
	//exit();
	$result_positions = $db->sql_query($sql);
	while ($row_positions = $db->sql_fetchrow($result_positions)){
			
		// Obtain the ad to show in this position
		$sql = 'SELECT * FROM ' . $config['table_prefix'] . tables::PORTAL_ADS_IN_POSITIONS_TABLE . '
				WHERE position_id = ' . $row_positions['position_id'] . '
				AND ad_enabled = 1';
				//country_id = ' . $ads_country . '
		$result_in_positions = $db->sql_query($sql);
		if ($row_in_positions = $db->sql_fetchrow($result_in_positions)){

			$position[$row_positions['position_id']]['position_id'] = $row_positions['position_id'];
			$position[$row_positions['position_id']]['width'] = $row_positions['width'];
			$position[$row_positions['position_id']]['height'] = $row_positions['height'];

			$sql = 'SELECT * FROM ' . $config['table_prefix'] . tables::PORTAL_ADS_TABLE . '
					WHERE ad_id = ' . $row_in_positions['ad_id'] . '
					AND ad_enabled = 1';
			//echo $sql."<br />";
			$result_ads = $db->sql_query($sql);
			if ( $row_ad = $db->sql_fetchrow($result_ads) ){
				$position[$row_positions['position_id']]['ad_id'] = $row_ad['ad_id'];
				$position[$row_positions['position_id']]['ad_code'] = $row_ad['ad_code'];
				$position[$row_positions['position_id']]['ad_link'] = $row_ad['ad_link'];
			}else{
				unset ($position[$row_positions['position_id']]);
			}
			$db->sql_freeresult($result_ads);

		}
	}
	$db->sql_freeresult($result_positions);
	//print_r($position);
	//exit();
	$publi = '';
	if ( sizeof($position) ){

		foreach ( $position as $clave => $valor )
		{

			$img_width = " width=\"".$position[$clave]['width']."px\" " ;
			$img_height = " height=\"".$position[$clave]['height']."px\" " ;

			$ad_codigo  = "<a href=\"".$config['server_protocol'].$config['server_name']."/gestion_mailing_publi.php?ad=".$position[$clave]['ad_id']."\" target=\"_blank\">";
			$ad_codigo .= "<img ";
			$ad_codigo .= "id=\"ad_".$position[$clave]['ad_id']."\"";
			$ad_codigo .= "src=\"/images/mails/ads/".$position[$clave]['ad_code']."\"";
			$ad_codigo .= $img_width.$img_height;
			$ad_codigo .= "></img>";
			$ad_codigo .= "</a>";
			$publi .= "<tr><td style=\"background-color: #ffffff; text-align:center\">".$ad_codigo."</td></tr>";

		}
	}

	return $publi;
}
/**
* Obtain the ads to show in the ads side of the mail
*/
function mail_ads(){

	global $config, $db, $phpbb_root_path;
	//include($phpbb_root_path . 'ads/constants.php');

	$position = array();

	// Obtains positions
	$sql = 'SELECT position_id, width, height FROM ' . $config['table_prefix'] . tables::PORTAL_ADS_POSITIONS_TABLE . '
			WHERE place = "mail_column" 
			AND active = 1';
	//echo $sql."<br />";
	//exit();
	$result_positions = $db->sql_query($sql);
	while ($row_positions = $db->sql_fetchrow($result_positions)){
			
		// Obtain the ad to show in this position
		$sql = 'SELECT * FROM ' . $config['table_prefix'] . tables::PORTAL_ADS_IN_POSITIONS_TABLE . '
				WHERE position_id = ' . $row_positions['position_id'] . '
				AND ad_enabled = 1';
				//country_id = " . $ads_country . "
		$result_in_positions = $db->sql_query($sql);
		if ($row_in_positions = $db->sql_fetchrow($result_in_positions)){

			$position[$row_positions['position_id']]['position_id'] = $row_positions['position_id'];
			$position[$row_positions['position_id']]['width'] = $row_positions['width'];
			$position[$row_positions['position_id']]['height'] = $row_positions['height'];

			$sql = 'SELECT * FROM ' . $config['table_prefix'] . tables::PORTAL_ADS_TABLE . '
					WHERE ad_id = ' . $row_in_positions['ad_id'] . '
					AND ad_enabled = 1';
			//echo $sql."<br />";
			$result_ads = $db->sql_query($sql);
			if ( $row_ad = $db->sql_fetchrow($result_ads) ){
				$position[$row_positions['position_id']]['ad_id'] = $row_ad['ad_id'];
				$position[$row_positions['position_id']]['ad_code'] = $row_ad['ad_code'];
				$position[$row_positions['position_id']]['ad_link'] = $row_ad['ad_link'];
			}else{
				unset ($position[$row_positions['position_id']]);
			}
			$db->sql_freeresult($result_ads);

		}
	}
	$db->sql_freeresult($result_positions);
	//print_r($position);
	//exit();
	$publi = "";
	if ( sizeof($position) ){

		foreach ( $position as $clave => $valor )
		{

			$img_width = " width=\"".$position[$clave]['width']."px\" " ;
			$img_height = " height=\"".$position[$clave]['height']."px\" " ;

			$ad_codigo  = "<a href=\"".$config['server_protocol'].$config['server_name']."/gestion_mailing_publi.php?ad=".$position[$clave]['ad_id']."\" target=\"_blank\">";
			$ad_codigo .= "<img ";
			$ad_codigo .= "id=\"ad_".$position[$clave]['ad_id']."\" ";
			$ad_codigo .= "src=\"/images/mails/ads/".$position[$clave]['ad_code']."\" ";
			$ad_codigo .= $img_width.$img_height;
			$ad_codigo .= "></img>";
			$ad_codigo .= "</a>";
			$publi .= "<tr><td style=\"background-color: #ffffff; text-align:center\">".$ad_codigo."</td></tr>";

		}
	}

	return $publi;
}
