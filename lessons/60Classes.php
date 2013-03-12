<?php
/**
 * User: Brian
 * Date: 3/12/13
 * Time: 12:08 AM, 3/12/13, 2013
 */

class MyClass {

    public $hello = "hello world";

    public function result() {
        echo $this->hello;
    }

}

$objectMyClass = new MyClass();

$objectMyClass->result();