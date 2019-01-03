<?php

namespace Effiana\TestFrameworkBundle\Behat\HealthChecker;

trait HealthCheckerAwareTrait
{
    /**
     * @var HealthCheckerInterface[]
     */
    protected $healthCheckers = [];

    /**
     * @param HealthCheckerInterface $healthChecker
     */
    public function addHealthChecker(HealthCheckerInterface $healthChecker)
    {
        $this->healthCheckers[] = $healthChecker;
    }
}
