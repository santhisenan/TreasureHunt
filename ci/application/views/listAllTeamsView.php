<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin</title>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/admin_styles.css">
		<link rel="stylesheet" href="../css/styles_form.css">
	</head>

	<nav class="navbar .navbar-fixed-top naver">
		<div class="container-fluid">
			<span>Treasure Hunt Admin</span>
		</div>
		<div><a href="adminController">Admin</a></div>
		</nav>
	<div class="table-responsive">
    <table class="table table-bordered listall-table">
    <tr>
    	<th>id</th>
    	<th>Name</th>
    	<th>Password</th>
    	<th>Clue</th>
    	<th>Next Level</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['team'];?></td>
			<td><<?php echo $row['password'];?>/td>
			<td><?php echo $row['clue'];?></td>
			<td><?php echo $row['nextlevel'];?></td>
		</tr>
	<?php } 
	?>    
    </table>
    </div>

</html>















