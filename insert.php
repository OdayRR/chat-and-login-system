<?php

session_start();

require('connect.php');
$username = $_SESSION['username'];
$msg = $_REQUEST['message'];


$sql = "INSERT INTO `message` (id ,chat_id , msg)
        VALUES('',(SELECT chat.id FROM chat
        WHERE chat.username = '$username') ,'$msg');";

$result1 = mysqli_query($connection, $sql);


while ($extract = mysqli_fetch_array($result1)) {
    echo " " . $extract['message'] . "</span><br />";
}