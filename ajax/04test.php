<?php
/**
 * User: Brian
 * Date: 3/20/13
 * Time: 11:35 PM, 3/20/13, 2013
 */

$name = $_GET['name'];
$password = $_GET['password'];

if ($name && $password) {
    mysql_connect("localhost", "root", "") or die ("Problem with connection.");
    mysql_select_db("testlogin");
    $query = mysql_query("SELECT * FROM users WHERE username='" . $name . "'");
    $numrows = mysql_num_rows($query);

    if ($numrows != 0) {
        while ($row = mysql_fetch_assoc($query)) {
            $dbname = $row['username'];
            $dbpassword = $row['password'];
        }
        if ($name == $dbname) {
            if ($password == $dbpassword) {
                echo "You are in!";
            } else {
                echo "Your password is incorrect";
            }
        } else {
            echo "Your name is incorrect!";
        }
    } else {
        echo "You need to enter a username and password!";
    }

} else {
    echo "You have to type a username and password.";
}
