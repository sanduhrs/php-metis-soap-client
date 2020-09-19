<?php

namespace sanduhrs\Metis\Type;

use Phpro\SoapClient\Type\RequestInterface;

/**
 * Class OrderPixelRequest
 *
 * @package sanduhrs\Metis\Type
 */
class OrderPixelRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $count;

    /**
     * Constructor
     *
     * @var int $count
     */
    public function __construct($count)
    {
        $this->count = $count;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return OrderPixelRequest
     */
    public function withCount($count)
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }
}
