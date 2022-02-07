<?php
$cr=array("Kohli","Rohit","Rahul","Pant","Pandya","Bhuvaneshvar","Bairstow","Aswin","Shami","Jadeja","Smith","Maxwell","Bhumrah","Agharwal");
echo "<table border='1'align=center width='50%'><tr><th>Sl.no.</th><th>Cricketers</th></tr>";
foreach($cr as $i=>$k){
    $l=$i+1;
	echo "<tr><td>$l</td><td>$k</td></tr>";
}
echo "<table>";
?>


