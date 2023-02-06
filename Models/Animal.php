<?php
class Animal extends Card
{
	public function __construct($_animal)
	{
		$this->animal = $_animal;
	}
	public function getIcon()
	{
		return '<i class="fa-solid fa-' . $this->animal . '"></i>';
	}
}
