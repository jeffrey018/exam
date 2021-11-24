
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <h1>PHP</h1>
     <label for="">1.Loop</label>
     <ul>
        <label for="">A. Create a php funtion using WHILE loop that will sum all even numbers from 0-10</label>
        <label for=""> 
            <?php 
            function whileLoop(){
                $sum = 0; 
                $even = 0;
                while($even < 11){
                    if($even%2 == 0){        // Mod operator (%) always return the reminder
                        $sum+=$even;        // 2+4+6+8+10=30
                    }      
                $even++;                    
                }
                
                echo '</br><b>Answer:</b> '.$sum;
            }
            whileLoop();
               
            ?>
        </label>
        <br>
        <label for="">B. Create a php funtion using DO WHILE loop that will display all odd numbers from 0-10</label>
        <label for=""> 
        </br><b>Answer:</b>
            <?php 
            function DoWhile(){
                $odd = 0;
                do{                     // statement
                    if($odd%2 != 0){    // if $odd mod 2 not equal to 0 
                      echo $odd;        // fetch all odd numbers
                    }
                    $odd++;             //increment of odd  numbers
                }
                while($odd < 11);       // condition
            }
            DoWhile();
                 
            ?>
        </label>
        <br>
        <label for="">C. Create a php funtion using FOR loop that will display 10 numbers in fibonacci sequence</label>
        <label for=""> 
        </br><b>Answer:</b>
            <?php 
            function fibonacci($n){   // function to how to get fibonacci numbers
                $n1 = 0;            // first number is zero 
                $n2 = 1;            // 2nd number is 1 ; 
                $output = 0;        // output is zero
               for($i=0; $i <=$n; $i++){    // for loop , i is less than or equal to variable n , and increment the i
                   if($i <= 1){             // if i less than or equal to 1 it display 1 zero and 9 one.
                    $output = $i;
                   }else{
                       $output = $n1 + $n2;     // else  the output is n1 plus $n2 is equal to 1 because the value of $n1 is zero then the value of $n2 is 1 .
                       $n1 = $n2;               // then the n1 is equal to $n2 then the result is 0,1,1,2,2,2,2,2,2,2
                       $n2 = $output;           // then the last is like 0+1 = 1 then 1+1 = 2 and 1+2 = 3 and so on until number fetch is 34,
                   }
                   echo $output.",";

               }
            }
            fibonacci(9);           // the number 9 parameter is the value of $n in function fibonacci
                 
            ?>
        </label>
       
     </ul>

     <label for="">2.Arrays</label>
     <ul>
        <label for="">A. Display the value that the most number occurrence, in case of tie arrange it in alphabetical order</label></br>
        <label for=""> <b>Answer:</b><br>
            <?php 
            $Name = array('Marvin','Marco','Marvin','Marco','Marco','Marvin','Christian');
            sort($Name); // sort is an ascending order , smaller to greater
            foreach($Name as $names){ // foreach is like a loop ,, then loop all names alphabetically
                echo $names .'</br>';
            }

            echo '<pre>';
            print_r(array_count_values($Name));
               echo '</pre>';
            ?>
            <?php ?>
        </label>
        <br>
        <label for="">B. Sort the array in ascending order , if the values is an odd number, round it up to the nearest tens</label>
        <label for=""> 
        </br><b>Answer:</b><br>
            <?php 
             $Numbers = array('9863','7127','2020','80','55','100');
             sort($Numbers); // sort is an ascending order , smaller to greater
            foreach($Numbers as $ascending){ // foreach is like a loop ,, then loop all numbers in ascending order
                echo $ascending;            
                if($ascending%2 != 0){ // if the ascending is odds number , make it round it up to the nearest tens
                    echo '- this is odds number and Round it up to tens is: '.round($ascending,-1);
                }
                echo '<br>';
            }
    
            ?>
        </label>
        <br>
        <label for="">C. Display the items that is not repetitive</label>
        <label for=""> 
        </br><b>Answer:</b>
            <?php 

            $Array_value = array('red','blue','black','red','blue','blue','red','gold');
            $unique =  array_unique($Array_value); // array_unique is a build function in php to remove the duplicate items.
            echo "<pre>";
            print_r($unique);
            echo "</pre>";
            ?>
        </label>
       
     </ul>

     <h1>SQL</h1>
     <label for=""></label>
     <ul>
        <label for="">A. GET all data of highest paid employee(without using LIMIT)</label>    
            </br><b>Answer:</b><br><img src = "images/highespaid.png" width = "50%" height="100%"/><br>
        <label for="">B. GET all employees that are hired from 2017-2018</label>
            </br><b>Answer:</b><br><img src = "images/DATe.png" width = "50%" height="100%"/><br>   
        <label for="">C. GET all employees that belongs to IT department AND hired 2018 onwards</label>
            </br><b>Answer:</b><br><img src = "images/date_department.png" width = "50%" height="100%"/><br>   
     </ul>


     <h1>JAVASCRIPT</h1>

     <label for=""> please see the out in console.</label><br>
     <label for=""> No.2 question - i dont have answer because i dont know how to do it ..</label>
     <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
     <script type="text/javascript" >
         var Sentence = "the quick brown fox jumps the lazy dog";
         var CapitalizeString = (str) => str[0].toUpperCase() + str.slice(1).toLowerCase();
         var CapitalizeWords =(str) => str.split(' ').map
         (CapitalizeString).join(' ');
         console.log(CapitalizeWords(Sentence));
     </script>

    
    
 
 </body>
 </html>
