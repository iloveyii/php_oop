<?php
/**
 * Created by PhpStorm.
 * User: Hazrat Ali
 * Date: 2015-12-29
 * Time: 10:06
 */

class A
{

}

class B
{

}

class Singleton
{
    /**
     * @var Singleton
     */
    protected static $instance;

    /**
     * @var A
     */
    protected $a;

    /**
     * @var B
     */
    protected $b;

    public function __construct(A $a, B $b)
    {
        $this->a = $a;
        $this->b = $b;
        echo 'Instance initialized' . PHP_EOL;
    }

    /**
     * @return Singleton|static
     */
    public static function init()
    {
        if(isset(self::$instance)) {
            return self::$instance;
        }

        $a = new A;
        $b = new B;

        $singleton = new static($a, $b);
        self::$instance = $singleton;

        return self::$instance;
    }

    /**
     * @param Singleton $instance
     */
    public static function setInstance(Singleton $instance)
    {
        self::$instance = $instance;
    }

    /**
     * @return Singleton
     */
    public static function instance ()
    {
        return self::$instance;
    }

}

/** TEST DRIVE */

// as object
echo 'As object:' . PHP_EOL;
$object = new Singleton(new A, new B);
$object = new Singleton(new A, new B);

// as singleton
echo 'As singleton:' . PHP_EOL;
Singleton::init();
Singleton::init();