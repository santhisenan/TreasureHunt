<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Drihti Treasure Hunt</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles_form.css">
	</head>
	
	
	<body>
		<nav class="navbar .navbar-fixed-top naver">
		<div class="container-fluid">
			<span>Treasure Hunt</span>
		</div>
		<div><a href="adminController">Admin</a></div>
		</nav>
		<div class="jumbotron section-one">
			<span>Sample Heading</span>
			<span>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</span>
		</div>
		<div class="row form-container">
			<div class="col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1">
				<div class="row ">
					<div class="">
					<span class="login-head">Login</span>
					<div>
						<form action="loginController/loginValidate" >
							<div class = "form-group ">
								<input class = "input-login" type="text" name="teamName" placeholder="Team Name">
							</div>
							<div class = "form-group">
								<input class = "input-login" type="password" name="teamPass" placeholder="Enter Password">
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



	