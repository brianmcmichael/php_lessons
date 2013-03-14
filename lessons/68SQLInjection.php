<?php

$name = $_POST['name'];
// using mysql_real_escape_string will protect from injection use with newer php versions
$password = mysql_real_escape_string(($_POST['password']));

//adding trim will clear whitespace
$trimmed = mysql_real_escape_string(trim($_POST['trimmedthing']));

