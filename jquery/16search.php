<?php
/**
 * User: Brian
 * Date: 3/26/13
 * Time: 12:27 AM, 3/26/13, 2013
 */

$q = $_GET['term'];

mysql_connect("localhost", "root", "");
mysql_select_db("states");

$query = mysql_query("SELECT name FROM states WHERE name LIKE '$q%'");

$data = array();

while ($row = mysql_fetch_array($query)) {
    $data[] = array('value' => $row['name']);
}

echo json_encode($data);