<?php

session_start();

require('connect.php');
$username = $_SESSION['username'];
$msg = $_REQUEST['message'];


$sql = "UPDATE chat SET msg = '$msg'  WHERE username='$username'";

$result1 = mysqli_query($connection, $sql);


while ($extract = mysqli_fetch_array($result1)) {
    echo " ". $extract['message'] . "</span><br />";
}


//INSERT INTO `chat` (msg)value('$msg')
//UPDATE chat SET msg = '$msg'  WHERE username='$username'"