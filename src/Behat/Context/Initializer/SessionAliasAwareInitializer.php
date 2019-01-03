<?php

namespace Effiana\TestFrameworkBundle\Behat\Context\Initializer;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\Initializer\ContextInitializer;
use Effiana\TestFrameworkBundle\Behat\Context\SessionAliasProvider;
use Effiana\TestFrameworkBundle\Behat\Context\SessionAliasProviderAwareInterface;

class SessionAliasAwareInitializer implements ContextInitializer
{
    /**
     * @var SessionAliasProvider
     */
    private $provider;

    /**
     * @param SessionAliasProvider $provider
     */
    public function __construct(SessionAliasProvider $provider)
    {
        $this->provider = $provider;
    }

    /**
     * @param Context $context
     */
    public function initializeContext(Context $context)
    {
        if ($context instanceof SessionAliasProviderAwareInterface) {
            $context->setSessionAliasProvider($this->provider);
        }
    }
}
