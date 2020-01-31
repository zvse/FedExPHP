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
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl-'.$mode.DIRECTORY_SEPARATOR.'DGDS_v5.wsdl',
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \CommerceFedEx\FedExPHP\DGDS_v5.wsdlClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions);
        parent::__construct($options,$resetSoapClient,$mode);

        $this->version = new \CommerceFedEx\FedExPHP\Structs\VersionId('dgds',5,0,0);
    }
    /**
     * Method to call the operation originally named addDangerousGoodsHandlingUnit
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\AddDangerousGoodsHandlingUnitRequest $addDangerousGoodsHandlingUnitRequest
     * @return \CommerceFedEx\FedExPHP\Structs\AddDangerousGoodsHandlingUnitReply|bool
     */
    public function addDangerousGoodsHandlingUnit(\CommerceFedEx\FedExPHP\Structs\AddDangerousGoodsHandlingUnitRequest $addDangerousGoodsHandlingUnitRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->addDangerousGoodsHandlingUnit($addDangerousGoodsHandlingUnitRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named modifyDangerousGoodsShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\ModifyDangerousGoodsShipmentRequest $modifyDangerousGoodsShipmentRequest
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyDangerousGoodsShipmentReply|bool
     */
    public function modifyDangerousGoodsShipment(\CommerceFedEx\FedExPHP\Structs\ModifyDangerousGoodsShipmentRequest $modifyDangerousGoodsShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->modifyDangerousGoodsShipment($modifyDangerousGoodsShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named uploadDangerousGoods
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsRequest $uploadDangerousGoodsRequest
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsReply|bool
     */
    public function uploadDangerousGoods(\CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsRequest $uploadDangerousGoodsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->uploadDangerousGoods($uploadDangerousGoodsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named modifyDangerousGoodsHandlingUnit
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\ModifyDangerousGoodsHandlingUnitRequest $modifyDangerousGoodsHandlingUnitRequest
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyDangerousGoodsHandlingUnitReply|bool
     */
    public function modifyDangerousGoodsHandlingUnit(\CommerceFedEx\FedExPHP\Structs\ModifyDangerousGoodsHandlingUnitRequest $modifyDangerousGoodsHandlingUnitRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->modifyDangerousGoodsHandlingUnit($modifyDangerousGoodsHandlingUnitRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteDangerousGoodsHandlingUnit
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\DeleteDangerousGoodsHandlingUnitRequest $deleteDangerousGoodsHandlingUnitRequest
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteDangerousGoodsHandlingUnitReply|bool
     */
    public function deleteDangerousGoodsHandlingUnit(\CommerceFedEx\FedExPHP\Structs\DeleteDangerousGoodsHandlingUnitRequest $deleteDangerousGoodsHandlingUnitRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteDangerousGoodsHandlingUnit($deleteDangerousGoodsHandlingUnitRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteDangerousGoods
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\DeleteDangerousGoodsRequest $deleteDangerousGoodsRequest
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteDangerousGoodsReply|bool
     */
    public function deleteDangerousGoods(\CommerceFedEx\FedExPHP\Structs\DeleteDangerousGoodsRequest $deleteDangerousGoodsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteDangerousGoods($deleteDangerousGoodsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retrieveDangerousGoods
     * This method has been renamed because it is defined several times but with
     * different signature
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\RetrieveDangerousGoodsRequest $retrieveDangerousGoodsRequest
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveDangerousGoodsReply|bool
     */
    public function retrieveDangerousGoods(\CommerceFedEx\FedExPHP\Structs\RetrieveDangerousGoodsRequest $retrieveDangerousGoodsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->retrieveDangerousGoods($retrieveDangerousGoodsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retrieveDangerousGoods
     * This method has been renamed because it is defined several times but with
     * different signature
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $validateDangerousGoodsReply
     * @param string $validateDangerousGoodsRequest
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsReply|bool
     */
    public function retrieveDangerousGoods_c46545f679278b0badc9822394654cb4($validateDangerousGoodsReply, $validateDangerousGoodsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->retrieveDangerousGoods($validateDangerousGoodsReply, $validateDangerousGoodsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \CommerceFedEx\FedExPHP\Structs\AddDangerousGoodsHandlingUnitReply|\CommerceFedEx\FedExPHP\Structs\DeleteDangerousGoodsHandlingUnitReply|\CommerceFedEx\FedExPHP\Structs\DeleteDangerousGoodsReply|\CommerceFedEx\FedExPHP\Structs\ModifyDangerousGoodsHandlingUnitReply|\CommerceFedEx\FedExPHP\Structs\ModifyDangerousGoodsShipmentReply|\CommerceFedEx\FedExPHP\Structs\RetrieveDangerousGoodsReply|\CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsReply|\CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsReply
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
