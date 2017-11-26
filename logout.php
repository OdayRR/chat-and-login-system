<?php

session_start();

require('connect.php');

 $username = $_SESSION['username'] ;

$nonactive = "UPDATE chat SET active = 0  WHERE username='$username'";

$Myresult2 = mysqli_query($connection, $nonactive);

session_destroy();

header('Location: login.php');


?>