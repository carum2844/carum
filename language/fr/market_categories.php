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

		'CATEGORY_400'			=> 'Inks & Liquids',
		'CATEGORY_401'			=> 'Solvent Inks',
		'CATEGORY_402'			=> 'Bio Solvent Inks',
		'CATEGORY_403'			=> 'Eco Solvent Inks',
		'CATEGORY_404'			=> 'Hard Solvent Inks',
		'CATEGORY_405'			=> 'Mild Solvent Inks',
		'CATEGORY_406'			=> 'Other Solvent Inks',
		'CATEGORY_407'			=> 'Textile Inks',
		'CATEGORY_408'			=> 'Acid Inks',
		'CATEGORY_409'			=> 'Disperse Inks',
		'CATEGORY_410'			=> 'Pigment Inks',
		'CATEGORY_411'			=> 'Reactive Inks',
		'CATEGORY_412'			=> 'Sublimation Inks',
		'CATEGORY_413'			=> 'UV Curable Inks',
		'CATEGORY_414'			=> 'Bulb Curable Inks',
		'CATEGORY_415'			=> 'LED Curable Inks',
		'CATEGORY_416'			=> 'Other Textile Inks',
		'CATEGORY_417'			=> 'Other Inks',
		'CATEGORY_418'			=> 'Resins',
		'CATEGORY_419'			=> 'Other Inks no resins',
		'CATEGORY_420'			=> 'Water based inks',
		'CATEGORY_421'			=> 'Machines',
		'CATEGORY_422'			=> 'Printers & Plotters',
		'CATEGORY_423'			=> 'CTF / CTP',
		'CATEGORY_424'			=> 'Water based Printers',
		'CATEGORY_425'			=> 'Latex Printers',
		'CATEGORY_426'			=> ' Solvent Printers',
		'CATEGORY_427'			=> 'Sublimation Printers',
		'CATEGORY_428'			=> 'Textile Printers',
		'CATEGORY_429'			=> 'Thermal Transfer Printers',
		'CATEGORY_430'			=> 'UV Printers',
		'CATEGORY_431'			=> 'Other printers',
		'CATEGORY_432'			=> 'Thermal Printers',
		'CATEGORY_433'			=> 'Other Printers',
		'CATEGORY_434'			=> 'Presses',
		'CATEGORY_435'			=> 'Digital Presses',
		'CATEGORY_436'			=> 'Offset Presses',
		'CATEGORY_437'			=> 'Other Presses',
		'CATEGORY_438'			=> 'Copiers',
		'CATEGORY_439'			=> 'B/W',
		'CATEGORY_440'			=> 'Color',
		'CATEGORY_441'			=> 'Cutting / CNC/ Routing / Engraving',
		'CATEGORY_442'			=> 'CNC / Routing / Milling Machines',
		'CATEGORY_443'			=> 'Cutting Plotters roll / sheet)',
		'CATEGORY_444'			=> 'Die-cutting Machines',
		'CATEGORY_445'			=> 'Engraving Machines',
		'CATEGORY_446'			=> 'Flatbed cutting machines',
		'CATEGORY_447'			=> 'Guillotines',
		'CATEGORY_448'			=> 'Laser Cutting',
		'CATEGORY_449'			=> 'Trim / cutting machines',
		'CATEGORY_450'			=> 'Other cut machines',
		'CATEGORY_451'			=> 'Embroidery Machines',
		'CATEGORY_452'			=> 'Other Embroidery Machines',
		'CATEGORY_453'			=> 'Feeders & Stackers',
		'CATEGORY_454'			=> 'Other Feeders & Stackers',
		'CATEGORY_455'			=> 'Pre / Post treatment Machines',
		'CATEGORY_456'			=> 'Calenders',
		'CATEGORY_457'			=> 'Coating machines',
		'CATEGORY_458'			=> 'Doming / Resin Equipment',
		'CATEGORY_459'			=> 'Dryers',
		'CATEGORY_460'			=> 'Heat Presses',
		'CATEGORY_461'			=> 'Laminators - Cold',
		'CATEGORY_462'			=> 'Laminators - Hot',
		'CATEGORY_463'			=> 'Laminators - Liquid',
		'CATEGORY_464'			=> 'Steamers',
		'CATEGORY_465'			=> 'Varnishing Machines',
		'CATEGORY_466'			=> 'Welding Machines',
		'CATEGORY_467'			=> 'Profiling Equipment',
		'CATEGORY_468'			=> 'Other Profiling Equipment',
		'CATEGORY_469'			=> 'Scanners',
		'CATEGORY_470'			=> 'Flat',
		'CATEGORY_471'			=> 'Rollers',
		'CATEGORY_472'			=> 'Other Scanners',
		'CATEGORY_473'			=> 'Other machines',
		'CATEGORY_474'			=> 'Dye Inks',
		'CATEGORY_475'			=> 'Printing Media',
		'CATEGORY_476'			=> 'WaterBased Inkjet',
		'CATEGORY_477'			=> 'Paper',
		'CATEGORY_478'			=> 'Vinyl',
		'CATEGORY_479'			=> 'Banner',
		'CATEGORY_480'			=> 'Other materials for water ink',
		'CATEGORY_481'			=> 'Solvent / UV / Latex',
		'CATEGORY_482'			=> 'Paper',
		'CATEGORY_483'			=> 'Vinyl',
		'CATEGORY_484'			=> 'Banner',
		'CATEGORY_485'			=> 'Textil',
		'CATEGORY_486'			=> 'Other Solvent/UV/Latex',
		'CATEGORY_487'			=> 'Sublimation',
		'CATEGORY_488'			=> 'Textil',
		'CATEGORY_489'			=> 'Ceramic',
		'CATEGORY_490'			=> 'Other Subimation materials',
		'CATEGORY_491'			=> 'Boards',
		'CATEGORY_492'			=> 'Foam Boards',
		'CATEGORY_493'			=> 'PVC Boards',
		'CATEGORY_494'			=> 'Composite Boards',
		'CATEGORY_495'			=> 'Cardboard, Paperboard, ...',
		'CATEGORY_496'			=> 'Polycabonate, Polyester, PET, ...',
		'CATEGORY_497'			=> 'Other boards',
		'CATEGORY_498'			=> 'Adhesives, laminated and encapsulated',
		'CATEGORY_499'			=> 'Adhesives',
		'CATEGORY_500'			=> 'Laminated',
		'CATEGORY_501'			=> 'Encapsulated',
		'CATEGORY_502'			=> 'Cast Vinyl',
		'CATEGORY_503'			=> 'Cast Vinyl',
		'CATEGORY_504'			=> 'Vinyl Acid / Grinding / Etching',
		'CATEGORY_505'			=> 'Mask Painting / Sand Stream',
		'CATEGORY_506'			=> 'Transfer film',
		'CATEGORY_507'			=> 'Other materials, tools, ...',
		'CATEGORY_508'			=> 'Tools',
		'CATEGORY_509'			=> 'Meters, Flexometers, ...',
		'CATEGORY_510'			=> 'Other  materials, tools, ...',
		'CATEGORY_511'			=> 'Other printing materials',
		'CATEGORY_512'			=> 'Other materials',
		'CATEGORY_513'			=> 'Parts',
		'CATEGORY_514'			=> 'Electronics',
		'CATEGORY_515'			=> 'Mother Boards / Control Boards',
		'CATEGORY_516'			=> 'Other Electronics',
		'CATEGORY_517'			=> 'Printing System',
		'CATEGORY_518'			=> 'Print Heads',
		'CATEGORY_519'			=> 'Dumpers, Bombs, ...',
		'CATEGORY_520'			=> 'Other printing systems',
		'CATEGORY_521'			=> 'Supplies',
		'CATEGORY_522'			=> 'Bulbs and LEDs',
		'CATEGORY_523'			=> 'Blades',
		'CATEGORY_524'			=> 'Other supplies',
		'CATEGORY_525'			=> 'Other parts',
		'CATEGORY_526'			=> 'Other parts',
		'CATEGORY_527'			=> 'Service',
		'CATEGORY_528'			=> 'Maintenance',
		'CATEGORY_529'			=> 'Printers / Plotter',
		'CATEGORY_530'			=> 'Cutting / Die-cutting',
		'CATEGORY_531'			=> 'Finishing',
		'CATEGORY_532'			=> 'Other Maintenance',
		'CATEGORY_533'			=> 'Learning & Training',
		'CATEGORY_534'			=> 'Courses',
		'CATEGORY_535'			=> 'Teaching materials',
		'CATEGORY_536'			=> 'Other Learning & Training',
		'CATEGORY_537'			=> 'Other Services',
		'CATEGORY_538'			=> 'Other Services',
		'CATEGORY_539'			=> 'Software',
		'CATEGORY_540'			=> 'Color Management',
		'CATEGORY_541'			=> 'Color Management',
		'CATEGORY_542'			=> 'Other Services',
		'CATEGORY_543'			=> 'Graphics / Vector',
		'CATEGORY_544'			=> 'Corel',
		'CATEGORY_545'			=> 'Adobe',
		'CATEGORY_546'			=> 'Macromedia',
		'CATEGORY_547'			=> 'Other Graphics / Vector',
		'CATEGORY_548'			=> 'RIP Software',
		'CATEGORY_549'			=> 'RIP',
		'CATEGORY_550'			=> 'Other RIP Software',
		'CATEGORY_551'			=> 'Other Water based Inks',
		'CATEGORY_552'			=> 'Mounting',
		'CATEGORY_553'			=> 'Inside',
		'CATEGORY_554'			=> 'Outside',
		'CATEGORY_555'			=> 'Profiles',
		'CATEGORY_556'			=> 'POS',
		'CATEGORY_557'			=> 'Furniture',
		'CATEGORY_558'			=> 'Accessories',
		'CATEGORY_559'			=> 'Other Mounting',
		'CATEGORY_560'			=> 'Roll-up',
		'CATEGORY_561'			=> 'Pendants',
		'CATEGORY_562'			=> 'Reactive dye printers',
		'CATEGORY_563'			=> 'Sublimation printers',
		'CATEGORY_564'			=> 'T-shirt printers',
		'CATEGORY_565'			=> 'Textile pigment printers',
		'CATEGORY_566'			=> 'Profiles',
		'CATEGORY_567'			=> 'Books',
));
