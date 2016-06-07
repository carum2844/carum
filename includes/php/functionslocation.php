<?php
/**
*
* @package Carum
* @copyright (c) 2016 Carlos Cusi ( Carum )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace carum\carum\includes\php;

use carum\carum\includes\php\tables;

class functionslocation
{

	/** @var \phpbb\cache\service */
	public $cache;

	/** @var \phpbb\db\driver\driver */
	public $db;

	/** @var \phpbb\user */
	public $user;

	/** @var string Table prefix */
	protected $table_prefix;  
	
	/**
	* Constructor
	*
	* @param \phpbb\cache\service			$cache				Cache object
	* @param \phpbb\db\driver\driver		$db					Database object
	* @param \phpbb\user					$user				User object
	* @param string							$table_prefix		Name of the table prefix
	*/

	public function __construct(
			\phpbb\cache\service $cache,
			\phpbb\db\driver\driver_interface $db,
			\phpbb\user $user,
			$table_prefix)
	{
		$this->cache = $cache;
		$this->db = $db;
		$this->user = $user;
		$this->table_prefix = $table_prefix;

		$user->add_lang_ext('carum/carum', 'countries');
	}

	/**
	 * Get country name
	 *
	 * @return string country_name
	 */

	public function get_country_name( $country_id = false )
	{
		$countries = $this->cache->get('_countries');

		if ( $country_id && isset($countries[$country_id]) )
		{
			$country_name = $countries[$country_id]['country_3a'];

			return $country_name;
		}
		return false;
	}
	/**
	 * Get state name
	 *
	 * @return string state_name
	 */

	public function get_state_name( $state_id = false )
	{
		$states = $this->cache->get('_states');

		if ( $state_id && isset($states[$state_id]) )
		{
			$state_name = $states[$state_id]['name'];

			return $state_name;
		}
		return false;
	}
	/**
	 * Get city name
	 *
	 * @return string city_name
	 */

	public function get_city_name( $city_id = false )
	{

		if ( $city_id )
		{
			$sql = 'SELECT name FROM ' . $this->table_prefix . tables::CITIES_TABLE . ' WHERE city_id = ' . $city_id;
			$result = $this->db->sql_query($sql);
			$city_name = $this->db->sql_fetchfield('name');
			$this->db->sql_freeresult($result);

			return $city_name;
		}
		return false;

	}
	/**
	 * Get json_list_countries
	 *
	 * @param int $country_id
	 *
	 * @return json string countries
	 *
	 */
	public function json_list_countries( $country_id )
	{
		global $user;

		$sql = 'SELECT *
				FROM ' . $this->table_prefix . tables::COUNTRIES_TABLE . '
				ORDER BY country_3a';
		$result = $this->db->sql_query($sql);

		$jsondata = array();
		if( $country_id == '0') $jsondata['0'] = $this->user->lang['CARUM_COUNTRY_SELECT'];
		if( $result->num_rows > 0 ) {
			while( $row = $this->db->sql_fetchrow($result) ) {
				//$jsondata["data"]["users"][] es un array no asociativo. Tendremos que utilizar JSON_FORCE_OBJECT en json_enconde
				//si no queremos recibir un array en lugar de un objeto JSON en la respuesta
				//ver http://www.php.net/manual/es/function.json-encode.php para más info
				$jsondata[$row['country_id']] = $this->user->lang['COUNTRY_CODE_3A_'.$row['country_3a']];
			}
		}
		asort($jsondata);
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($jsondata, JSON_FORCE_OBJECT);
		exit();
	}
	/**
	 * Get json_list_states
	 *
	 * @param int $country_id
	 * @param int $state_id
	 *
	 * @return json string states_options
	 *
	 */
	public function json_list_states( $country_id, $state_id = false )
	{
		global $user;

		$sql = 'SELECT *
				FROM ' . $this->table_prefix . tables::STATES_TABLE . '
				WHERE country_id = ' . $country_id . '
				ORDER BY name';
		$result = $this->db->sql_query($sql);

		$jsondata = array();
		if( $state_id == '0') $jsondata['0'] = '-- '.$this->user->lang['CARUM_STATE_SELECT'].'-- ';
		if( $result->num_rows > 0 ) {
			while( $row = $this->db->sql_fetchrow($result) ) {
				//$jsondata["data"]["users"][] es un array no asociativo. Tendremos que utilizar JSON_FORCE_OBJECT en json_enconde
				//si no queremos recibir un array en lugar de un objeto JSON en la respuesta
				//ver http://www.php.net/manual/es/function.json-encode.php para más info
				$jsondata[$row['state_id']] = $row['name'];
			}
		}
		asort($jsondata);
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($jsondata, JSON_FORCE_OBJECT);
		exit();

	}
	/**
	 * Get json_list_cities
	 *
	 * @param int $country_id
	 * @param int $state_id
	 * @param int $city_id
	 *
	 * @return json string cities_options
	 *
	 */

	public function json_list_cities( $country_id, $state_id, $city_id = false )
	{
		global $user;

		$sql = 'SELECT *
				FROM ' . $this->table_prefix . tables::CITIES_TABLE . '
				WHERE country_id = ' . $country_id . '
				AND state_id = ' . $state_id . '
				ORDER BY name';
		$result = $this->db->sql_query($sql);

		$jsondata = array();
		if( $city_id == '0') $jsondata['0'] = '-- '.$this->user->lang['CARUM_CITY_SELECT'].' --';
		$jsondata['-'] = '-- '.$this->user->lang['CARUM_NOT_IN_LIST'].'-- ';
		if( $result->num_rows > 0 ) {
			while( $row = $this->db->sql_fetchrow($result) ) {
				//$jsondata["data"]["users"][] es un array no asociativo. Tendremos que utilizar JSON_FORCE_OBJECT en json_enconde
				//si no queremos recibir un array en lugar de un objeto JSON en la respuesta
				//ver http://www.php.net/manual/es/function.json-encode.php para más info
				$jsondata[$row['city_id']] = $row['name'];
			}
		}
		asort($jsondata);
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($jsondata, JSON_FORCE_OBJECT);
		exit();

	}
	/**
	 * Get countries list for a select input
	 *
	 * @return string options list of countries
	 *
	 */
	public function get_countries_option_list( $country_id = false )
	{

		if ( $country_id ) {
			$countries = $this->cache->get('_countries');
			$countries_list = '';
			if ( !$country_id ) $countries_list .= '<option id="0" value="0">' . $this->user->lang['CARUM_COUNTRY_SELECT'] . '</option>';

			foreach ($countries as $key=>$value)
			{
				$selected = ($value['country_id'] == $country_id)? ' selected="selected"' : '';
				$countries_list .= '<option id="' . $countries[$key]['country_id'] . '" value="' . $countries[$key]['country_id'] . '"' . $selected . '>' . $this->user->lang['COUNTRY_CODE_3A_'.$countries[$key]['country_3a'] ]. '</option>';
			}

			return $countries_list;
		}
		return false;

	}
	/**
	 * Get states list of a country for a select input
	 *
	 * @return string options list of states
	 *
	 */
	public function get_states_option_list($country_id = false, $state_id = false)
	{

		if ( $country_id && $state_id ){
			
			$states = $this->cache->get('_states');
			$states_list = '';
			if ( !$country_id ) return;
			
			if ( !$state_id ) $states_list .= '<option id="0" value="0">' . $this->user->lang['CARUM_STATE_SELECT'] . '</option>';

			foreach ($states as $key => $value)
			{
				if ( $value['country_id'] = $country_id ){
					$selected = ($value['state_id'] == $state_id)? ' selected="selected"' : '';
					$states_list .= '<option id="' . $states[$key]['state_id'] . '" value="' . $states[$key]['state_id'] . '"' . $selected . '>' . $this->user->lang[$states[$key]['name'] ]. '</option>';
				}
			}

			return $states_list;
		}
		return false;

	}
	/**
	 * Get cities list of a country/state for a select input
	 *
	 * @return string options list of cities
	 *
	 */
	public function get_cities_option_list($country_id = false, $state_id = false, $city_id = false)
	{

		if ( $country_id && $state_id && $city_id ){
			
			$cities = $this->cache->get('_cities');
			$cities_list = '';
			if ( !$country_id ) return;
			if ( !$state_id ) return;
			
			if ( !$city_id ) $cities_list .= '<option id="" value="">' . $this->user->lang['CARUM_CITY_SELECT'] . '</option>';

			foreach ($cities as $key => $value)
			{
				if ( $value['country_id'] = $country_id ){
					if ( $value['state_id'] = $state_id ){
						$selected = ( $cities[$key]['city_id'] == $city_id )? ' selected="selected"' : '';
						$cities_list .= '<option id="' . $cities[$key]['city_id'] . '" value="' . $cities[$key]['city_id'] . '"' . $selected . '>' . $this->user->lang[$cities[$key]['name'] ]. '</option>';
					}
				}
			}

			return $cities_list;
		}
		return false;

	}
	/**
	 * Get country id from code_3a
	 *
	 * @return string country_name
	 */

	public function get_country_id_from_3a($country_3a = false)
	{

		if ( $country_3a )
		{
			$countries = $this->cache->get('_countries');

			foreach ($countries as $key => $value)
			{
				if ( $countries[$key]['country_3a'] == $country_3a ){
					$country_id = $countries[$key]['country_id'];
				}
			}
			return $country_id;
		}
		return false;
	}

	/**
	 * cache_countries
	 *
	 * Build the cache of the countries
	 *
	 * @return null
	 */

	public function cache_countries()
	{
		if (($this->cache->get('_countries')) === false)
		{
			$sql = 'SELECT *
				FROM ' . $this->table_prefix . tables::COUNTRIES_TABLE . '
				ORDER BY country_id';
			$result = $this->db->sql_query($sql);

			$countries = array();
			while ($row = $this->db->sql_fetchrow($result))
			{
				$countries[$row['country_id']] = array(
					'country_id'		=> $row['country_id'],
					'country_2a'		=> $row['country_2a'],
					'country_3a'		=> $row['country_3a'],
					'country_3n'		=> $row['country_3n'],
					'country_lang'		=> $row['country_lang'],
					'country_currency_id'	=> $row['country_currency_id'],
					'country_flag'			=> $row['country_flag'],
					'country_phone_code'	=> $row['country_phone_code'],
				);
			}
			$this->db->sql_freeresult($result);

			// cache this data for ever, can only change in ACP
			$this->cache->put('_countries', $countries);
		}
	}
	/**
	 * cache_states
	 *
	 * Build the cache of the states
	 *
	 * @return null
	 */

	public function cache_states()
	{
		if (($this->cache->get('_states')) === false)
		{
			$sql = 'SELECT *
				FROM ' . $this->table_prefix . tables::STATES_TABLE . '
				ORDER BY state_id';
			$result = $this->db->sql_query($sql);

			$states = array();
			while ($row = $this->db->sql_fetchrow($result))
			{
				$states[$row['state_id']] = array(
					'state_id'		=> $row['state_id'],
					'country_id'	=> $row['country_id'],
					'name'			=> $row['name'],
				);
			}
			$this->db->sql_freeresult($result);

			// cache this data for ever, can only change in ACP
			$this->cache->put('_states', $states);
		}
	}
	/**
	 * cache_cities
	 *
	 * Build the cache of the cities
	 *
	 * @return null
	 */

	public function cache_cities()
	{
		if (($this->cache->get('_cities')) === false)
		{
			$sql = 'SELECT *
				FROM ' . $this->table_prefix . tables::CITIES_TABLE . '
				ORDER BY city_id';
			$result = $this->db->sql_query($sql);

			$cities = array();
			while ($row = $this->db->sql_fetchrow($result))
			{
				$states[$row['city_id']] = array(
					'city_id'		=> $row['city_id'],
					'country_id'	=> $row['country_id'],
					'state_id'		=> $row['state_id'],
					'name'			=> $row['name'],
				);
			}
			$this->db->sql_freeresult($result);

			// cache this data for ever, can only change in ACP
			$this->cache->put('_cities', $cities);
		}
	}
}
