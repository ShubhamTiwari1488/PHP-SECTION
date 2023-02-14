<?php

    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=people','root','');

    //for errors

    $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
?>