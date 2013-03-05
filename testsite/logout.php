<?php
/**
 * User: Brian
 * Date: 3/4/13
 * Time: 11:35 PM, 3/4/13, 2013
 */

session_start();
session_destroy();

echo "Session destroyed!";
header("Refresh:3; url=home.php");
