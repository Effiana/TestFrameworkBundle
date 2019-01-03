<?php

namespace Effiana\TestFrameworkBundle\Behat\Element;

use Behat\Testwork\Suite\Suite;

interface SuiteAwareInterface
{
    /**
     * @param Suite $suite
     */
    public function setSuite(Suite $suite);
}
