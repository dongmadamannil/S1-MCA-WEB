<?php
$Student=array("Don","Binoy","Arun","Chandrakanth","Adharsh","Marvin","Ajil","Joyal");
echo"<h2>Array before sorting</h2>";
print_r($Student);
echo"<h2>Array After sorting using <b style='color:red;'>asort()</b></h2>";
asort($Student);
print_r($Student);
echo"<h2>Array After sorting using <b style='color:red;'>arsort()</b></h2>";
arsort($Student);
print_r($Student);


?>