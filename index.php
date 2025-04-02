<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        session_start();
        $username = $_POST["login"];
        $password = $_POST["pass"];
        $db = fopen("users.txt", "r") or die("Unable to open file!");
        $i=0;
        while(!feof($db)){
            $usernamedb = fgets($db);
            $userpassdb = fgets($db);
            if(trim($usernamedb) == trim($username) && trim($userpassdb) == trim($password)){
                $_SESSION["user"] = $username;
                header("Location: http://ikt11.liveblog365.com/Khil/02.04/main.php");
                die();

            }
        }
        fclose($db);
    }

?>


<!DOCTYPE html>
<html> 
<head>
    <style>
        
    </style>
</head>
<body>
    <form method="POST">
        <label> Login:</label>
        <input name="login"/>
        <label> Password:</label>
        <input name="pass"/>
        <button type="submit">Login</button>
    </form>
</body>
</html>


