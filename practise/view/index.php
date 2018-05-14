<?php
	session_start();
	include_once '../model/class.user.php';
	include '../controller/log.php'
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 <link rel="stylesheet" href="style.css" type="text/css">
<script type="text/javascript" language="javascript">
 function submitlogin()
 { 
 var form = document.login; 
 if(form.emailusername.value == "")
 { 
alert( "Enter email or username." ); 
return false;
 } 
 else if(form.password.value == "")
 { 
alert( "Enter password." );
 return false; 
 }
 } 
 </script> 

	
 </head>
 <body>
 <div class="container">
 <img src="logo.jpg" width="100px"> 
 <span style="font-family: 'Courier 10 Pitch', Courier, monospace; font-size: 13px; font-style: normal; line-height: 1.5;"></span> 
 <center><h1>Login Here</h1>
 <form action="" method="post" name="login"> 
 <table>
 <tbody> 
 <tr> 
 <th> EMAIL:</th> 
 <td><input type="text" name="emailusername" required="" /></td> 
 </tr> 
 <tr> 
 <th>PASSWORD:</th> 
 <td><input type="password" name="password" required="" /></td>
 </tr> 
 <tr>
 <td>
 </td> <td><input onclick="return(submitlogin());" type="submit" name="submit" value="LOG IN" /></td> 
 </tr> 
 <tr> 
 <td></td> <td><a href="registration.php">REGISTER HERE.</a></td>
 </tr>
 </tbody> 
 </table> 
 </form>
 </center>
 </div> 
 </body>
</html>