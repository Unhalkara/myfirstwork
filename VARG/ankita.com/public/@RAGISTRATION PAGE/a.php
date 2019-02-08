<?php
include_once("main.php");
if(isset($_POST["submit"]))
{
$query = mysqli_query($conn,"insert into mrpage( RFirstName,RLastName, RAddress, RState, RCountry, RMobileNo, REmail) values('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['addr']."', '".$_POST['state']."','".$_POST['country']."','".$_POST['mobn']."','".$_POST['E-mail']."')");
}

?>
<html>
<head>
</head>
<body>
	 sucessfully Submitted @@@@@@
</body>
</html>