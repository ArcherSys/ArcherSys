<?php
namespace ArcherSys\AngularJS\Components;
class AngularSliderModel{
	function __construct($min,$max,$model){
		$this->min = $min;
		$this->max = $max;
		$this->model = $model;
	}
}