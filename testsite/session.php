<?php
/**
 * User: Brian
 * Date: 3/5/13
 * Time: 12:45 AM, 3/5/13, 2013
 */


if(!isset($_SESSION['name'])) {
    echo "Not a session";
}
else {
    echo "<b>".$_SESSION['name']."'s</b> session<br /><a href='logout.php'>Logout<a><hr />";
}
