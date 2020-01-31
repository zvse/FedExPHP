<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupAvailabilityRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:PickupAvailabilityRequest
 * @subpackage Structs
 */
class PickupAvailabilityRequest extends AbstractStructBase
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
     * The PickupType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PickupType;
    /**
     * The AccountNumber
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the account number for Freight Pickup Availability
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\AssociatedAccount
     */
    public $AccountNumber;
    /**
     * The PickupAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Address
     */
    public $PickupAddress;
    /**
     * The PickupRequestType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PickupRequestType;
    /**
     * The DispatchDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DispatchDate;
    /**
     * The NumberOfBusinessDays
     * Meta informations extracted from the WSDL
     * - documentation: Number of business days to consider when checking availability.
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfBusinessDays;
    /**
     * The PackageReadyTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackageReadyTime;
    /**
     * The CustomerCloseTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerCloseTime;
    /**
     * The Carriers
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Carriers;
    /**
     * The ShipmentAttributes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\PickupShipmentAttributes
     */
    public $ShipmentAttributes;
    /**
     * The PackageDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\RequestedPickupPackageDetail[]
     */
    public $PackageDetails;
    /**
     * Constructor method for PickupAvailabilityRequest
     * @uses PickupAvailabilityRequest::setWebAuthenticationDetail()
     * @uses PickupAvailabilityRequest::setClientDetail()
     * @uses PickupAvailabilityRequest::setVersion()
     * @uses PickupAvailabilityRequest::setTransactionDetail()
     * @uses PickupAvailabilityRequest::setPickupType()
     * @uses PickupAvailabilityRequest::setAccountNumber()
     * @uses PickupAvailabilityRequest::setPickupAddress()
     * @uses PickupAvailabilityRequest::setPickupRequestType()
     * @uses PickupAvailabilityRequest::setDispatchDate()
     * @uses PickupAvailabilityRequest::setNumberOfBusinessDays()
     * @uses PickupAvailabilityRequest::setPackageReadyTime()
     * @uses PickupAvailabilityRequest::setCustomerCloseTime()
     * @uses PickupAvailabilityRequest::setCarriers()
     * @uses PickupAvailabilityRequest::setShipmentAttributes()
     * @uses PickupAvailabilityRequest::setPackageDetails()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $pickupType
     * @param \CommerceFedEx\FedExPHP\Structs\AssociatedAccount $accountNumber
     * @param \CommerceFedEx\FedExPHP\Structs\Address $pickupAddress
     * @param string[] $pickupRequestType
     * @param string $dispatchDate
     * @param int $numberOfBusinessDays
     * @param string $packageReadyTime
     * @param string $customerCloseTime
     * @param string[] $carriers
     * @param \CommerceFedEx\FedExPHP\Structs\PickupShipmentAttributes $shipmentAttributes
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedPickupPackageDetail[] $packageDetails
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $pickupType = null, \CommerceFedEx\FedExPHP\Structs\AssociatedAccount $accountNumber = null, \CommerceFedEx\FedExPHP\Structs\Address $pickupAddress = null, array $pickupRequestType = array(), $dispatchDate = null, $numberOfBusinessDays = null, $packageReadyTime = null, $customerCloseTime = null, array $carriers = array(), \CommerceFedEx\FedExPHP\Structs\PickupShipmentAttributes $shipmentAttributes = null, array $packageDetails = array())
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setPickupType($pickupType)
            ->setAccountNumber($accountNumber)
            ->setPickupAddress($pickupAddress)
            ->setPickupRequestType($pickupRequestType)
            ->setDispatchDate($dispatchDate)
            ->setNumberOfBusinessDays($numberOfBusinessDays)
            ->setPackageReadyTime($packageReadyTime)
            ->setCustomerCloseTime($customerCloseTime)
            ->setCarriers($carriers)
            ->setShipmentAttributes($shipmentAttributes)
            ->setPackageDetails($packageDetails);
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
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get PickupType value
     * @return string|null
     */
    public function getPickupType()
    {
        return $this->PickupType;
    }
    /**
     * Set PickupType value
     * @uses \CommerceFedEx\FedExPHP\Enums\PickupType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\PickupType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pickupType
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setPickupType($pickupType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\PickupType::valueIsValid($pickupType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pickupType, implode(', ', \CommerceFedEx\FedExPHP\Enums\PickupType::getValidValues())), __LINE__);
        }
        $this->PickupType = $pickupType;
        return $this;
    }
    /**
     * Get AccountNumber value
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedAccount|null
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    /**
     * Set AccountNumber value
     * @param \CommerceFedEx\FedExPHP\Structs\AssociatedAccount $accountNumber
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setAccountNumber(\CommerceFedEx\FedExPHP\Structs\AssociatedAccount $accountNumber = null)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    /**
     * Get PickupAddress value
     * @return \CommerceFedEx\FedExPHP\Structs\Address|null
     */
    public function getPickupAddress()
    {
        return $this->PickupAddress;
    }
    /**
     * Set PickupAddress value
     * @param \CommerceFedEx\FedExPHP\Structs\Address $pickupAddress
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setPickupAddress(\CommerceFedEx\FedExPHP\Structs\Address $pickupAddress = null)
    {
        $this->PickupAddress = $pickupAddress;
        return $this;
    }
    /**
     * Get PickupRequestType value
     * @return string[]|null
     */
    public function getPickupRequestType()
    {
        return $this->PickupRequestType;
    }
    /**
     * Set PickupRequestType value
     * @uses \CommerceFedEx\FedExPHP\Enums\PickupRequestType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\PickupRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $pickupRequestType
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setPickupRequestType(array $pickupRequestType = array())
    {
        $invalidValues = array();
        foreach ($pickupRequestType as $pickupAvailabilityRequestPickupRequestTypeItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\PickupRequestType::valueIsValid($pickupAvailabilityRequestPickupRequestTypeItem)) {
                $invalidValues[] = var_export($pickupAvailabilityRequestPickupRequestTypeItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\PickupRequestType::getValidValues())), __LINE__);
        }
        $this->PickupRequestType = $pickupRequestType;
        return $this;
    }
    /**
     * Add item to PickupRequestType value
     * @uses \CommerceFedEx\FedExPHP\Enums\PickupRequestType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\PickupRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function addToPickupRequestType($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\PickupRequestType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\PickupRequestType::getValidValues())), __LINE__);
        }
        $this->PickupRequestType[] = $item;
        return $this;
    }
    /**
     * Get DispatchDate value
     * @return string|null
     */
    public function getDispatchDate()
    {
        return $this->DispatchDate;
    }
    /**
     * Set DispatchDate value
     * @param string $dispatchDate
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setDispatchDate($dispatchDate = null)
    {
        // validation for constraint: string
        if (!is_null($dispatchDate) && !is_string($dispatchDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dispatchDate)), __LINE__);
        }
        $this->DispatchDate = $dispatchDate;
        return $this;
    }
    /**
     * Get NumberOfBusinessDays value
     * @return int|null
     */
    public function getNumberOfBusinessDays()
    {
        return $this->NumberOfBusinessDays;
    }
    /**
     * Set NumberOfBusinessDays value
     * @param int $numberOfBusinessDays
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setNumberOfBusinessDays($numberOfBusinessDays = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfBusinessDays) && !is_numeric($numberOfBusinessDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfBusinessDays)), __LINE__);
        }
        $this->NumberOfBusinessDays = $numberOfBusinessDays;
        return $this;
    }
    /**
     * Get PackageReadyTime value
     * @return string|null
     */
    public function getPackageReadyTime()
    {
        return $this->PackageReadyTime;
    }
    /**
     * Set PackageReadyTime value
     * @param string $packageReadyTime
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setPackageReadyTime($packageReadyTime = null)
    {
        // validation for constraint: string
        if (!is_null($packageReadyTime) && !is_string($packageReadyTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packageReadyTime)), __LINE__);
        }
        $this->PackageReadyTime = $packageReadyTime;
        return $this;
    }
    /**
     * Get CustomerCloseTime value
     * @return string|null
     */
    public function getCustomerCloseTime()
    {
        return $this->CustomerCloseTime;
    }
    /**
     * Set CustomerCloseTime value
     * @param string $customerCloseTime
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setCustomerCloseTime($customerCloseTime = null)
    {
        // validation for constraint: string
        if (!is_null($customerCloseTime) && !is_string($customerCloseTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerCloseTime)), __LINE__);
        }
        $this->CustomerCloseTime = $customerCloseTime;
        return $this;
    }
    /**
     * Get Carriers value
     * @return string[]|null
     */
    public function getCarriers()
    {
        return $this->Carriers;
    }
    /**
     * Set Carriers value
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $carriers
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setCarriers(array $carriers = array())
    {
        $invalidValues = array();
        foreach ($carriers as $pickupAvailabilityRequestCarriersItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid($pickupAvailabilityRequestCarriersItem)) {
                $invalidValues[] = var_export($pickupAvailabilityRequestCarriersItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->Carriers = $carriers;
        return $this;
    }
    /**
     * Add item to Carriers value
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function addToCarriers($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->Carriers[] = $item;
        return $this;
    }
    /**
     * Get ShipmentAttributes value
     * @return \CommerceFedEx\FedExPHP\Structs\PickupShipmentAttributes|null
     */
    public function getShipmentAttributes()
    {
        return $this->ShipmentAttributes;
    }
    /**
     * Set ShipmentAttributes value
     * @param \CommerceFedEx\FedExPHP\Structs\PickupShipmentAttributes $shipmentAttributes
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setShipmentAttributes(\CommerceFedEx\FedExPHP\Structs\PickupShipmentAttributes $shipmentAttributes = null)
    {
        $this->ShipmentAttributes = $shipmentAttributes;
        return $this;
    }
    /**
     * Get PackageDetails value
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedPickupPackageDetail[]|null
     */
    public function getPackageDetails()
    {
        return $this->PackageDetails;
    }
    /**
     * Set PackageDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedPickupPackageDetail[] $packageDetails
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setPackageDetails(array $packageDetails = array())
    {
        foreach ($packageDetails as $pickupAvailabilityRequestPackageDetailsItem) {
            // validation for constraint: itemType
            if (!$pickupAvailabilityRequestPackageDetailsItem instanceof \CommerceFedEx\FedExPHP\Structs\RequestedPickupPackageDetail) {
                throw new \InvalidArgumentException(sprintf('The PackageDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\RequestedPickupPackageDetail, "%s" given', is_object($pickupAvailabilityRequestPackageDetailsItem) ? get_class($pickupAvailabilityRequestPackageDetailsItem) : gettype($pickupAvailabilityRequestPackageDetailsItem)), __LINE__);
            }
        }
        $this->PackageDetails = $packageDetails;
        return $this;
    }
    /**
     * Add item to PackageDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedPickupPackageDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function addToPackageDetails(\CommerceFedEx\FedExPHP\Structs\RequestedPickupPackageDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\RequestedPickupPackageDetail) {
            throw new \InvalidArgumentException(sprintf('The PackageDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\RequestedPickupPackageDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PackageDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest
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
