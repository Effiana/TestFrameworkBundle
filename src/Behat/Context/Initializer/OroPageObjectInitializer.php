<?php

namespace Effiana\TestFrameworkBundle\Behat\Context\Initializer;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\Initializer\ContextInitializer;
use Effiana\TestFrameworkBundle\Behat\Element\OroElementFactory;
use Effiana\TestFrameworkBundle\Behat\Element\OroPageFactory;
use Effiana\TestFrameworkBundle\Behat\Element\OroPageObjectAware;

class OroPageObjectInitializer implements ContextInitializer
{
    /**
     * @var OroElementFactory
     */
    protected $elementFactory;

    /**
     * @var OroPageFactory
     */
    protected $pageFactory;

    /**
     * @param OroElementFactory $elementFactory
     */
    public function __construct(OroElementFactory $elementFactory, OroPageFactory $pageFactory)
    {
        $this->elementFactory = $elementFactory;
        $this->pageFactory = $pageFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function initializeContext(Context $context)
    {
        if ($context instanceof OroPageObjectAware) {
            $context->setElementFactory($this->elementFactory);
            $context->setPageFactory($this->pageFactory);
        }
    }
}
