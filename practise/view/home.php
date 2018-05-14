<?php

session_start();

include_once '../model/class.user.php';


include '../controller/dashboard.php';

?>


<html lang="en">
	<head>

	
		<link rel="stylesheet" href="style.css" type="text/css">
		<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
	
	</head>
	<body>
	
		<div class="container">
		<div class="row">
		<div class="col7">
		<img src="logo.jpg" width="100px">
		</div>
		<div class="col3">
		<a class="button" href="home.php?q=logout" >LOGOUT</a>
		</div>
		</div>
		
		<center><h3>Welcome: <?php $user->get_fullname($uid); ?></h3></center>
		
		<hr>
		<center><h2> GET ACCOUNT INFO:</h2>
		
		<label>ADDRESS:</label> 
		<input type="text" id="txtAdd" name="address" placeholder="Enter user Address" > 
		<input type="submit" name="submit" id="btngetAccInfo" value="GET INFO!">
		
		
		<div id="main" class="container">

				

		</div>
		</center>
		<br/><br/>

		<center><h2> GET ALL TRANSACTIONS:</h2>
		
		<label>ADDRESS:</label> 
		<input type="text" id ="address2" name="address" placeholder="Enter user Address" >
		<input type="submit" name="submit" id="btnAll" value="GET INFO!">
		
		<div id="output2" class="container">

				

		</div>
		
		</center>
	
		<div id="footer"></div>
		</div>
		<script type="text/javascript" src = "./js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src = "./js/app.js"></script>
		</script>
	</body>
</html>