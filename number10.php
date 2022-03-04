<!-- reverse string problem -->
<!-- Problem Number 10 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>Write a function to reverse a string:</p><br><br>


<form method="post">  
String: <input type="text" name="string">  
<input type="submit" name="submit" value="Submit">  
</form> 
<?php   
 
    if($_POST)  
    {     

        function reverse_string($string){
      

            $length = strlen($string);
          
            // for a 1 character string//
            if($length == 1){
                return $string;
            }
            else{
                $length--;
                return reverse_string(substr($string,1, $length)).substr($string, 0, 1);
            }
        }
          
        // function called//
        $string = $_POST['string'];
        echo "The reverse string is :".(reverse_string($string));   

    }   
?>  

    
</body>
</html> 
