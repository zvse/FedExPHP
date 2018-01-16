<?php

namespace CommerceFedEx\FedExPHP\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class TrackService extends FedExService
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
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl-'.$mode.DIRECTORY_SEPARATOR.'TrackService_v12.wsdl',
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \CommerceFedEx\FedExPHP\TrackClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions);
        parent::__construct($options,$resetSoapClient,$mode);

        $this->version = new \CommerceFedEx\FedExPHP\Structs\VersionId('trck',12,0,0);
    }
    /**
     * Method to call the operation originally named
     * retrieveSignatureProofOfDeliveryLetter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest
     * @return \CommerceFedEx\FedExPHP\Structs\SignatureProofOfDeliveryLetterReply|bool
     */
    public function retrieveSignatureProofOfDeliveryLetter(\CommerceFedEx\FedExPHP\Structs\SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->retrieveSignatureProofOfDeliveryLetter($signatureProofOfDeliveryLetterRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named track
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\TrackRequest $trackRequest
     * @return \CommerceFedEx\FedExPHP\Structs\TrackReply|bool
     */
    public function track(\CommerceFedEx\FedExPHP\Structs\TrackRequest $trackRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->track($trackRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendSignatureProofOfDeliveryFax
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest
     * @return \CommerceFedEx\FedExPHP\Structs\SignatureProofOfDeliveryFaxReply|bool
     */
    public function sendSignatureProofOfDeliveryFax(\CommerceFedEx\FedExPHP\Structs\SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->sendSignatureProofOfDeliveryFax($signatureProofOfDeliveryFaxRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendNotifications
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\SendNotificationsRequest $sendNotificationsRequest
     * @return \CommerceFedEx\FedExPHP\Structs\SendNotificationsReply|bool
     */
    public function sendNotifications(\CommerceFedEx\FedExPHP\Structs\SendNotificationsRequest $sendNotificationsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->sendNotifications($sendNotificationsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \CommerceFedEx\FedExPHP\Structs\SendNotificationsReply|\CommerceFedEx\FedExPHP\Structs\SignatureProofOfDeliveryFaxReply|\CommerceFedEx\FedExPHP\Structs\SignatureProofOfDeliveryLetterReply|\CommerceFedEx\FedExPHP\Structs\TrackReply
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
