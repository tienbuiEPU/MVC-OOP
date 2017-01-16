<?php 
	require_once "model/Post_m.php";
	class PostController
	{
		public function index() {
			$post = new Post_m();
			$listPost = $post->getAll();
			if (isset($_POST['delete'])) {
				$id = $_POST['id'];
				$post->delete($id);
				header("location: ?controller=post");
			}
			$result =array();
			if (isset($_POST['btnsearch'])) {
				$search = $_POST['search'];
				$result = $post->search($search);
			} else {
				$result = $listPost;
			}
			include "view/post/list.php";
		}

		public function add() {
			$message = '';

			if (isset($_POST['btnSubmit'])) {
				if ($_POST['content'] != '') {
					$input = $_POST;
					$post = new Post_m();
					$listPOST = $post->insert($input['content']);
					header("location: ?controller=post");
					exit();
				} else {
					$message = '<p style="color:red" >Content is required...</p>';
				}
			}
			include "view/post/create.php";
		}

		public function edit() {

			$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
			if ($id) {
				$post = new Post_m();
				$data = $post->getPost($id);
			}
			if (!empty($_POST['edit'])) {

				$data['id'] = isset($_POST['id']) ? $_POST['id'] : '';
				$data['content'] = isset($_POST['content']) ? $_POST['content'] : '';
				$post = new Post_m();
				$post->update($data['id'], $data['content']);
				header("location: ?controller=post");
			}

			include "view/post/edit.php";

		}
	}
?>
