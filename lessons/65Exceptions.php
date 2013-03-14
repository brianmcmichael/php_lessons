<?php
/**
 * User: Brian
 * Date: 3/14/13
 * Time: 12:00 AM, 3/14/13, 2013
 */

function calc($num1,$num2){

    if($num2 == 0){
        throw new Exception('Can\'t divide by zero!');
    }   else {
        return $num1/$num2;
    }  }

    echo calc(10, 0);

