<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\OrderType;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadType implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $types = array(
          'СКЗИ','ЕСТР','РФ'
        );

        foreach ($types as $type){
            $typeEntity = new OrderType();
            $typeEntity->setTitle($type);
            $manager->persist($typeEntity);
        }
        $manager->flush();
    }
}