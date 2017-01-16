<?php 
	class database
	{
		protected $conn = null;

		public function __construct()
		{
			$this->conn = mysqli_connect('localhost', 'root','Minhthu92@temona', 'datamvcdemo');
			if(!$this->conn) {
				die('Can not connect Databases...');
			}
		}
	}
?>
