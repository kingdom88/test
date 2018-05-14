<?php
$user= new User();
	
	if (isset($_REQUEST['submit']))
	{
		extract($_REQUEST);
		$login = $user->check_login($emailusername,$password);
		
		if ($login)
		{
			//registration success
			header("location:home.php");
		} else
		{
			//registratin failed
			echo 'Wrong username or password';
		}
	}

?>