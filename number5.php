<!-- Uppercase Lowercase problem -->
<!-- Problem Number 5 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <p> Write a program to check whether a character is uppercase or lowercase alphabet.<br> Sample Input:  C<br>
Sample Output:  'C' is uppercase alphabet
</p><br><br>


<form method="post">  
Your Given Character: <input type="text" name="character">  
<input type="submit" name="submit" value="Submit">  
</form> 


<?php   
 
    if($_POST)  
    {     

        $character = $_POST['character'];   
        //condition to check if it is uppercase or lowercase
        if($character === strtoupper($character)) {
            echo "Input Character : ".$character."<br>";
            echo $character." is Uppercase alphabet"."<br>";

        }
        else if($character === strtolower($character)) {
            echo "Input Character : ".$character."<br>";
            echo $character." is Lowercase alphabet"."<br>";
        }
        else{
        echo "You entered a special character , digit or upper lower Mixed!"."<br>";
        }
        return 0;
    }   
?>  

    
</body>
</html> 
