<?php

session_start();
require('connect.php');
$username = $_SESSION['username'];

$delete1 = "DELETE M
            FROM `message` as M  
            INNER JOIN `chat`as C ON M.chat_id = C.id  
            WHERE C.username ='$username'";

$result2 = mysqli_query($connection, $delete1);

$delete2 = "DELETE FROM `chat` WHERE username='$username'";

$result1 = mysqli_query($connection, $delete2);

session_destroy();
header('Location: login.php');