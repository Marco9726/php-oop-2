<?php

class Product
{
	public $name;
	public $image;
	public $price;
	public $animal;

	public function __construct($_name, $_image, $_price, Animal $_animal)
	{
		$this->name = $_name;
		$this->image = $_image;
		$this->price = $_price;
		//la proprietà 'animal' prende il valore dell'istanza Animal incapsulata nel construct
		$this->animal = $_animal;
	}

	public function getImgHtml()
	{
		return '<img src="' . $this->image . '" class="card-img-top">';
	}
	public function getNameHtml()
	{
		return '<h4>' . $this->name . '</h4>';
	}

	// ritorno le funzioni dell'istanza animal 
	public function getIconHtml()
	{
		return $this->animal->getIconHtml();
	}
	public function getAnimalNameHtml()
	{
		return $this->animal->getNameHtml();
	}
	//

	public function getPriceHtml()
	{
		return 'Prezzo: ' . $this->price . '€';
	}
}
