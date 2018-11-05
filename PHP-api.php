<?php 
	include "register.php";

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<table>
	<tr>
		<th>Id</th>
		<th>Username</th>
		<th>Password</th>
		<th>Level</th>
		<th>Full Name</th>
		<th>Hapus</th>
		<th>Edit</th>
	</tr>
	<?php while ($row = mysqli_fetch_array($hasil)) {?>
	<tr>
		<th><?php echo $row['id']; ?></th>
		<th><?php echo $row['username']; ?></th>
		<th><?php echo $row['password']; ?></th>
		<th><?php echo $row['level']; ?></th>
		<th><?php echo $row['fullname']; ?></th>
		<th><a href="delete.php?id=<?php echo $row['id']; ?>">Hapus</a></th>
		<th><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></th>
	</tr>
	<?php } ?>
</table>

	<br>
	<form method="post">
		<div class="input-group">
			<label for="">Username</label>
			<input type="text" name="username" class="form-control">
		</div>
		<div class="input-group">
			<label for="">Password</label>
			<input type="password" name="password" class="form-control">
		</div>
		<div class="input-group">
			<label for="">Level</label>
			<select name="level">
			<option>Admin</option>
			<option>Users</option>
			<option>Guest</option>
			</select>
		</div>
		<div class="input-group">
			<label for="">Full Name</label>
			<input type="text" name="fullname">
		</div>
		<button type="submit"  name="btnregister" class="btn">Register</button>
		<button type="reset" class="btn" >Reset</button>
		</form>
</body>
</html>