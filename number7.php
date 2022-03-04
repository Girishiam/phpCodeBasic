<!--problem 7 --->
<!--even number-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <p>Write a program to print all even numbers between 1 to 100. - using while loop
</p><br/><br/>


<?php
$i = 1;

while($i <= 100) { //iterate from 1 to 100//
  if($i%2 == 0) {
      echo $i."<br>";
  }
  $i++;
}

?>
  
</body>
</html>

