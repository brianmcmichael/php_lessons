<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if ($name && $email && $password && $cpassword) {

    if (preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",$email)) {

        if(strlen($password)>3) {

            if ($password == $cpassword) {

                //using XAMPP, root ok.
                mysql_connect("localhost", "root", "") or die("We couldn't connect!");

                mysql_select_db("testsite");

                $username = mysql_query("SELECT name FROM users WHERE name='$name'");
                $count = mysql_num_rows($username);
                $remail = mysql_query("SELECT email FROM users WHERE email='$email'");
                $checkemail =  mysql_num_rows($remail);

                if ($count != 0) {

                    echo "This name is already registered! Please type another name";
                }
                elseif ($checkemail != 0) {

                    echo "This email is already registered! Please type another name";
                }
                else{
                    mysql_query("INSERT INTO users(name, email, password) VALUES('$name','$email','$password')");

                    echo "You have successfully registered.";
                }

                mysql_close();

            } else {
                echo "Your passwords don't match";
            }

        } else {
            echo "Your password is too short. You need to type a password between 4 and 15 characters.";
        }
    }
    else {
            echo "Please type a valid email.";
    }


} else {
    echo "You have to complete the form.";
}


include('links.php');