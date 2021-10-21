<?php
include "q8910.php";

$user_id = $_POST['user_id'];

$sql = "INSERT INTO checkin(user_id) VALUES ('$user_id')";

if($conn->query($sql) === true){
    echo "User #$user_id Checked in successfully!";
} else echo "Check in failed";
?>