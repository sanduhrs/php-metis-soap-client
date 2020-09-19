<?php

namespace sanduhrs\Metis\Type;

use Phpro\SoapClient\Type\ResultInterface;

/**
 * Class PixelOverviewResponse
 *
 * @package sanduhrs\Metis\Type
 */
class PixelOverviewResponse implements ResultInterface
{
    /**
     * @var string
     */
    private $privateIdentificationId;

    /**
     * @var int
     */
    private $offset;

    /**
     * @var int
     */
    private $amount;

    /**
     * @return string
     */
    public function getPrivateIdentificationId()
    {
        return $this->privateIdentificationId;
    }

    /**
     * @param string $privateIdentificationId
     * @return PixelOverviewResponse
     */
    public function withPrivateIdentificationId($privateIdentificationId)
    {
        $new = clone $this;
        $new->privateIdentificationId = $privateIdentificationId;

        return $new;
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
     * @return PixelOverviewResponse
     */
    public function withOffset($offset)
    {
        $new = clone $this;
        $new->offset = $offset;

        return $new;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return PixelOverviewResponse
     */
    public function withAmount($amount)
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }
}
