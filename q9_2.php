<?php

include "q8910.php";

$user_no = $_POST['user_id'];

$sql = "SELECT * FROM employee WHERE user_ID = $user_no";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "ID: ".$row['user_ID']." Name: ".$row['name']."<br>";
    }
  } else {
    echo "0 results";
  }

$sql = "SELECT * FROM checkin WHERE user_ID = $user_no";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "Check in ID: ".$row['att_ID']." Check in time: ".$row['check_in_time']."<br>";
    }
  } else {
    echo "0 results";
  }

?>