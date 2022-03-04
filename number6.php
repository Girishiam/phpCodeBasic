<!-- Maximum number using switch casae problem -->
<!-- Problem Number 1 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<p>Write a program to find the maximum between two numbers using a switch case.
</p><br/><br/>


<form method="post">  
Number 1 : <input type="text" name="number1"><br/>
Number 2 : <input type="text" name="number2">  </br>  
<input type="submit" name="submit" value="Submit"> </br>  
</form> 
<?php   
 
    if($_POST)  
    {     

        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2']; 
        if(!is_numeric($number1) && !is_numeric($number2))  
        {  
            echo "Input should be a number";  
            return;  
        }   
        //condition to check maximum between two number//
        switch($number1 > $number2)
        {   
            case 0: 
                echo "The maximum is : ".$number2."<br>";
                break;


            case 1: 
                echo "The maximum is : ".$number1."<br>";
                break;

            default: 
                echo "Number is equal";
        }
 
    }   
?>  

    
</body>
</html> 
