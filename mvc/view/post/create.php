<h2><a href="?controller=post">Back to list</a></h2>

<form action="?controller=post&method=add" method="post">
	Content: <input type="text" name="content" /><br />
	<?= $message ?>
	<input type="submit" name="btnSubmit" value="Save" />
</form>