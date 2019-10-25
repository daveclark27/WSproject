<?php 
include 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./assets/css/reset.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/styles.css" rel="stylesheet" type="text/css">
    <title>Blog</title>
    <!-- ============link============= -->
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./assets/icon/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <script src=".assets/js/jquery.min.js"></script>
    <script>
        function commentSubmit(){
            if(form1.name.value == '' && form1.comments.value == ''){ //exit if one of the field is blank
                alert('Enter your message !');
            return;
            }
            var name = form1.name.value;
            var comments = form1.comments.value;
            var xmlhttp = new XMLHttpRequest(); //http request instance
    
            xmlhttp.onreadystatechange = function(){ //display the content of insert.php once successfully loaded
            if(xmlhttp.readyState==4&&xmlhttp.status==200){
                document.getElementById('comment_logs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
            }
        }
        xmlhttp.open('GET', 'insert.php?name='+name+'&comments='+comments, true); //open and send http request
        xmlhttp.send();
    }

    $(document).ready(function(e) {
        $.ajaxSetup({cache:false});
        setInterval(function() {$('#comment_logs').load('logs.php');}, 2000);
    });
    
    </script>
    <!-- ============css============== -->
    <style>
    body{
        background-image: url("./assets/img/333.jpg");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }#p3{
        color: white;

    }#s3{
        color: white;
        text-align: center;
    }#wq{
            float: right; 
            margin-top: 10px;
            background-color: transparent;        
            margin-right: 10px;
        }
    </style>
</head>
<body>
<header>
        <nav>
            <div class="nav-wrapper yellow darken-2">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                        <li><a href="index.php"><i class="material-icons">home</i></a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        
                      
                </ul>
                <a class='dropdown-trigger btn' href='login.php' data-target='dropdown1' id="wq">Login</a>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">one</a></li>
                    <li><a href="#!">two</a></li>
                    <li class="divider" tabindex="-1"></li>
                    <li><a href="#!">three</a></li>
                    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                  </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </header>
  
    <main>
    <h1 style="background-color:darkorange;padding:20px;text-align:center;color:darkred;border: 4px solid whitesmoke;font-family:Impact;">Q U O T E S</h1>
    <hr>
    <pre style="color:yellow;font-size:100%;font-family:cursive;">
                                Success isn't always about greatness.                                                                 Whenever you find yourself doubting how far you can go,
                                          It's about <mark>consistency</mark>.                                                                                         just remember how far you have come.
                               Consistent hard work leads to success.                                                        Remember everything you have faced, all the battles you have won,
                                            Greatness will come.                                                                                             and all the fears you have overcome.
    </pre>
    <hr>
    <p><pre style="color:yellow;font-size:100%;font-family:cursive;">
                                                                                       You gain strength, courage, and confidence by every experience in which you
                                                                                             really stop to look fear in the face.  You are able to say to yourself,
                                                                                      <q>I have lived through this horror; I can take the next thing that comes along.</q>
                                                                                                            You must do the thing you think you cannot do.
    </pre></p>
    <hr>
    </main>
    <div class="container">
    <div style="background-color:rgb (255,255,255,0.5);width:50%;padding:10px;margin:20px;margin-left:auto;margin-right:auto;">
    <div class="page_content">
    	Comment Goes Here....
    </div>	
        <div id="comment_input">
            <form name="form1">
        	    <span style="color:black;"><input type="text" name="name" placeholder="Name..."/></span><br><br>
                <textarea name="comments"  style="color:black;" placeholder="Leave Comments Here..." style="width:610px; height:100px;"></textarea><br><br>
                <a href="#" onClick="commentSubmit()" class="button">Post</a><br><br>
            </form>
        </div>
        <div id="comment_logs">
    	    <i>Loading comments...</i>
        </div>
    </div>
    </div>

    <footer class="page-footer">            
        <div class="footer-copyright">
            <div class="container">
                All Rights Reserved 2019 © WS101
            </div>        
    </footer>
    <script src="./assets/js/materialize-css.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
    </script>
</body>
</html>