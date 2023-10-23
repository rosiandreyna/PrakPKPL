<?php

class Member
{
    public $id;
    public $name;
    public $age;
    public $phoneNumber;
    public $gender;
    public $nationality;
    public $address;
    public $membershipType;
    public $membershipPeriod;

    public function __construct($id, $name, $age, $phoneNumber, $gender, $nationality, $address, $membershipType, $membershipPeriod)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->phoneNumber = $phoneNumber;
        $this->gender = $gender;
        $this->nationality = $nationality;
        $this->address = $address;
        $this->membershipType = $membershipType;
        $this->membershipPeriod = $membershipPeriod;


    }
}

class MemberRepository
{
    private $members = [];

    public function getMembers()
    {
        return $this->members;
    }

    public function getMember($id)
    {
        return isset($this->members[$id]) ? $this->members[$id] : null;
    }

    public function addMember($member)
    {
        $this->members[$member->id] = $member;
    }

    public function updateMember($id, $member)
    {
        if (isset($this->members[$id])) {
            $this->members[$id] = $member;
        }
    }

    public function deleteMember($id)
    {
        unset($this->members[$id]);
    }
}

class MemberRepositoryTest extends PHPUnit\Framework\TestCase
{
    public function testGetMembers()
    {
        $repo = new MemberRepository();
        $this->assertEmpty($repo->getMembers());
    }

    public function testGetMember()
    {
        $repo = new MemberRepository();
        $member = new Member(1, 'reyna', '22', '082236377225', 'female', 'Indonesia', 'Malang', 'Exclusive content', '1 Year');
        $repo->addMember($member);

        $this->assertEquals($member, $repo->getMember(1));
        $this->assertNull($repo->getMember(2));
    }

    public function testAddMember()
    {
        $repo = new MemberRepository();
        $member = new Member(1, 'reyna', '22', '082236377225', 'female', 'Indonesia', 'Malang', 'Exclusive content', '1 Year');
        $repo->addMember($member);

        $this->assertEquals([1 => $member], $repo->getMembers());
    }

    public function testUpdateMember()
    {
        $repo = new MemberRepository();
        $member = new Member(1, 'reyna', '22', '082236377225', 'female', 'Indonesia', 'Malang', 'Exclusive content', '1 Year');
        $repo->addMember($member);

        $member2 = new Member(1, 'ayis', '23', '082212345678', 'male', 'Indonesia', 'Malang', 'Exclusive content', '6 Months');
        $repo->updateMember(1, $member2);

        $this->assertEquals([1 => $member2], $repo->getMembers());
    }

    public function testDeleteMember()
    {
        $repo = new MemberRepository();
        $member = new Member(1, 'reyna', '22', '082236377225', 'female', 'Indonesia', 'Malang', 'Exclusive content', '1 Year');
        $repo->addMember($member);

        $repo->deleteMember(1);
        $this->assertEmpty($repo->getMembers());
    }
}

?>