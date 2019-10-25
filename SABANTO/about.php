<?php
    include 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <!-- ============link============= -->
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="./assets/icon/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <!-- ============css============== -->
    <style>
    body{
        background-image: url("./assets/img/333.jpg");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }#s4{
        color: white;

    }#s2{
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
    <?php
        $query = mysqli_query($conn,"SELECT * FROM tbl_profile");
        while($row = mysqli_fetch_assoc($query)){
    ?>
    <img src="<?php echo $row['image'];?>" width=275 height="329" style="float:right;margin-top:54px;">
    <p style="text-align:center;font-family:Haettenschweiler;font-size:230%;background-color:silver;"><?php echo $row['name'];?></p>
    <p style="text-align:center;color:whitesmoke;font-family:Verdana;font-size:100%;">
        <?php echo $row['street'];?>,<br>
        <?php echo $row['city'];?><br>
        <?php echo $row['email'];?><br>
        <?php echo $row['contact'];?>
    </p>
    <p style="background-color:silver;">
        Age: <?php echo $row['age'];?><br>
        Birthdate: <?php echo $row['bday'];?><br>
        Birthplace: <?php echo $row['bplace'];?><br>
        Religion: <?php echo $row['religion'];?><br>
        Nationality: <?php echo $row['nationality'];?><br>
        Marital Status: <?php echo $row['status'];?><br>
        Language: <?php echo $row['language'];?><br>
        Hobbies & Interest: <?php echo $row['hobbies'];?>
    </p>
    <?php
        }
    ?>
    </main>

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