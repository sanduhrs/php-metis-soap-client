<?php

namespace sanduhrs\Metis\Type;

use Phpro\SoapClient\Type\RequestInterface;

/**
 * Class PixelOverviewRequest
 *
 * @package sanduhrs\Metis\Type
 */
class PixelOverviewRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $offset;

    /**
     * @var string
     */
    private $type;

    /**
     * Constructor
     *
     * @var int $offset
     * @var string $type
     */
    public function __construct($offset, $type)
    {
        $this->offset = $offset;
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return PixelOverviewRequest
     */
    public function withOffset($offset)
    {
        $new = clone $this;
        $new->offset = $offset;

        return $new;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return PixelOverviewRequest
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }
}
