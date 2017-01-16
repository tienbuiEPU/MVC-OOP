<?php 
	require_once "config/database.php";
	class Post_m extends database
	{
		protected $table = "post";
		public function __construct()
		{
			parent:: __construct();
		}

		
		public function getAll() {
			$query = "select * from " . $this->table;
			$rs = mysqli_query($this->conn, $query);
			$result = array();
			while ($row = mysqli_fetch_array($rs)) {
				$result[] = array(
					'id' 		=> $row['id'],
					'content' 	=> $row['content'],
				);
			}
			return $result;
		}

		public function getPost($id) {

			$query = "select * from " . $this->table . " where id = " . $id . ";";
			$rs = mysqli_query($this->conn, $query);
			$result = array();
			while ($row = mysqli_fetch_array($rs)) {
				$result = array(
					'id' 		=> $row['id'],
					'content' 	=> $row['content'],
				);
			}
			return $result;
		}


		public function insert($content) {
			$query = "insert into " . $this->table . "(content) value (' " . $content . " ');";
			$rs = mysqli_query($this->conn, $query);
		}



		public function delete($id) {
			$query = "delete from " . $this->table . " where id = " . $id . ";";
			$rs = mysqli_query($this->conn,$query);
		}


		public function update($id, $content) {

			$query = "update " . $this->table . " set content = '" . $content . "' where id = " . $id . ";";
			$rs = mysqli_query($this->conn, $query);
		}


		public function search($content) {
			$query = "select * from " . $this->table . " where content like '%$content%' ";
			$rs = mysqli_query($this->conn, $query);
			$result = array();
			while ($row = mysqli_fetch_array($rs)) {
				$result[] = array(
					'id' 		=> $row['id'],
					'content' 	=> $row['content'],
				);
			}
			return $result;
		}
	}
?>
