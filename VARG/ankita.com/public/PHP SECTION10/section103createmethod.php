<?php
 class Car{
 function MoveWheels()
 {
 echo "wheels move";
 }
 }
 
if(method_exists("Car","MoveWheels")){
echo "run perfect";
}
else{
echo "no";
}
?>