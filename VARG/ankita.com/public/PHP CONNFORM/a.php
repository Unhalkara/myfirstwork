<?php
if(isset($_POST['submit'])){
$query=mysqli-query($ conn, "insert into basic (username,password) values ('". $_POST['username']."', '". $_POST['password']."')");
echo "success";
}
?>