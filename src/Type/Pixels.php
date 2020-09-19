<?php

namespace sanduhrs\Metis\Type;

/**
 * Class Pixels
 *
 * @package sanduhrs\Metis\Type
 */
class Pixels
{
    /**
     * @var \sanduhrs\Metis\Type\Pixel
     */
    private $pixel;

    /**
     * @return \sanduhrs\Metis\Type\Pixel
     */
    public function getPixel()
    {
        return $this->pixel;
    }

    /**
     * @param \sanduhrs\Metis\Type\Pixel $pixel
     * @return Pixels
     */
    public function withPixel($pixel)
    {
        $new = clone $this;
        $new->pixel = $pixel;

        return $new;
    }
}
