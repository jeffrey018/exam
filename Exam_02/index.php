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
        <h1>Exam_2</h1>
      
            <form action="" method="POST">
                <label for="">Create a filename</label><br>
               
            </form>
    </center>
    <?php 
    
        $createFile = fopen("hello_there.php", "w"); // creating file
        $content_1 = "<?php //this is a comment \n"; // variable of string
        $content_2 = "echo 'this is a test page'.'<br>'; \n";
        $content_3 = "echo 'Exam number 2!'; \n";
        $content_4 = "//this is the end of a comment ?>";
        fwrite($createFile,$content_1); // creating comment or string inside the file that one created .
        fwrite($createFile,$content_2);
        fwrite($createFile,$content_3);
        fwrite($createFile,$content_4);
     
    ?>
</body>
</html>