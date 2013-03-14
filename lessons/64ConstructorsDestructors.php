<?php
/**
 * User: Brian
 * Date: 3/12/13
 * Time: 11:55 PM, 3/12/13, 2013
 */

class Test{


    function __construct($x, $y){
        echo "Hello $x and $y!";
    }

    function __destruct(){
        echo "Destruct";
    }
}
$c = new Test("Brian", "Moar Brian");
unset($c);