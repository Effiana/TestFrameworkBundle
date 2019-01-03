<?php

namespace Effiana\TestFrameworkBundle\Behat\Driver;

use Behat\MinkExtension\ServiceContainer\Driver\Selenium2Factory;

class EffianaSelenium2Factory extends Selenium2Factory
{
    /**
     * {@inheritdoc}
     */
    public function buildDriver(array $config)
    {
        $definition = parent::buildDriver($config);
        $definition->setClass('Effiana\TestFrameworkBundle\Behat\Driver\EffianaSelenium2Driver');

        return $definition;
    }

    /**
     * {@inheritdoc}
     */
    public function getDriverName()
    {
        return 'oroSelenium2';
    }
}
