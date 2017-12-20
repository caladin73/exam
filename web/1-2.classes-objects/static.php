<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 20-12-2017
 * Time: 17:32
 */

class Foo
{
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public function fooStatic() {
        return parent::$my_static;
    }
}


print Foo::$my_static . "<br>";

$foo = new Foo();
print $foo->staticValue() . "<br>";
//print $foo->my_static . "<br>";      // Undefined "Property" my_static

print $foo::$my_static . "<br>";
$classname = 'Foo';
print $classname::$my_static . "<br>"; // As of PHP 5.3.0

print Bar::$my_static . "<br>";
$bar = new Bar();
print $bar->fooStatic() . "<br>";

?>