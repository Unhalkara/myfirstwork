<?php
include_once("b6.php");
if(isset($_POST['submit'])){
$query = mysqli_query($conn, "insert into basic(username,password) values ('".$_POST['username']."', '". $_POST['password']."')");
echo "success";
}
?>