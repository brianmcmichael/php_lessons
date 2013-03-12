<?php
/**
 * User: Brian
 * Date: 3/4/13
 * Time: 11:35 PM, 3/4/13, 2013
 */

session_start();
$expire = time() - 86400;
setcookie('testsite', $_SESSION['name'], $expire);
session_destroy();
echo "Session destroyed!";
header("Refresh:1; url=home.php");
