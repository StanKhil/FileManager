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
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #007BFF;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
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


