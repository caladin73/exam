<?php

//class foo

class Foo {
    public $aMemberVar = 'aMemberVar Member Variable';
    public $aFuncName = 'aMemberFunc';
    private $beskyttet = 'privat';


    function aMemberFunc() {
        print 'Inside `aMemberFunc()`'. "<br><br>";
    }

/*
 * to access object from inside the class, we can use the -> operator
 */





}


/*
to access objects property, from outside the class, we can use the -> operator
$object->methodName();
*/

$foo = new Foo;
$foo->aMemberFunc();


//You can access member variables in an object using another variable as name:

$element = 'aMemberVar';
print $foo->$element. "<br><br>"; // prints "aMemberVar Member Variable"






//or use functions:
function getVarName()
    {
        return 'aMemberVar';
    }

print $foo->{getVarName()}; // prints "aMemberVar Member Variable"



?>