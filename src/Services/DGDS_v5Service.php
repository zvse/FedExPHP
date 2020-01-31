<?php

namespace NicholasCreativeMedia\FedExPHP\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class DGDS_v5Service extends AbstractSoapClientBase
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
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \NicholasCreativeMedia\FedExPHP\DGDS_v5.wsdlClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions);
        parent::__construct($options,$resetSoapClient,$mode);

        $this->version = new \NicholasCreativeMedia\FedExPHP\Structs\VersionId('dgds',5,0,0);
    }
    /**
     * Method to call the operation originally named addDangerousGoodsHandlingUnit
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AddDangerousGoodsHandlingUnitRequest $addDangerousGoodsHandlingUnitRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddDangerousGoodsHandlingUnitReply|bool
     */
    public function addDangerousGoodsHandlingUnit(\NicholasCreativeMedia\FedExPHP\Structs\AddDangerousGoodsHandlingUnitRequest $addDangerousGoodsHandlingUnitRequest)
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
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ModifyDangerousGoodsShipmentRequest $modifyDangerousGoodsShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyDangerousGoodsShipmentReply|bool
     */
    public function modifyDangerousGoodsShipment(\NicholasCreativeMedia\FedExPHP\Structs\ModifyDangerousGoodsShipmentRequest $modifyDangerousGoodsShipmentRequest)
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
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadDangerousGoodsRequest $uploadDangerousGoodsRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDangerousGoodsReply|bool
     */
    public function uploadDangerousGoods(\NicholasCreativeMedia\FedExPHP\Structs\UploadDangerousGoodsRequest $uploadDangerousGoodsRequest)
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
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ModifyDangerousGoodsHandlingUnitRequest $modifyDangerousGoodsHandlingUnitRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyDangerousGoodsHandlingUnitReply|bool
     */
    public function modifyDangerousGoodsHandlingUnit(\NicholasCreativeMedia\FedExPHP\Structs\ModifyDangerousGoodsHandlingUnitRequest $modifyDangerousGoodsHandlingUnitRequest)
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
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeleteDangerousGoodsHandlingUnitRequest $deleteDangerousGoodsHandlingUnitRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeleteDangerousGoodsHandlingUnitReply|bool
     */
    public function deleteDangerousGoodsHandlingUnit(\NicholasCreativeMedia\FedExPHP\Structs\DeleteDangerousGoodsHandlingUnitRequest $deleteDangerousGoodsHandlingUnitRequest)
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
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeleteDangerousGoodsRequest $deleteDangerousGoodsRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeleteDangerousGoodsReply|bool
     */
    public function deleteDangerousGoods(\NicholasCreativeMedia\FedExPHP\Structs\DeleteDangerousGoodsRequest $deleteDangerousGoodsRequest)
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
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RetrieveDangerousGoodsRequest $retrieveDangerousGoodsRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RetrieveDangerousGoodsReply|bool
     */
    public function retrieveDangerousGoods(\NicholasCreativeMedia\FedExPHP\Structs\RetrieveDangerousGoodsRequest $retrieveDangerousGoodsRequest)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidateDangerousGoodsReply|bool
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddDangerousGoodsHandlingUnitReply|\NicholasCreativeMedia\FedExPHP\Structs\DeleteDangerousGoodsHandlingUnitReply|\NicholasCreativeMedia\FedExPHP\Structs\DeleteDangerousGoodsReply|\NicholasCreativeMedia\FedExPHP\Structs\ModifyDangerousGoodsHandlingUnitReply|\NicholasCreativeMedia\FedExPHP\Structs\ModifyDangerousGoodsShipmentReply|\NicholasCreativeMedia\FedExPHP\Structs\RetrieveDangerousGoodsReply|\NicholasCreativeMedia\FedExPHP\Structs\UploadDangerousGoodsReply|\NicholasCreativeMedia\FedExPHP\Structs\ValidateDangerousGoodsReply
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
