<?php
class Food extends Card
{
	public $weight;
	public $ingredients;

	public function __construct($_weight, $_ingredients)
	{
		$this->weight = $_weight;
		$this->ingredients = $_ingredients;
	}
}
