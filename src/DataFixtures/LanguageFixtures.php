<?php

namespace App\DataFixtures;

use App\Entity\Language;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class LanguageFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $language1 = new Language();
        $language1->setName("Francais");
        $manager->persist($language1);
        $this->setReference("Language1", $language1);

        $language2 = new Language();
        $language2->setName("English");
        $manager->persist($language2);
        $this->setReference("Language2", $language2);

        $language3 = new Language();
        $language3->setName("Deutsch");
        $manager->persist($language3);
        $this->setReference("Language3", $language3);

        $manager->flush();

    }

}
