<?php
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=coursera','root','');

    //see the "errors" folders for details.....

    $pdo->setAttribute(PDO :: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>