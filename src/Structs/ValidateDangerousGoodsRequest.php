<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateDangerousGoodsRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:ValidateDangerousGoodsRequest
 * @subpackage Structs
 */
class ValidateDangerousGoodsRequest extends AbstractStructBase
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
     * The ProcessingOptions
     * Meta informations extracted from the WSDL
     * - documentation: FOR FEDEX INTERNAL USE ONLY: Processing options for OPERATIONS only for now.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsProcessingOptionsRequested
     */
    public $ProcessingOptions;
    /**
     * The ShipmentDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail
     */
    public $ShipmentDetail;
    /**
     * The HandlingUnitGroups
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup[]
     */
    public $HandlingUnitGroups;
    /**
     * Constructor method for ValidateDangerousGoodsRequest
     * @uses ValidateDangerousGoodsRequest::setWebAuthenticationDetail()
     * @uses ValidateDangerousGoodsRequest::setClientDetail()
     * @uses ValidateDangerousGoodsRequest::setVersion()
     * @uses ValidateDangerousGoodsRequest::setTransactionDetail()
     * @uses ValidateDangerousGoodsRequest::setProcessingOptions()
     * @uses ValidateDangerousGoodsRequest::setShipmentDetail()
     * @uses ValidateDangerousGoodsRequest::setHandlingUnitGroups()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsProcessingOptionsRequested $processingOptions
     * @param \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail $shipmentDetail
     * @param \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup[] $handlingUnitGroups
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsProcessingOptionsRequested $processingOptions = null, \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail $shipmentDetail = null, array $handlingUnitGroups = array())
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setProcessingOptions($processingOptions)
            ->setShipmentDetail($shipmentDetail)
            ->setHandlingUnitGroups($handlingUnitGroups);
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
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ProcessingOptions value
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsProcessingOptionsRequested|null
     */
    public function getProcessingOptions()
    {
        return $this->ProcessingOptions;
    }
    /**
     * Set ProcessingOptions value
     * @param \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsProcessingOptionsRequested $processingOptions
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsRequest
     */
    public function setProcessingOptions(\CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsProcessingOptionsRequested $processingOptions = null)
    {
        $this->ProcessingOptions = $processingOptions;
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
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsRequest
     */
    public function setShipmentDetail(\CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail $shipmentDetail = null)
    {
        $this->ShipmentDetail = $shipmentDetail;
        return $this;
    }
    /**
     * Get HandlingUnitGroups value
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup[]|null
     */
    public function getHandlingUnitGroups()
    {
        return $this->HandlingUnitGroups;
    }
    /**
     * Set HandlingUnitGroups value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup[] $handlingUnitGroups
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsRequest
     */
    public function setHandlingUnitGroups(array $handlingUnitGroups = array())
    {
        foreach ($handlingUnitGroups as $validateDangerousGoodsRequestHandlingUnitGroupsItem) {
            // validation for constraint: itemType
            if (!$validateDangerousGoodsRequestHandlingUnitGroupsItem instanceof \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup) {
                throw new \InvalidArgumentException(sprintf('The HandlingUnitGroups property can only contain items of \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup, "%s" given', is_object($validateDangerousGoodsRequestHandlingUnitGroupsItem) ? get_class($validateDangerousGoodsRequestHandlingUnitGroupsItem) : gettype($validateDangerousGoodsRequestHandlingUnitGroupsItem)), __LINE__);
            }
        }
        $this->HandlingUnitGroups = $handlingUnitGroups;
        return $this;
    }
    /**
     * Add item to HandlingUnitGroups value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup $item
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsRequest
     */
    public function addToHandlingUnitGroups(\CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup) {
            throw new \InvalidArgumentException(sprintf('The HandlingUnitGroups property can only contain items of \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HandlingUnitGroups[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsRequest
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
