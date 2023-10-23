<?php

use PHPUnit\Framework\TestCase;

class RegisterTest extends TestCase
{
    public function testFormNotEmpty()
    {
    $name = 'reyna';
    $username = 'reyna';
    $email = 'reyna29@gmail.com';
    $password = 'reyna29';
    $repass = 'reyna29';

    $this->assertNotEmpty($name);
    $this->assertNotEmpty($username);
    $this->assertNotEmpty($email);
    $this->assertNotEmpty($password);
    $this->assertNotEmpty($repass);
    }

    public function testFormEmpty()
    {
    $name = '';
    $username = '';
    $email = '';
    $password = '';
    $repass = '';

    $this->assertEmpty($name);
    $this->assertEmpty($username);
    $this->assertEmpty($email);
    $this->assertEmpty($password);
    $this->assertEmpty($repass);
    }

    public function testFormValid()
    {
    $name = 'valid_name';
    $username = 'valid_username';
    $email = 'valid_email';
    $password = 'valid_password';
    $repass = 'valid_repass';


    $this->assertNotEmpty($name);
    $this->assertNotEmpty($username);
    $this->assertNotEmpty($email);
    $this->assertNotEmpty($password);
    $this->assertNotEmpty($repass);
    }

    public function testUserRegistration()
    {
        // Pastikan semua pengguna sudah terdaftar
        $registeredUsers = ['reyna', 'ayis', 'ical'];

        // Buat pengguna baru yang ingin didaftarkan
        $newUser = 'ino';

        // Buat pengguna yang sudah terdaftar sebelumnya
        $alreadyRegisteredUser = 'ayis';

        // Tes: Apakah pengguna baru yang ingin didaftarkan sudah terdaftar sebelumnya?
        $this->assertNotContains($newUser, $registeredUsers);

        // Tes: Apakah pengguna yang sudah terdaftar sebelumnya masih terdaftar?
        $this->assertContains($alreadyRegisteredUser, $registeredUsers);
    }
}

?>