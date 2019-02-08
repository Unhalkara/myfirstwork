<?php
include_once("conn.php");
if(isset($_POST["submit"])){
$query = mysqli_query($conn,"insert into studentinfo(SID, SfirstName, SLastName, SClass)values ('".$_POST['sid']."', '".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['sclass']."')");
 
}

?>

<html>
<head>
</head>
<body>
	 sucessfully Submitted
</body>
</html>