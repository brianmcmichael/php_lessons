<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if ($name && $email && $password) {
    //using XAMPP, root ok.
    mysql_connect("localhost", "root", "") or die("We couldn't connect!");

    mysql_select_db("testsite");

    mysql_query("INSERT INTO users(name, email, password) VALUES('$name','$email','$password')");

    $registered = mysql_affected_rows();
    echo "$registered row was inserted";

} else {
    echo "You have to complete the form.";
}

mysql_close();

include('links.php');