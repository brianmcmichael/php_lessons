<?php
/**
 * User: Brian
 * Date: 3/12/13
 * Time: 12:08 AM, 3/12/13, 2013
 */

class MyClass
{
    public $hello1 = "hello world public";
    protected $hello2 = "hello world protected";
    private $hello3 = "hello world private";

    public function result()
    {
        echo $this->hello3;
    }
}

class MyClass2 extends MyClass
{
    public function result()
    {
        echo $this->hello1;
    }
}

$objectMyClass = new MyClass();

$objectMyClass->result();