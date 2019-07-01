<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user1 = newUser();
        $user1 -> setUsername("Daniel");
        $user1 -> setEmail("danieldu35@hotmail.com");
        $user1 -> setPassword("1234");
        $user1 -> setRoles(true);
        $manager->persist($user1);
        $this->setReference("User1",$user1);

        $user2 = newUser();
        $user2 -> setUsername("Fabien");
        $user2 -> setEmail("fabien01@hotmail.com");
        $user2 -> setPassword;
        $user2 -> setRoles(false);
        $manager->persist($user2);
        $this->setReference("User2",$user2);

        $user3 = newUser();
        $user3 -> setUsername("Nicolas");
        $user3 -> setEmail("nicolas88@hotmail.com");
        $user3 -> setPassword("1234");
        $user2 -> setRoles(false);
        $manager->persist($user3);
        $this->setReference("User3",$user3);

        $user4 = newUser();
        $user4 -> setUsername("Martin");
        $user4 -> setEmail("martin35@hotmail.com");
        $user4 -> setPassword();
        $user2 -> setRoles(false);
        $manager->persist($user4);
        $this->setReference("User4",$user4);

        $user5 = newUser();
        $user5 -> setUsername("Marie");
        $user5 -> setEmail("marie45@hotmail.com");
        $user5 -> setPassword("marie5555");
        $user2 -> setRoles(false);
        $manager->persist($user5);
        $this->setReference("User5",$user5);









        $manager->flush();
    }
}
