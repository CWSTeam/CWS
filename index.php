<?php session_start(); ?>
	
	<!DOCTYPE html>
	<html>
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Bootstrap 101 Template</title>
	
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
		  <nav class="navbar navbar-inverse" role="navigation">
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
		
		    <!-- Collect the nav links, forms, and other content for toggling
				bs-example-navbar-collapse-1
				#bs-example-navbar=collapse-1		    
		     -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="index.php">Home</a></li>
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
		        <li><a href="register.php"> Register </a></li>
		      </ul>
		    </div> <!-- /.navbar-collapse -->
		  </div> <!-- /.container-fluid -->
		</nav>
	
		
	
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.js"></script>
	    <!-- Native libraries -->
	    <script src="js/binum.js"></script>
	  </body>
	</html>