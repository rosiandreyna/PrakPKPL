<?php

class User
{
    public $id;
    public $name;
    public $email;

    public function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
}

class UserRepository
{
    private $users = [];

    public function getUsers()
    {
        return $this->users;
    }

    public function getUser($id)
    {
        return isset($this->users[$id]) ? $this->users[$id] : null;
    }

    public function addUser($user)
    {
        $this->users[$user->id] = $user;
    }

    public function updateUser($id, $user)
    {
        if (isset($this->users[$id])) {
            $this->users[$id] = $user;
        }
    }

    public function deleteUser($id)
    {
        unset($this->users[$id]);
    }
}

class cona extends PHPUnit\Framework\TestCase
{
    public function testGetUsers()
    {
        $repo = new UserRepository();
        $this->assertEmpty($repo->getUsers());
    }

    public function testGetUser()
    {
        $repo = new UserRepository();
        $user = new User(1, 'John Doe', 'john.doe@example.com');
        $repo->addUser($user);

        $this->assertEquals($user, $repo->getUser(1));
        $this->assertNull($repo->getUser(2));
    }

    public function testAddUser()
    {
        $repo = new UserRepository();
        $user = new User(1, 'John Doe', 'john.doe@example.com');
        $repo->addUser($user);

        $this->assertEquals([1 => $user], $repo->getUsers());
    }

    public function testUpdateUser()
    {
        $repo = new UserRepository();
        $user = new User(1, 'John Doe', 'john.doe@example.com');
        $repo->addUser($user);

        $user2 = new User(1, 'Jane Doe', 'jane.doe@example.com');
        $repo->updateUser(1, $user2);

        $this->assertEquals([1 => $user2], $repo->getUsers());
    }

    public function testDeleteUser()
    {
        $repo = new UserRepository();
        $user = new User(1, 'John Doe', 'john.doe@example.com');
        $repo->addUser($user);

        $repo->deleteUser(1);
        $this->assertEmpty($repo->getUsers());
    }
}

?>