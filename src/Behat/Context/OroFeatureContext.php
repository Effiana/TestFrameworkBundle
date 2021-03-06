<?php

namespace Effiana\TestFrameworkBundle\Behat\Context;

use Behat\MinkExtension\Context\RawMinkContext;
use Effiana\TestFrameworkBundle\Behat\Driver\EffianaSelenium2Driver;

class OroFeatureContext extends RawMinkContext
{
    use AssertTrait;

    /**
     * @param \Closure $lambda
     * @param int $timeLimit in seconds
     * @return null|mixed Return null if closure throw error or return not true value.
     *                     Return value that return closure
     */
    public function spin(\Closure $lambda, $timeLimit = 60)
    {
        $time = $timeLimit;

        while ($time > 0) {
            try {
                if ($result = $lambda($this)) {
                    return $result;
                }
            } catch (\Exception $e) {
                // do nothing
            }
            usleep(250000);
            $time -= 0.25;
        }
        return null;
    }

    public function waitForAjax()
    {
        $this->getDriver()->waitForAjax();
    }

    /**
     * @return EffianaSelenium2Driver
     */
    protected function getDriver()
    {
        return $this->getSession()->getDriver();
    }

    /**
     * Returns fixed step argument (with \\" replaced back to ")
     *
     * @param string $argument
     *
     * @return string
     */
    protected function fixStepArgument($argument)
    {
        return str_replace('\\"', '"', $argument);
    }

    /**
     * @param int|string $count
     * @return int
     */
    protected function getCount($count)
    {
        switch (trim($count)) {
            case '':
                return 1;
            case 'one':
                return 1;
            case 'two':
                return 2;
            default:
                return (int) $count;
        }
    }
}
