<?php
/**
*
* @package Carum - Carum
* @copyright (c) 2016 Carlos Cusi ( Carum )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace carum\carum\migrations;

class release_1_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['carum_carum_enabled']);
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\alpha2');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('carum_carum_enabled', 1)),
			array('config.add', array('carum_recaptcha_form_key', '6LdvpyATAAAAAOxwelSG20yyuUcwW8DOCPCUDv5P')),
			array('config.add', array('carum_recaptcha_form_secret_key', '6LdvpyATAAAAAK2eFRdAW91PIzB5w963YRms8ozE')),

		);
	}
}
