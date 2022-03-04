<!-- leap year problem -->
<!-- Problem Number 9 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<p>Write a function which returnswhether a number isprime or not</p><br><br>


<form method="post">  
Number: <input type="text" name="number">  
<input type="submit" name="submit" value="Submit">  
</form> 
<?php   
 
    if($_POST)  
    {     
        $primeChecker=0;

        $number = $_POST['number'];   
        if(!is_numeric($number))  
        {  
            echo "Input should be a number";  
            return;  
        }   
        //condition to check if it is prime number or not//

        // 0 and 1 are not prime numbers so whenever 0 or 1 occurs flag variable is set to 1;
        if ($number == 0 || $number == 1)
            $primeChecker = 1;

        for ($i = 2; $i <= $number / 2; ++$i) {
            if ($number % $i == 0) {
                $primeChecker = 1;
                break;
            }
        }
        // flag is 0 for prime numbers
        if ($primeChecker == 0){
            echo $number."  is a prime number"."<br>";
        }
        else{
            echo $number."  is a not prime number"."<br>";
        }

        
    }   
?>  

    
</body>
</html> 
