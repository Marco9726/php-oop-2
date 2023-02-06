<?php
include __DIR__ . '/Animal.php';
include __DIR__ . '/Food.php';
include __DIR__ . '/Item.php';
include __DIR__ . '/Toy.php';
class Card
{
	private $title;
	public $animal;
	private $price;
	//passo come parametri alla crezione: titolo, un'istanza della classe Animal, prezzo
	public function __construct($_title, Animal $_animal, $_price, $_type)
	{
		$this->title = $_title;
		$this->price = $_price;
		//la proprietà 'name' dell'istanza di Animal sarà uguale alla properità 'animal'
		$this->animal = $_animal->name;
	}
}
