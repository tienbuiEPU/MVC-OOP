<h2>List post</h2>
<a href="?controller=post&method=add">Create New Post</a>
<br/><br/>
<form method="post" action="?controller=post">
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td>
				<input type="text" name="search" placeholder="Search by content...">
			</td>
			<td>
				<input type="submit" name="btnsearch" value="SEARCH">
			</td>
		</tr>
	</table>
</form>
<table border="1" cellpadding="10" cellspacing="0">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID</th>
			<th>Content</th>
			<th>Option</th>
		</tr>
	</thead>
	<tbody>
		<?php if (isset($result)) { ?>
			<?php foreach ($result as $key => $value) { ?>
				<tr>
					<td><?php echo ($key + 1); ?></td>
					<td><?php echo $value['id']; ?></td>
					<td><?php echo $value['content']; ?></td>
					<td>
						<form method="post" action="?controller=post">
							<input onclick="window.location = '?controller=post&method=edit&id=<?= $value['id'] ?>'" type="button" value="Edit" />
							<input type="hidden" name="id" value="<?= $value['id'] ?>" />
							<input type="submit" name="delete" value="Delete">
						</form>
					</td>
				</tr>
			<?php } ?>
		<?php } ?>
	</tbody>
</table>
