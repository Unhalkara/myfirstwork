<?php
class Dog{
var $eyeColors  = "pink";
var $noseColor = "brown";
var $furColor  = "blue";

  function ShowAll(){
echo $this->eyeColors . "<br>";
echo $this->noseColor . "<br>";
echo $this->furColor . "<br>";
}

}

$pitbull = new Dog();
$pitbull-> ShowAll();

?>