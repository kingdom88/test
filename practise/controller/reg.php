<?php

$msg='';

$user = new User();
 // Checking if user is logged in or not
 if (isset($_REQUEST['submit']))
 { 
extract($_REQUEST);
 $register = $user->reg_user($fullname, $uname,$upass, $uemail);
 if ($register)
	 { 
 // Registration Success 
	$msg= 'Success';
 } 
 else 
 {
	 // Registration Failed 
	 $msg= 'Registration failed. Email or Username already exits please try again';
} 
} 

?>