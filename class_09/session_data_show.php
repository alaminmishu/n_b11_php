<?php 

include_once 'session_data_start.php';
  
// access session variables
echo $_SESSION['logged_in_user_id'];
echo $_SESSION['logged_in_user_name'];