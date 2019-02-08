<?php
$name= "Ankita";
$value= 26;
$expiration= time() +(60*60*24*7);

setcookie($name,$value,$expiration);
?>

<html>
<head> </head>
<body>
<?php
if(isset($_COOKIE["Ankita"]))
{
$Ankita =$_COOKIE["Ankita"];
echo $Ankita;
}
else{
$Ankita=" ";
}
?>
</body>
</html>