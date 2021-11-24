<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>        
        <h1>Palindrome</h1>
        <!--  create a form for inputing the word -->
            <form action="" method="POST">
                <label for="">Enter the word</label><br>
                <input type="text" name="word" class="form-group">
                <input type="submit" name="" value="Check">
            </form>
    </center>
    <?php 
    // create a function to check if the word is palindrome
    function CheckPalindrome(){
        $check = isset($_POST['word']); // create the variable has name isset($_POST['word']), "word" came from the name of input tags 
        if($check){ // if the variable has not empty then proceed to the next function
            $palindrome = strrev($_POST['word']); // create variable that the word has palindrome to check it is palindrome i use it strrev function that build in php.
            if($palindrome == $_POST['word']){ // if the word is palindrome echo palindrome
                echo "<center>The word is PALINDROME!</center>";
            }else{ // else NOT
                echo "<center>The word is NOT PALINDROME!</center>";
            }
        }
    }
    CheckPalindrome();
       
    ?>
</body>
</html>