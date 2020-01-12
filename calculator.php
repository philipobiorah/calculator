<!DOCTYPE html>

<html>
    <head>
        <title>Calculator in PHP</title>
        <style>
             body {
                 background-color:bisque;
                 text-align: center;
                 
             } 

             form{
                margin-top: 5em;
                 
             }
             strong{
                 color: red;
             }
        </style>
    </head>

    <body>
      <form method="post" action="calculator.php">

         <b>Value 1:</b>
         <input type = "text" name="value1" size="10"/>

         <b>Value 2: </b>
         <input type = "text" name="value2" size="10"/>
         <b>Select Operator:</b>
         <select name="operator">
             <option>+</option>
             <option>-</option>
             <option>/</option>
             <option>*</option>
         </select>
         <input type="submit" name="cal" value="Calculate"/>

      </form><hr>
        <?php
           if(isset($_POST['cal'])){
               $value1 = $_POST['value1'];
               $value2 = $_POST['value2'];
               $opt = $_POST['operator'];

            //    if($opt =='+'){
            //        echo "<h2>Your Answer is: <strong>";
            //        echo $value1+$value2;
            //        echo "</strong></h2>";
            //    }

            //using switch
            if((is_numeric($value1)) and (is_numeric($value2))){

            switch($opt){
                case "+":
                    echo "<h2>Your Answer is: <strong>";
                    echo $value1+$value2;
                    echo "</strong></h2>";
                    break;
                case "-":
                    echo "<h2>Your Answer is: <strong>";
                    echo $value1-$value2;
                    echo "</strong></h2>"; 
                    break;
                case "/":
                    echo "<h2>Your Answer is: <strong>";
                    echo $value1/$value2;
                    echo "</strong></h2>"; 
                    break;
                    
                case "*":
                    echo "<h2>Your Answer is: <strong>";
                    echo $value1*$value2;
                    echo "</strong></h2>";    
            }
          
            }else{
                echo "<em>Enter Numerals only ! </em>";
            }
        }
         ?>
             
    <body>
</html>