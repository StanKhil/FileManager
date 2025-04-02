<?php
session_start(); 
if(!isset($_SESSION["user"])){
    header("Location: http://ikt11.liveblog365.com/Khil/02.04/");
    die();
}
$type = $_GET["type"];
echo $type;
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Files</h1>
    <?
        $dir = "uploads/" . $type . "/";
        $files = scandir($dir);
        foreach($files as $file){
            if($file === "." || $file === "..")continue;
            echo "<div class = 'file'><a href='http://ikt11.liveblog365.com/Khil/02.04/uploads/$type/$file' download>$file</a></div>";
        }
    ?>
</body>
</html>

