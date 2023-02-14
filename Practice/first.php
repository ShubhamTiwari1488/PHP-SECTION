<?php
    echo "<pre><br>";

    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=coursera','root','');

    $stml = $pdo->query("Select * from ages");

    echo '<table border="1">'."<br>";

    echo "<tr><th>NAME</th><th>AGE</th>";

    while($row = $stml->fetch(PDO :: FETCH_ASSOC))
    {
        echo "<tr><td>";
        echo $row['name'];
        echo "</td><td>";
        echo($row['age']);
        echo "</td></tr>";
    }

    echo "</table>";
    echo '<br>';

?>