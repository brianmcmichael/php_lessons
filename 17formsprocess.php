<?php

//$name = $_POST['name']."<br />";
//$email = $_POST['email']."<br />";
//$address = $_POST['address']."<br />";
//$password =  $_POST['password']."<br />";
//$cpassword =  $_POST['confirmpassword']."<br />";

if($_POST['name']) {
    if($_POST['email'])    {
        if($_POST['address'])        {
            if($_POST['password'])            {
                if($_POST['confirmpassword'])                {
                    if($_POST['password'] == $_POST['confirmpassword'])                    {
                        echo "Your form has been sent successfully!";                    }
                    else                                                                 {
                        echo "Your password doesn't match";                    }
                }
                else                {
                    echo "You have to confirm your password";                }
            }
            else            {
                echo "You have to type a password";            }
        }
        else        {
            echo "You have to type an address";                                     }
    }
    else    {
        echo "You have to type an email";    }
}
else {
    echo "You have to type a name";
}
