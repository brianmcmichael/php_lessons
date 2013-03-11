<?php
/**
 * User: Brian
 * Date: 3/5/13
 * Time: 12:45 AM, 3/5/13, 2013
 */


if (!isset($_SESSION['name'])) {
    echo "Not a session";
} else {
    $dir = "./profiles/" . $_SESSION['name'] . "/images";
    $open = opendir($dir);

    while (($file = readdir($open)) != false) {
        if ($file != "." && $file != ".." && $file != "Thumbs.db") {
            echo  "<img border'2' width='50' height='50' src='$dir/$file'>";
        }
    }

    echo "&nbsp<b>" . $_SESSION['name'] . "'s</b> session<br /><a href='logout.php'>Logout<a><hr />";
}
