<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VARIABLES</title>
</head>
<body>
    <h1>Lets learn PHP</h1>

    <hr>

    <?php 
        $x = 5;
        
        function myTest()
        {
            global $x;
            static $y = 0;

            echo "Value of x is ",$x," and value of y is ",$y,"<br>-----Line Break-----<br/>";
            
            $y++;
        }

        myTest();
        myTest();
        myTest();

    ?>

    <hr>
    <h2>Now lets learn PHP STRINGS FUNCTION</h2>

    <?php

        # $fuel = 10;   A Global Variable

        $str = "PRATIMA TIWARI";

        $len = strlen($str);

        echo "The string is : ",$str," and the length of the string : ",$len."<br>";
        
        $word = str_word_count($str);

        echo "The number of words in the name is : ",$word,"<br>";

        $str_rev = strrev($str);

        echo "The string in reversed is : ",$str_rev."<br/>";

        $str_pos = strpos($str,"TIWARI");

        if($str_pos === false){
        echo "The substring is not a part of the string<br>";
        }

        else {
            echo "The value of str_pos is : ",$str_pos,"<br>";
        }

        $new_str = str_replace("TIWARI","MAHANTY",$str);

        echo "The new string is : ",$new_str."<br/>";

    ?>

    <hr>
    <h2>LOOPS IN PHP</h2>

    <?php

        //This will work 

       /* echo $fuel,"<br>";
        myTest();
       */

       $fuel = 10;
       
       echo "<br/><hr>While Loop<br><hr>";

       while($fuel > 1)
       {
           print("Vroom<br>");

           $fuel --;
       }

       echo "<br><hr>Do While Loop<br/><hr>";

       $count = 0;

       do{
           echo "Hello ";
       }while(++$count <= 5);

       echo "<br/><br><hr>For Loop<br/><hr>";

       for($i = 1 ; $i <= 6; $i++)
       {
           echo "Namaste".$i*6," ";
       }
    ?>  

    <hr>
    <h2>PHP ARRAYS</h2>  

    <?php
        $stuff = array("Hi","There");

        echo $stuff[1],"\n";

        $stuff2 = array("name" => "Shubham",
                        "course" => "PHP");

        echo $stuff2["course"],"\n";
        echo $stuff2['name'],"<br>";


        echo "<hr><br><pre>";

        print_r($stuff2);

        echo "<br></pre><hr><br>";

        echo "<hr><br><pre>";

        var_dump($stuff2);

        echo "<br></pre><hr><br>";

    ?>

    <hr>
    <h2>Building up the array</h2>

    <?php
        $var = array();

        $var[] = "Hello";
        $var[] = "World";

        $var[] = "Mitro";

        print "<pre>";
        print_r($var);
        print "</pre>";


        echo "<br/><br/><hr>";

        $za = array();

        $za["name"] = "Shubham";
        $za["course"] = "PHP";

        echo "<pre>";

        print_r($za);

        echo "</pre>";


        echo "<hr><br>LOOPING THROUGH AN ARRAY<br/><hr>";

        foreach($stuff as $k => $v){
            echo "Key = ",$k," and Value = ",$v,"<br>";
        }

        echo "<br/><br/>";

        for($i = 0;$i < count($var);$i++)
        {
            echo "i = ",$i," and value = ",$var[$i],"<br>";
        }



        echo "<br/><br/><hr>ARRAYS OF ARRAY<br/><br/>";

        $product = array(
                "paper" => array(
                        "copier" => "Copier",
                        "inkjet" => "INKJET",
                        "classmate" => "ClassMate Notebooks"
                ),

                "pens" => array(
                        "ball" => "Dot Pen",
                        "Gel" => "Parker",
                        "marker" => "Camel Marker"
                )
            );
        
        print '$product["pens"]["maker"] is : '.$product['pens']['marker'];
        echo "<br>";
        print '$product["pens"]["maker"] is : '.$product["pens"]["marker"]."<br>";
        echo '$product["pens"]["maker"] is : '.$product['pens']['marker']."<br>";
        echo '$product["pens"]["maker"] is : '.$product["pens"]["marker"]."<br>";
            
    ?>

    <hr>
    <h2>ARRAYS FUNCTION</h2>

    <?php
        if(array_key_exists("name",$stuff2))
            echo "The element is : ",$stuff2["name"];

        else
            echo "The array key does'nt exists";

        
        
        echo isset($stuff2['course']) ? "<br>course is a set" : "<br>course is not a set";


        echo "<br> The length of : stuff2 is : ",count($stuff2),"<br>";


        if(is_array($fuel))
            echo '$fuel is an array';

        else 
            echo '$fuel is not an array';
        
        echo "<br>";

        if(is_array($stuff))
            echo '$stuff is an array';

        else 
            echo '$stuff is not an array';

        echo "<br>";
        
        if(is_array($stuff2))
            echo '$stuff2 is an array';

        else 
            echo '$stuff2 is not an array';

        
    ?>
</body>
</html>