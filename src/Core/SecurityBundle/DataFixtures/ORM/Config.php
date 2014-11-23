<?php
// src/Core/SecurityBundle/DataFixtures/ORM/Configss.php
namespace Core\SecurityBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Core\SecurityBundle\Entity\Config;

class Configs implements FixtureInterface{
    public function load(ObjectManager $manager) {
        $configurations = array(
            array('chr_variable'=>'siteNameSmall','chr_value'=>'GPP','bool_active'=>1),
            array('chr_variable'=>'siteNameLarge','chr_value'=>'Gestión de proyectos para ponentes','bool_active'=>1),
            array('chr_variable'=>'Theme','chr_value'=>'Default','bool_active'=>1),
        );
        foreach($configurations as $configs){
            $objConfig = new Config();
            $objConfig->setChrVariable($configs['chr_variable']);
            $objConfig->setChrValue($configs['chr_value']);
            $objConfig->setBoolActive($configs['bool_active']);
            $manager->persist($objConfig);
        }
        $manager->flush();
        //$this->addReference('config', $objConfig);
    }
    
    public function getOrder(){
        return 1;
    }
}