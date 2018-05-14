<?php
$user = new User(); 

$uid = $_SESSION['uid'];

if (!$user->get_session())
	{
		header("location:index.php");
	}
	
if (isset($_GET['q']))
	{
		$user->user_logout();
		header("location:index.php");
	}
		
		
?>