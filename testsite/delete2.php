<?php
/**
 * User: Brian
 * Date: 2/27/13
 * Time: 11:24 PM, 2/27/13, 2013
 */

mysql_connect("localhost", "root", "") or die("Problem with connection.");

mysql_select_db("testsite");

$result = mysql_query("DELETE FROM users WHERE id='" . $_REQUEST['id'] . "'");

echo "The user hs been deleted successfully!";

mysql_close();

include('links.php');