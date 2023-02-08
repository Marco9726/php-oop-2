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
		//la proprietà 'name' dell'istanza di Animal sarà uguale alla properità 'animal' della classe Product
		$this->animal = $_animal->name;
	}

	public function getImgHtml()
	{
		return '<img src="' . $this->image . '" class="card-img-top">';
	}
	public function getNameHtml()
	{
		return '<h3>' . $this->name . '</h3>';
	}
}
