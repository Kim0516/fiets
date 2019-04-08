<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	
	//echo phpinfo();
	
	class Bicycle{
		
		private $model;
		protected $weight_kg;
		protected $brand;
		protected $year;
		public $description;
		
		public function __construct(){
			self::addInstance();
		}
		
		public static $wheels = 2;
		
		public function name(){
			return $this->brand . ", " . $this->model . ", " . $this->year;
		}
		
		public function weight_lbs(){
			return $this->weight_kg * 2.2046226218 . 'lbs';
		}
		
		public function setWeight_lbs($lbs){
			$this ->weight_kg = $lbs/2.2046226218;
		}
		
		public static function totalWheels(){
			return 'It has ' . self::$wheels . ' wheels. <br>';
		}
		
		public function setWeigt_kg($kg){
			$this->weight_kg = $kg;
		}
		
		public function getWeight_kg(){
			return $this->weight_kg . 'kg <br>';
		}
		
		public static $countInstances = 0;
		
		public static function addInstance(){
			self::$countInstances++;
		}
		
		public static function create(){
			new Bicycle;
			return "2 wheels";
		}
		
		public const CATEGORIES = array("Road","Mountain","Hybrid","Cruiser","City","BMX");
		
		public function catogory($number){
			return self::CATEGORIES[$number];
		}
		
	}
	
	class Unicycle extends Bicycle{
		
		public static $wheels = 1;
		
		public static function create(){
			new Unicycle;
			return "1 wheel";
		}
		
		public static function totalWheels(){
			return 'It has ' . self::$wheels . ' wheel. <br>';
		}
		
	}
	
	//echo Bicycle::$countInstances . "<br> <br>";
	$uni = new Unicycle;
	echo Unicycle::totalWheels();
	//$uni->setWeigt_kg(3);
	//echo $uni->getWeight_kg();
	//echo Bicycle::$countInstances . "<br> <br>";
	//echo Bicycle::create() . "<br> <br>";
	//echo Bicycle::$countInstances . "<br> <br>";
	//echo Unicycle::create() . "<br> <br>";
	//echo Bicycle::$countInstances . "<br> <br>";
	$b = new Bicycle;
	echo $b->catogory(4) . "<br>";
	echo Bicycle::totalWheels();
	
	
	
?>
</body>
</html>