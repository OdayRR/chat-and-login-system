<?php

session_start();
require('connect.php');


$show_log = "SELECT `username`,  `msg` ,`Time` FROM chat ORDER BY Time DESC";

$result1 = mysqli_query($connection, $show_log);

while ($extract = mysqli_fetch_array($result1)) {
    echo "<span style='color:green;float:left'>" . $extract['username'] . "</span> . <span style='color:brown;float:left'>" . $extract['msg'] . "</span> "
    . "<p style='color:blue;float:right;'>" . substr($extract['Time'], 11) . "<p/>";
}












 

    