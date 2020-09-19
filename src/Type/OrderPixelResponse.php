<?php

namespace sanduhrs\Metis\Type;

use Phpro\SoapClient\Type\ResultInterface;

/**
 * Class OrderPixelResponse
 *
 * @package sanduhrs\Metis\Type
 */
class OrderPixelResponse implements ResultInterface
{

    /**
     * @var string
     */
    private $domain;

    /**
     * @var string
     */
    private $orderDateTime;

    /**
     * @var \sanduhrs\Metis\Type\Pixels
     */
    private $pixels;

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return OrderPixelResponse
     */
    public function withDomain($domain)
    {
        $new = clone $this;
        $new->domain = $domain;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrderDateTime()
    {
        return $this->orderDateTime;
    }

    /**
     * @param string $orderDateTime
     * @return OrderPixelResponse
     */
    public function withOrderDateTime($orderDateTime)
    {
        $new = clone $this;
        $new->orderDateTime = $orderDateTime;

        return $new;
    }

    /**
     * @return \sanduhrs\Metis\Type\Pixels
     */
    public function getPixels()
    {
        return $this->pixels;
    }

    /**
     * @param \sanduhrs\Metis\Type\Pixels $pixels
     * @return OrderPixelResponse
     */
    public function withPixels($pixels)
    {
        $new = clone $this;
        $new->pixels = $pixels;

        return $new;
    }

}
