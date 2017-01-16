<h2>Edit Your Post</h2>
<form method="post" action="?controller=post&method=edit&id=<?= $data['id'] ?>">
	<table>
		<tr>
			<td>Content</td>
			<td>
				<input type="text" name="content" value="<?= $data['content'] ?>" />
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="hidden" name="id" value="<?= $data['id'] ?>" />
				<input type="submit" name="edit" value="Edit" />
			</td>
		</tr>
	</table>
</form>