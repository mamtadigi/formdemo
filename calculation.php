<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<?php

class calculation {
		public $a ,$b ,$c;
		public function sum () {
			$this->c=$this->a + $this->b;
			return $this->c;
		}

}

		$c1 = new calculation();
		$c1->a=10;
		$c1->b=20;

		 echo $c1->sum();
?>
</body>
</html>
