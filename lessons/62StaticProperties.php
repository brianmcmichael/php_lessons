<?php
/**
 * User: Brian
 * Date: 3/12/13
 * Time: 11:30 PM, 3/12/13, 2013
 */

class MyClass
{

    static $var = 1;

    public function result()
    {
        echo self::$var;
    }

    static function test()
    {
        echo "Brian!";
    }

    static function result2()
    {
        echo "My name is ";
        self::test();
    }
}

$c = new MyClass();
$c->result();

echo "<br />";

MyClass::result2();