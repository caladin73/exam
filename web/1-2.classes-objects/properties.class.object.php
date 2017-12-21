<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 21-12-2017
 * Time: 06:04
 */

class exampleClass
{
    public static $foo;
    public $bar;

    public static function staticFunction()
    {
        echo self::$foo;
    }

    public function regularFunction()
    {
        echo $this->bar;
    }

/*
    public static function anotherStatFn()
    {
        self::staticFunction();
    }

    public function regularFnUsingStaticVar()
    {
        echo self::$foo;
    }
*/
    // NOTE: As of PHP 5.3 using $this::$bar instead of self::$bar is allowed
}

// static method
exampleClass::$foo = "Hello";
exampleClass::staticFunction(); /* prints Hello */

// regular method as $obj->bar
$obj = new exampleClass();
$obj->bar = "World!";
$obj->regularFunction(); /* prints World! */