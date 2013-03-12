<!-- Page rendered obsolete by enter.php -->

<?php

session_start();

if (!isset($_SESSION['name'])) {
    echo "Access Denied";
    exit;
} else {
    include("session.php");
    include('links.php');
}

?>
