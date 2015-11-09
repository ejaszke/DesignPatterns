<?php

namespace Singleton\Tests;

use Singleton\Dog;


$dog = Dog::borrowMe();
$dog2 = Dog::borrowMe();
$dog->return();
$dog2 = Dog::borrowMe();
