<?php

namespace Effiana\TestFrameworkBundle\BehatStatisticExtension\Tests\Specification\Stub;

use Effiana\TestFrameworkBundle\BehatStatisticExtension\AvgTimeProvider\AvgTimeProviderInterface;

class AvgTimeProviderStub implements AvgTimeProviderInterface
{
    protected $timeTable = [];

    public function __construct(array $timeTable)
    {
        $this->timeTable = $timeTable;
    }

    /**
     * @param string|int $id
     * @return int|null
     */
    public function getAverageTimeById($id)
    {
        if (isset($this->timeTable[$id])) {
            return $this->timeTable[$id];
        }

        return null;
    }

    /**
     * @return int
     */
    public function getAverageTime()
    {
        return round(array_sum($this->timeTable)/count($this->timeTable));
    }
}
