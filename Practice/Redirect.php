<?php

    /*ini_set('session.use_cookies','0');
    ini_set('session.use_only_cookies',0);
    ini_set('session.use_trans_sid',1);
    */
    session_start();

    if(isset($_POST['where'])){
        if($_POST['where'] == '1')
        {
            header("Location:Redirect.php");

            return;
        }

        else if($_POST['where'] == '2')
        {
            header("Location:practice1.php?user=shubham&password=2323");
            return;
        }

        else {
            header("Location:http://www.dr-chuck.com");
            return;
        }
    }

    echo "SESSION ID is : ".session_id()."<br>";

?>

<html>
<body>
    <p>I am ROUTER TWO ....</p>

    <form method = "post">
    <p><label for="inp9">Where to go(1-3)</label>
    <input type="text" id="inp9" name="where" size="6"></p>
    <input type="submit" />
    </form>
</body>
</html>