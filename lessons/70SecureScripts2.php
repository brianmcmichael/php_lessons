<?php

/* Prevent publicly displaying password by using post */
$name = $_POST['name'];
$password = $_POST['password'];

if (isset($_POST['send'])) {

    if (($name != "") || ($password != "")) {
        /* Fake code to insert values into database */
        echo "Inserting in Database...<p>Name: <b>" . $name . "</b><br />Password: <b>" . $password . "";
    } else {
        echo "You must type a name or password.";
    }
} else {
    echo "Not allowed.";
}