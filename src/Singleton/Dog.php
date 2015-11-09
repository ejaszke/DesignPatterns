<?php

namespace Singleton;

/**
 * Dog
 * User: ed
 * Date: 06.11.15
 * Time: 18:05
 */
class Dog
{
    private static $instance;
    private $lent = false;
    private $age = 7;

    private static function getInstance()
    {
        if (!self::$instance) {
            self::$instance= new Dog();
        }
        return self::$instance;
    }

    public function getAge(integer $test): int
    {
	    return $this->age;

    }

    public static function borrowMe()
    {
        $dog = self::getInstance();

        if (!$dog->lent) {
            $dog->lent = true;
            print("hurra, its awsome!!\n");
            return $dog;
        } else {
            print ("shit, I am busy at the moment\n");
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
            return 2;
        }
    }

}





