<?php
class bigCat extends Cat {
	
	protected $pet;
	
	function __construct($height, $weight, $pet) {
		$this->pet = $pet;
		parent::__construct($height, $weight);
	}
	
	function roar(){
		return 'roar';
	}