<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Data\Client\Soap;

use Zac2\Data\Client\ReaderInterface;
use Zend\Soap\Client as SoapClient;

abstract class SoapBased implements ReaderInterface
{
    /**
     * @var SoapClient
     */
    protected $soapClient;
    /**
     * @var array
     */
    protected $params;

    /**
     * SoapBased constructor.
     * @param SoapClient $soapClient
     * @param array $params
     */
    public function __construct(SoapClient $soapClient, array $params)
    {
        $this->soapClient   = $soapClient;
        $this->params       = $params;
    }

    /**
     * @return SoapClient
     */
    public function getSoapClient()
    {
        return $this->soapClient;
    }

    /**
     * @param SoapClient $soapClient
     */
    public function setSoapClient(SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param array $params
     */
    public function setParams(array $params)
    {
        $this->params = $params;
    }

}
