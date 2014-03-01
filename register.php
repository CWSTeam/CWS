<?php
include("init/db.php");

$firstpassword = mysqli_real_escape_string($_POST["rpasswordfirst"]);
$secondpassword = mysqli_real_escape_string($_POST["rpasswordsecond"]);
$email = mysqli_real_escape_string($_POST["remail"]);
$username = mysqli_real_escape_string($_POST["rusername"]);

$usernameCheck = mysqli_query("SELECT username FROM members WHERE username='$username'");
if(mysqli_num_rows($usernameCheck) != 0){
echo("
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
Username is already in use!
</div>"
);
}

$emailCheck = mysqli_query("SELECT email FROM members WHERE email='$email'");
if(mysqli_num_rows($emailCheck) != 0){
echo("
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
Email is already in use!
</div>"
);
}

if($firstpassword != $secondpassword){
echo("
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
Passwords are not equal!
</div>"
);
}

elseif(filter_var($email, FILTER_VALIDATE_EMAIL)){
echo("
<div class='alert alert-danger alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
Please enter a valid email!
</div>"
);
}
else {
echo("
<div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
Yay! It worked!
</div>"
);
}

?>		
		
		<!DOCTYPE html>
		<html>
		  <head>
		    <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		    <title>Binum Group - Register</title>
		
		    <!-- Bootstrap -->
		    <link href="css/bootstrap.css" rel="stylesheet">
		    <link href="css/custom.css" rel="stylesheet">
		
		    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		    <!--[if lt IE 9]>
		      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		    <![endif]-->
		  </head>
		  <body background="images/bckg.png">
		  <nav class="navbar navbar-default" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Binum</a>
		    </div>
		
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="index.php">Home</a></li>
		        <!-- <li><a href="#">Link</a></li> -->
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Edge <b class="caret"></b></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Edge Console</a></li>
		            <li><a href="#">Edge Phone</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li class="divider"></li>
		            <li><a href="#">Support</a></li>
		          </ul>
		        </li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li class="active"><a href="register.php"> Register </a></li>
		      </ul>
		    </div> <!-- /.navbar-collapse -->
		  </div> <!-- /.container-fluid -->
		</nav>
		
			
			<div class="container-fluid">
			
			<div class="row col-xs-12" id="left-sidebar">
				<form>
					<fieldset>
						<legend>Account</legend>
						<div class="elements">
						<label for="rusername">Username: </label>
						<input type="text" id="rusername" name="rusername" size="17" class="form-control" />
						</div>
						
						<div class="elements">
						<label for="rpasswordfirst">Password: </label>
						<input type="password" id="rpasswordfirst" name="rpasswordfirst" size="30" class="form-control" />						
						</div>
						
						<div class="elements">
						<label for="rpasswordsecond">Password Again: </label>
						<input type="password" id="rpasswordsecond" name="rpasswordsecond" size="30" class="form-control" />
						</div>
						
						<div class="elements">
						<label for="remail">Email: </label>
						<input type="text" id="remail" name="remail" size="50" class="form-control" />
						</div>
						
						<br />						
						
						<div class="elements">
						<input type="submit" class="btn btn-primary" />
						</div>			
					</fieldset>				
				</form>
			</div>		
					
			</div>
		
		    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		    <!-- Include all compiled plugins (below), or include individual files as needed -->
		    <script src="js/bootstrap.js"></script>
		    <!-- Native libraries -->
		    <script src="js/binum.js"></script>
		  </body>
		</html>