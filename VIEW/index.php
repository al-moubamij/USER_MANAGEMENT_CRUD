

<?php
include_once 'header.php';
$stmt = $connect->prepare('SELECT * FROM user');
$stmt->execute();
?>
<a href="createuser.php" class="btn btn-primary createbtn">Add User</a>

<table class="table">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">ID</th>
			<th scope="col">Name</th>
			<th scope="col">Email</th>
			<th scope="col">Mobile</th>
			<th scope="col">Edit</th>
			<th scope="col">Delete</th>
			
		</tr>
	</thead>
	<tbody>
	<?php
		$i = 1;
		while($data = $stmt->fetch(PDO::FETCH_ASSOC)){
	?>
		<tr>
			<th scope="row"><?php echo $i; ?></th>
			<td><?php echo $data['id'] ?></td>
			<td><?php echo $data['name'] ?></td>
			<td><?php echo $data['email_id'] ?></td>
			<td><?php echo $data['mobile_no'] ?></td>
		
		<td>
		<a href="updateUser.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">Edit</a>
		</td>
		<td>
		<a href="deleteuser.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
		</td>
		</tr>
		<?php $i++;}?>
	</tbody>
	<tfoot>

	</tfoot>
</table>

</body>
</html>