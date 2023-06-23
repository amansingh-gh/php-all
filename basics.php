<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php basics</title>
    <style>
        *{
            margin:0px;
            padding:0px;
            border-sizing:border-box;
        }
        .container{
            background-color:light-pink;
            max-width:80%;
            margin:auto;
            padding:20px;
        }
    </style>
</head>
<body>
        <div class="container">
            Hello this is my first php
            <br>
        

        <!-- /* Below Lines for php development -->
        <!-- // This lines helps us to print something using...  Here echo behaves like "print"  php is case sensisitive  -->
        <?php echo "Hey this text is displayed by php";
        echo "<br>";
        
        // Varibales in php
        $variable = 50;
        echo $variable;  // It prints the value of variable that is 50;
        echo "<br>";  // This line helps us to change the line wtih the help of php

        // Addition with php
        $int1 = 100;
        $int2 = 500;
        echo $int1 + $int2;  // We can type capital echo also
        echo "<br>";

        // Operators in php
        // 1. Arithmetic operator
        echo "The addition of int1 + int2 : ";
        echo $int1 + $int2;
        echo "<br>";
        echo $int1*$int2;
        echo "<br>";
        echo $int1/$int2;
        echo "<br>";

        // 2. Assignment Operator
        $newInt = $int1;
        echo $newInt;
        echo "<br>";
        $newInt *= 2;  // This lines multiply *2 in $newInt (100)
        echo $newInt;
        echo "<br>";

        // 3. Comparision Operator
        echo "The value of 1>=4 is : ";
        echo var_dump(1>=4);
        echo "<br>";
        echo "The value of 1>100 is : ";
        echo var_dump(1<100);
        echo "<br>";


        // 4. Incremental Operator
        echo $int1++;
        echo "<br>";
        echo $int1;
        echo "<br>";
        echo --$int1;
        echo "<br>";
        echo $int1;
        echo "<br>";


        // 5. Logical Operator  (and, or, xor, not)
        // $myvar = (false xor false);
        $myvar = (false xor true);
        // $myvar = (false xor false);
        // $myvar = (true xor true);
        echo var_dump($myvar);
        echo "<br>";


        /*  DATA TYPES
        1. string
        2. integer
        3. boolean
        4. float
        */

        $newsome = "This is string line";
        echo var_dump($newsome);
        echo "<br>";
        $newint = 34978.434;
        echo var_dump($newint);
        echo "<br>";

        // We can define constants like that ( define('pi',3.14)  )
        define('pi', 3.14);
        $area = pi * 5;   // We can use defined constants like that
        echo $area;

        ?>
        </div>
</body>
</html>