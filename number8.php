<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<p> Create an array which contains 1-100 numbers & print it. FromParent Array print even & odd number  array bottom of parent array. <br>Use array & loop Sample Output:<br>
Parent [1,2,3,4,5,6,.........100]<br> Even [2,4,6,.......100]<br> Odd [1,3,5,7,..........99]
</p><br><br>
    
<?php

$parrentArray = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100);
$evenArray = array();
$oddArray = array();

echo "Parrent array : ";
for($i=0;$i<100;$i++) {
    echo $parrentArray[$i];
}
 echo "<br>";

echo "Even From parrentArray : ";

for($i=0;$i<100;$i++) {
    if($parrentArray[$i]%2==0) {
        echo $parrentArray[$i];
        
    }
}
echo "<br>";
echo "Odd From parrentArray : ";

for($i=0;$i<100;$i++) {
    if($parrentArray[$i]%2!=0) {
        echo $parrentArray[$i];
        
    }
}
echo "<br>";




?>

</body>
</html>


