<?php

namespace sanduhrs\Metis;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

/**
 * Class MetisClientFactory
 *
 * @package sanduhrs\Metis
 */
class MetisClientFactory
{

  /**
   * @param string $wsdl
   *
   * @return \sanduhrs\Metis\MetisClient
   */
  public static function factory(string $wsdl) : MetisClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(MetisClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new MetisClient($engine, $eventDispatcher);
    }

}
