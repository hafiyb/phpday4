
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

$sql = "SELECT * FROM training";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br>ID: ".$row['id']." Name: " . $row["name"]." date_created: ".$row["created_date"]." date_updated: ".$row["updated_date"]."<br>";
  }
} else {
  echo "0 results";
}

?>

<br>
<br>
<a href="index.php">Return</a>
</body>
</html>
