<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 20-12-2017
 * Time: 17:32
 */

class test
{
    public static $a;//Static variable
}
test::$a = 5;
echo test::$a;

?>