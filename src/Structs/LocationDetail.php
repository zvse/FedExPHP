<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Describes an individual location providing a set of customer service features.
 * @subpackage Structs
 */
class LocationDetail extends AbstractStructBase
{
    /**
     * The LocationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LocationId;
    /**
     * The StoreNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $StoreNumber;
    /**
     * The LocationContactAndAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\LocationContactAndAddress
     */
    public $LocationContactAndAddress;
    /**
     * The SpecialInstructions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SpecialInstructions;
    /**
     * The GeographicCoordinates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GeographicCoordinates;
    /**
     * The LocationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LocationType;
    /**
     * The Attributes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Attributes;
    /**
     * The ClearanceLocationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Details about the clearance location.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ClearanceLocationDetail
     */
    public $ClearanceLocationDetail;
    /**
     * The ServicingLocationDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\LocationIdentificationDetail[]
     */
    public $ServicingLocationDetails;
    /**
     * The AcceptedCurrency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AcceptedCurrency;
    /**
     * The LocationHolidays
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Holiday[]
     */
    public $LocationHolidays;
    /**
     * The MapUrl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MapUrl;
    /**
     * The EntityId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EntityId;
    /**
     * The NormalHours
     * Meta informations extracted from the WSDL
     * - documentation: Normal operating hours for the location.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\LocationHours[]
     */
    public $NormalHours;
    /**
     * The ExceptionalHours
     * Meta informations extracted from the WSDL
     * - documentation: Operating hours for the location that are exception from the normal hours of operation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\LocationHours[]
     */
    public $ExceptionalHours;
    /**
     * The HoursForEffectiveDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\LocationHours[]
     */
    public $HoursForEffectiveDate;
    /**
     * The CarrierDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CarrierDetail[]
     */
    public $CarrierDetails;
    /**
     * Constructor method for LocationDetail
     * @uses LocationDetail::setLocationId()
     * @uses LocationDetail::setStoreNumber()
     * @uses LocationDetail::setLocationContactAndAddress()
     * @uses LocationDetail::setSpecialInstructions()
     * @uses LocationDetail::setGeographicCoordinates()
     * @uses LocationDetail::setLocationType()
     * @uses LocationDetail::setAttributes()
     * @uses LocationDetail::setClearanceLocationDetail()
     * @uses LocationDetail::setServicingLocationDetails()
     * @uses LocationDetail::setAcceptedCurrency()
     * @uses LocationDetail::setLocationHolidays()
     * @uses LocationDetail::setMapUrl()
     * @uses LocationDetail::setEntityId()
     * @uses LocationDetail::setNormalHours()
     * @uses LocationDetail::setExceptionalHours()
     * @uses LocationDetail::setHoursForEffectiveDate()
     * @uses LocationDetail::setCarrierDetails()
     * @param string $locationId
     * @param int $storeNumber
     * @param \CommerceFedEx\FedExPHP\Structs\LocationContactAndAddress $locationContactAndAddress
     * @param string $specialInstructions
     * @param string $geographicCoordinates
     * @param string $locationType
     * @param string[] $attributes
     * @param \CommerceFedEx\FedExPHP\Structs\ClearanceLocationDetail $clearanceLocationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\LocationIdentificationDetail[] $servicingLocationDetails
     * @param string $acceptedCurrency
     * @param \CommerceFedEx\FedExPHP\Structs\Holiday[] $locationHolidays
     * @param string $mapUrl
     * @param string $entityId
     * @param \CommerceFedEx\FedExPHP\Structs\LocationHours[] $normalHours
     * @param \CommerceFedEx\FedExPHP\Structs\LocationHours[] $exceptionalHours
     * @param \CommerceFedEx\FedExPHP\Structs\LocationHours[] $hoursForEffectiveDate
     * @param \CommerceFedEx\FedExPHP\Structs\CarrierDetail[] $carrierDetails
     */
    public function __construct($locationId = null, $storeNumber = null, \CommerceFedEx\FedExPHP\Structs\LocationContactAndAddress $locationContactAndAddress = null, $specialInstructions = null, $geographicCoordinates = null, $locationType = null, array $attributes = array(), \CommerceFedEx\FedExPHP\Structs\ClearanceLocationDetail $clearanceLocationDetail = null, array $servicingLocationDetails = array(), $acceptedCurrency = null, array $locationHolidays = array(), $mapUrl = null, $entityId = null, array $normalHours = array(), array $exceptionalHours = array(), array $hoursForEffectiveDate = array(), array $carrierDetails = array())
    {
        $this
            ->setLocationId($locationId)
            ->setStoreNumber($storeNumber)
            ->setLocationContactAndAddress($locationContactAndAddress)
            ->setSpecialInstructions($specialInstructions)
            ->setGeographicCoordinates($geographicCoordinates)
            ->setLocationType($locationType)
            ->setAttributes($attributes)
            ->setClearanceLocationDetail($clearanceLocationDetail)
            ->setServicingLocationDetails($servicingLocationDetails)
            ->setAcceptedCurrency($acceptedCurrency)
            ->setLocationHolidays($locationHolidays)
            ->setMapUrl($mapUrl)
            ->setEntityId($entityId)
            ->setNormalHours($normalHours)
            ->setExceptionalHours($exceptionalHours)
            ->setHoursForEffectiveDate($hoursForEffectiveDate)
            ->setCarrierDetails($carrierDetails);
    }
    /**
     * Get LocationId value
     * @return string|null
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }
    /**
     * Set LocationId value
     * @param string $locationId
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function setLocationId($locationId = null)
    {
        // validation for constraint: string
        if (!is_null($locationId) && !is_string($locationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationId)), __LINE__);
        }
        $this->LocationId = $locationId;
        return $this;
    }
    /**
     * Get StoreNumber value
     * @return int|null
     */
    public function getStoreNumber()
    {
        return $this->StoreNumber;
    }
    /**
     * Set StoreNumber value
     * @param int $storeNumber
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function setStoreNumber($storeNumber = null)
    {
        // validation for constraint: int
        if (!is_null($storeNumber) && !is_numeric($storeNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($storeNumber)), __LINE__);
        }
        $this->StoreNumber = $storeNumber;
        return $this;
    }
    /**
     * Get LocationContactAndAddress value
     * @return \CommerceFedEx\FedExPHP\Structs\LocationContactAndAddress|null
     */
    public function getLocationContactAndAddress()
    {
        return $this->LocationContactAndAddress;
    }
    /**
     * Set LocationContactAndAddress value
     * @param \CommerceFedEx\FedExPHP\Structs\LocationContactAndAddress $locationContactAndAddress
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function setLocationContactAndAddress(\CommerceFedEx\FedExPHP\Structs\LocationContactAndAddress $locationContactAndAddress = null)
    {
        $this->LocationContactAndAddress = $locationContactAndAddress;
        return $this;
    }
    /**
     * Get SpecialInstructions value
     * @return string|null
     */
    public function getSpecialInstructions()
    {
        return $this->SpecialInstructions;
    }
    /**
     * Set SpecialInstructions value
     * @param string $specialInstructions
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function setSpecialInstructions($specialInstructions = null)
    {
        // validation for constraint: string
        if (!is_null($specialInstructions) && !is_string($specialInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specialInstructions)), __LINE__);
        }
        $this->SpecialInstructions = $specialInstructions;
        return $this;
    }
    /**
     * Get GeographicCoordinates value
     * @return string|null
     */
    public function getGeographicCoordinates()
    {
        return $this->GeographicCoordinates;
    }
    /**
     * Set GeographicCoordinates value
     * @param string $geographicCoordinates
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function setGeographicCoordinates($geographicCoordinates = null)
    {
        // validation for constraint: string
        if (!is_null($geographicCoordinates) && !is_string($geographicCoordinates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($geographicCoordinates)), __LINE__);
        }
        $this->GeographicCoordinates = $geographicCoordinates;
        return $this;
    }
    /**
     * Get LocationType value
     * @return string|null
     */
    public function getLocationType()
    {
        return $this->LocationType;
    }
    /**
     * Set LocationType value
     * @uses \CommerceFedEx\FedExPHP\Enums\FedExLocationType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\FedExLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $locationType
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function setLocationType($locationType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\FedExLocationType::valueIsValid($locationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $locationType, implode(', ', \CommerceFedEx\FedExPHP\Enums\FedExLocationType::getValidValues())), __LINE__);
        }
        $this->LocationType = $locationType;
        return $this;
    }
    /**
     * Get Attributes value
     * @return string[]|null
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @uses \CommerceFedEx\FedExPHP\Enums\LocationAttributesType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\LocationAttributesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $attributes
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function setAttributes(array $attributes = array())
    {
        $invalidValues = array();
        foreach ($attributes as $locationDetailAttributesItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\LocationAttributesType::valueIsValid($locationDetailAttributesItem)) {
                $invalidValues[] = var_export($locationDetailAttributesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\LocationAttributesType::getValidValues())), __LINE__);
        }
        $this->Attributes = $attributes;
        return $this;
    }
    /**
     * Add item to Attributes value
     * @uses \CommerceFedEx\FedExPHP\Enums\LocationAttributesType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\LocationAttributesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function addToAttributes($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\LocationAttributesType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\LocationAttributesType::getValidValues())), __LINE__);
        }
        $this->Attributes[] = $item;
        return $this;
    }
    /**
     * Get ClearanceLocationDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ClearanceLocationDetail|null
     */
    public function getClearanceLocationDetail()
    {
        return $this->ClearanceLocationDetail;
    }
    /**
     * Set ClearanceLocationDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ClearanceLocationDetail $clearanceLocationDetail
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function setClearanceLocationDetail(\CommerceFedEx\FedExPHP\Structs\ClearanceLocationDetail $clearanceLocationDetail = null)
    {
        $this->ClearanceLocationDetail = $clearanceLocationDetail;
        return $this;
    }
    /**
     * Get ServicingLocationDetails value
     * @return \CommerceFedEx\FedExPHP\Structs\LocationIdentificationDetail[]|null
     */
    public function getServicingLocationDetails()
    {
        return $this->ServicingLocationDetails;
    }
    /**
     * Set ServicingLocationDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\LocationIdentificationDetail[] $servicingLocationDetails
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function setServicingLocationDetails(array $servicingLocationDetails = array())
    {
        foreach ($servicingLocationDetails as $locationDetailServicingLocationDetailsItem) {
            // validation for constraint: itemType
            if (!$locationDetailServicingLocationDetailsItem instanceof \CommerceFedEx\FedExPHP\Structs\LocationIdentificationDetail) {
                throw new \InvalidArgumentException(sprintf('The ServicingLocationDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\LocationIdentificationDetail, "%s" given', is_object($locationDetailServicingLocationDetailsItem) ? get_class($locationDetailServicingLocationDetailsItem) : gettype($locationDetailServicingLocationDetailsItem)), __LINE__);
            }
        }
        $this->ServicingLocationDetails = $servicingLocationDetails;
        return $this;
    }
    /**
     * Add item to ServicingLocationDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\LocationIdentificationDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function addToServicingLocationDetails(\CommerceFedEx\FedExPHP\Structs\LocationIdentificationDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\LocationIdentificationDetail) {
            throw new \InvalidArgumentException(sprintf('The ServicingLocationDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\LocationIdentificationDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ServicingLocationDetails[] = $item;
        return $this;
    }
    /**
     * Get AcceptedCurrency value
     * @return string|null
     */
    public function getAcceptedCurrency()
    {
        return $this->AcceptedCurrency;
    }
    /**
     * Set AcceptedCurrency value
     * @param string $acceptedCurrency
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function setAcceptedCurrency($acceptedCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($acceptedCurrency) && !is_string($acceptedCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($acceptedCurrency)), __LINE__);
        }
        $this->AcceptedCurrency = $acceptedCurrency;
        return $this;
    }
    /**
     * Get LocationHolidays value
     * @return \CommerceFedEx\FedExPHP\Structs\Holiday[]|null
     */
    public function getLocationHolidays()
    {
        return $this->LocationHolidays;
    }
    /**
     * Set LocationHolidays value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Holiday[] $locationHolidays
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function setLocationHolidays(array $locationHolidays = array())
    {
        foreach ($locationHolidays as $locationDetailLocationHolidaysItem) {
            // validation for constraint: itemType
            if (!$locationDetailLocationHolidaysItem instanceof \CommerceFedEx\FedExPHP\Structs\Holiday) {
                throw new \InvalidArgumentException(sprintf('The LocationHolidays property can only contain items of \CommerceFedEx\FedExPHP\Structs\Holiday, "%s" given', is_object($locationDetailLocationHolidaysItem) ? get_class($locationDetailLocationHolidaysItem) : gettype($locationDetailLocationHolidaysItem)), __LINE__);
            }
        }
        $this->LocationHolidays = $locationHolidays;
        return $this;
    }
    /**
     * Add item to LocationHolidays value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Holiday $item
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function addToLocationHolidays(\CommerceFedEx\FedExPHP\Structs\Holiday $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\Holiday) {
            throw new \InvalidArgumentException(sprintf('The LocationHolidays property can only contain items of \CommerceFedEx\FedExPHP\Structs\Holiday, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LocationHolidays[] = $item;
        return $this;
    }
    /**
     * Get MapUrl value
     * @return string|null
     */
    public function getMapUrl()
    {
        return $this->MapUrl;
    }
    /**
     * Set MapUrl value
     * @param string $mapUrl
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function setMapUrl($mapUrl = null)
    {
        // validation for constraint: string
        if (!is_null($mapUrl) && !is_string($mapUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mapUrl)), __LINE__);
        }
        $this->MapUrl = $mapUrl;
        return $this;
    }
    /**
     * Get EntityId value
     * @return string|null
     */
    public function getEntityId()
    {
        return $this->EntityId;
    }
    /**
     * Set EntityId value
     * @param string $entityId
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function setEntityId($entityId = null)
    {
        // validation for constraint: string
        if (!is_null($entityId) && !is_string($entityId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($entityId)), __LINE__);
        }
        $this->EntityId = $entityId;
        return $this;
    }
    /**
     * Get NormalHours value
     * @return \CommerceFedEx\FedExPHP\Structs\LocationHours[]|null
     */
    public function getNormalHours()
    {
        return $this->NormalHours;
    }
    /**
     * Set NormalHours value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\LocationHours[] $normalHours
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function setNormalHours(array $normalHours = array())
    {
        foreach ($normalHours as $locationDetailNormalHoursItem) {
            // validation for constraint: itemType
            if (!$locationDetailNormalHoursItem instanceof \CommerceFedEx\FedExPHP\Structs\LocationHours) {
                throw new \InvalidArgumentException(sprintf('The NormalHours property can only contain items of \CommerceFedEx\FedExPHP\Structs\LocationHours, "%s" given', is_object($locationDetailNormalHoursItem) ? get_class($locationDetailNormalHoursItem) : gettype($locationDetailNormalHoursItem)), __LINE__);
            }
        }
        $this->NormalHours = $normalHours;
        return $this;
    }
    /**
     * Add item to NormalHours value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\LocationHours $item
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function addToNormalHours(\CommerceFedEx\FedExPHP\Structs\LocationHours $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\LocationHours) {
            throw new \InvalidArgumentException(sprintf('The NormalHours property can only contain items of \CommerceFedEx\FedExPHP\Structs\LocationHours, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NormalHours[] = $item;
        return $this;
    }
    /**
     * Get ExceptionalHours value
     * @return \CommerceFedEx\FedExPHP\Structs\LocationHours[]|null
     */
    public function getExceptionalHours()
    {
        return $this->ExceptionalHours;
    }
    /**
     * Set ExceptionalHours value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\LocationHours[] $exceptionalHours
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function setExceptionalHours(array $exceptionalHours = array())
    {
        foreach ($exceptionalHours as $locationDetailExceptionalHoursItem) {
            // validation for constraint: itemType
            if (!$locationDetailExceptionalHoursItem instanceof \CommerceFedEx\FedExPHP\Structs\LocationHours) {
                throw new \InvalidArgumentException(sprintf('The ExceptionalHours property can only contain items of \CommerceFedEx\FedExPHP\Structs\LocationHours, "%s" given', is_object($locationDetailExceptionalHoursItem) ? get_class($locationDetailExceptionalHoursItem) : gettype($locationDetailExceptionalHoursItem)), __LINE__);
            }
        }
        $this->ExceptionalHours = $exceptionalHours;
        return $this;
    }
    /**
     * Add item to ExceptionalHours value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\LocationHours $item
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function addToExceptionalHours(\CommerceFedEx\FedExPHP\Structs\LocationHours $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\LocationHours) {
            throw new \InvalidArgumentException(sprintf('The ExceptionalHours property can only contain items of \CommerceFedEx\FedExPHP\Structs\LocationHours, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExceptionalHours[] = $item;
        return $this;
    }
    /**
     * Get HoursForEffectiveDate value
     * @return \CommerceFedEx\FedExPHP\Structs\LocationHours[]|null
     */
    public function getHoursForEffectiveDate()
    {
        return $this->HoursForEffectiveDate;
    }
    /**
     * Set HoursForEffectiveDate value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\LocationHours[] $hoursForEffectiveDate
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function setHoursForEffectiveDate(array $hoursForEffectiveDate = array())
    {
        foreach ($hoursForEffectiveDate as $locationDetailHoursForEffectiveDateItem) {
            // validation for constraint: itemType
            if (!$locationDetailHoursForEffectiveDateItem instanceof \CommerceFedEx\FedExPHP\Structs\LocationHours) {
                throw new \InvalidArgumentException(sprintf('The HoursForEffectiveDate property can only contain items of \CommerceFedEx\FedExPHP\Structs\LocationHours, "%s" given', is_object($locationDetailHoursForEffectiveDateItem) ? get_class($locationDetailHoursForEffectiveDateItem) : gettype($locationDetailHoursForEffectiveDateItem)), __LINE__);
            }
        }
        $this->HoursForEffectiveDate = $hoursForEffectiveDate;
        return $this;
    }
    /**
     * Add item to HoursForEffectiveDate value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\LocationHours $item
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function addToHoursForEffectiveDate(\CommerceFedEx\FedExPHP\Structs\LocationHours $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\LocationHours) {
            throw new \InvalidArgumentException(sprintf('The HoursForEffectiveDate property can only contain items of \CommerceFedEx\FedExPHP\Structs\LocationHours, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HoursForEffectiveDate[] = $item;
        return $this;
    }
    /**
     * Get CarrierDetails value
     * @return \CommerceFedEx\FedExPHP\Structs\CarrierDetail[]|null
     */
    public function getCarrierDetails()
    {
        return $this->CarrierDetails;
    }
    /**
     * Set CarrierDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CarrierDetail[] $carrierDetails
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function setCarrierDetails(array $carrierDetails = array())
    {
        foreach ($carrierDetails as $locationDetailCarrierDetailsItem) {
            // validation for constraint: itemType
            if (!$locationDetailCarrierDetailsItem instanceof \CommerceFedEx\FedExPHP\Structs\CarrierDetail) {
                throw new \InvalidArgumentException(sprintf('The CarrierDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\CarrierDetail, "%s" given', is_object($locationDetailCarrierDetailsItem) ? get_class($locationDetailCarrierDetailsItem) : gettype($locationDetailCarrierDetailsItem)), __LINE__);
            }
        }
        $this->CarrierDetails = $carrierDetails;
        return $this;
    }
    /**
     * Add item to CarrierDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CarrierDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public function addToCarrierDetails(\CommerceFedEx\FedExPHP\Structs\CarrierDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\CarrierDetail) {
            throw new \InvalidArgumentException(sprintf('The CarrierDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\CarrierDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CarrierDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail
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
