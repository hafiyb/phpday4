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

include "q8910.php";

$date = $_POST['date'];
$att_id = $_POST['att_id'];


$sql = "UPDATE checkin SET check_in_time='$date' WHERE att_ID=$att_id";

if($conn->query($sql) === true){
    echo "Updated entry $att_id successfully to $date";
} else echo "failed";

?>
</body>

<br>
<br>
<a href="q10_1.php">Return</a>
</html>

