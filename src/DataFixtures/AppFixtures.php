<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{    
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0 ; $i < 15 ; $i++){
            $book = new Book();
            $book->setTitle($faker->word())
                ->setAuthor($faker->name())
                ->setYear($faker->year())
                ->setIsbn($faker->isbn10())
                ->setPublisher($faker->name())
                ->setDescription($faker->word());
            
            $manager->persist($book);
        }
        $manager->flush();
    }
}
