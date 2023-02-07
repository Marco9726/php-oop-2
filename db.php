<?php
include __DIR__ . '/Models/Product.php';
include __DIR__ . '/Models/Animal.php';
include __DIR__ . '/Models/Food.php';
include __DIR__ . '/Models/Item.php';
include __DIR__ . '/Models/Toy.php';
//creo 4 istanze della classe 'Animal' ,passando come parametro il nome dell'animale, in un array associativo
$animals = [
	'Cane' => new Animal('cat'),
	'Gatto' => new Animal('dog'),
	'Uccello' => new Animal('dove'),
	'Pesce' => new Animal('fish')
];
//creo l'array delle varie istanze
$products = [
	new Food(
		'Royal Canin Mini Adult',
		'https://arcaplanet.vtexassets.com/arquivos/ids/243824/royal-canin-size-cane-mini-adult.jpg?v=1762132197',
		43.99,
		$animals['Cane'],
		545,
		['prosciutto', 'riso']
	),
	new Food(
		'Almo Nature Holistic Maintenance Medium Large Tonno e Riso',
		'https://www.bauzaar.it/media/catalog/product/t/o/tonno_e_riso_cane.jpg?width=700&height=700&store=default&image-type=image',
		44.99,
		$animals['Cane'],
		600,
		['manzo', 'cereali']
	),
	new Food(
		'Almo Nature Cat Daily Lattina',
		'https://arcaplanet.vtexassets.com/arquivos/ids/245358/almo-daily-menu-cat-400-gr-manzo.jpg?v=1762182480',
		34.99,
		$animals['Gatto'],
		400,
		['tonno', 'pollo', 'prosciutto']
	),
	new Food(
		'Mangime per Pesci Guppi in Fiocchi',
		'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg?v=1762045775',
		2.95,
		$animals['Pesce'],
		30,
		['Pesci e sottoptodotti dei pesci', 'Cereali', 'Lieviti', 'Alghe']
	),
	new Item(
		'Voliera Wilma in Legno',
		'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg?v=1760290610',
		184.99,
		$animals['Uccello'],
		'Legno',
		'M: L 83 x P 67 x H 153 cm'
	),
	new Item(
		'Cartucce Filtranti per Filtro EasyCrystal',
		'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg?v=1762132134',
		2.29,
		$animals['Pesce'],
		'Materiale espanso',
		'ND'
	),
	new Toy(
		'Kong Classic',
		'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg?v=1762182189',
		13.49,
		$animals['Cane'],
		'Galleggia e rimbalza',
		'8,5cm x 10cm'
	),
	new Toy(
		'Topini di peluche Trixie',
		'https://shop-cdn-m.mediazs.com/bilder/topini/di/peluche/trixie/7/400/42535_pla_trixie_plueschmaus_grau_und_weiss_ret_01_7.jpg',
		4.99,
		$animals['Gatto'],
		'Morbido con codina in corda',
		'8,5cm x 10cm'
	),
];
