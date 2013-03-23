<?php
/**
 * User: Brian
 * Date: 3/22/13
 * Time: 11:32 PM, 3/22/13, 2013
 */

$name = $_POST['phpname'];
$password = $_POST['phppassword'];

if($name && $password){
    echo "You are logged in!";
}   else {
    echo "You have to type a name and password!";
}