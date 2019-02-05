<?php

// Klasser skrivs alltid med UpperCamelCase
class Car {

	public $manufacturer;
	public $model;
	public $year;
	public $fourWd = false;

	public function getInfo() {
		return "<h1>{$this->manufacturer} {$this->model} {$this->year}</h1>";
	}

}
