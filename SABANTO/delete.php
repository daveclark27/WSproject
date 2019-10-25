<?php
include 'dbconfig.php';
if (isset($_GET['del'])) {
    $id=$_GET['del'];
    $query = mysqli_query($conn,"DELETE FROM tbl_user WHERE id = '$id'");
    header ("location:database.php");
    // if (!$query) {
    //     header ("location:database.php");

    // }
    // echo "<meta http-equal='refresh' content='0;url=delete.php'";
}
?>