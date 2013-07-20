<?php

namespace Meytip\UserBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\Doctrine;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Meytip\UserBundle\Entity\User;

class UserFixtures extends AbstractFixture implements  OrderedFixtureInterface {


    function load(ObjectManager $manager)
    {
       $user = new User();
       $user->setEmail('daniele@mymail.it');
       $user->setPassword('daniele');
       $user->setEnabled(true);
       $user->setUsername('erlangb');
       $manager->persist($user);
       $this->addReference('user1', $user);

       $user = new User();
       $user->setEmail('andrea@mymail.it');
       $user->setPassword('andrea');
       $user->setEnabled(true);
       $user->setUsername('andrea');
       $manager->persist($user);
       $this->addReference('user2', $user);


       $manager->flush();
    }

    function getOrder()
    {
        return 1;
    }
}