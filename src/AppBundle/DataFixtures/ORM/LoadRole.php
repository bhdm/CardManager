<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Role;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadRole implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $roles = array(
        ['ROLE_ADMIN', null],
        ['ROLE_COMPANY', 'ROLE_ADMIN'],
        ['ROLE_USER', 'ROLE_COMPANY']
        );

        foreach ($roles as $role){
            $roleEntity = new Role();
            $roleEntity->setName($role[0]);
            if ($role[1] !== null){
                $parent = $manager->getRepository('AppBundle:Role')->findOneByName($role[1]);
                if ($parent){
                    $roleEntity->setParent($parent);
                }
            }
            $manager->persist($roleEntity);
            $manager->flush();
        }
    }
}