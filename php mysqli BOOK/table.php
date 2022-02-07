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
        .from_cmn1 {
            border-radius: 15px;
            width: 55%;
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

        .srch {
            position: absolute;
            left: 50%;
            top: 55px;
            width: 40%;
            border-radius: 15px;
            height: 40%;
            opacity: 0.5;
            background-color: #1E261F;
           
        }
        .tbl_clz{
            position: absolute;
            top:50px;
        }
    </style>
    <div style="background-color: #1E261F;height:50vh;width:30%;border-radius: 15px;position: absolute;left: 10%;top:5%;opacity: 0.5;">
        <h1 class="hreg">Reg Form</h1>
        <form action="" method="POST">
            <table class="tblk">
                <tr>
                    <td> <label for="f1">Accession number</label></td>
                    <td><input name="acno" id="f1" type="text" placeholder="enter Accession number" class="from_cmn "></td>
                </tr>
                <tr>
                    <td> <label for="f1">title</label></td>
                    <td><input name="ttl" id="f1" type="text" placeholder="enter Title" class="from_cmn "></td>
                </tr>
                <tr>
                    <td><label for="f2">authors</label></td>
                    <td><input name="author" type="text" id="f2" placeholder="enter Authors" class="from_cmn"><br></td>
                </tr>
                <tr>
                    <td> <label for="f4">edition</label></td>
                    <td><input name="edit" id="f4" type="text" placeholder="enter Edition" class="from_cmn"></td>
                </tr>
                <tr>
                    <td> <label for="f5">publisher</label></td>
                    <td><input name="publi" id="f5" type="text" placeholder="enter Publisher" class="from_cmn"></td>
                </tr>
            </table>
            <input type="submit" value="SUBMIT" name="subr" class="sub"><input type="reset" value="Clear" class="rest">
            </from>
    </div><div class="srch">
    <form action="" method="post" >
     <input type="text" placeholder="Enter Title" class="from_cmn1" name="srchr"> <input type="submit" name="sub2" value="SEARCH">
    </form>
<?php
$conn = mysqli_connect("localhost", "root", "", "tkm_mca");
if (isset($_POST['sub2'])) {
    $srh=$_POST['srchr'];
    $sqlrk="select * from tbl_test2 where title='$srh';";
    $res=mysqli_query($conn,$sqlrk);
    if(mysqli_num_rows($res)){

        echo "<table border='1' class='tbl_clz'><tr><th>Accession number</th><th>Title</th><th>Authors</th><th>Edition</th><th>publisher</th></tr>";
        while($row=mysqli_fetch_assoc($res)){
    echo "<tr><td>".$row['acc_no']."</td>";
    echo "<td>".$row['title']."</td>";
    echo "<td>".$row['auth']."</td>";
    echo "<td>".$row['edth']."</td>";
    echo "<td>".$row['pub']."</td></tr>";
        }
        echo "</table>";
    

    }
    else
    {
        echo "<h1>OOPS..no results found</h1>";

    }

}

?>

</div>
</body>
<?php

if (isset($_POST['subr'])) {
    $ac = $_POST['acno'];
    $tl = $_POST['ttl'];
    $au = $_POST['author'];
    $edn = $_POST['edit'];
    $pu = $_POST['publi'];
    $sql = "INSERT INTO tbl_test2 (acc_no, title, auth,edth,pub)VALUES ('$ac', '$tl', '$au','$edn','$pu')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('SUccess');</script>";
    } else {
        echo "<script>alert('error');</script>";
    }
}

?>

</html>