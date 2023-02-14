<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET PHP</title>
</head>
<body>
    <h2>Using $_GET in PHP</h2>

    <p>
      <?php
        $username = $_GET['User'] ?? "nobody";

        echo "The user is : ",$username;

        echo "<br><hr><br>Using GET and POST together<br/><br/>";

        $username = $_GET["User"]??$_POST["User"]??"nobody";

        echo "<br>Again the user is : ",$username;

      ?>
    </p> 
</body>
</html>