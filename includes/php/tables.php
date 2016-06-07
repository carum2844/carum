<?php
/**
*
* @package phpBB Extension - Carum
* @copyright (c) 2016 Carlos Cusi ( Carum )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace carum\carum\includes\php;

/**
* This class offers the table's names needed in Carum extensions
*/
class tables
{

	// EXT Portal / Columns
	const PORTAL_CONFIG_TABLE =		'carum_portal_config';
	const PORTAL_PAGES_TABLE =		'carum_portal_pages';
	const PORTAL_MODULES_TABLE =	'carum_portal_modules';
	
	const PORTAL_ADS_POSITIONS_TABLE =		'carum_portal_ads_positions';
	const PORTAL_ADS_TABLE =				'carum_portal_ads';
	const PORTAL_ADS_IN_POSITIONS_TABLE =	'carum_portal_ads_in_positions';
	const PORTAL_ADS_FORUMS =				'carum_portal_ads_forums';
	const PORTAL_ADS_CLICKS =				'carum_portal_ads_clicks';

	// EXT Hightlighted in directories
	const USERS_DESTACADOS_TABLE =	'carum_users_destacados';
	const MARCAS_TABLE =			'carum_marcas';

	// EXT Press Notes
	const PRESS_NOTES_TABLE =		'carum_press_notes';

	// EXT Who Was_Here - Visits
	const WWH_VISITS_TABLE =		'carum_wwh_visits';
	const WWH_LOGS_TABLE =			'carum_wwh_logs';
	const WWH_TODAY_TABLE =			'carum_wwh_today';
	const WWH_REFERRERS_TABLE =		'carum_wwh_referrers';
	//const VISIT_ERROR_TABLE =		'carum_visit_error_table';
	//const VISIT_RETURNING_USERS =	'carum_visit_returning_users';
	//const VISIT_UNIQUE_USERS =		'carum_visit_unique_users';
	//const VISIT_USERS =				'carum_visit_users';

	// EXT Mass Email
	const MAILS_QUEUE_TABLE =	'carum_mass_mail_queue';
	const MAILS_QUEUE_TABLE_H =	'carum_mass_mail_queue_h';
	const MAIL_ACCOUNTS_TABLE =	'carum_mass_mail_accounts';

	// EXT Cron Alerts
	const ALERTS_TABLE =		'carum_alerts';

	// EXT Offers
	const OFFERS_TABLE =				'carum_offers';
	const OFFERS_CATEGORIES_TABLE =		'carum_offers_categories';

	// EXT Quotes
	const QUOTES_TABLE = 'carum_quotes';

	// EXT Leads
	const LEADS_TABLE = 		'carum_leads';
	const LEADS_GROUP_TABLE =	'carum_leads_group';
	const LEADS_ACTIONS_TABLE =	'carum_leads_actions';

	// EXT User Firm Fields - Location
	const COUNTRIES_TABLE = 			'carum_countries';
	const STATES_TABLE = 				'carum_states';
	const CITIES_TABLE = 				'carum_cities';
	const LANGS_TABLE =					'carum_langs';
	const CURRENCIES_TABLE =			'carum_currencies';
	const SUPPLIER_CATEGORIES_TABLE =	'carum_supplier_categories';
	const USERS_CATEGORIES_TABLE =		'carum_users_supplier_categories';
	
	// EXT Gestion
	const MENU_GESTION_TABLE = 	'carum_menu_gestion';
	
	// EXT Market
	const MARKET_ADS_TABLE =			'carum_market_ads';
	const MARKET_ADS_ASKS_TABLE =		'carum_market_ads_asks';
	const MARKET_ADS_BIDS_TABLE =		'carum_market_ads_bids';
	const MARKET_ADS_VISITS_TABLE =		'carum_market_ads_visits';
	const MARKET_CATEGORIES_TABLE =		'carum_market_categories';
	const MARKET_MAKERS_TABLE =			'carum_market_makers';
	const MARKET_MODELS_TABLE =			'carum_market_models';
	const MARKET_USERS_TABLE =			'carum_market_users';
	
	// EXT Fair
	const FERIA_CATEGORIAS_TABLE =		'carum_feria_categorias';
	const FERIA_EMPRESAS_TABLE =		'carum_feria_empresas';
	const FERIA_MARCAS_TABLE = 			'carum_feria_marcas';
	const FERIA_EMPRESAS_MARCAS_TABLE =	'carum_feria_empresas_marcas';
	const FERIA_PRODUCTOS_TABLE =		'carum_feria_productos';
	const FERIA_ANUNCIOS_TABLE =		'carum_feria_anuncios';
	const FERIA_NOVEDADES_TABLE =		'carum_feria_novedades';
	const FERIA_DESTACADOS_TABLE =		'carum_feria_destacados';

	// EXT Feria CPrint
	const FERIA_EMPRESAS_CPRINT_TABLE = 			'carum_feria_empresas_cprint';
	const FERIA_EMPRESAS_CPRINT_NOVEDADES_TABLE = 	'carum_feria_empresas_cprint_novedades';
	const FERIA_EMPRESAS_CPRINT_ACTIVIDADES_TABLE =	'carum_feria_empresas_cprint_actividades';

}
