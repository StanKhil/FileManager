<?php
session_start(); 
if (!isset($_SESSION["user"])) {
    header("Location: http://ikt11.liveblog365.com/Khil/02.04/");
    die();
}
$type = $_GET["type"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
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
            width: 50%;
        }
        .file {
            margin: 10px 0;
            padding: 10px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .file a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
            transition: color 0.3s;
        }
        .file a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Files</h1>
        <?php
            $dir = "uploads/" . htmlspecialchars($type) . "/";
            if (is_dir($dir)) {
                $files = scandir($dir);
                foreach ($files as $file) {
                    if ($file === "." || $file === "..") continue;
                    echo "<div class='file'><a href='http://ikt11.liveblog365.com/Khil/02.04/uploads/$type/$file' download>$file</a></div>";
                }
            } else {
                echo "<p>No files found in this category.</p>";
            }
        ?>
    </div>
</body>
</html>
