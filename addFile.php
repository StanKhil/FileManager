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
</head>
<body>

<h1>Загрузить файл</h1>
<form method="POST" enctype="multipart/form-data">
    <label for="file">Выберите файл:</label>
    <input type="file" name="fileToUpload" id="file" required><br><br>

    <label for="type">Выберите тип:</label>
    <select name="type" id="type">
        <option value="txt">Text File (txt)</option>
        <option value="img">Image File (img)</option>
        <option value="other">Other File</option>
    </select><br><br>

    <input type="submit" value="Загрузить файл">
</form>

</body>
</html>

