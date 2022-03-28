<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Users\Users;

class UserTests extends TestCase
{

    private static Users $user;

    public static function setUpBeforeClass(): void
    {
        self::$user = new Users();
        self::$user->setEmail("mohamed@gmail.com");
        self::$user->setName("Mohamed");
        parent::setUpBeforeClass(); // TODO: Change the autogenerated stub
    }

    public function testGetUserName()
    {
        $this->assertTrue(self::$user->getName() == "Mohamed");
    }
}