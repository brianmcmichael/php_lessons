<?php

if (!isset($_SESSION['name']) && isset($_COOKIE['testsite'])) {
    $_SESSION['name'] = $_COOKIE['testsite'];
}

$dir = "./profiles/" . $_SESSION['name'] . "/images";
$open = opendir($dir);

while (($file = readdir($open)) != false) {
    if ($file != "." && $file != ".." && $file != "Thumbs.db") {
        echo  "<img border'2' width='50' height='50' src='$dir/$file'>";
    }
}

echo "&nbsp<b>" . $_SESSION['name'] . "'s</b> session<br /><a href='logout.php'>Logout<a>";

include('links.php');
