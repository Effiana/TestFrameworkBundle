<?php

namespace Effiana\TestFrameworkBundle\Fixtures;

use Effiana\TestFrameworkBundle\Migrations\Data\ORM\AbstractLoadUserData;

/**
 * @deprecated since 1.10
 *
 * @see \Effiana\TestFrameworkBundle\Migrations\Data\ORM\LoadUserData
 */
class LoadUserData extends AbstractLoadUserData
{
    /**
     * @return int
     *
     * @deprecated since 1.10
     */
    public function getOrder()
    {
        return 110;
    }
}
