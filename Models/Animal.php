<?php
class Animal extends Card
{
	public $name;
	public function __construct($_name)
	{
		$this->name = $_name;
	}
	//funzione per generare dinamicamente l'icona dell'animale
	public function getIcon()
	{
		return '<i class="fa-solid fa-' . $this->name . '"></i>';
	}
}
