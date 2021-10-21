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

$sql = "SELECT * FROM employee";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<br><form action='q9_2.php' method='post'>User ID: ".$row["user_ID"]." Name: 
      <input type='hidden' value='".$row["user_ID"]."' name='user_id'>
      <a onclick='this.parentNode.submit();'>".$row["name"]."</a></form>"."<br>";
    }
  } else {
    echo "0 results";
  }

?>
</body>
</html>