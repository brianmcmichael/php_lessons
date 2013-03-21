<?php
/**
 * User: Brian
 * Date: 3/20/13
 * Time: 10:22 PM, 3/20/13, 2013
 */

$msg = array(
    "text" => "Hi Brian!",
    "date" => "Wednesday 20th March 2013"
);

$mymsg = json_encode($msg);

echo $mymsg;
