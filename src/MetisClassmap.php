<?php

namespace sanduhrs\Metis;

use sanduhrs\Metis\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

/**
 * Class MetisClassmap
 *
 * @package sanduhrs\Metis
 */
class MetisClassmap
{
    /**
     * @return \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
     */
    public static function getCollection() : ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('orderPixelRequest', Type\OrderPixelRequest::class),
            new ClassMap('orderPixelResponse', Type\OrderPixelResponse::class),
            new ClassMap('orderPixelFault', Type\OrderPixelFault::class),
            new ClassMap('pixelOverviewRequest', Type\PixelOverviewRequest::class),
            new ClassMap('pixelOverviewResponse', Type\PixelOverviewResponse::class),
            new ClassMap('pixelOverviewFault', Type\PixelOverviewFault::class),
            new ClassMap('Pixels', Type\Pixels::class),
            new ClassMap('Pixel', Type\Pixel::class),
            new ClassMap('tomFault', Type\TomFault::class),
        ]);
    }
}
