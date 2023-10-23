<?php

use PHPUnit\Framework\TestCase;
use YourApp\Repository\MemberRepository;
use YourApp\Model\Member;

class MemberRepositoryTest extends TestCase
{
    private $memberRepository;

    protected function setUp(): void
    {
        $this->memberRepository = new MemberRepository();
    }

    public function testCreateMember()
    {
        $member = new Member();
        $member->setName('reyna');
        $member->setAge('22');
        $member->setPhoneNumber('082236377225');
        $member->setGender('female');
        $member->setNationality('Indonesia');
        $member->setAddress('Malang');
        $member->setMembershipType('Exclusive content');
        $member->setMembershipPeriod('1 Year');

        $this->assertEquals($member, $this->memberRepository->createMember($member));
    }

    public function testGetMember()
    {
        $member = $this->memberRepository->getMember(1);

        $this->assertInstanceOf(Member::class, $member);
        $this->assertEquals('reyna', $member->getName());
        $this->assertEquals('22', $member->getAge());
        $this->assertEquals('082236377225', $member->getPhoneNumber());
        $this->assertEquals('female', $member->getGender());
        $this->assertEquals('Indonesia', $member->getNationality());
        $this->assertEquals('Malang', $member->getAddress());
        $this->assertEquals('Exclusive content', $member->getMembershipType());
        $this->assertEquals('1 Year', $member->getMembershipPeriod());
    }

    public function testUpdateMember()
    {
        $member = $this->memberRepository->getMember(1);
        $member->setName('ayis');

        $this->assertEquals($member, $this->memberRepository->updateMember($member));
    }

    public function testDeleteMember()
    {
        $this->assertTrue($this->memberRepository->deleteMember(1));
    }
}

?>