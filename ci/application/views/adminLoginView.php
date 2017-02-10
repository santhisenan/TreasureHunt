<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles_form.css">
	</head>
	
	
	<body>
		<nav class="navbar .navbar-fixed-top naver">
		<div class="container-fluid">
			<span>Treasure Hunt Admin</span>
		</div>
		</nav>
		
		<div class="row form-container">
			<div class="col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1">
				<div class="row ">
					<div class="">
					<span class="login-head">Login</span>
					<div>
						<form action="adminController/adminLoginValidate" method="POST">
							<div class = "form-group ">
								<input class = "input-login" type="text" name="username" placeholder="username">
							</div>
							<div class = "form-group">
								<input class = "input-login" type="password" name="password" placeholder="password">
							</div>
							<div class = "form-group row">
								<div class="col-md-4 col-md-offset-2 col-xs-4 col-xs-offset-3">						
									<button class="btn-primary submit-btn" type="submit" name="submit" value="Login">Login</button>
								</div>
							</div>
						</form>
					</div>
			</div>
		</div>
		</div>
		</div>


	</body>
</html>



	