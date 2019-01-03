<?php

namespace Effiana\TestFrameworkBundle\Behat\Fixtures;

interface FixtureLoaderAwareInterface
{
    /**
     * @param FixtureLoader $fixtureLoader
     */
    public function setFixtureLoader(FixtureLoader $fixtureLoader);
}
