<?php
    //NOTE-CANNOT HAVE OUTPUT BEFORE THIS

    session_start();

    if(!isset($_SESSION['pizza']))
    {
        echo "<p>Session is empty</p>";
        $_SESSION['pizza'] = 0;
    }

    else if($_SESSION['pizza'] < 3)
    {
        $_SESSION['pizza'] += 1;
        echo "Added 1 to SESSION['pizza']";
    }

    else{
        session_destroy();
        session_start();

        echo("<p>Session Started</p>");
    }

?>

<html>
<head>
<title>SESSION IN PHP</title>
</head>
<body>
    <section>
    <p>
    <a href="Session.php">CLICK ME</a>
    </p>
    
    <p> Our Session ID is : <?php echo(session_id()); ?></p>

    <pre>
    <?php print_r($_SESSION); ?>
    </pre>
    </section>
</body>
</html>