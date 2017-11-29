<?php

session_start();
require('connect.php');
$username = $_SESSION['username'];

$show_log = "SELECT  chat.username , message.msg ,message.Time
            FROM `chat` 
            INNER JOIN `message` ON chat.id = message.chat_id
            ORDER BY message.Time DESC";

$result1 = mysqli_query($connection, $show_log);

if ($result1) {
    while ($extract = mysqli_fetch_array($result1)) {
        echo "<span style='color:green;float:left'>" . $extract['username'] . "</span> . <span style='color:brown;float:left'>" . $extract['msg'] . "</span> "
        . "<p style='color:blue;float:right;'>" . substr($extract['Time'], 11) . "<p/>";
    }
} else {
    echo "Invalid query:";
}












 

    