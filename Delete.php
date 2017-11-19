<?php

session_start(); 
require('connect.php');
$username= $_SESSION['username'];

$R = "DELETE FROM `oday` WHERE username='$username'";

$result1 = mysqli_query($C, $R);

session_destroy();
header('Location: login.php');


?>