<?php
include_once("connection.php");
if(isset($_POST["submit"])){
$query = mysqli_query($conn,"insert into persons(personID, LastName, FirstName, City)values ('".$_POST['addr']."', '".$_POST['lastname']."', '".$_POST['firstname']."', '".$_POST['city']."')");
 
}




?>

<html>
<head>
</head>
<body>
	submitted
</body>
</html>