<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" placeholder="User_Name" name="un">
        <input type="password" placehonder="password" name="psd">
        <input type="submit" name="sub">
    </form>

    <?php
    if (isset($_POST['sub'])) {
        $uname = $_POST['un'];
        $password = $_POST['psd'];
        //echo "<script>alert('hello');</script>";
        if ($uname == "")
            echo "Enter a valid user name";
        if ($password == "" )
            echo "not be null";
            else if(preg_match('@[A-Z]@', $password)!=1 || preg_match('@[a-z]@', $password)!=1 || preg_match('@[0-9]@', $password)!=1){
                            echo "Not in priscribed format";}
                           
        }
    ?>
</body>

</html>