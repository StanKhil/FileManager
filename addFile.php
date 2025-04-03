<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: http://ikt11.liveblog365.com/Khil/02.04/");
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/" . $_POST["type"]."/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;


if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}


if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузка файла</title>
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
        input, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Загрузить файл</h1>
        <form method="POST" enctype="multipart/form-data">
            <label for="file">Выберите файл:</label>
            <input type="file" name="fileToUpload" id="file" required><br>

            <label for="type">Выберите тип:</label>
            <select name="type" id="type">
                <option value="txt">Text File (txt)</option>
                <option value="img">Image File (img)</option>
                <option value="other">Other File</option>
            </select><br>

            <input type="submit" value="Загрузить файл">
        </form>
    </div>
</body>
</html>