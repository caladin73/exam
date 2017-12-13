<?php
// Assignment of an object
Class ObjectExample{
    public $foo="bar";
};

$objectVar = new ObjectExample();
$reference =& $objectVar;
$assignment = $objectVar;

//
// $objectVar --->+---------+
//                |(handle1)----+
// $reference --->+---------+   |
//                              |
//                +---------+   |
// $assignment -->|(handle1)----+
//                +---------+   |
//                              |
//                              v
//                  ObjectExample(1):foo="bar"
//



$objectVar = null;
print_r($objectVar);
print_r($reference);
print_r($assignment);

//
// $objectVar --->+---------+
//                |  NULL   |
// $reference --->+---------+
//
//                +---------+
// $assignment -->|(handle1)----+
//                +---------+   |
//                              |
//                              v
//                  ObjectExample(1):foo="qux"
?>