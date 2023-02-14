<?php
    echo "<pre><br>";

    require_once "pdo.php";

    $stml = $pdo->query("select * from ages");

    while($row = $stml->fetch(PDO::FETCH_ASSOC))
    {
        print_r($row);
    }

    echo "</pre><br>";

?>