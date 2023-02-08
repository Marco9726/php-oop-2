<?php
class Item extends Product
{
	public $material;
	public $size;

	public function __construct($_name, $_image, $_price, Animal $_animal, $_material, $_size)
	{
		parent::__construct($_name, $_image, $_price, $_animal);
		$this->material = $_material;
		$this->size = $_size;
	}

	public function getMaterialHtml()
	{
		return 'Materiale: ' . $this->material;
	}
	public function getSizeHtml()
	{
		return 'Dimensioni: ' . $this->size;
	}
}
