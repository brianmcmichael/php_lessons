<?php
/**
 * User: Brian
 * Date: 3/12/13
 * Time: 11:43 PM, 3/12/13, 2013
 */

class Constants
{
    const RED = "#FF0000";
    const Hello = "Hello!";

    function output()
    {
        echo self::RED;
    }


}

$c = new Constants();
$c->output();

echo "<br />" . Constants::Hello;