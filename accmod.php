<?php
	#Access Specifiers:
	//public
	class c1
	{
		public $a = 10;
		private $b = 20;
		protected $c = 30;	
		public function c1f()
		{
			echo "public: ".$this->a."<br>";
			echo "private:".$this->b."<br>";
			echo "protected:".$this->c."<br>";
		}
	}
	class c2 extends c1
	{
		public function c2f()
		{
			echo "public: ".$this->a."<br>";
			echo "private:".$this->b."<br>";
			echo "protected:".$this->c."<br>";
		}
	}
	$obj = new c2;
	$obj -> c2f();
?>