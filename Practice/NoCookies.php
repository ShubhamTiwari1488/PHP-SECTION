<?php

    //Tell PHP we won't be using cookies for the session

    ini_set('session.use_cookies','0');
    ini_set('session.use_only_cookies',0);
    ini_set('session.use_trans_sid',1);

    session_start();

    //START THE VIEW

?>

<html>
<head><title>NO COOKIES</title></head>
<body>
    <p>
    <b>NO COOKIES FOR YOU!!</b>
    </p>

    <p>
    <?php
        if(!isset($_SESSION['value']))
        {
            $_SESSION['value'] = 0;

            echo "SESSION CREATED";
        }

        else if($_SESSION['value'] < 3)
        {
            $_SESSION['value'] += 1;

            echo "ADDED ONE TO SESSION VALUE";
        }

        else {
            session_destroy();
            session_start();

            echo "SESSION STARTED";
        }
    ?>
    </p>
    
    <p><a href="NoCookies.php">CLICK THIS ANCHOR TAG!!</a></p>
    
    <p>
    <form action="NoCookies.php" method="post">
    <input type="submit" name="click" value="CLICK THIS SUBMIT BUTTON!">
    </form>
    </p>

    <p>
    OUR SESSION ID is : <?php echo(session_id()); ?> 
    </p>

    <pre>
    <?php
        print_r($_SESSION);
    ?>
    </pre>
</body>
</html>