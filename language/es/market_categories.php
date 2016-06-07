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

		'CATEGORY_400'			=> 'Tintas y Liquidos',
		'CATEGORY_401'			=> 'Tintas Solventes',
		'CATEGORY_402'			=> 'Tintas Bio Solventes',
		'CATEGORY_403'			=> 'Tintas Eco Solventes',
		'CATEGORY_404'			=> 'Tintas Solventes',
		'CATEGORY_405'			=> 'Tintas Mild Solventes',
		'CATEGORY_406'			=> 'Otras Tintas Solventes',
		'CATEGORY_407'			=> 'Tintas Textiles',
		'CATEGORY_408'			=> 'Tintas Acidas',
		'CATEGORY_409'			=> 'Tintas Dispersas',
		'CATEGORY_410'			=> 'Tintas Pigmentadas',
		'CATEGORY_411'			=> 'Tintas Reactivas',
		'CATEGORY_412'			=> 'Tintas Sublimacion',
		'CATEGORY_413'			=> 'Tintas UV',
		'CATEGORY_414'			=> 'Tintas para Bombilla',
		'CATEGORY_415'			=> 'Tintas para LED',
		'CATEGORY_416'			=> 'Otras Textiles',
		'CATEGORY_417'			=> 'Otras tintas',
		'CATEGORY_418'			=> 'Resinas',
		'CATEGORY_419'			=> 'Otras tintas no resinas',
		'CATEGORY_420'			=> 'Tintas al agua',
		'CATEGORY_421'			=> 'Máquinas',
		'CATEGORY_422'			=> 'Impresoras y plotters',
		'CATEGORY_423'			=> 'Copiadoras / CTF / CTP',
		'CATEGORY_424'			=> 'Impresoras Base Agua',
		'CATEGORY_425'			=> 'Impresoras Latex',
		'CATEGORY_426'			=> 'Impresoras Solventes',
		'CATEGORY_427'			=> 'Impresoras Sublimacion',
		'CATEGORY_428'			=> 'Impresoras Textiles',
		'CATEGORY_429'			=> 'Impresoras Transferencia Termica',
		'CATEGORY_430'			=> 'Impresoras UV',
		'CATEGORY_431'			=> 'Otras Impresoras',
		'CATEGORY_432'			=> 'Impresoras Térmicas',
		'CATEGORY_433'			=> 'Otras Impresoras',
		'CATEGORY_434'			=> 'Prensas',
		'CATEGORY_435'			=> 'Prensas Digitales',
		'CATEGORY_436'			=> 'Prensas Offset',
		'CATEGORY_437'			=> 'Otras Prensas',
		'CATEGORY_438'			=> 'Copiadoras',
		'CATEGORY_439'			=> 'B/N',
		'CATEGORY_440'			=> 'Color',
		'CATEGORY_441'			=> 'Corte / CNC/ Fresadoras / Grabadoras',
		'CATEGORY_442'			=> 'CNC / Fresadoras',
		'CATEGORY_443'			=> 'Ploters de Corte',
		'CATEGORY_444'			=> 'Troqueladoras',
		'CATEGORY_445'			=> 'Grabadoras',
		'CATEGORY_446'			=> 'Mesas de corte',
		'CATEGORY_447'			=> 'Guillotinas',
		'CATEGORY_448'			=> 'Corte por Laser',
		'CATEGORY_449'			=> 'Máquinas corte y troquelado',
		'CATEGORY_450'			=> 'Otras máquinas corte',
		'CATEGORY_451'			=> 'Bordadoras',
		'CATEGORY_452'			=> 'Otras Bordadoras',
		'CATEGORY_453'			=> 'Alzadoras y Seleccionadoras',
		'CATEGORY_454'			=> 'Otras Alzadoras y Seleccionadoras',
		'CATEGORY_455'			=> 'Tratamiento Pre/Post',
		'CATEGORY_456'			=> 'Calandras',
		'CATEGORY_457'			=> 'Coating',
		'CATEGORY_458'			=> 'Doming / Resin Equipment',
		'CATEGORY_459'			=> 'Secadoras',
		'CATEGORY_460'			=> 'Prensas por calor',
		'CATEGORY_461'			=> 'Laminadoras - Frio',
		'CATEGORY_462'			=> 'Laminadoras - Calor',
		'CATEGORY_463'			=> 'Laminadoras - Liquido',
		'CATEGORY_464'			=> 'Vaporizadoras',
		'CATEGORY_465'			=> 'Barnizadoras',
		'CATEGORY_466'			=> 'Soldadoras',
		'CATEGORY_467'			=> 'Confección',
		'CATEGORY_468'			=> 'Otras Máquinas de confección',
		'CATEGORY_469'			=> 'Escaners',
		'CATEGORY_470'			=> 'Planos',
		'CATEGORY_471'			=> 'Rodillo',
		'CATEGORY_472'			=> 'Otros Escaners',
		'CATEGORY_473'			=> 'Otras Máquinas',
		'CATEGORY_474'			=> 'Tintas DYE',
		'CATEGORY_475'			=> 'Materiales Impresión',
		'CATEGORY_476'			=> 'Inyección tinta base agua',
		'CATEGORY_477'			=> 'Papeles',
		'CATEGORY_478'			=> 'Vinilos',
		'CATEGORY_479'			=> 'Lonas',
		'CATEGORY_480'			=> 'Otros materiales base agua',
		'CATEGORY_481'			=> 'Solvente / UV / Látex',
		'CATEGORY_482'			=> 'Papeles',
		'CATEGORY_483'			=> 'Vinilos',
		'CATEGORY_484'			=> 'Lonas',
		'CATEGORY_485'			=> 'Textiles',
		'CATEGORY_486'			=> 'Otros Solvent/UV/Latex',
		'CATEGORY_487'			=> 'Sublimación',
		'CATEGORY_488'			=> 'Textiles',
		'CATEGORY_489'			=> 'Ceramica',
		'CATEGORY_490'			=> 'Otros materiales sublimación',
		'CATEGORY_491'			=> 'Rígidos',
		'CATEGORY_492'			=> 'Cartón Pluma / Foam',
		'CATEGORY_493'			=> 'Planchas PVC',
		'CATEGORY_494'			=> 'Paneles sandwich Dibon, Dilite, ...)',
		'CATEGORY_495'			=> 'Cartón, Cartoncillo, ...',
		'CATEGORY_496'			=> 'Policarbonato, Polipropilenos, PET, ...',
		'CATEGORY_497'			=> 'Otros Materiales Rígidos',
		'CATEGORY_498'			=> 'Adhesivos, laminados y encapsulados',
		'CATEGORY_499'			=> 'Adhesivos',
		'CATEGORY_500'			=> 'Laminados',
		'CATEGORY_501'			=> 'Encapsulados',
		'CATEGORY_502'			=> 'Vinilos Corte',
		'CATEGORY_503'			=> 'Vinilos Corte',
		'CATEGORY_504'			=> 'Vinilo Acido / Esmerilado',
		'CATEGORY_505'			=> 'Máscara pintura / Chorro Arena',
		'CATEGORY_506'			=> 'Transfer',
		'CATEGORY_507'			=> 'Otros materiales, útiles, ...',
		'CATEGORY_508'			=> 'Utillajes',
		'CATEGORY_509'			=> 'Reglas, Flexometros, ...',
		'CATEGORY_510'			=> 'Otros materiales, útiles, ...',
		'CATEGORY_511'			=> 'Otros materiales de impresión',
		'CATEGORY_512'			=> 'Otros materiales',
		'CATEGORY_513'			=> 'Recambios',
		'CATEGORY_514'			=> 'Electrónica',
		'CATEGORY_515'			=> 'Placas bases / Control',
		'CATEGORY_516'			=> 'Otros recambios electrónica',
		'CATEGORY_517'			=> 'Sistema Impresión',
		'CATEGORY_518'			=> 'Cabezales',
		'CATEGORY_519'			=> 'Dumpers, Bombas, ...',
		'CATEGORY_520'			=> 'Otros sistema impresión',
		'CATEGORY_521'			=> 'Consumibles',
		'CATEGORY_522'			=> 'Lámparas y Leds',
		'CATEGORY_523'			=> 'Cuchillas',
		'CATEGORY_524'			=> 'Otros consumibles',
		'CATEGORY_525'			=> 'Otros Recambios',
		'CATEGORY_526'			=> 'Otros recambios',
		'CATEGORY_527'			=> 'Servicios',
		'CATEGORY_528'			=> 'Mantenimiento',
		'CATEGORY_529'			=> 'Impresoras / Plotter',
		'CATEGORY_530'			=> 'Corte / Troquelado',
		'CATEGORY_531'			=> 'Acabados',
		'CATEGORY_532'			=> 'Otros Mantenimiento',
		'CATEGORY_533'			=> 'Formación',
		'CATEGORY_534'			=> 'Cursos',
		'CATEGORY_535'			=> 'Materiales didácticos',
		'CATEGORY_536'			=> 'Otros Formación',
		'CATEGORY_537'			=> 'Otros Servicios',
		'CATEGORY_538'			=> 'Otros Servicios',
		'CATEGORY_539'			=> 'Software',
		'CATEGORY_540'			=> 'Gestión del color',
		'CATEGORY_541'			=> 'Gestión del color',
		'CATEGORY_542'			=> 'Otros Servicios',
		'CATEGORY_543'			=> 'Graficos y Vectores',
		'CATEGORY_544'			=> 'Corel',
		'CATEGORY_545'			=> 'Adobe',
		'CATEGORY_546'			=> 'Macromedia',
		'CATEGORY_547'			=> 'Otros Gráficos/Vectores',
		'CATEGORY_548'			=> 'Software RIP',
		'CATEGORY_549'			=> 'RIP',
		'CATEGORY_550'			=> 'Otros Software RIP',
		'CATEGORY_551'			=> 'Otras Tintas al agua',
		'CATEGORY_552'			=> 'Soportes',
		'CATEGORY_553'			=> 'Interior',
		'CATEGORY_554'			=> 'Exterior',
		'CATEGORY_555'			=> 'Perfileria',
		'CATEGORY_556'			=> 'PLV',
		'CATEGORY_557'			=> 'Mobiliario',
		'CATEGORY_558'			=> 'Accesorios',
		'CATEGORY_559'			=> 'Otros Soportes',
		'CATEGORY_560'			=> 'Desenrrollables',
		'CATEGORY_561'			=> 'Colgantes',
		'CATEGORY_562'			=> 'Reactivas dye',
		'CATEGORY_563'			=> 'Sublimación',
		'CATEGORY_564'			=> 'Camisetas',
		'CATEGORY_565'			=> 'Pigmentadas textiles',
		'CATEGORY_566'			=> 'Pefilería',
		'CATEGORY_567'			=> 'Libros',
	));