<?php

session_start();
require('connect.php');
$username = $_SESSION['username'];

$delete = "DELETE FROM `chat` WHERE username='$username'";

$result1 = mysqli_query($connection, $delete);

session_destroy();
header('Location: login.php');
?>