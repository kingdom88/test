<?php
include "../controller/db_config.php";
 class User{ 
 public $db;
 public function __construct()
 { 
 include '../controller/conn.php';
 } 
 /*** for registration process ***/ 
 public function reg_user($name,$username,$password,$email)
 { 
 $password = md5($password);
 $sql="SELECT * FROM users WHERE uname='$username' OR uemail='$email'";
 //checking if the username or email is available in db 
 $check = $this->db->query($sql) ; 
 
 $count_row = $check->num_rows;
 //if the username doesn't exisnt, insert in the db table 
 if ($count_row == 0)
 { 
$sql1="INSERT INTO users SET uname='$username', upass='$password', fullname='$name', uemail='$email'"; 
$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
 return $result; 
 } 
 else 
 { 
return false;
} 
} 
/*** for login process ***/ 
public function check_login($emailusername, $password)
{ 
 $password = md5($password);
 $sql2="SELECT uid from users WHERE uemail='$emailusername' or uname='$emailusername' and upass='$password'"; 
 //checking if the username is available in the table 
 $result = mysqli_query($this->db,$sql2);
 $user_data = mysqli_fetch_array($result); 
 $count_row = $result->num_rows; if ($count_row == 1) 
 { 
 $_SESSION['login'] = true; 
 $_SESSION['uid'] = $user_data['uid'];
 return true;
 } 
 else
 { 
return false;
 } 
} 
 /*** displaying the username or fullname ***/ 
 public function get_fullname($uid)
 { 
 include '../controller/fullname.php';
 } 
 /*** starting the session ***/ 
 public function get_session()
 { 
 return $_SESSION['login'];
 } 
 public function user_logout() 
 {
	 $_SESSION['login'] = FALSE;
	 session_destroy(); 
} 
}
?> 