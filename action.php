<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "db.sql.php";

    $fname = $_GET['fname'];

    $sql = "INSERT INTO training(name) VALUES ('$fname')";

    $conn = mysqli_connect($servername, $username, $password , 'day9');

    if($conn->query($sql) === true){
        echo "updated successfully";
    } else echo "failed";



?>
<br>
<br>
<a href="index.php">Return</a>
</body>
</html>

