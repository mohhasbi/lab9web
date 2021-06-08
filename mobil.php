<?php 

	class mobil
	{
		private $warna;
		private $merk;
		private $harga;
		
		public function __construct()
		{
			$this ->warna ="oren";
			$this ->merk ="bmw";
			$this ->harga ="90190190";
		}
		public function gantiwarna ($warnabaru)
		{
			$this ->warna = $warnabaru;
		}
		public function tampilwarna()
		{
			echo "warna mobil : " . $this->warna;
		}
	}

	$a = new mobil();
	$b = new mobil();

	echo "<b> monil pertama</b><br>";
	$a->tampilwarna();
	echo "<br> mobil pertama ganti warna<br>";
	$a->gantiwarna("pink");
	$a->tampilwarna();

	echo "<br> <br> mobil kedua </br> </br>";
	$b->gantiwarna("red");
	$b->tampilwarna();
 ?>