<?php include("link.php");

$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user VALUES ('','$name','$username','$email','$password','2')";
$result = mysql_query($sql);


?>