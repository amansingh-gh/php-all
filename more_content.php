<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advance php</title>
    <style>
        *{
            margin:0px;
            padding:0px;
            border-sizing:border-box;
        }
        .container{
            background-color:olive;
            max-width:70%;
            margin:auto;
            padding:20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php 
    //   if else conditions 
        echo "<h3>This is for Heading</h3>";
        $age = 20;
        if($age>15){
            echo "HUrrahhh!! Your age above 14";
        }
        else{
            echo "No Not";
        }
        echo "<br>";


    //   Array in php
       $arr  = array("C", "C++", "Python", "JS", "NodeJS");
       echo $arr[2];
       echo "<br>";
       echo count($arr);  // We use this to count the number of items in an array
       echo "<br>";


    //    Loops in php
        echo "<h2>Loops</h2>";
        echo "<br>";
        $a = 1;
        while($a<=10){
            echo "The value of a is :  ";
            echo $a;
            echo "<br>";
            $a++;
            echo "<br>";
        }

        echo "<br>";
        $b = 10;
        while($b<=50){
            echo "The value of b is : ";
            echo $b;
            echo "<br>";
            $b++;
            echo "<br>";
        }

        // Iterating array using loop
        $x = 0;
        while($x < count($arr)){
            echo "<br>The languages is : ";
            echo $arr[$x];
            $x++; 
        }

        // Do while loop
        $y = 0;
        do{
            echo "<br>The number is : ";
            echo $y;
            $y++;
        }
        while($y<10);


        // for loop
        for($i=0; $i<10; $i++){
            echo "<br>The number of i is : ";
            echo $i;
        }

        // for each
        foreach($arr as $v){
            echo "<br>The foreach for programming languages is : ";
            echo $v;
        }

        // Function
        function func($a){
            echo "<br>The number is : ";
            echo $a;
        }
        func(4);

        function ff($name){
            echo "<br>The name is : ";
            echo $name;
        }
        ff("Aman Singh");
        echo "<br>";


        // String
        $str = "This is Xero";
        echo "<br>";
        echo $str;
        $len = strlen($str);
        echo "The length of string is : ";
        echo $len;
        echo "<br>";
        // Now here i'm usign string concatenate here
        echo "The length of string is: " . $len ." Thankkkku";
        // To finding the words in sentence
        echo "<br>";
        echo "The words in the sentence are: ".str_word_count($str);
        echo "<br>";

        // To reverse the string we use
        echo "The words in the sentence are::  ".strrev($str);
        echo "<br>";

        // To find the position of something from the sentence we use
        echo "The search for is: ".strpos($str,"is");
        echo "<br>";

        // To replace any word from the sentenece we use: 
        echo "The replaced word is: ".str_replace("is","are",$str);



        ?>


    </div>
    
</body>
</html>