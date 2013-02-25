<?php

    //$connect = mysql_connect("127.0.0.1", "login", "password");

    //Variable scopes
    $x =  1;            /* global scope */

    function test() {
        $x = 2;
        echo $x;
    }

    test();
