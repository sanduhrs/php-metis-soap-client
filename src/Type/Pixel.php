<?php

namespace sanduhrs\Metis\Type;

/**
 * Class Pixel
 *
 * @package sanduhrs\Metis\Type
 */
class Pixel
{
    /**
     * @var string
     */
    private $publicIdentificationId;

    /**
     * @var string
     */
    private $privateIdentificationId;

    /**
     * @return string
     */
    public function getPublicIdentificationId()
    {
        return $this->publicIdentificationId;
    }

    /**
     * @param string $publicIdentificationId
     * @return Pixel
     */
    public function withPublicIdentificationId($publicIdentificationId)
    {
        $new = clone $this;
        $new->publicIdentificationId = $publicIdentificationId;

        return $new;
    }

    /**
     * @return string
     */
    public function getPrivateIdentificationId()
    {
        return $this->privateIdentificationId;
    }

    /**
     * @param string $privateIdentificationId
     * @return Pixel
     */
    public function withPrivateIdentificationId($privateIdentificationId)
    {
        $new = clone $this;
        $new->privateIdentificationId = $privateIdentificationId;

        return $new;
    }
}
