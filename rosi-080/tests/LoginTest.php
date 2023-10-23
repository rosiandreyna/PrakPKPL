<?php

use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function testUsernameAndPasswordNotEmpty()
    {
    $username = 'reyna';
    $password = 'reyna29';

    $this->assertNotEmpty($username);
    $this->assertNotEmpty($password);
    }

    public function testUsernameAndPasswordEmpty()
    {
    $username = '';
    $password = '';

    $this->assertEmpty($username);
    $this->assertEmpty($password);
    }

    public function testUsernameAndPasswordValid()
    {
    $username = 'valid_username';
    $password = 'valid_password';

    $this->assertNotEmpty($username);
    $this->assertNotEmpty($password);
    }
}

?>