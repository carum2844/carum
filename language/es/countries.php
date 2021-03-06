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

				'COUNTRY_CODE_3A_ESP' => 'España',
				'COUNTRY_CODE_3A_NLD' => 'Holanda',
				'COUNTRY_CODE_3A_DEU' => 'Alemania',
				'COUNTRY_CODE_3A_USA' => 'USA',
				'COUNTRY_CODE_3A_FRA' => 'Francia',
				'COUNTRY_CODE_3A_GRC' => 'Grecia',
				'COUNTRY_CODE_3A_BEL' => 'Belgica',
				'COUNTRY_CODE_3A_PRT' => 'Portugal',
				'COUNTRY_CODE_3A_IRL' => 'Irlanda',
				'COUNTRY_CODE_3A_ISL' => 'Islandia',
				'COUNTRY_CODE_3A_ALB' => 'Albania',
				'COUNTRY_CODE_3A_MCO' => 'Mónaco',
				'COUNTRY_CODE_3A_ITA' => 'Italia',
				'COUNTRY_CODE_3A_AUT' => 'Austria',
				'COUNTRY_CODE_3A_DNK' => 'Dinamarca',
				'COUNTRY_CODE_3A_AND' => 'Andorra',
				'COUNTRY_CODE_3A_ARG' => 'Argentina',
				'COUNTRY_CODE_3A_BOL' => 'Bolivia',
				'COUNTRY_CODE_3A_BIH' => 'Bosnia & Herzegovina',
				'COUNTRY_CODE_3A_BRA' => 'Brasil',
				'COUNTRY_CODE_3A_BGR' => 'Bulgaria',
				'COUNTRY_CODE_3A_CAN' => 'Canada',
				'COUNTRY_CODE_3A_CHL' => 'Chile',
				'COUNTRY_CODE_3A_ECU' => 'Ecuador',
				'COUNTRY_CODE_3A_CUB' => 'Cuba',
				'COUNTRY_CODE_3A_CHN' => 'China',
				'COUNTRY_CODE_3A_FIN' => 'Finland',
				'COUNTRY_CODE_3A_JPN' => 'Japón',
				'COUNTRY_CODE_3A_MEX' => 'Mexico',
				'COUNTRY_CODE_3A_KOR' => 'Corea del Sur',
				'COUNTRY_CODE_3A_TWN' => 'Taiwan',
				'COUNTRY_CODE_3A_IND' => 'India',
				'COUNTRY_CODE_3A_JAM' => 'Jamaica',
				'COUNTRY_CODE_3A_URY' => 'Uruguay',
				'COUNTRY_CODE_3A_CRI' => 'Costa Rica',
				'COUNTRY_CODE_3A_DOM' => 'Rep. Dominicana',
				'COUNTRY_CODE_3A_ISR' => 'Israel',
				'COUNTRY_CODE_3A_MYS' => 'Malasia',
				'COUNTRY_CODE_3A_THA' => 'Tailandia',
				'COUNTRY_CODE_3A_TUR' => 'Turquia',
				'COUNTRY_CODE_3A_VEN' => 'Venezuela',
				'COUNTRY_CODE_3A_AIA' => 'Anguila',
				'COUNTRY_CODE_3A_CYP' => 'Chipre',
				'COUNTRY_CODE_3A_EST' => 'Estonia',
				'COUNTRY_CODE_3A_HUN' => 'Hungria',
				'COUNTRY_CODE_3A_LVA' => 'Letonia',
				'COUNTRY_CODE_3A_LTU' => 'Lituania',
				'COUNTRY_CODE_3A_MLT' => 'Malta',
				'COUNTRY_CODE_3A_SVK' => 'Eslovaquia',
				'COUNTRY_CODE_3A_SVN' => 'Eslovenia',
				'COUNTRY_CODE_3A_ZAF' => 'Sudafrica',
				'COUNTRY_CODE_3A_ROU' => 'Rumania',
				'COUNTRY_CODE_3A_RUS' => 'Rusia',
				'COUNTRY_CODE_3A_AFG' => 'Afganistán',
				'COUNTRY_CODE_3A_AGO' => 'Angola',
				'COUNTRY_CODE_3A_ALA' => 'Aland',
				'COUNTRY_CODE_3A_ATA' => 'Antártida',
				'COUNTRY_CODE_3A_ATG' => 'Antigua y Barbuda',
				'COUNTRY_CODE_3A_ANT' => 'Antillas Neerlandesas',
				'COUNTRY_CODE_3A_SAU' => 'Arabia Saudita',
				'COUNTRY_CODE_3A_DZA' => 'Argelia',
				'COUNTRY_CODE_3A_ARM' => 'Armenia',
				'COUNTRY_CODE_3A_ABW' => 'Aruba',
				'COUNTRY_CODE_3A_AUS' => 'Australia',
				'COUNTRY_CODE_3A_AZE' => 'Azerbaiyán',
				'COUNTRY_CODE_3A_BHS' => 'Bahamas',
				'COUNTRY_CODE_3A_BHR' => 'Bahrein',
				'COUNTRY_CODE_3A_BGD' => 'Bangladesh',
				'COUNTRY_CODE_3A_BRB' => 'Barbados',
				'COUNTRY_CODE_3A_BLR' => 'Bielorrusia',
				'COUNTRY_CODE_3A_BLZ' => 'Belice',
				'COUNTRY_CODE_3A_BEN' => 'Benin',
				'COUNTRY_CODE_3A_BMU' => 'Bermudas',
				'COUNTRY_CODE_3A_BTN' => 'Bután',
				'COUNTRY_CODE_3A_BWA' => 'Botsuana',
				'COUNTRY_CODE_3A_BVT' => 'Isla Bouvet',
				'COUNTRY_CODE_3A_BRN' => 'Brunei',
				'COUNTRY_CODE_3A_BFA' => 'Burkina Faso',
				'COUNTRY_CODE_3A_BDI' => 'Burundi',
				'COUNTRY_CODE_3A_CPV' => 'Cabo Verde',
				'COUNTRY_CODE_3A_CYM' => 'Islas Caimán',
				'COUNTRY_CODE_3A_KHM' => 'Camboya',
				'COUNTRY_CODE_3A_CRM' => 'Camerún',
				'COUNTRY_CODE_3A_CAF' => 'República Centroafricana',
				'COUNTRY_CODE_3A_TCD' => 'Chad',
				'COUNTRY_CODE_3A_CZE' => 'República Checa',
				'COUNTRY_CODE_3A_CCK' => 'Islas Cocos',
				'COUNTRY_CODE_3A_COL' => 'Colombia',
				'COUNTRY_CODE_3A_COM' => 'Comoras',
				'COUNTRY_CODE_3A_COG' => 'República del Congo',
				'COUNTRY_CODE_3A_COD' => 'República Democrática del Congo',
				'COUNTRY_CODE_3A_COK' => 'Islas Cook',
				'COUNTRY_CODE_3A_PRK' => 'Corea del Norte',
				'COUNTRY_CODE_3A_CIV' => 'Costa de Marfil',
				'COUNTRY_CODE_3A_HRV' => 'Croacia',
				'COUNTRY_CODE_3A_DMA' => 'Dominica',
				'COUNTRY_CODE_3A_EGY' => 'Egipto',
				'COUNTRY_CODE_3A_SLV' => 'El Salvador',
				'COUNTRY_CODE_3A_ARE' => 'Emiratos Árabes Unidos',
				'COUNTRY_CODE_3A_ERI' => 'Eritrea',
				'COUNTRY_CODE_3A_UMI' => 'Islas ultramarinas de Estados Unidos',
				'COUNTRY_CODE_3A_ETH' => 'Etiopía',
				'COUNTRY_CODE_3A_FRO' => 'Islas Feroe',
				'COUNTRY_CODE_3A_PHL' => 'Filipinas',
				'COUNTRY_CODE_3A_FJI' => 'Fiyi',
				'COUNTRY_CODE_3A_GAB' => 'Gabón',
				'COUNTRY_CODE_3A_GMB' => 'Gambia',
				'COUNTRY_CODE_3A_GEO' => 'Georgia',
				'COUNTRY_CODE_3A_SGS' => 'Islas Georgias del Sur y Sandwich del Sur',
				'COUNTRY_CODE_3A_GHA' => 'Ghana',
				'COUNTRY_CODE_3A_GIB' => 'Gibraltar',
				'COUNTRY_CODE_3A_GRD' => 'Granada',
				'COUNTRY_CODE_3A_GRL' => 'Groenlandia',
				'COUNTRY_CODE_3A_GLP' => 'Guadalupe',
				'COUNTRY_CODE_3A_GUM' => 'Guam',
				'COUNTRY_CODE_3A_GTM' => 'Guatemala',
				'COUNTRY_CODE_3A_GUF' => 'Guayana Francesa',
				'COUNTRY_CODE_3A_GGY' => 'Guernsey',
				'COUNTRY_CODE_3A_GIN' => 'Guinea',
				'COUNTRY_CODE_3A_GNQ' => 'Guinea Ecuatorial',
				'COUNTRY_CODE_3A_GNB' => 'Guinea-Bissau',
				'COUNTRY_CODE_3A_GUY' => 'Guyana',
				'COUNTRY_CODE_3A_HTI' => 'Haití',
				'COUNTRY_CODE_3A_HMD' => 'Islas Heard y McDonald',
				'COUNTRY_CODE_3A_HND' => 'Honduras',
				'COUNTRY_CODE_3A_HKG' => 'Hong Kong',
				'COUNTRY_CODE_3A_IDN' => 'Indonesia',
				'COUNTRY_CODE_3A_IRN' => 'Irán',
				'COUNTRY_CODE_3A_IRQ' => 'Iraq',
				'COUNTRY_CODE_3A_JEY' => 'Jersey',
				'COUNTRY_CODE_3A_JOR' => 'Jordania',
				'COUNTRY_CODE_3A_KAZ' => 'Kazajistán',
				'COUNTRY_CODE_3A_KEN' => 'Kenia',
				'COUNTRY_CODE_3A_KGZ' => 'Kirguistán',
				'COUNTRY_CODE_3A_KIR' => 'Kiribati',
				'COUNTRY_CODE_3A_KWT' => 'Kuwait',
				'COUNTRY_CODE_3A_LAO' => 'Laos',
				'COUNTRY_CODE_3A_LSO' => 'Lesoto',
				'COUNTRY_CODE_3A_LBN' => 'Líbano',
				'COUNTRY_CODE_3A_LBR' => 'Liberia',
				'COUNTRY_CODE_3A_LBY' => 'Libia',
				'COUNTRY_CODE_3A_LIE' => 'Liechtenstein',
				'COUNTRY_CODE_3A_LUX' => 'Luxemburgo',
				'COUNTRY_CODE_3A_MAC' => 'Macao',
				'COUNTRY_CODE_3A_MKD' => 'Macedonia ARY',
				'COUNTRY_CODE_3A_MDG' => 'Madagascar',
				'COUNTRY_CODE_3A_MWI' => 'Malawi',
				'COUNTRY_CODE_3A_MDV' => 'Maldivas',
				'COUNTRY_CODE_3A_MLI' => 'Malí',
				'COUNTRY_CODE_3A_FLK' => 'Islas Malvinas',
				'COUNTRY_CODE_3A_IMN' => 'Isla de Man',
				'COUNTRY_CODE_3A_MNP' => 'Islas Marianas del Norte',
				'COUNTRY_CODE_3A_MAR' => 'Marruecos',
				'COUNTRY_CODE_3A_MHL' => 'Islas Marshall',
				'COUNTRY_CODE_3A_MTQ' => 'Martinica',
				'COUNTRY_CODE_3A_MUS' => 'Mauricio',
				'COUNTRY_CODE_3A_MRT' => 'Mauritania',
				'COUNTRY_CODE_3A_MYT' => 'Mayotte',
				'COUNTRY_CODE_3A_FSM' => 'Micronesia',
				'COUNTRY_CODE_3A_MDA' => 'Moldavia',
				'COUNTRY_CODE_3A_MGL' => 'Mongolia',
				'COUNTRY_CODE_3A_MNE' => 'Montenegro',
				'COUNTRY_CODE_3A_MSR' => 'Montserrat',
				'COUNTRY_CODE_3A_MOZ' => 'Mozambique',
				'COUNTRY_CODE_3A_MMR' => 'Birmania',
				'COUNTRY_CODE_3A_NAM' => 'Namibia',
				'COUNTRY_CODE_3A_NRU' => 'Nauru',
				'COUNTRY_CODE_3A_CXR' => 'Isla de Navidad',
				'COUNTRY_CODE_3A_NPL' => 'Nepal',
				'COUNTRY_CODE_3A_NIC' => 'Nicaragua',
				'COUNTRY_CODE_3A_NER' => 'Níger',
				'COUNTRY_CODE_3A_NGA' => 'Nigeria',
				'COUNTRY_CODE_3A_NIU' => 'Niue',
				'COUNTRY_CODE_3A_NOR' => 'Noruega',
				'COUNTRY_CODE_3A_NCL' => 'Nueva Caledonia',
				'COUNTRY_CODE_3A_NZL' => 'Nueva Zelanda',
				'COUNTRY_CODE_3A_OMN' => 'Omán',
				'COUNTRY_CODE_3A_PAK' => 'Pakistán',
				'COUNTRY_CODE_3A_PLW' => 'Palau',
				'COUNTRY_CODE_3A_PSE' => 'Palestina',
				'COUNTRY_CODE_3A_PAN' => 'Panamá',
				'COUNTRY_CODE_3A_PNG' => 'Papúa Nueva Guinea',
				'COUNTRY_CODE_3A_PRY' => 'Paraguay',
				'COUNTRY_CODE_3A_PER' => 'Perú',
				'COUNTRY_CODE_3A_PCN' => 'Islas Pitcairn',
				'COUNTRY_CODE_3A_PYF' => 'Polinesia Francesa',
				'COUNTRY_CODE_3A_POL' => 'Polonia',
				'COUNTRY_CODE_3A_PRI' => 'Puerto Rico',
				'COUNTRY_CODE_3A_QAT' => 'Qatar',
				'COUNTRY_CODE_3A_GBR' => 'Reino Unido',
				'COUNTRY_CODE_3A_REU' => 'Reunión',
				'COUNTRY_CODE_3A_RWA' => 'Ruanda',
				'COUNTRY_CODE_3A_ESH' => 'Sahara Occidental',
				'COUNTRY_CODE_3A_SLB' => 'Islas Salomón',
				'COUNTRY_CODE_3A_WSM' => 'Samoa',
				'COUNTRY_CODE_3A_ASM' => 'Samoa Americana',
				'COUNTRY_CODE_3A_KNA' => 'San Cristóbal y Nieves',
				'COUNTRY_CODE_3A_SMR' => 'San Marino',
				'COUNTRY_CODE_3A_SPM' => 'San Pedro y Miquelón',
				'COUNTRY_CODE_3A_VCT' => 'San Vicente y las Granadinas',
				'COUNTRY_CODE_3A_SHN' => 'Santa Elena, Ascensión y Tristán de Acuña',
				'COUNTRY_CODE_3A_LCA' => 'Santa Lucía',
				'COUNTRY_CODE_3A_STP' => 'Santo Tomé y Príncipe',
				'COUNTRY_CODE_3A_SEN' => 'Senegal',
				'COUNTRY_CODE_3A_SRB' => 'Serbia',
				'COUNTRY_CODE_3A_SYC' => 'Seychelles',
				'COUNTRY_CODE_3A_SLE' => 'Sierra Leona',
				'COUNTRY_CODE_3A_SGP' => 'Singapur',
				'COUNTRY_CODE_3A_SYR' => 'Siria',
				'COUNTRY_CODE_3A_SOM' => 'Somalia',
				'COUNTRY_CODE_3A_LKA' => 'Sri Lanka',
				'COUNTRY_CODE_3A_SWZ' => 'Suazilandia',
				'COUNTRY_CODE_3A_SDN' => 'Sudán',
				'COUNTRY_CODE_3A_SWE' => 'Suecia',
				'COUNTRY_CODE_3A_CHE' => 'Suiza',
				'COUNTRY_CODE_3A_SUR' => 'Surinam',
				'COUNTRY_CODE_3A_SJM' => 'Svalbard y Jan Mayen',
				'COUNTRY_CODE_3A_TZA' => 'Tanzania',
				'COUNTRY_CODE_3A_TJK' => 'Tayikistán',
				'COUNTRY_CODE_3A_IOT' => 'Territorio Británico del Océano Índico',
				'COUNTRY_CODE_3A_ATF' => 'Territorios Australes Franceses',
				'COUNTRY_CODE_3A_TLS' => 'Timor Oriental',
				'COUNTRY_CODE_3A_TGO' => 'Togo',
				'COUNTRY_CODE_3A_TKL' => 'Tokelau',
				'COUNTRY_CODE_3A_TON' => 'Tonga',
				'COUNTRY_CODE_3A_TTO' => 'Trinidad y Tobago',
				'COUNTRY_CODE_3A_TUN' => 'Túnez',
				'COUNTRY_CODE_3A_TCA' => 'Islas Turcas y Caicos',
				'COUNTRY_CODE_3A_TKM' => 'Turkmenistán',
				'COUNTRY_CODE_3A_TUV' => 'Tuvalu',
				'COUNTRY_CODE_3A_UKR' => 'Ucrania',
				'COUNTRY_CODE_3A_UGA' => 'Uganda',
				'COUNTRY_CODE_3A_UZB' => 'Uzbekistán',
				'COUNTRY_CODE_3A_VUT' => 'Vanuatu',
				'COUNTRY_CODE_3A_VAT' => 'Ciudad del Vaticano',
				'COUNTRY_CODE_3A_VNM' => 'Vietnam',
				'COUNTRY_CODE_3A_VGB' => 'Islas Vírgenes Británicas',
				'COUNTRY_CODE_3A_VIR' => 'Islas Vírgenes Estadounidenses',
				'COUNTRY_CODE_3A_WLF' => 'Wallis y Futuna',
				'COUNTRY_CODE_3A_YEM' => 'Yemen',
				'COUNTRY_CODE_3A_DJI' => 'Yibuti',
				'COUNTRY_CODE_3A_ZMB' => 'Zambia',
				'COUNTRY_CODE_3A_ZWE' => 'Zimbabue',
				'COUNTRY_CODE_3A_SSD' => 'South Sudan',

));
