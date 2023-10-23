<?php

namespace Tests\Unit\Models;
use App\Models\Register;
use PHPUnit\DbUnit\TestCase;

require_once 'D:\xampp\htdocs\rosi-080\register.php';

class RegistrationTest extends TestCase {
    protected $connection;

    public function getConnection() {
        $pdo = new PDO('mysql:host=localhost;dbname=fanclub_regristration', 'root', '');
        $this->connection = $this->createDefaultDBConnection($pdo);
        return $this->connection;
    }

    public function getDataSet() {
        return $this->createFlatXMLDataSet('path/to/your/test-data.xml');
    }

    public function testSuccessfulRegistration() {
        $pdo = $this->getConnection()->getConnection();
        $registration = new Registration($pdo);

        $result = $registration->registerUser("newuser", "password123");

        $this->assertTrue($result);

        // Perform assertions on the database state, e.g., check if the new user is in the database.
        $query = "SELECT * FROM users WHERE username = 'newuser'";
        $stmt = $pdo->query($query);
        $this->assertEquals(1, $stmt->rowCount());
    }
}

?>