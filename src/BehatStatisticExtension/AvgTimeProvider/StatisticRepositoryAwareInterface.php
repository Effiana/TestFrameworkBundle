<?php

namespace Effiana\TestFrameworkBundle\BehatStatisticExtension\AvgTimeProvider;

use Effiana\TestFrameworkBundle\BehatStatisticExtension\Repository\StatisticRepository;

interface StatisticRepositoryAwareInterface
{
    /**
     * @param StatisticRepository $repository
     */
    public function setRepository(StatisticRepository $repository);
}
