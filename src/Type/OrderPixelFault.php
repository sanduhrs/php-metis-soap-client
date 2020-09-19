<?php

namespace sanduhrs\Metis\Type;

/**
 * Class OrderPixelFault
 *
 * @package sanduhrs\Metis\Type
 */
class OrderPixelFault
{
    /**
     * @var int
     */
    private $maxOrder;

    /**
     * @return int
     */
    public function getMaxOrder()
    {
        return $this->maxOrder;
    }

    /**
     * @param int $maxOrder
     * @return OrderPixelFault
     */
    public function withMaxOrder($maxOrder)
    {
        $new = clone $this;
        $new->maxOrder = $maxOrder;

        return $new;
    }
}
