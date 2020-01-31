<?php

namespace NicholasCreativeMedia\FedExPHP\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{

    /**
     * RateService constructor.
     * @param array $wsdlOptions
     * @param bool $resetSoapClient
     * @param bool $beta
     */
    public function __construct(array $wsdlOptions = array(), $resetSoapClient = true, $mode = 'test')
    {
        if ($mode === false) $mode = 'test';
        if ($mode === true) $mode = 'live';
        $default_options = [
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl-'.$mode.DIRECTORY_SEPARATOR.'InFlightShipmentService_v1.wsdl',
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \CommerceFedEx\FedExPHP\InFlightShipmentClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions);
        parent::__construct($options,$resetSoapClient,$mode);

        $this->version = new \CommerceFedEx\FedExPHP\Structs\VersionId('ifss',1,0,0);
    }
    /**
     * Method to call the operation originally named validateDelivery
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\ValidateDeliveryRequest $validateDeliveryRequest
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDeliveryReply|bool
     */
    public function validateDelivery(\CommerceFedEx\FedExPHP\Structs\ValidateDeliveryRequest $validateDeliveryRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->validateDelivery($validateDeliveryRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named processDelivery
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\ProcessDeliveryRequest $processDeliveryRequest
     * @return \CommerceFedEx\FedExPHP\Structs\ProcessDeliveryReply|bool
     */
    public function processDelivery(\CommerceFedEx\FedExPHP\Structs\ProcessDeliveryRequest $processDeliveryRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->processDelivery($processDeliveryRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \CommerceFedEx\FedExPHP\Structs\ProcessDeliveryReply|\CommerceFedEx\FedExPHP\Structs\ValidateDeliveryReply
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
