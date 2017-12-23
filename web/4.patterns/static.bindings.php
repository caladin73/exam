<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 23-12-2017
 * Time: 04:45
 */

//child class to B
class A {
    //
    public static function foo() {
        static::who();
    }

    public static function who() {
        echo __CLASS__."<br>";
    }
}

//parrent class to A and child class to C
class B extends A {
    public static function test() {
        A::foo();
        parent::foo();
        self::foo();
    }

    public static function who() {
        echo __CLASS__."<br>";
    }
}
//parrent class to B
class C extends B {
    public static function who() {
        echo __CLASS__."<br>";
    }
}

//A::foo(); //displays A
//A::who(); //displays A
//A::test(); //can't do

//B::test(); //displays A, B and B, first is class A due to A:: and last two is B due to parrent and self
//B::who(); //displays B, due to it takes its own class with __CLASS__

//C::test(); //displays A, B and B, due to it is parrent to B and have access to function test, as above
//C::who(); //displays C its own class


?>
