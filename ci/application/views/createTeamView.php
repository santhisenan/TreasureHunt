<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles_form.css">
		<link rel="stylesheet" href="css/admin_styles.css">

	</head>
	<body>
	<nav class="navbar .navbar-fixed-top naver">
		<div class="container-fluid">
			<span>Treasure Hunt Admin</span>
		</div>
		<div><a href="adminController">Admin</a></div>
	</nav>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="form-container">
			<span>Add a new team</span>
				<form action="createTeam/addteam" method="POST">
				<input type="text" class="form-control" placeholder="Name of the team" name="teamName" required/>
				<input type="password" class="form-control" placeholder="Answer" name="answer" required/>
				<input type="text" class="form-control" placeholder="Question" name="question" required />
				<input type="text" class="form-control" placeholder="Next Level" name="nextLevel" required>
				<div class="row">
				<div class="col-md-2 col-md-offset-3">
				<button type="submit" class="btn-primary submit-btn">Submit</button>
				</div>
				</div>
				</form>
			</div>
		</div>
	</div>

		
	</body>
</html>

