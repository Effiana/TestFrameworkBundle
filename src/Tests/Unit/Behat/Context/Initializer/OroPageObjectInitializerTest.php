<?php

namespace Effiana\TestFrameworkBundle\Tests\Unit\Behat\Context\Initializer;

use Effiana\TestFrameworkBundle\Behat\Context\Initializer\OroPageObjectInitializer;

class OroPageObjectInitializerTest extends \PHPUnit\Framework\TestCase
{
    public function testInitializeContext()
    {
        $elementFactory = $this
            ->getMockBuilder('Effiana\TestFrameworkBundle\Behat\Element\OroElementFactory')
            ->disableOriginalConstructor()
            ->getMock()
        ;
        $pageFactory = $this
            ->getMockBuilder('Effiana\TestFrameworkBundle\Behat\Element\OroPageFactory')
            ->disableOriginalConstructor()
            ->getMock()
        ;
        $featureContext = $this->getMockBuilder('Effiana\TestFrameworkBundle\Tests\Behat\Context\OroMainContext')
            ->getMock();
        $featureContext->expects($this->once())->method('setElementFactory');

        $initializer = new OroPageObjectInitializer($elementFactory, $pageFactory);
        $initializer->initializeContext($featureContext);
    }
}
