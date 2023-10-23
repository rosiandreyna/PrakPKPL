<?php

use PHPUnit\Framework\TestCase;

class RegisterTest extends TestCase
{
    public function testRegisterUser()
    {
        // Set up your test database and insert test data here

        // Perform your registration operation
        $username = 'test_user';
        $name = 'Test User';
        $email = 'test@user.com';
        $password = 'test_password';
        $repassword = 'test_password';

        // Mock your validation functions
        $db = $this->createMock(PDO::class);
        $db->method('prepare')->willReturn($this->createMock(PDOStatement::class));

        // Replace this line with the actual code that checks if the username already exists
        $this->assertFalse(cek_nama($username, $db));

        // Perform the registration operation and check if it succeeded
        $result = registerUser($username, $name, $email, $password, $repassword, $db);
        $this->assertTrue($result);
    }

    function cek_nama($username,$db){
        $nama = mysqli_real_escape_string($db, $username);
        $query = "SELECT * FROM users WHERE username = '$nama'";
        if( $result = mysqli_query($db, $query) ) 
            return mysqli_num_rows($result);
    }
}

?>