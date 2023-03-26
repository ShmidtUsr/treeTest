<?php

abstract class Tree {
	protected $registrationNumber;
	public $fruit;

	function getFruit() {
		return $this->fruit;
	}
}

class AppleTree extends Tree {

	function __construct() {
		$this->registrationNumber = time();
		$this->fruit = mt_rand(40, 50);
	}

}

class PearTree extends Tree {

	function __construct() {
		$this->registrationNumber = time();
		$this->fruit = mt_rand(0, 20);
	}
}

class Garden {
	public $trees = array();
	public $fruitsApple;
	public $fruitsPear;

	function __construct() {
		for($i = 0; $i < 10; $i++) {
			$this->trees['apple'][$i] = new AppleTree();
		}
		for($i = 0; $i < 15; $i++) {
			$this->trees['pear'][$i] = new PearTree();
		}
		$this->fruitsApple = 0;
		$this->fruitsPear = 0;
	}

	function getFruitsApple() {
		$this->fruitsApple = 0;
		for($i = 0; $i < 10; $i++) {
			$this->fruitsApple += $this->trees['apple'][$i]->getFruit();
		}
		

	}

	function getFruitsPear() {
		$this->fruitsPear = 0;
		for($i = 0; $i < 15; $i++) {
			$this->fruitsPear += $this->trees['pear'][$i]->getFruit();
		}
	}

	function showFruits() {
		echo 'Собрано яблок: ' . $this->fruitsApple . ';';
		echo 'Собрано груш: ' . $this->fruitsPear . ';';
	}
}


$mainGarden = new Garden();
$mainGarden->getFruitsApple();
$mainGarden->getFruitsPear();
$mainGarden->showFruits();












?>