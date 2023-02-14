<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAVE DELETE MODIFY NAMES </title>
</head>
<body>
    <h1 style = "text-align:center;color:tomato;text-decoration:underline;">SAVE DELETE MODIFY NAMES</h1>
</body>
</html>

<?php
    require_once "pdo.php";

    if(isset($_POST["name"]) && isset($_POST["age"])){

        $sql = "insert into ages (name,age) values(:name,:age)";

        echo "<pre><br>".$sql."<br></pre><br>";

        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(':name'=>$_POST['name'],':age'=>$_POST['age']));

    }

    if(isset($_POST['delete']) && isset($_POST['name']))
    {
        $sql = "Delete from ages where name = :zip";

        echo "<pre><br>".$sql."<br></pre><br>";

        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(':zip'=>$_POST['name']));
    }

?>

<html>
<head></head>
<body>
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
        echo "</td><td>";

        echo('<form method = "post"><input type="hidden"');
        echo('name="name" value="'.$row["name"].'">');

        echo('<input type="submit" value="DEL" name="delete">');

        echo "<br></form><br>";

        echo "</td></tr>";
    }

    echo "</table>";
    echo '<br>';

?>

<p>New User</p>
<form method="post">
Name : <input type="text" name="name" size="40"><br>

<br>Age : <input type="number" name="age" size="20"><br>

<br><input type="submit" value="ADD NEW"/><br>
</form>
</body>
</html>