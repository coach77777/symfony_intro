<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();

        $product->setName('product One');
        $product->setDescription('This is product one');
        $product->setSize(100);

        $manager->persist($product);

        $product = new Product();

        $product->setName('product Two');
        $product->setDescription('This is product two');
        $product->setSize(200);

        $manager->persist($product);

        $manager->flush();
    }
}
