<?php
    if (isset($_POST['submit'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $birthday=$_POST['birthday'];
        $major=$_POST['major'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $gender=$_POST['gender'];

        echo "welcome $name";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="col">
            
        </div>
    </div>
</body>
</html>