<?php
/**
 * User: Brian
 * Date: 3/24/13
 * Time: 10:28 PM, 3/24/13, 2013
 */

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$list = array('name' => $username, 'password' => $password);

$c = json_encode($list);

echo $c;