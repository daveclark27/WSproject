<?php 
session_start();
include 'dbconfig.php';
if (!isset($_SESSION['login'])) {
    header("location: login.php");
}
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
    <link rel="stylesheet" href="../css/materializecss.min.css">
    <!-- <link rel="stylesheet" href="./assets/css/modal.css"> -->
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
        .q1{
            color: white;
        }
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
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
                <a class='dropdown-trigger btn' href='logout.php' data-target='dropdown1' id="wq">Logout</a>
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
            <li><a href="login.php">logout</a></li>
        </ul>
    </header>
    <!-- <button  href="welcome.php"></button> -->
    <a href="welcome.php" type='btn' name='edit' class='waves-effect waves-light btn'><i class="material-icons">arrow_back</i></a>
    <center><h1 class="q1">Registered Users</h1>
    <table class="container" class="responsive-table" class="highlight">
    <th class='q1'>No.</th>
    <th class='q1'>Username</th>
    <th class='q1'>Password</th>
    <th class='q1'>Options</th>
    
    <?php $result = mysqli_query($conn,"SELECT id,username,passwd FROM tbl_user") ;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td class='q1'>".$row['id']."</td>"."<td class='q1'>".$row['username']."</td>"."<td class='q1'>".$row['passwd']."</td>"."<td>
        <a href='edit.php?edit=$row[id]' type='btn' name='edit' class='waves-effect waves-light btn'>Edit</a></td>"."<td><a href='delete.php?del=$row[id]' type='btn' name='delete' class='waves-effect waves-light btn'>Delete</a></td>";
    }
    ?>


    </table></center>

<!-- Trigger/Open The Modal
<button id='myBtn' href='#?update=$row[id]' class='waves-effect waves-light btn modal-trigger'>Edit</button>

The Modal
<div id="myModal" class="modal">

  Modal content
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Edit user</h2>
    </div>
    <div class="modal-body">
      <br><div class="container"> -->
      <?php 
    // if (isset($_POST['uname'])) {
    //     $nname = $_POST['uname'];
    //     $pdw = $_POST['pwd'];
    //     $query=mysqli_query($conn,"UPDATE `tbl_user` SET `username`='$nname',`passwd`='$pwd' WHERE id = '$row[id]'");
    //     if (!$query) {
    //         echo "Not updated";
    //     }else {
    //         echo "successfully updated";
    //     }
    // }
?>
      <!-- <form action="" method="post">
      <input type="text" name="uname" value="" placeholder="Update username">
      <input type="text" name="pwd" value="" placeholder="Update password">
      <button type="submit" name="edit">Update</button>
      </form>
      </div>
      <p></p>

    </div>
    <div class="modal-footer">
      
    </div>
  </div>

</div> -->

<br><br><br><br>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
// // Get the modal
// var modal = document.getElementById('myModal');

// // Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks the button, open the modal 
// btn.onclick = function() {
//   modal.style.display = "block";
// }

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// }

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }
   
    </script>
    <!-- <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script> -->

</body>
</html>
