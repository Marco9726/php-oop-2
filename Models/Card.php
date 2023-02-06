<?php
include __DIR__ . '/Animal.php';
include __DIR__ . '/Food.php';
include __DIR__ . '/Item.php';
class Card
{
	private $title;
	public $animal;
	private $price;

	public function __construct($_title, $_animal, $_price,)
	{
		$this->title = $_title;
		$this->price = $_price;
		$this->animal = $_animal->name;
	}
}
