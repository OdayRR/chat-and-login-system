<?php

session_start();
require('connect.php');

$query1 = "SELECT `username` FROM `chat`WHERE active = 1";

$result_online = mysqli_query($connection, $query1);



while ($extract = mysqli_fetch_array($result_online)) {
    echo "<font color='Green'> " . $extract['username'] . " (Online)" . "</font><br><br><br>";
}

$query2 = "SELECT `username` FROM `chat`WHERE active =0";

$result_offline = mysqli_query($connection, $query2);



while ($extract = mysqli_fetch_array($result_offline)) {
    echo "<font color='Red'> " . $extract['username'] . " (Offline)" . "</font><br><br><br>";
}