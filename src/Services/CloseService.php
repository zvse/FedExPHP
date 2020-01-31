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
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl-'.$mode.DIRECTORY_SEPARATOR.'CloseService_v5.wsdl',
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \CommerceFedEx\FedExPHP\CloseClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions);
        parent::__construct($options,$resetSoapClient,$mode);

        $this->version = new \CommerceFedEx\FedExPHP\Structs\VersionId('clos',5,0,0);
    }
    /**
     * Method to call the operation originally named closeWithDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\CloseWithDocumentsRequest $closeWithDocumentsRequest
     * @return \CommerceFedEx\FedExPHP\Structs\CloseWithDocumentsReply|bool
     */
    public function closeWithDocuments(\CommerceFedEx\FedExPHP\Structs\CloseWithDocumentsRequest $closeWithDocumentsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->closeWithDocuments($closeWithDocumentsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named smartPostClose
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\SmartPostCloseRequest $smartPostCloseRequest
     * @return \CommerceFedEx\FedExPHP\Structs\SmartPostCloseReply|bool
     */
    public function smartPostClose(\CommerceFedEx\FedExPHP\Structs\SmartPostCloseRequest $smartPostCloseRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->smartPostClose($smartPostCloseRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named groundClose
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\GroundCloseRequest $groundCloseRequest
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseReply|bool
     */
    public function groundClose(\CommerceFedEx\FedExPHP\Structs\GroundCloseRequest $groundCloseRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->groundClose($groundCloseRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named groundCloseWithDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\GroundCloseWithDocumentsRequest $groundCloseWithDocumentsRequest
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseDocumentsReply|bool
     */
    public function groundCloseWithDocuments(\CommerceFedEx\FedExPHP\Structs\GroundCloseWithDocumentsRequest $groundCloseWithDocumentsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->groundCloseWithDocuments($groundCloseWithDocumentsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named reprintGroundCloseDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\ReprintGroundCloseDocumentsRequest $reprintGroundCloseDocumentsRequest
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseDocumentsReply|bool
     */
    public function reprintGroundCloseDocuments(\CommerceFedEx\FedExPHP\Structs\ReprintGroundCloseDocumentsRequest $reprintGroundCloseDocumentsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->reprintGroundCloseDocuments($reprintGroundCloseDocumentsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named groundCloseReportsReprint
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\GroundCloseReportsReprintRequest $groundCloseReportsReprintRequest
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseReportsReprintReply|bool
     */
    public function groundCloseReportsReprint(\CommerceFedEx\FedExPHP\Structs\GroundCloseReportsReprintRequest $groundCloseReportsReprintRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->groundCloseReportsReprint($groundCloseReportsReprintRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \CommerceFedEx\FedExPHP\Structs\CloseWithDocumentsReply|\CommerceFedEx\FedExPHP\Structs\GroundCloseDocumentsReply|\CommerceFedEx\FedExPHP\Structs\GroundCloseReply|\CommerceFedEx\FedExPHP\Structs\GroundCloseReportsReprintReply|\CommerceFedEx\FedExPHP\Structs\SmartPostCloseReply
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
