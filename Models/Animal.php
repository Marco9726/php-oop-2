<?php
class Animal
{
	public $icon;
	public $name;

	public function __construct($_icon, $_name)
	{
		$this->icon = $_icon;
		$this->name = $_name;
	}
	public function getIconHtml()
	{
		return '<i class="fa-solid fa-' . $this->icon . '"></i>';
	}
	public function getNameHtml()
	{
		return $this->name;
	}
}
