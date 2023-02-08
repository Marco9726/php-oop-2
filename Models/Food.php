<?php
class Food extends Product
{
	public $weight;
	public $ingredients;

	public function __construct($_name, $_image, $_price, Animal $_animal, $_weight, $_ingredients)
	{
		parent::__construct($_name, $_image, $_price, $_animal);
		$this->weight = $_weight;
		$this->ingredients = $_ingredients;
	}
	public function getWeightHtml()
	{
		return 'Peso netto: ' . $this->weight . 'g';
	}
	public function getIngredientsHtml()
	{
		return 'Ingredienti: ' . implode(', ', $this->ingredients);
	}
}
