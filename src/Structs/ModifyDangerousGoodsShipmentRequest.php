<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyDangerousGoodsShipmentRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:ModifyDangerousGoodsShipmentRequest
 * @subpackage Structs
 */
class ModifyDangerousGoodsShipmentRequest extends AbstractStructBase
{
    /**
     * The WebAuthenticationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail
     */
    public $WebAuthenticationDetail;
    /**
     * The ClientDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\ClientDetail
     */
    public $ClientDetail;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The UploadId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UploadId;
    /**
     * The ShipmentDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail
     */
    public $ShipmentDetail;
    /**
     * Constructor method for ModifyDangerousGoodsShipmentRequest
     * @uses ModifyDangerousGoodsShipmentRequest::setWebAuthenticationDetail()
     * @uses ModifyDangerousGoodsShipmentRequest::setClientDetail()
     * @uses ModifyDangerousGoodsShipmentRequest::setVersion()
     * @uses ModifyDangerousGoodsShipmentRequest::setTransactionDetail()
     * @uses ModifyDangerousGoodsShipmentRequest::setUploadId()
     * @uses ModifyDangerousGoodsShipmentRequest::setShipmentDetail()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $uploadId
     * @param \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail $shipmentDetail
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $uploadId = null, \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail $shipmentDetail = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setUploadId($uploadId)
            ->setShipmentDetail($shipmentDetail);
    }
    /**
     * Get WebAuthenticationDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyDangerousGoodsShipmentRequest
     */
    public function setWebAuthenticationDetail(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    /**
     * Get ClientDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyDangerousGoodsShipmentRequest
     */
    public function setClientDetail(\CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    /**
     * Get Version value
     * @return \CommerceFedEx\FedExPHP\Structs\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyDangerousGoodsShipmentRequest
     */
    public function setVersion(\CommerceFedEx\FedExPHP\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyDangerousGoodsShipmentRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get UploadId value
     * @return string|null
     */
    public function getUploadId()
    {
        return $this->UploadId;
    }
    /**
     * Set UploadId value
     * @param string $uploadId
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyDangerousGoodsShipmentRequest
     */
    public function setUploadId($uploadId = null)
    {
        // validation for constraint: string
        if (!is_null($uploadId) && !is_string($uploadId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uploadId)), __LINE__);
        }
        $this->UploadId = $uploadId;
        return $this;
    }
    /**
     * Get ShipmentDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail|null
     */
    public function getShipmentDetail()
    {
        return $this->ShipmentDetail;
    }
    /**
     * Set ShipmentDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail $shipmentDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyDangerousGoodsShipmentRequest
     */
    public function setShipmentDetail(\CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail $shipmentDetail = null)
    {
        $this->ShipmentDetail = $shipmentDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyDangerousGoodsShipmentRequest
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
