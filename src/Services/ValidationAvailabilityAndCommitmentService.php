<?php

namespace NicholasCreativeMedia\FedExPHP\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class ValidationAvailabilityAndCommitmentService extends AbstractSoapClientBase
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
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl-'.$mode.DIRECTORY_SEPARATOR.'ValidationAvailabilityAndCommitmentService_v13.wsdl',
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \NicholasCreativeMedia\FedExPHP\ValidationAvailabilityAndCommitmentClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions);
        parent::__construct($options,$resetSoapClient,$mode);

        $this->version = new \NicholasCreativeMedia\FedExPHP\Structs\VersionId('vacs',13,0,0);
    }
    /**
     * Method to call the operation originally named getAllServicesAndPackaging
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\GetAllServicesAndPackagingRequest $getAllServicesAndPackagingRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllServicesAndPackagingReply|bool
     */
    public function getAllServicesAndPackaging(\NicholasCreativeMedia\FedExPHP\Structs\GetAllServicesAndPackagingRequest $getAllServicesAndPackagingRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getAllServicesAndPackaging($getAllServicesAndPackagingRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllSpecialServices
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\GetAllSpecialServicesRequest $getAllSpecialServicesRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllSpecialServicesReply|bool
     */
    public function getAllSpecialServices(\NicholasCreativeMedia\FedExPHP\Structs\GetAllSpecialServicesRequest $getAllSpecialServicesRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getAllSpecialServices($getAllSpecialServicesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named serviceAvailability
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityRequest $serviceAvailabilityRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityReply|bool
     */
    public function serviceAvailability(\NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityRequest $serviceAvailabilityRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->serviceAvailability($serviceAvailabilityRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllServicesAndPackagingReply|\NicholasCreativeMedia\FedExPHP\Structs\GetAllSpecialServicesReply|\NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityReply
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
