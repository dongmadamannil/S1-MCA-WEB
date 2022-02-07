<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="reg_css.css"> -->
    <title>Registration</title>
</head>

<body style="background-image: url('bk.jfif');color: #B2BFF7;">
    <style>
        .hreg {
            text-align-last: center;
            text-decoration: underline;

        }

        .tblk {
            margin-left: 25%;
        }

        .from_cmn {
            border-radius: 15px;
            width: 95%;
            height: 20px;
            margin-top: 5px;
        }

        .sub {
            position: absolute;
            left: 30%;
            top: 85%;
            border-radius: 15px;
            height: 30px;
            width: 10%;

        }

        .rest {
            position: absolute;
            left: 45%;
            top: 85%;
            border-radius: 15px;
            height: 30px;
            width: 10%;

        }

        .prnt {
            position: absolute;
            left: 50%;
            top: 55px;
            height: 25px;
            width: 150px;
            border-radius: 15px;
            cursor: pointer;
        }
        .tbl_clz{
            position: absolute;
            left: 50%;
            top:50px;
        }
    </style>
    <div style="background-color: #1E261F;height:50vh;width:30%;border-radius: 15px;position: absolute;left: 10%;top:5%;opacity: 0.5;">
        <h1 class="hreg">Reg Form</h1>
        <form action="" method="POST">
            <table class="tblk">
                <tr>
                    <td> <label for="f1">Name</label></td>
                    <td><input name="name" id="f1" type="text" placeholder="enter ur name" class="from_cmn "></td>
                </tr>
                <tr>
                    <td><label for="f2">Age</label></td>
                    <td><input name="age" type="number" id="f2" placeholder="enter ur age" class="from_cmn"><br></td>
                </tr>
                <tr>
                    <td> <label for="f4">Email Id</label></td>
                    <td><input name="eid" id="f4" type="email" placeholder="enter ur Email ID" class="from_cmn"></td>
                </tr>
                <tr>
                    <td> <label for="f5">Password</label></td>
                    <td><input name="psd" id="f5" type="password" placeholder="enter ur Password" class="from_cmn"></td>
                </tr>
            </table>
            <input type="submit" value="SUBMIT" name="subr" class="sub"><input type="reset" value="Clear" class="rest">
            </from>
    </div>
    <!-- <input type="button" value="Print()" class="prnt" onclick="prn()"> -->

</body>
<?php
$conn = mysqli_connect("localhost", "root", "", "tkm_mca");
if (isset($_POST['subr'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $eid = $_POST['eid'];
    $psd = $_POST['psd'];
    $sql = "INSERT INTO tbl_test1 (name, age, email,psd)
VALUES ('$name', '$age', '$eid','$psd')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('SUccess');</script>";
        hlo($conn);
    } else {
        echo "<script>alert('error');</script>";
    }
}
 function hlo($con)
{
    $VAL="SELECT * FROM tbl_test1;";
    $res=mysqli_query($con,$VAL);
    echo "<table border='1' class='tbl_clz'><tr><th>NAME</th><th>AGE</th><th>EMAIL ID</th><th>PASSWORD</th></tr>";
    while($row=mysqli_fetch_assoc($res)){
echo "<tr><td>".$row['name']."</td>";
echo "<td>".$row['age']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['psd']."</td></tr>";
    }
    echo "</table";

} 

?>

</html>