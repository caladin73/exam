<?php
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
}

/** static method self:: */
exampleClass::$foo = "Hello";
exampleClass::staticFunction(); /** prints Hello */

/** regular method as $obj->bar, by creating and instance */
$obj = new exampleClass();
$obj->bar = "World!";
$obj->regularFunction(); /** prints World! */

/** NOTE: As of PHP 5.3 using $this::$bar instead of self::$bar is allowed */