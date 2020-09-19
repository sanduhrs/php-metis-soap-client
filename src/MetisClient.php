<?php

namespace sanduhrs\Metis;

use Phpro\SoapClient\Client;
use sanduhrs\Metis\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use sanduhrs\Metis\Type\OrderPixelRequest;
use sanduhrs\Metis\Type\OrderPixelResponse;
use sanduhrs\Metis\Type\PixelOverviewRequest;
use sanduhrs\Metis\Type\PixelOverviewResponse;

/**
 * Class MetisClient
 *
 * @package sanduhrs\Metis
 */
class MetisClient extends Client
{
    /**
     * @param RequestInterface|Type\OrderPixelRequest $orderPixelRequest
     * @return ResultInterface|Type\OrderPixelResponse
     * @throws SoapException
     */
    public function orderPixel(OrderPixelRequest $orderPixelRequest) : OrderPixelResponse
    {
        return $this->call('orderPixel', $orderPixelRequest);
    }

    /**
     * @param RequestInterface|Type\PixelOverviewRequest $pixelOverviewRequest
     * @return ResultInterface|Type\PixelOverviewResponse
     * @throws SoapException
     */
    public function pixelOverview(PixelOverviewRequest $pixelOverviewRequest) : PixelOverviewResponse
    {
        return $this->call('pixelOverview', $pixelOverviewRequest);
    }
}
