<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Drihti Treasure Hunt</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles_form.css">

	</head>
	
	
	<body>
<nav class="navbar naver">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Drishti Treasure Hunt</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="/main">Home</a></li>
        <li><a href="#">How to play ?</a></li>
		<li><a href="#">Admin</a></li>
		<li><a href="#">Contact</a></li>
		</ul>
    </div>
  </div>
</nav>

		<div class="jumbotron section-one">
			<span class="section-head">Sample Heading</span>
			<br/>
			<span>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</span>
		</div>
		<div class="row form-container">
			<div class="col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1">
				<div class="row ">
					<div >
					<span class="login-head">Login</span>
					<div>
						<form action="loginController/loginValidate" method="POST">
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
<script src="js/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>



	