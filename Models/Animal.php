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
	public function getIconAndName()
	{
		return '<i class="fa-solid fa-' . $this->icon . '"></i>' . '<span>' . $this->name . '</span>';
	}
}
