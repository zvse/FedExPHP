<?php

namespace CommerceFedEx\FedExPHP\Services;

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
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl-'.$mode.DIRECTORY_SEPARATOR.'ShipService_v25.wsdl',
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \CommerceFedEx\FedExPHP\ShipClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions);
        parent::__construct($options,$resetSoapClient,$mode);

        $this->version = new \CommerceFedEx\FedExPHP\Structs\VersionId('ship',25,0,0);
    }
    /**
     * Method to call the operation originally named processTag
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\ProcessTagRequest $processTagRequest
     * @return \CommerceFedEx\FedExPHP\Structs\ProcessTagReply|bool
     */
    public function processTag(\CommerceFedEx\FedExPHP\Structs\ProcessTagRequest $processTagRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->processTag($processTagRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named processShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\ProcessShipmentRequest $processShipmentRequest
     * @return \CommerceFedEx\FedExPHP\Structs\ProcessShipmentReply|bool
     */
    public function processShipment(\CommerceFedEx\FedExPHP\Structs\ProcessShipmentRequest $processShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->processShipment($processShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteTag
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\DeleteTagRequest $deleteTagRequest
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentReply|bool
     */
    public function deleteTag(\CommerceFedEx\FedExPHP\Structs\DeleteTagRequest $deleteTagRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteTag($deleteTagRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\DeleteShipmentRequest $deleteShipmentRequest
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentReply|bool
     */
    public function deleteShipment(\CommerceFedEx\FedExPHP\Structs\DeleteShipmentRequest $deleteShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteShipment($deleteShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\ValidateShipmentRequest $validateShipmentRequest
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentReply|bool
     */
    public function validateShipment(\CommerceFedEx\FedExPHP\Structs\ValidateShipmentRequest $validateShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->validateShipment($validateShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \CommerceFedEx\FedExPHP\Structs\ProcessShipmentReply|\CommerceFedEx\FedExPHP\Structs\ProcessTagReply|\CommerceFedEx\FedExPHP\Structs\ShipmentReply
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
