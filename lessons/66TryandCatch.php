<?php
/**
 * User: Brian
 * Date: 3/14/13
 * Time: 12:08 AM, 3/14/13, 2013
 */

$num = 10;

try {
    if ($num > 15) {
        echo "Number is bigger than 15!";
    } else {
        throw new Exception('Number is less than 15!');
    }
} catch (Exception $er) {
    echo 'Error: ' . $er->getMessage();
}
