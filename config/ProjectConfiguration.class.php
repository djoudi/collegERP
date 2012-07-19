<?php

require_once 'C://xampp//htdocs//zoomla//lib//vendor//symfony//lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration {

    public function configureDoctrine(Doctrine_Manager $manager) {
        $manager->setCollate('utf8_unicode_ci');
        $manager->setCharset('utf8');
    }

    public function setup() {
        $this->enablePlugins('sfDoctrinePlugin');
    }

}
