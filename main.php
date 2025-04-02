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

    </style>
</head>

<body>
    <h1>Content</h1>
    <a href="http://ikt11.liveblog365.com/Khil/02.04/addFile.php">Add File</a><br/>

    <a href="http://ikt11.liveblog365.com/Khil/02.04/viewFiles.php?type=txt">Txt</a><br/>
    <a href="http://ikt11.liveblog365.com/Khil/02.04/viewFiles.php?type=img">Img</a><br/>
    <a href="http://ikt11.liveblog365.com/Khil/02.04/viewFiles.php?type=oth">Other</a><br/>
</body>
</html>
