<?php

require_once 'user.class.php';
require_once 'some/user.class.php';
require_once 'some/another/user.class.php';

use oop\User as user;
use oop\some\User as user2;
use oop\some\another\User as user3;



$user = new user;
$user1 = new user2;
$user2 = new user3;

echo $user->get();
echo $user1->get();
echo $user2->get();