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
        if(isset($_POST['submit'])){ // create the condition if click the submit will run the code below
             $string =$_POST['String']; // set the variable that equal the value of input
             $reverse = ""; // create the variable of reverse that empty 
             $count=strlen($string)-1; // set the count variable to know the number of each letter
             for($i = $count; $i>=0;$i--){ // create a for loop for to reverse the string
                 $reverse.=$string[$i];
             }
             echo $reverse;
        }


    
    ?>

    <form method="post">
            <input type="text" name="String" required />
            <input type="submit" name="submit"/>
    </form>
    
</body>
</html>