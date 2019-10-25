<?php 
include 'dbconfig.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>

    <!-- ==========link========= -->
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    
    <!-- ==========css========== -->
    <style>
        body{
            background-image: url("./assets/img/333.jpg");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }#p2{
            color: white;
        }#wq{
            float: right; 
            margin-top: 10px;
            background-color: transparent;        
            margin-right: 10px;
        }
        #s1{
            color: red;
        }
        .q1{
            color: while;
        }
    </style>
</head>

<body>
    <!-- ==============navbar================ -->
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
            <li><a href="login.php">login</a></li>
        </ul>
    </header>
    <!-- ==========title===========-->
    <div class="container">
            <center><h1 id="p2">WELCOME</h1><h3 id="p2">Please Login</h3><center>
    </div>
    <br>
    <!-- ===========Input text=============== -->
    <div class="container">
        <div class="container">
            <div class="container">
                <div class="container">
                    <div class="container">
                        
                        <form action="" method="post">
                            <p>
                                <label>Username:</label>
                                <input  type="text" id="user" name="uname" class="q1">
                            </p>
                            <p>
                                <label>Password:</label>
                                <input  type="password" id="passwd" name="pwd" class="q1">
                            </p>
                            <p>
                                <button type="submit" name="login" class="waves-effect waves-light btn"> Log In</button>
                            </p>
                        </form>
                        <?php
                            if(isset($_POST['login'])){
                                $sname = $_POST['uname'];
                                $passwd = $_POST['pwd'];
                                $query = mysqli_query($conn,"SELECT username, passwd FROM tbl_user WHERE username ='$sname' AND passwd = '$passwd'");
                                // print_r($query);
                                // $result = mysqli_fetch_assoc($query);
                                if ($query->num_rows>0) {
                                    // echo "<div id='p2'> Welcome, ".$uname."!</div>";
                                    session_start();
                                    $_SESSION['uname']=$sname;
                                    $_SESSION['login']=true;
                                    header("location: welcome.php");
                                }else {
                                    // echo "<script> M.toast({html: 'I am a toast!'}) </script>";
                                    echo "<h6 id='s1'>Invalid Username/Password</h5>";
                                    // echo "<script>Alert('Not registerd'); return false;</script>";
                                    // echo "<script>M.toast({html: 'I am a toast!'})</script>";
                                    // echo "<a onclick='M.toast({html: 'I am a toast!'})' class='btn'>Toast!</a>";
                                    
                                }
                            }
                        ?>
                        
                    </div>
                </div>    
            </div>
        </div>
    </div>
   <br>
    <br>
    <footer class="page-footer">            
        <div class="footer-copyright">
            <div class="container">
                All Rights Reserved 2019 © WS101
                <?php
                    if ($conn->connect_error) {
                        die(" Not connected to". $conn->connect_error);
                    }else {
                        echo " Connected to ". $db ;
                    }
                ?>
            </div>
        </div>
    </footer>
        <!-- ===========scripts============== -->
    <script src="./assets/js/materialize-css.min.js"></script>
    <script src="./assets/js/scrip.js"></script>
    <script >
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
    M.toast({html: 'I am a toast!'})    
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });
    </script>
</body>
</html>

