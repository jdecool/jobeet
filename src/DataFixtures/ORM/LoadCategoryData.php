<?php

namespace App\DataFixtures\ORM;

use App\Entity\Category;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $design = new Category();
        $design->setName('Design');
        $manager->persist($design);

        $programming = new Category();
        $programming->setName('Programming');
        $manager->persist($programming);

        $managing = new Category();
        $managing->setName('Manager');
        $manager->persist($managing);

        $administrator = new Category();
        $administrator->setName('Administrator');
        $manager->persist($administrator);

        $manager->flush();

        $this->addReference('category-design', $design);
        $this->addReference('category-programming', $programming);
        $this->addReference('category-managing', $managing);
        $this->addReference('category-administrator', $administrator);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 1;
    }
}
