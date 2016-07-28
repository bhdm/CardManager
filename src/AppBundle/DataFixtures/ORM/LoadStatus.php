<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\OrderStatus;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadStatus implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $statuses = array(
          ['Новый', false],
          ['Проверенный', false],
          ['Оплаченный', false],
          ['В производстве', false],
          ['На складе', true],
          ['Отправлен', true],
          ['Доставлен', true],
          ['Отклонен', false],
          ['Отменен', false]
        );

        foreach ($statuses as $status){
            $statusEntity = new OrderStatus();
            $statusEntity->setTitle($status[0]);
            $statusEntity->setCompleted($status[1]);
            $manager->persist($statusEntity);
        }
        $manager->flush();
    }
}