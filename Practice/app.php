<html>
<body>

    <p>LOGGED IN SUCCESSFULLY</P>


    <?php

    session_start();

    if(isset($_SESSION["error"]))
    {
        echo "error";
        unset($_SESSION["error"]);
    }

    if(isset($_SESSION["success"]))
    {
        echo "Success";
        unset($_SESSION["success"]);
    }

    var_dump($_SESSION);

?>


</body>
</html>