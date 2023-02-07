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
		$this->animal = $_animal;
	}
}
