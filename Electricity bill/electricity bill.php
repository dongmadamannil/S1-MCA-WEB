<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>
</head>
<body>
    <form action="" method="POST" >
        Enter the meter number : <input type="number" name="mterno" id=""><br>
        Enter number of unit : <input type="number" name="unit" id=""><br>
        Select the category : <select name="category" id="">
            <option value="rural">Rural</option>
            <option value="residential">Residential</option>
            <option value="commercial">Commercial</option>
        </select><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $mterno=$_POST['mterno'];
        $unit=$_POST['unit'];
        $tariff=$_POST['category'];
        $dn=0;
        $rate=0;
        if($tariff=='rural'){
            if($unit>0 && $unit<=50){
                $dn=10;
                $rate=($unit*.25)+$dn; 
            } 
            else if($unit>50 && $unit<=100){
                $dn=10;
                $rate=($unit*.50)+$dn; 
            }                     
            else if($unit>100 && $unit<=200){
                $dn=10;
                $rate=($unit*1.0)+$dn; 
            }
            else if($unit>200 && $unit<=400){
                $dn=10;
                $rate=($unit*1.25)+$dn; 
            }
            else if($unit>400){
                $dn=10;
                $rate=($unit*1.50)+$dn; 
            } 
        }
        if($tariff=='residential'){
            if($unit>0 && $unit<=50){
                $dn=10;
                $rate=($unit*.50)+$dn; 
            } 
            else if($unit>50 && $unit<=100){
                $dn=10;
                $rate=($unit*1.0)+$dn; 
            }                     
            else if($unit>100 && $unit<=200){
                $dn=10;
                $rate=($unit*1.25)+$dn; 
            }
            else if($unit>200 && $unit<=400){
                $dn=10;
                $rate=($unit*1.50)+$dn; 
            }
            else if($unit>400){
                $dn=10;
                $rate=($unit*2.0)+$dn; 
            } 
        }
        if($tariff=='commercial'){
            if($unit>0 && $unit<=50){
                $dn=10;
                $rate=($unit*1.0)+$dn; 
            } 
            else if($unit>50 && $unit<=100){
                $dn=10;
                $rate=($unit*1.25)+$dn; 
            }                     
            else if($unit>100 && $unit<=200){
                $dn=10;
                $rate=($unit*1.50)+$dn; 
            }
            else if($unit>200 && $unit<=400){
                $dn=10;
                $rate=($unit*2.0)+$dn; 
            }
            else if($unit>400){
                $dn=10;
                $rate=($unit*2.25)+$dn; 
            }  
        }
        echo"Meter Number : ".$mterno."<br>";
        echo"Surcharge : ".$dn."<br>";
        echo"Tariff category : ".$tariff."<br>";
        echo"Unit : ".$unit."<br>";
        echo"Total charge for (".$unit.") : ".$rate;
    }
?>