<?php
include_once '../model/class.user.php'; 

include '../controller/reg.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /> 
	
	 <link rel="stylesheet" href="style.css" type="text/css">
	<script type="text/javascript" language="javascript"> 
	function submitreg()
	{
		var form = document.reg; 
		if(form.name.value == "")
		{ 
	alert( "Enter Full name." );
	return false; 
	} 
	else if(form.uname.value == "")
	{ 
alert( "Enter username." ); 
return false; 
} else if(form.upass.value == "")
{ 
alert( "Enter password." ); 
return false;
 } 
 else if
 (form.uemail.value == ""){ alert( "Enter email." );
 return false;
 } 
 } 
 </script> 
 </head>
 <body>
 <div class="container">
 <img src="logo.jpg" width="100px"> 
<center> <h1>Registration Here</h1>
 <form action="" method="post" name="reg">
 <table> 
 <tbody> 
 <tr>
 <th>FULL NAME:</th>
 <td><input type="text" name="fullname" required="" /></td>
 </tr> 
 <tr> <th>USER NAME:</th> 
 <td><input type="text" name="uname" required="" /></td>
 </tr> 
 <tr> 
 <th>EMAIL:</th> 
 <td><input type="text" name="uemail" required="" /></td>
 </tr>
 <tr> 
 <th>PASSWORD:</th> 
 <td><input type="password" name="upass" required="" /></td>
 </tr>
 <tr> 
 <td>
 </td> 
 <td>
 <input onclick="return(submitreg());" type="submit" name="submit" value="REGISTER" />
 </td> 
 </tr> 
 <tr> <td></td> 
 <td><a href="index.php">ALREADY REGISTERED? LOGIN HERE!</a></td>
 </tr> </tbody>
 </table> 
 </form>
 <?php echo $msg?>
 </center>
 </div> 
 </body>
</html>