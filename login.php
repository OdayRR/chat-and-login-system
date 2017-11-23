<!--
After the Html code i created Database called "login" in myadminPHP
and i created a table called "Oday"
using this query : 

CREATE TABLE `oday` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `message` varchar  (255) NOT NUll
  `Time`   CURRENT_TIMESTAMP     atribute : ON UPDATE CURRENT_TIMESTAMP
   PRIMARY KEY (`id`),
   UNIQUE KEY `username` (`username`)
)

-->

<?php
session_start();
require('connect.php');

if (isset($_POST) & !empty($_POST)) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $varlogin = "SELECT * FROM `chat` WHERE username='$username' and password='$password'";

    $result = mysqli_query($connection, $varlogin) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        echo '<script type="text/javascript">alert(" Hi  ' . $username . '  Welcom back  ");</script>';
        echo "<script>window.location.assign('chat_room.php');</script>";
    } else {

        echo '<script type="text/javascript">alert("Invalid Login please register for new account ");</script>';
        echo "<script>window.location.assign('register.php');</script>";
    }
    
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> PHP login System </title>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <link rel="stylesheet" href="styles.css" >
        <style>

            body{
                padding-top:40px;
                padding-bottom: 40px;
                background-color: #eee;
            }

            .signin {
                max-width: 330px;
                padding: 15px;
                margin: 0 auto;
            }
            .signin .signin-heading,
            .signin .checkbox {
                margin-bottom: 10px;
            }
            .signin .checkbox {
                font-weight: normal;
            }
            .signin .form-control {
                position: relative;
                height: auto;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                padding: 10px;
                font-size: 16px;
            }
            .signin .form-control:focus {
                z-index: 2;
            }
            .signin input[type="email"] {
                margin-bottom: -1px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }
            .signin input[type="password"] {
                margin-bottom: 10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
        </style>
    </head>
    <body>
    <center>
        <form class="signin" method="POST" autocomplete="off">

            <h3 class="signin-heading"> Please Login </h3>

            <div class="input">

                <input type="text" name="username" class="form-control" placeholder="Username" required>      
            </div>

            <label for="inputPassword" class="sr-only">Password</label>

            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

            <button class="primary" type="submit">Login</button>
            <button class="primary" type="button" onclick="location.href = 'register.php'">Register</button>
            <button  class="primary" type="button" onclick="return alert('Please login first !!!');">Chat Room</button>
            
        </form>
        <img width="300" padding="15" src="PHP.gif" alt="This will display an animated GIF" />
    </center>
</body>
</html>