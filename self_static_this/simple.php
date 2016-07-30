<?php
/**
 * Difference between self and static
 * User: Hazrat Ali
 * Email: iloveyii@yahoo.com
 * Date: 2016-07-31
 */
class ParentClass
{
    public static function which()
    {
        echo 'I am a parent class' . PHP_EOL;
    }

    public static function test()
    {
        self::which();
        static::which();
    }
}

class ChildClass extends ParentClass
{
    public static function which()
    {
        echo 'I am a child class' . PHP_EOL;
    }
}

ChildClass::test();