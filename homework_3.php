//singleton

<?php

  class Singleton{
	
		private static $instance;
		
		private function _construct(){
		}
		public static function getInstance(){
			if(!isset($instance)){
				$singleton = new Singleton();
			}
			return $singleton;
		}
	}
	
	$singleton = Singleton::getInstance();
	
?>

//adapter

<?php

	class Cars{
	
		private $brand;
		private $price;
		
		function _constructor($brand_in, $price_in){
			$this->brand = $brand_in;
			$this->price = $price_in;
		}
		
		function getBrand(){
			return $this->brand;
		}
		
		function getPrice(){
			return $this->price;
		}
			
	}
	
	class Adapter{
		
		private $car;
		
		function _constructor(Cars $car_in){
			$this->car = $car_in;
		}
		
		function getInfo(){
			return $this->car->getPrice().'-'.$this->car->getBrand();
		}
	}
	
?>