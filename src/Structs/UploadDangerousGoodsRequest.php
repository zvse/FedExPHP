<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadDangerousGoodsRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:UploadDangerousGoodsRequest
 * @subpackage Structs
 */
class UploadDangerousGoodsRequest extends AbstractStructBase
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
     * - documentation: FOR FEDEX INTERNAL USE ONLY: This field is used to specify processing options on the upload dangerous goods request.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsProcessingOptionsRequested
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
     * - documentation: This specifies the groups of handling units in the shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup[]
     */
    public $HandlingUnitGroups;
    /**
     * Constructor method for UploadDangerousGoodsRequest
     * @uses UploadDangerousGoodsRequest::setWebAuthenticationDetail()
     * @uses UploadDangerousGoodsRequest::setClientDetail()
     * @uses UploadDangerousGoodsRequest::setVersion()
     * @uses UploadDangerousGoodsRequest::setTransactionDetail()
     * @uses UploadDangerousGoodsRequest::setProcessingOptions()
     * @uses UploadDangerousGoodsRequest::setShipmentDetail()
     * @uses UploadDangerousGoodsRequest::setHandlingUnitGroups()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsProcessingOptionsRequested $processingOptions
     * @param \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail $shipmentDetail
     * @param \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup[] $handlingUnitGroups
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, \CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsProcessingOptionsRequested $processingOptions = null, \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail $shipmentDetail = null, array $handlingUnitGroups = array())
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
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ProcessingOptions value
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsProcessingOptionsRequested|null
     */
    public function getProcessingOptions()
    {
        return $this->ProcessingOptions;
    }
    /**
     * Set ProcessingOptions value
     * @param \CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsProcessingOptionsRequested $processingOptions
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsRequest
     */
    public function setProcessingOptions(\CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsProcessingOptionsRequested $processingOptions = null)
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
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsRequest
     */
    public function setHandlingUnitGroups(array $handlingUnitGroups = array())
    {
        foreach ($handlingUnitGroups as $uploadDangerousGoodsRequestHandlingUnitGroupsItem) {
            // validation for constraint: itemType
            if (!$uploadDangerousGoodsRequestHandlingUnitGroupsItem instanceof \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup) {
                throw new \InvalidArgumentException(sprintf('The HandlingUnitGroups property can only contain items of \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup, "%s" given', is_object($uploadDangerousGoodsRequestHandlingUnitGroupsItem) ? get_class($uploadDangerousGoodsRequestHandlingUnitGroupsItem) : gettype($uploadDangerousGoodsRequestHandlingUnitGroupsItem)), __LINE__);
            }
        }
        $this->HandlingUnitGroups = $handlingUnitGroups;
        return $this;
    }
    /**
     * Add item to HandlingUnitGroups value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup $item
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDangerousGoodsRequest
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
