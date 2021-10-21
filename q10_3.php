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
$att_id =  $_POST['att_id'];

echo "
<form action='q10_4.php' method='post'>
<input type='hidden' value=$att_id name='att_id'>
New Date: <input type='text' name='date'>
<br>";
?>

<p>format:YYYY-MM-DD HH:MM:SS || example : 2021-10-21 14:08:04</p>
<input type="submit">
</form>
</body>
</html>