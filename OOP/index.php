<?php
	class person {
		var $name;
		var $age;
		var $gender;
		var $skin;
		var $height;
		var $weight;
		var $sing;

		function __construct($name, $age, $gender, $skin, $height, $weight, $sing) {
			$this->name = $name;
			$this->age = $age;
			$this->gender = $gender;
			$this->skin = $skin;
			$this->height = $height;
			$this->weight = $weight;
			$this->sing = $sing;
		}

		function info() {
			echo('	Name: ' . $this->name . '<br />');
			echo('	Age: ' . $this->age . '<br />');
			echo('	Gender: ' . $this->gender . '<br />');
			echo('	Skin: ' . $this->skin . '<br/>');
			echo('	Height: '  . $this->height . '<br />');
			echo('	Weight: ' . $this->weight . '<br />');
			echo('	Sing: ' . $this->sing . '<br />');
		}
	}
	$john = new person('John', 20, 'Male', 'White', 175, 65, 'Good');
	echo ('Nhan vien: ' . $john->name . '<br />');
	$john->info();
?>