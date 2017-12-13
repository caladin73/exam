<?php
class Foo {
    public $aMemberVar = 'aMemberVar Member Variable';
    public $aFuncName = 'aMemberFunc';


    function aMemberFunc() {
        print 'Inside `aMemberFunc()`';
    }
}

$foo = new Foo;


//You can access member variables in an object using another variable as name:
$element = 'aMemberVar';
print '<B>object method: </B>'. $foo->$element; // prints "aMemberVar Member Variable"


echo '<br><br>';

//or use functions:
function getVarName(){
    return 'aMemberVar';
    }

print  '<B>funktion method </B>:'. $foo->{getVarName()}; // prints "aMemberVar Member Variable"







?>