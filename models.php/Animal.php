<?php
class Animal
{
	public $name;

	public function __construct($_name)
	{
		$this->name = $_name;
	}

	// public function getIcon()
	// {
	// 	return '<i class="fa-solid fa-' . $this->name . '"></i>';
	// }
}