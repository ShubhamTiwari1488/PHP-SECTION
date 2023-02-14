<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build In Function</title>
</head>
<body>
    
    <h1>Build In Function</h1>

    <p>
    <?php 
        $str = isset($_GET["User"]) ? $_GET["User"] : "Hello World";

        /*---NULL COALESCE-----

            $str = $_GET["User"] ?? "Hello World";

        */

        $revString = strrev($str);

        echo "The String is : ",$str;
        echo "<br>After reversing the string : ",$revString;

        $repeat = str_repeat("Hip",3);

        echo "<br/>Using str_repeat function : ",$repeat;

        $upper = strtoupper($str);

        echo "<br/>Using strtoupper we get : ",$upper;

        $length = strlen($str);

        echo "<br/><br/>The length of the string : ",$length;
    ?>
    </p>

    <p>
    <hr>
    <h1>Exploding the Array</h1>

    <?php
        $inp = "This is a sentence with seven words";   # A string

        $arr = explode(" ",$inp);   #Generating an array by exploding the string

        echo "<pre>";

        print_r($arr);

        echo "</pre>";
    ?>
    </p>

    <p>
    <hr>
    <h1>PHP INFO</h1>
    <div>Every details regarding your php installation will be generated</div>
    <br/>
    <?php
        phpinfo();
    ?>
    </p>
</body>
</html>