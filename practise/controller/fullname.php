<?php

$sql3="SELECT fullname FROM users WHERE uid = $uid";
 $result = mysqli_query($this->db,$sql3); 
 $user_data = mysqli_fetch_array($result); 
 echo $user_data['fullname']; 
?>