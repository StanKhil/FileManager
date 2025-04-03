<?php
session_start();
if (isset($_GET['type'])) {
    $_SESSION["type"] = $_GET['type'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        a {
            display: block;
            margin: 10px 0;
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
            transition: color 0.3s;
        }
        a:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Content</h1>
        <a href="http://ikt11.liveblog365.com/Khil/02.04/addFile.php">Add File</a>
        <a href="http://ikt11.liveblog365.com/Khil/02.04/viewFiles.php?type=txt">Txt</a>
        <a href="http://ikt11.liveblog365.com/Khil/02.04/viewFiles.php?type=img">Img</a>
        <a href="http://ikt11.liveblog365.com/Khil/02.04/viewFiles.php?type=oth">Other</a>
    </div>
</body>
</html>
