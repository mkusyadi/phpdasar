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
$t = date("H");

if ($t > "20") {
  echo "Have a good day!";
} else {
echo "Have a bad day!";
	}
?>
<br><br>
<?php
$a = "agus";

if ($a > "20") {
  echo "Have a good day!";
} elseif ($a == "agus") {
    echo "Have a new day!";
} else {
echo "Have a bad day!";
	}
?>
<br><br>
<?php  
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}
?>  
<br><br>
<?php  
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
  echo "$value <br>";
}
?> 

</body>

</html>