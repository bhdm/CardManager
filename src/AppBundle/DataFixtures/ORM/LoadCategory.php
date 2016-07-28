<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\OrderCategory;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCategory implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categories = array(
          'Водитель','Предприятие','Мастерская'
        );

        foreach ($categories as $category){
            $categoryEntity = new OrderCategory();
            $categoryEntity->setTitle($category);
            $manager->persist($categoryEntity);
        }
        $manager->flush();
    }
}