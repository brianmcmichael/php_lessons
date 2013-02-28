<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if ($name && $email && $password && $cpassword) {

    if($password == $cpassword) {

        //using XAMPP, root ok.
        mysql_connect("localhost", "root", "") or die("We couldn't connect!");

        mysql_select_db("testsite");

        $username = mysql_query("SELECT name FROM users WHERE name='$name'");
        $count = mysql_num_rows($username);

        if($count != 0){
            include('links.php');
            die("This user already exists! Please type another name.");
        }

        mysql_query("INSERT INTO users(name, email, password) VALUES('$name','$email','$password')");

        echo "You have successfully registered.";

        mysql_close();

    }
    else{
        echo "Your passwords don't match";
    }
}
 else {
    echo "You have to complete the form.";
}



include('links.php');