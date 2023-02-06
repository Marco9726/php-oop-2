<?php
include __DIR__ . '/Models/Card.php';
//creo 4 istanze della classe 'Animal' passando come parametro il nome dell'animale
$cat = new Animal('cat');
$dog = new Animal('dog');
$dove = new Animal('dove');
$fish = new Animal('fish');
//creo 4 ISTANZE della classe 'Food', passando come parametri il valore int. del peso e l'array degli ingredienti
$royalCanin = new Food(545, ['prosciutto', 'riso']);
$almoHolistic = new Food(600, ['manzo', 'cereali']);
$almoLattina = new Food(400, ['tonno', 'pollo', 'prosciutto']);
$guppyFish = new Food(30, ['Pesci e sottoptodotti dei pesci', 'Cereali', 'Lieviti', 'Alghe']);
//creo 2 istanze della classe 'Item', passando come parametri il materiale e le dimensioni
$wilma = new Item('Legno', 'M: L 83 x P 67 x H 153 cm');
$easyCrystal = new Item('Materiale espanso', 'ND');
//creo 2 istanze della classe 'Toy', passando come parametri le caratteristiche e le dimensioni
$kong = new Toy('Galleggia e rimbalza', '8,5cm x 10cm');
$trixie = new Toy('Morbido con codina in corda', '8,5cm x 10cm');
//creo le 8 istanze della classe 'Card' inserendole in un array
$cardsArray = [
	$card_1 = new Card('Royal Canin Mini Adult', $dog, '43,99', $royalCanin),
	$card_2 = new Card('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', $dog, '44,99', $almoHolistic),
	$card_3 = new Card('Almo Nature Cat Daily Lattina', $cat, '34,99', $almoLattina),
	$card_4 = new Card('Mangime per Pesci Guppi in Fiocchi', $fish, '2,95', $guppyFish),
	$card_5 = new Card('Voliera Wilma in Legno', $dove, '184,99', $wilma),
	$card_6 = new Card('Cartucce Filtranti per Filtro EasyCrystal', $fish, '2,29', $easyCrystal),
	$card_7 = new Card('Kong Classic', $dog, '13,49', $kong),
	$card_8 = new Card('Topini di peluche Trixie', $cat, '4,99', $trixie),
];
// ];
