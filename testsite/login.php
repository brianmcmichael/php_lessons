<?php
/**
 * User: Brian
 * Date: 3/1/13
 * Time: 11:09 PM, 3/1/13, 2013
 */

$name = $_POST['name'];
$password = $_POST['password'];

if($name && $password){
    mysql_connect("localhost", "root", "") or die("Problem with connection.");
    mysql_select_db("testsite");

    $query = mysql_query("SELECT * FROM users WHERE name='$name'");
    $numrows = mysql_num_rows($query);

    if($numrows != 0) {
        while($row = mysql_fetch_assoc($query)){
            $dbname = $row['name'];
            $dbpassword = $row['password'];
        }
        if($name==$dbname){
            if($password==$dbpassword){
                header("location: users.php");
            } else {
                echo "Your password is incorrect!";
            }
        } else {
            echo "Your name is incorrect!";
        }
    } else {
        echo "This name is not registered!";
    }
}  else {
    echo "You have to type a name and password!";
}