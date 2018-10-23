<?php

declare(strict_types=1);

namespace Overblog\GraphQLBundle\Tests\Config\Parser\fixtures\annotations\Type;

use Overblog\GraphQLBundle\Annotation as GQL;

/**
 * @GQL\Type
 */
class Battle
{
    /**
     * @GQL\Field(type="Planet")
     */
    protected $planet;

    /**
     * @GQL\Field(name="casualties")
     */
    public function getCasualties(int $areaId, string $raceId, int $dayStart = null, int $dayEnd = null, string $nameStartingWith = '', string $planetId = null): ? int
    {
        return 12;
    }
}
