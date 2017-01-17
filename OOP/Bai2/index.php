<?php
	class Person {

		public $id;
		private $__name;
		private $__birthday;
		private $__address;


		//SET ID
		public function setId($id) {
			$this->id = $id;
		}

		//GET ID
		public function getId() {
			return $this->id;
		}

		//SET NAME
		public function setName($name) {	
			$this->__name = $name;
		}

		//GET NAME
		public function getName() {
			return $this->__name;
		}

		//SET BIRTHDAY
		public function setBirthday($birthday) {
			$this->__birthday = $birthday;
		}

		//GET BIRTHDAY
		public function getBirthday() {
			return $this->__birthday;
		}

		//SET ADDRESS
		public function setAddress($address) {
			$this->__address = $address;
		}

		//GET ADDRESS 
		public function getAddress() {
			return $this->__address;
		}

		// FUNCTION SINGING
		public function singing() {

			echo '<br />' . $this->__name . ' is sing a song!';
		}

		// FUNCTION RUNNING
		public function running() {
			echo '<br />' . $this->__name . ' runs about 10km!';
		}

		//FUNCTION DRIVING
		public function driving() {
			echo '<br />' . $this->__name . ' dont known to drive!';
		}



	}




	class Student extends Person {

		private $__studentid;
		private $__user;
		private $__subject;
		private $__ssore;
		private $__time;

		//SET STUDENTID

		public function setStudentId($sid) {
			$this->__studentid = $sid;
		}

		//GET STUDENTID

		public function getStudentID() {
			return $this->__studentid;
		}

		//SET USER

		public function setUser($user) {
			$this->__user = $user;
		}

		//GET USER

		public function getUser() {
			return $this->__user;
		}

		//SET SUBJECT

		public function setSubject($sbj) {
			$this->__subject = $sbj;
		}

		//GET SUBJECT

		public function getSubject() {
			return $this->__subject;
		}
		
		//SET SCORE

		public function setScore($score) {
			$this->__score = $score;
		}

		//GET SCORE

		public function getScore() {
			return $this->__score;
		}
		

		//SET TIME

		public function setTime($time) {
			$this->__time = $time;
		}

		//GET TIME

		public function getTime() {
			return $this->__time;
		}

				//FUNCTION STUDING

		public function studing() {
			echo '<br />Score of ' . $this->getName() . ' is ' . $this->__score .'!';
		}

		public function practical() {
			echo '<br />' . $this->getName() . 'has a test of ' . $this->getSubject();
		}

		public function singing() {
			echo '<br />' . $this->getName() . ' is singing at ' . $this->getTime();
		}
	}
	/*
	$nam = new Person();

	$nam->setId(1);
	$nam->setName('Tom Davies');
	$nam->setBirthday('20-09-1980');
	$nam->setAddress('Ohio');
	echo 'ID: ' . $nam->getId() . '   ---   Name: ' . $nam->getName() .
		 '   ---   Birthday: ' . $nam->getBirthday() . '   ---   Address: ' . $nam->getAddress();
	$nam->singing();
	$nam->running();
	$nam->driving();
	*/

	$linh = new Student();
	$linh->setId(1);
	$linh->setName('Smith');
	$linh->setBirthday('21-11-1983');
	$linh->setAddress('New York');
	$linh->setStudentId('sv0002');
	$linh->setUser('Smith@gmail.com');
	$linh->setSubject('Math');
	$linh->setTime('Winter');
	$linh->setScore(90);
	$linh->running();
	$linh->driving();
	$linh->studing();
	$linh->practical();
	$linh->singing();





?>