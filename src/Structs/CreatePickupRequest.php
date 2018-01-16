<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreatePickupRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:CreatePickupRequest
 * @subpackage Structs
 */
class CreatePickupRequest extends AbstractStructBase
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
     * The AssociatedAccountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\AssociatedAccount
     */
    public $AssociatedAccountNumber;
    /**
     * The TrackingNumber
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the tracking number to be used for processing a pickup for a return shipment.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumber;
    /**
     * The OriginDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\PickupOriginDetail
     */
    public $OriginDetail;
    /**
     * The PickupServiceCategory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PickupServiceCategory;
    /**
     * The FreightPickupDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\FreightPickupDetail
     */
    public $FreightPickupDetail;
    /**
     * The ExpressFreightDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ExpressFreightPickupDetail
     */
    public $ExpressFreightDetail;
    /**
     * The PackageCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PackageCount;
    /**
     * The TotalWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Weight
     */
    public $TotalWeight;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * The OversizePackageCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OversizePackageCount;
    /**
     * The Remarks
     * Meta informations extracted from the WSDL
     * - documentation: This field is being deprecated and will not be removed in the June 2014 load.
     * - minOccurs: 0
     * @var string
     */
    public $Remarks;
    /**
     * The CommodityDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CommodityDescription;
    /**
     * The CountryRelationship
     * Meta informations extracted from the WSDL
     * - documentation: Describes the country relationship (domestic and/or international) among the shipments being picked up.
     * - minOccurs: 0
     * @var string
     */
    public $CountryRelationship;
    /**
     * Constructor method for CreatePickupRequest
     * @uses CreatePickupRequest::setWebAuthenticationDetail()
     * @uses CreatePickupRequest::setClientDetail()
     * @uses CreatePickupRequest::setVersion()
     * @uses CreatePickupRequest::setTransactionDetail()
     * @uses CreatePickupRequest::setAssociatedAccountNumber()
     * @uses CreatePickupRequest::setTrackingNumber()
     * @uses CreatePickupRequest::setOriginDetail()
     * @uses CreatePickupRequest::setPickupServiceCategory()
     * @uses CreatePickupRequest::setFreightPickupDetail()
     * @uses CreatePickupRequest::setExpressFreightDetail()
     * @uses CreatePickupRequest::setPackageCount()
     * @uses CreatePickupRequest::setTotalWeight()
     * @uses CreatePickupRequest::setCarrierCode()
     * @uses CreatePickupRequest::setOversizePackageCount()
     * @uses CreatePickupRequest::setRemarks()
     * @uses CreatePickupRequest::setCommodityDescription()
     * @uses CreatePickupRequest::setCountryRelationship()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \CommerceFedEx\FedExPHP\Structs\AssociatedAccount $associatedAccountNumber
     * @param string $trackingNumber
     * @param \CommerceFedEx\FedExPHP\Structs\PickupOriginDetail $originDetail
     * @param string $pickupServiceCategory
     * @param \CommerceFedEx\FedExPHP\Structs\FreightPickupDetail $freightPickupDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ExpressFreightPickupDetail $expressFreightDetail
     * @param int $packageCount
     * @param \CommerceFedEx\FedExPHP\Structs\Weight $totalWeight
     * @param string $carrierCode
     * @param int $oversizePackageCount
     * @param string $remarks
     * @param string $commodityDescription
     * @param string $countryRelationship
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, \CommerceFedEx\FedExPHP\Structs\AssociatedAccount $associatedAccountNumber = null, $trackingNumber = null, \CommerceFedEx\FedExPHP\Structs\PickupOriginDetail $originDetail = null, $pickupServiceCategory = null, \CommerceFedEx\FedExPHP\Structs\FreightPickupDetail $freightPickupDetail = null, \CommerceFedEx\FedExPHP\Structs\ExpressFreightPickupDetail $expressFreightDetail = null, $packageCount = null, \CommerceFedEx\FedExPHP\Structs\Weight $totalWeight = null, $carrierCode = null, $oversizePackageCount = null, $remarks = null, $commodityDescription = null, $countryRelationship = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setAssociatedAccountNumber($associatedAccountNumber)
            ->setTrackingNumber($trackingNumber)
            ->setOriginDetail($originDetail)
            ->setPickupServiceCategory($pickupServiceCategory)
            ->setFreightPickupDetail($freightPickupDetail)
            ->setExpressFreightDetail($expressFreightDetail)
            ->setPackageCount($packageCount)
            ->setTotalWeight($totalWeight)
            ->setCarrierCode($carrierCode)
            ->setOversizePackageCount($oversizePackageCount)
            ->setRemarks($remarks)
            ->setCommodityDescription($commodityDescription)
            ->setCountryRelationship($countryRelationship);
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
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get AssociatedAccountNumber value
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedAccount|null
     */
    public function getAssociatedAccountNumber()
    {
        return $this->AssociatedAccountNumber;
    }
    /**
     * Set AssociatedAccountNumber value
     * @param \CommerceFedEx\FedExPHP\Structs\AssociatedAccount $associatedAccountNumber
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest
     */
    public function setAssociatedAccountNumber(\CommerceFedEx\FedExPHP\Structs\AssociatedAccount $associatedAccountNumber = null)
    {
        $this->AssociatedAccountNumber = $associatedAccountNumber;
        return $this;
    }
    /**
     * Get TrackingNumber value
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    /**
     * Set TrackingNumber value
     * @param string $trackingNumber
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($trackingNumber) && !is_string($trackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingNumber)), __LINE__);
        }
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Get OriginDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\PickupOriginDetail|null
     */
    public function getOriginDetail()
    {
        return $this->OriginDetail;
    }
    /**
     * Set OriginDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\PickupOriginDetail $originDetail
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest
     */
    public function setOriginDetail(\CommerceFedEx\FedExPHP\Structs\PickupOriginDetail $originDetail = null)
    {
        $this->OriginDetail = $originDetail;
        return $this;
    }
    /**
     * Get PickupServiceCategory value
     * @return string|null
     */
    public function getPickupServiceCategory()
    {
        return $this->PickupServiceCategory;
    }
    /**
     * Set PickupServiceCategory value
     * @uses \CommerceFedEx\FedExPHP\Enums\PickupServiceCategoryType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\PickupServiceCategoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pickupServiceCategory
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest
     */
    public function setPickupServiceCategory($pickupServiceCategory = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\PickupServiceCategoryType::valueIsValid($pickupServiceCategory)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pickupServiceCategory, implode(', ', \CommerceFedEx\FedExPHP\Enums\PickupServiceCategoryType::getValidValues())), __LINE__);
        }
        $this->PickupServiceCategory = $pickupServiceCategory;
        return $this;
    }
    /**
     * Get FreightPickupDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\FreightPickupDetail|null
     */
    public function getFreightPickupDetail()
    {
        return $this->FreightPickupDetail;
    }
    /**
     * Set FreightPickupDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\FreightPickupDetail $freightPickupDetail
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest
     */
    public function setFreightPickupDetail(\CommerceFedEx\FedExPHP\Structs\FreightPickupDetail $freightPickupDetail = null)
    {
        $this->FreightPickupDetail = $freightPickupDetail;
        return $this;
    }
    /**
     * Get ExpressFreightDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ExpressFreightPickupDetail|null
     */
    public function getExpressFreightDetail()
    {
        return $this->ExpressFreightDetail;
    }
    /**
     * Set ExpressFreightDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ExpressFreightPickupDetail $expressFreightDetail
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest
     */
    public function setExpressFreightDetail(\CommerceFedEx\FedExPHP\Structs\ExpressFreightPickupDetail $expressFreightDetail = null)
    {
        $this->ExpressFreightDetail = $expressFreightDetail;
        return $this;
    }
    /**
     * Get PackageCount value
     * @return int|null
     */
    public function getPackageCount()
    {
        return $this->PackageCount;
    }
    /**
     * Set PackageCount value
     * @param int $packageCount
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest
     */
    public function setPackageCount($packageCount = null)
    {
        // validation for constraint: int
        if (!is_null($packageCount) && !is_numeric($packageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($packageCount)), __LINE__);
        }
        $this->PackageCount = $packageCount;
        return $this;
    }
    /**
     * Get TotalWeight value
     * @return \CommerceFedEx\FedExPHP\Structs\Weight|null
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }
    /**
     * Set TotalWeight value
     * @param \CommerceFedEx\FedExPHP\Structs\Weight $totalWeight
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest
     */
    public function setTotalWeight(\CommerceFedEx\FedExPHP\Structs\Weight $totalWeight = null)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrierCode
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierCode, implode(', ', \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get OversizePackageCount value
     * @return int|null
     */
    public function getOversizePackageCount()
    {
        return $this->OversizePackageCount;
    }
    /**
     * Set OversizePackageCount value
     * @param int $oversizePackageCount
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest
     */
    public function setOversizePackageCount($oversizePackageCount = null)
    {
        // validation for constraint: int
        if (!is_null($oversizePackageCount) && !is_numeric($oversizePackageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($oversizePackageCount)), __LINE__);
        }
        $this->OversizePackageCount = $oversizePackageCount;
        return $this;
    }
    /**
     * Get Remarks value
     * @return string|null
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }
    /**
     * Set Remarks value
     * @param string $remarks
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest
     */
    public function setRemarks($remarks = null)
    {
        // validation for constraint: string
        if (!is_null($remarks) && !is_string($remarks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remarks)), __LINE__);
        }
        $this->Remarks = $remarks;
        return $this;
    }
    /**
     * Get CommodityDescription value
     * @return string|null
     */
    public function getCommodityDescription()
    {
        return $this->CommodityDescription;
    }
    /**
     * Set CommodityDescription value
     * @param string $commodityDescription
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest
     */
    public function setCommodityDescription($commodityDescription = null)
    {
        // validation for constraint: string
        if (!is_null($commodityDescription) && !is_string($commodityDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commodityDescription)), __LINE__);
        }
        $this->CommodityDescription = $commodityDescription;
        return $this;
    }
    /**
     * Get CountryRelationship value
     * @return string|null
     */
    public function getCountryRelationship()
    {
        return $this->CountryRelationship;
    }
    /**
     * Set CountryRelationship value
     * @uses \CommerceFedEx\FedExPHP\Enums\CountryRelationshipType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CountryRelationshipType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $countryRelationship
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest
     */
    public function setCountryRelationship($countryRelationship = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CountryRelationshipType::valueIsValid($countryRelationship)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $countryRelationship, implode(', ', \CommerceFedEx\FedExPHP\Enums\CountryRelationshipType::getValidValues())), __LINE__);
        }
        $this->CountryRelationship = $countryRelationship;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest
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
