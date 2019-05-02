<?php
abstract class Cat {
	private $height;
	private $weight;
	
function __construct($height, $weight) {
	$this->height = $height;
	$this->weight = $weight;
}
	