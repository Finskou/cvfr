<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    /**
     * Load data fixtures with the passed EntityManager
     * @param ObjectManager $manager
     */

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail("lelarhaz@gmail.com");
        $user->setPassword("azerty");
        // $product = new Product();
        $manager->persist($user);

        $manager->flush();
    }
}
