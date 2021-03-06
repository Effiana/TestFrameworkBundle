<?php

namespace Effiana\TestFrameworkBundle\Testing\Doctrine;

use Doctrine\ORM\Event;

abstract class StubEventListener
{
    /**
     * @param Event\PostFlushEventArgs $args
     */
    abstract public function postFlush(Event\PostFlushEventArgs $args);

    /**
     * @param Event\OnFlushEventArgs $args
     */
    abstract public function onFlush(Event\OnFlushEventArgs $args);
}
