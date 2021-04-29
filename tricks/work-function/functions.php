<?php
	#4//declare(strict_types=1);
#1 - Simple
	function writeMsg(){
		echo "Hello World<br>";
	}
	writeMsg();

#2 - Values
	function familyName($fname, $year){
		echo "$fname - is member since $year";
	}
	familyName("Mike", 1985);

#3 - Int
	function sum(int $a, int $b){
		return $a + $b ."<br>";
	}
	echo sum(5, '3 days');// since strict is NOT enabled "3 days" is changed to int(3), and it will return 8

#4 - Declare()
	/*function add(int $a, int $b){
		return $a + $b;
	}
	echo add(5, '3 days');*/

#5 - Default value
	function setHeight($height = 50){
		echo "Home's height = ".$height."<br>";
	}
	setHeight(150);
	setHeight();
	setHeight(460);

#6 - Return
	function difference(int $a, int $b){
		if ($a > $b) {
			return $a - $b;
		}else{
			return $b - $a;
		}
	}
	echo difference(6, 8)."<br>	";

#7 - Float
	function addNumbers(float $a, float $b) : float {
		return $a + $b;
	}
	echo addNumbers(1.2, 5.2)."<br>	";

#8 - Float Int
	function floatInt(float $a, float $b) : int {
		return (int)($a + $b);
	}
	echo floatInt(1.2, 5.2)."<br>	";

#9 - Update Variable
	function add_five(&$value) {
		$value += 5;
	}

	$num = 2;
	add_five($num);
	echo $num;

#10 - Call in index.php
	function oddEven(int $a){
		if ($a%2 == 0) {
			echo $a." - Even<br>";
		}else{
			echo $a." - Odd<br>";
		}
	}

#11 - Call function in index.php with Return
	function getArray($string){
		$array = explode("/",$string);
		foreach ($array as $value) {
			echo $value."<br>";
		}
		return print_r($array);
	}
?>