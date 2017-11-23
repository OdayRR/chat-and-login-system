<?php
session_start();

require('connect.php');
?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <link rel="stylesheet" href="styles.css" >
        <style>
            body {
                font:12px arial;
                color: #222;
                text-align:center;
                padding:75px; 
                background-color: #eee;
            }

            form, p, span {
                margin:0;
                padding:25; }

            input { font:12px arial; }

            a {
                color:#0000FF;
                text-decoration:none; }

            a:hover { text-decoration:underline; }

            #wrapper, #loginform {
                margin:0 auto;
                padding-bottom:50px;
                background:#f1f1f1;
                width:504px;
                border:5px solid #ACD8F0; 
                border-radius: 5px;
            }


            #chatlogs {
                text-align:left;
                margin:0 auto;
                margin-bottom:25px;
                padding:10px;
                background:#fff;
                height:270px;
                width:430px;
                border:1px solid #ACD8F0;
                overflow:auto; }

            #usermsg {
                width:395px;
                border:1px solid #ACD8F0; }

            #submit { width: 60px; }

            #menu { padding:12.5px 25px 12.5px 25px; }

            .welcome { float:left; }

            .logout { float:right; }

            .msgln { margin:0 0 2px 0; }

            #usersOnLine{

                font-family:tahoma;

                font-size:14;

                color:orange;

                border:1px teal solid;

                width:150px;

                height:225px;

                overflow:scroll;

                margin-left:1px;
            }
            header,footer {
                padding: 1em;
                color: blue;
                clear: left;
                text-align: center;

            </style>

            <title>Chat Room</title>
            <script
                src= "http://code.jquery.com/jquery-2.2.4.min.js"
                integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
                crossorigin="anonymous">
            </script>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
            <script src="myjavaFunction.js"></script>
        </head>
        <body>
            <header>PHP Chat room</header>
            <div id="wrapper">

                <div id="menu">

                    <p class="welcome">Welcome, <b> <?php echo $_SESSION['username']; ?></b></p>
                    <p class="logout"><a href="logout.php" onclick="return confirm('Are you sure to logout?');">Logout</a></p>
                    <p class="logout"><a href="delete.php" onclick="return confirm('Are you sure to delete your account?');">Delete</a></p>
                    <div style="clear:both"> </div>

                    </div>
                    <div id="chatlogs"></div>
                    <form name="form1" action="">
                        <input name="message" type="text" id="usermsg" size="63" autocomplete="off" />
                        <input type="submit"  id="submitmsg" value="Send" onclick="submitChat()" />
                    </form>
                </div>
            <footer>Design & Programming By Oday </footer>
            </body>
        </html>