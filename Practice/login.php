<?php
    session_start();

    if(isset($_POST["account"]) && isset($_POST["pw"]))
    {
        unset($_SESSION["account"]);    //Logout the current user
        
        if($_POST['pw'] == 'umsi')
        {
            $_SESSION["account"] = $_POST["account"];
            $_SESSION["success"] = "Logged In";

            header('Location:app.php');
            return;
        }

        else 
        {
            $_SESSION["error"] = "Incorrect Password";

            header('Location:login.php');
            return;
        }
    }

?>

<html>
<body>
<?php
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

?>

<form method="post">
<p>Account : <input type="text" name="account" value=""></p>

<p>Password : <input type="password" name="pw" value=""></p>

<p><input type="submit" value="Log In">

<a href="app.php">Cancel</a> </p>

</form>
</body>
</html>