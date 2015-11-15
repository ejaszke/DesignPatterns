<?php

namespace Singleton;

/**
 * Dog as an example of Singleton pattern
 * User: ed
 * Date: 06.11.15
 * Time: 18:05
 */
class Dog
{
    private static $instance;
    private $lent = false;

    protected function __construct()
    {
        throw new \Exception("Please use static accessor function ::getInstance");
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance= new Dog();
        }
        return self::$instance;
    }

    public function borrowMe()
    {
        if (!$this->lent) {
            $this->lent = true;
            print("lent!!\n");
            return true;
        } else {
            print ("It's already lent\n");
            return false;
        }
    }

    public function return(): bool
    {
        if ($this->lent) {
            $this->lent = false;
            print ("Thank you, you were the best lover I have ever had.\n");
            return true;
        } else {
            print("No, I am free, dont play with me with your dirty tricks\n");
            return false;
        }
    }

}





