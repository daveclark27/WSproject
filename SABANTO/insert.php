<?php
	
$name = $_REQUEST['name'];
$comments = $_REQUEST['comments'];


require("dbconfig.php");

mysqli_query($conn, "INSERT INTO tbl_comment(name, comments) VALUES('$name','$comments')");

$result = mysqli_query($conn, "SELECT * FROM tbl_comment ORDER BY id ASC");
while($row=mysqli_fetch_array($result)){
echo "<div class='comments_content'>";
echo "<h6><a href='delete1.php?id=" . $row['id'] . "'>x</a></h6>";
echo "<h5>" . $row['name'] . "</h5>";
echo "<h6>" . $row['date_publish'] . "</h6></br></br>";
echo "<h6>" . $row['comments'] . "</h6>";
echo "</div>";
}
mysqli_close($conn);
?>