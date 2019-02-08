<html>
<head>
<title> section 4 </title>
</head>
</body>
<?php 

//-----@ 4.1 function @@@@@@ -->

     //single function is used

function do_something()
{
    echo "my name is ankita";
}
    do_something() ;
    echo "<br>";
	echo "<br>";
	echo "<br>";


     // multiple function r used 

function init()
{
    addition();
	echo "<br>";
	word();
}

function addition()
{
	echo 26 + 25 ;
}

function word()
{
	echo " a , b, c, d";
}
init();
echo "<br>";
echo "<br>";
echo "<br>";
	


//-------@@@@4.2 function parameter @@@@@@@------>

function addition_number($number1, $number2)
{
	$add = $number1 +$number2 ;
    echo $add;

}

addition_number(26,26);
echo "<br>";
echo "<br>";
echo "<br>";

//------@@@@4.3 Return values from function @@@@--->

function add_numbers($number1, $number2)

{
	
	$sum = $number1 + $number2;
	
	return $sum;
	
}

$result = add_numbers(400,50);

echo $result;

echo "<br>";
echo "<br>";
echo "<br>";

//-----@@@@ 4.4 global and local variable @@@@ ---- >

$x = "ankita"; //global scope
function check(){
	$y = "unhalkar";  //local scope
    echo $y;	
	
}
check();

echo "<br>";
echo $x;

echo "<br>";
echo "<br>";


//-----@@@@ 4.5 constants @@@@----->


$number =10;
$number =100;
$number = "ankita";

echo $number . "<br>";
define("name", 100);
echo name;

	

?>
</body>
</html>