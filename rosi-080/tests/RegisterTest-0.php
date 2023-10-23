<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
require_once 'D:\xampp\htdocs\rosi-080\register.php';

class RegisterTest extends TestCase
{
    public function testRegisterUser()
{
    // Assuming you have a function called 'registerUser' in your Register class
    $register = new Register();
    $result = $register->registerUser('test@example.com', 'testpassword');

    // Assert that the registration was successful
    $this->assertTrue($result);
}
    public function testRegisterSuccess()
    {
        $name = 'John Doe';
        $username = 'johndoe';
        $email = 'johndoe@example.com';
        $password = 'password';
        $repass = 'password';

        $this->assertTrue(register($name, $username, $email, $password, $repass));
    }

    public function testRegisterFailEmptyFields()
    {
        $name = '';
        $username = '';
        $email = '';
        $password = '';
        $repass = '';

        $this->assertFalse(register($name, $username, $email, $password, $repass));
    }

    public function testRegisterFailPasswordNotMatch()
    {
        $name = 'John Doe';
        $username = 'johndoe';
        $email = 'johndoe@example.com';
        $password = 'password';
        $repass = 'password1';

        $this->assertFalse(register($name, $username, $email, $password, $repass));
    }

    public function testRegisterFailUsernameExists()
    {
        $name = 'John Doe';
        $username = 'johndoe';
        $email = 'johndoe@example.com';
        $password = 'password';
        $repass = 'password';

        register($name, $username, $email, $password, $repass);

        $this->assertFalse(register($name, $username, $email, $password, $repass));
    }

    public function register($name, $username, $email, $password, $repass)
    {
        // Mocking the database connection
        $db = $this->createMock(\mysqli::class);

        // Mocking the query execution
        $db->expects($this->once())
            ->method('query')
            ->with($this->equalTo("INSERT INTO users (username,name,email, password ) VALUES ('$username','$name','$email','$password')"))
            ->willReturn(true);

        // Mocking the function cek_nama
        $db->method('cek_nama')
            ->with($this->equalTo($username))
            ->willReturn(false);

        // Mocking the function cek_email
        $db->method('cek_email')
            ->with($this->equalTo($email))
            ->willReturn(false);

        // Call the register function with the mocked database connection
        $result = $this->register($db, $name, $username, $email, $password, $repass);

        // Assert that the register function returns true
        $this->assertTrue($result);
    }   
}

?>