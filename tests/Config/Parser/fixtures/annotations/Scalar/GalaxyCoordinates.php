<?php

declare(strict_types=1);

namespace Overblog\GraphQLBundle\Tests\Config\Parser\fixtures\annotations\Scalar;

use GraphQL\Language\AST\Node;
use Overblog\GraphQLBundle\Annotation as GQL;

/**
 * @GQL\Scalar
 * @GQL\Description("The galaxy coordinates scalar")
 */
class GalaxyCoordinates
{
    /**
     * @param \DateTimeInterface $value
     *
     * @return string
     */
    public static function serialize(array $coordinates)
    {
        return \implode(',', $coordinates);
    }

    /**
     * @param mixed $value
     *
     * @return \DateTimeInterface
     */
    public static function parseValue($value)
    {
        return \explode(',', $value);
    }

    /**
     * @param Node $valueNode
     *
     * @return \DateTimeInterface
     */
    public static function parseLiteral(Node $valueNode)
    {
        return \explode(',', $valueNode->value);
    }
}
