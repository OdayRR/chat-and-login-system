<?php

$connection = mysqli_connect('localhost', 'root', '', 'Login');

if (!$connection) {
    die("Database Connection Failed" . mysqli_error($connection));
}

$selectDB = mysqli_select_db($connection, 'Login');

if (!$selectDB) {
    die("Database Selection Failed" . mysqli_error($connection));
}