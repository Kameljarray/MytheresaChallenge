<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;


class ProductFixtures extends Fixture
{
    private $jsondata;

    public function load(ObjectManager $manager): void
    {
        //read the json file contents
        $this->jsondata = file_get_contents('./src/products.json');
        $products = json_decode($this->jsondata, true);
        foreach ($products as $theproduct) {
            $product = new Product();
            $product->setCategory($theproduct['category'])
                ->setName($theproduct['name'])
                ->setPrice($theproduct['price'])
                ->setSku($theproduct['sku']);
            $manager->persist($product);
        }

        $manager->flush();
    }
}