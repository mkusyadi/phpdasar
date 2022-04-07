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
// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Check again... 
$x = 59.85;
var_dump(is_int($x));


$a = 5;
$b = 10;
$c = $a + $b;
echo $c;
echo "<br>";

$jum = [10, 4, 5,3, 2, 1];

for($x=0;$x<count($jum);$x++){
	echo $jum[$x]."<br/>";
}

echo "<br>";


echo $jum[3];
echo "<br>";
echo array_sum($jum);

?>



</body>

</html>