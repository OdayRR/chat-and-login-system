<?php
session_start();
?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <style>
            body {
                font:12px arial;
                color: #222;
                text-align:center;
                padding:0px; 
                background-color: #eee;
                margin-bottom: 30px;
            }

            header {
                height: 90px;
                color: white;
                background:#6699ff;
                text-align: center;
                padding-top: 2em;
                font-size: 18px;
                margin-bottom:20px;
            }
            footer {
                height: 90px;
                background:#6699ff ;
                text-align: center;
                padding-top: 2em;
                font-size: 18px;
                color: white;
                position: relative;
                margin-top: 40px;

            }

            form, p, span {
                margin:0;
                padding:25; }

            input { font:12px arial; }

            a {
                color:whitesmoke;
                text-decoration:none; }

            a:hover { text-decoration:underline; }

            #container{
                
                padding-bottom:50px;
                background-image:url("b.jpg");
                width:900px;
                border:5px solid #ACD8F0; 
                border-radius: 5px;
            }


            #chatlogs {

                margin:0 auto;
                margin-bottom:25px;
                padding:10px;
                background:#fff;
                height:270px;
                width:630px;
                border:1px solid black;
                overflow:auto; 
                position: relative;
            }

            #usermsg {
                width:400px;
                border:1px solid #ACD8F0; }

            #submit { width: 60px; }

            #menu { padding:12.5px 25px 12.5px 25px;}

            .welcome { float:left; color: white}
            .welcome1 { text-align: center; color: white}

            .msgln { margin:0 0 2px 0; }

            .container2
            {margin:0 auto;
             padding-bottom:50px;
             background-image:url("bb.jpg");
             width:250px;
             height: 510.7px;
             border:5px solid #ACD8F0; 
             border-radius: 5px;
            }
            #chatlogs2 {

                margin:0 auto;
                margin-bottom:25px;
                padding:10px;
                background:#eee;
                height:390px;
                width:180px;
                border:1px solid black;
                overflow: visible; 
                position: relative;
            }


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
        
            <div class="row">
                <div class="col-xs-5" style="padding-left:140px">
                    <div id="container">


                        <div id="menu">


                            <p class="welcome">Welcome, <b> <?php echo $_SESSION['username']; ?></b></p>
                            <p class="welcome"><a href="logout.php" onclick="return confirm('Are you sure to logout?');">Logout</a></p>
                            <p class="welcome"><a href="delete.php" onclick="return confirm('Are you sure to delete your account?');">Delete</a></p>
                            <div style="clear:both"> </div>

                        </div>
                        <div id="chatlogs"> </div>
                        <form name="form1">
                            <input name="message" type="text" id="usermsg" size="63" autocomplete="off" />
                            <input type="submit"  id="submitmsg" value="Send" onclick="submitChat()" />
                        </form>

                    </div>
                </div>
                <div class="col-xs-6"  style="padding-left:230px">
                    <div class="container2">
                        <div id="menu">


                            <p class="welcome1"> Online & Offline Users</p>

                            <div style="clear:both"> </div>

                            <div id="chatlogs2"> 



                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>   

            <footer>Design & Programming By Oday </footer>
    </body>
</html>