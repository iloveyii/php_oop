<?php
/**
 * Created by PhpStorm.
 * User: talha
 * Date: 2015-12-26
 * Time: 12:18
 */

error_reporting(E_ALL);
ini_set('display_errors', 'On');

class ParentClass
{
    public function __construct()
    {
        echo 'Inside parent construct'.PHP_EOL;
        $this->show('this');
    }

    public static function show($who)
    {
        echo 'This is a PARENT function called by keyword ' .$who . PHP_EOL;
        echo '---------------------------------------------------' . PHP_EOL;
    }

    public static function which()
    {
        echo 'Inside parent which'.PHP_EOL;
        self::show('self');
        static::show('static');
    }
}

class ChildClass extends ParentClass
{
    public function __construct()
    {
        parent::__construct();

        echo 'Inside child construct'.PHP_EOL;
        $this->show('this');
    }

    public static function show($who)
    {
        echo 'This is a CHILD function called by keyword ' .$who . PHP_EOL;
        echo '---------------------------------------------------' . PHP_EOL;
    }

    public static function which()
    {
        parent::which();

        echo 'Inside child which'.PHP_EOL;
        self::show('self');
        static::show('static');
    }
}

new ChildClass();

ChildClass::which();
