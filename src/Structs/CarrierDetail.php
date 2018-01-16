<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarrierDetail Structs
 * @subpackage Structs
 */
class CarrierDetail extends AbstractStructBase
{
    /**
     * The Carrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Carrier;
    /**
     * The ServiceCategory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceCategory;
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceType;
    /**
     * The CountryRelationship
     * Meta informations extracted from the WSDL
     * - documentation: This field describe a subset of the carrier's products or services which may have unique characteristics: i.e. latest drop-off times at a particular location vary depending on the destination type.
     * - minOccurs: 0
     * @var string
     */
    public $CountryRelationship;
    /**
     * The NormalLatestDropOffDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about the latest times a drop off can be made at a location most days. These are the normal drop off times.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail[]
     */
    public $NormalLatestDropOffDetails;
    /**
     * The ExceptionalLatestDropOffDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about the exceptional latest times a drop off can be made at a location. These are drop off times that are a variation from the normal drop off times.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail[]
     */
    public $ExceptionalLatestDropOffDetails;
    /**
     * The EffectiveLatestDropOffDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about the effective latest times drop off can be made at a location on the date requested. These are drop off times that are derived from the normal and exceptional drop off times, depending upon the date
     * requested.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail
     */
    public $EffectiveLatestDropOffDetails;
    /**
     * The ShippingHolidays
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShippingHoliday[]
     */
    public $ShippingHolidays;
    /**
     * Constructor method for CarrierDetail
     * @uses CarrierDetail::setCarrier()
     * @uses CarrierDetail::setServiceCategory()
     * @uses CarrierDetail::setServiceType()
     * @uses CarrierDetail::setCountryRelationship()
     * @uses CarrierDetail::setNormalLatestDropOffDetails()
     * @uses CarrierDetail::setExceptionalLatestDropOffDetails()
     * @uses CarrierDetail::setEffectiveLatestDropOffDetails()
     * @uses CarrierDetail::setShippingHolidays()
     * @param string $carrier
     * @param string $serviceCategory
     * @param string $serviceType
     * @param string $countryRelationship
     * @param \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail[] $normalLatestDropOffDetails
     * @param \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail[] $exceptionalLatestDropOffDetails
     * @param \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail $effectiveLatestDropOffDetails
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingHoliday[] $shippingHolidays
     */
    public function __construct($carrier = null, $serviceCategory = null, $serviceType = null, $countryRelationship = null, array $normalLatestDropOffDetails = array(), array $exceptionalLatestDropOffDetails = array(), \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail $effectiveLatestDropOffDetails = null, array $shippingHolidays = array())
    {
        $this
            ->setCarrier($carrier)
            ->setServiceCategory($serviceCategory)
            ->setServiceType($serviceType)
            ->setCountryRelationship($countryRelationship)
            ->setNormalLatestDropOffDetails($normalLatestDropOffDetails)
            ->setExceptionalLatestDropOffDetails($exceptionalLatestDropOffDetails)
            ->setEffectiveLatestDropOffDetails($effectiveLatestDropOffDetails)
            ->setShippingHolidays($shippingHolidays);
    }
    /**
     * Get Carrier value
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrier
     * @return \CommerceFedEx\FedExPHP\Structs\CarrierDetail
     */
    public function setCarrier($carrier = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid($carrier)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrier, implode(', ', \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->Carrier = $carrier;
        return $this;
    }
    /**
     * Get ServiceCategory value
     * @return string|null
     */
    public function getServiceCategory()
    {
        return $this->ServiceCategory;
    }
    /**
     * Set ServiceCategory value
     * @uses \CommerceFedEx\FedExPHP\Enums\ServiceCategoryType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ServiceCategoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $serviceCategory
     * @return \CommerceFedEx\FedExPHP\Structs\CarrierDetail
     */
    public function setServiceCategory($serviceCategory = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ServiceCategoryType::valueIsValid($serviceCategory)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $serviceCategory, implode(', ', \CommerceFedEx\FedExPHP\Enums\ServiceCategoryType::getValidValues())), __LINE__);
        }
        $this->ServiceCategory = $serviceCategory;
        return $this;
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @uses \CommerceFedEx\FedExPHP\Enums\ServiceType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $serviceType
     * @return \CommerceFedEx\FedExPHP\Structs\CarrierDetail
     */
    public function setServiceType($serviceType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ServiceType::valueIsValid($serviceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $serviceType, implode(', ', \CommerceFedEx\FedExPHP\Enums\ServiceType::getValidValues())), __LINE__);
        }
        $this->ServiceType = $serviceType;
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
     * @return \CommerceFedEx\FedExPHP\Structs\CarrierDetail
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
     * Get NormalLatestDropOffDetails value
     * @return \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail[]|null
     */
    public function getNormalLatestDropOffDetails()
    {
        return $this->NormalLatestDropOffDetails;
    }
    /**
     * Set NormalLatestDropOffDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail[] $normalLatestDropOffDetails
     * @return \CommerceFedEx\FedExPHP\Structs\CarrierDetail
     */
    public function setNormalLatestDropOffDetails(array $normalLatestDropOffDetails = array())
    {
        foreach ($normalLatestDropOffDetails as $carrierDetailNormalLatestDropOffDetailsItem) {
            // validation for constraint: itemType
            if (!$carrierDetailNormalLatestDropOffDetailsItem instanceof \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail) {
                throw new \InvalidArgumentException(sprintf('The NormalLatestDropOffDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail, "%s" given', is_object($carrierDetailNormalLatestDropOffDetailsItem) ? get_class($carrierDetailNormalLatestDropOffDetailsItem) : gettype($carrierDetailNormalLatestDropOffDetailsItem)), __LINE__);
            }
        }
        $this->NormalLatestDropOffDetails = $normalLatestDropOffDetails;
        return $this;
    }
    /**
     * Add item to NormalLatestDropOffDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\CarrierDetail
     */
    public function addToNormalLatestDropOffDetails(\CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail) {
            throw new \InvalidArgumentException(sprintf('The NormalLatestDropOffDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NormalLatestDropOffDetails[] = $item;
        return $this;
    }
    /**
     * Get ExceptionalLatestDropOffDetails value
     * @return \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail[]|null
     */
    public function getExceptionalLatestDropOffDetails()
    {
        return $this->ExceptionalLatestDropOffDetails;
    }
    /**
     * Set ExceptionalLatestDropOffDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail[] $exceptionalLatestDropOffDetails
     * @return \CommerceFedEx\FedExPHP\Structs\CarrierDetail
     */
    public function setExceptionalLatestDropOffDetails(array $exceptionalLatestDropOffDetails = array())
    {
        foreach ($exceptionalLatestDropOffDetails as $carrierDetailExceptionalLatestDropOffDetailsItem) {
            // validation for constraint: itemType
            if (!$carrierDetailExceptionalLatestDropOffDetailsItem instanceof \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail) {
                throw new \InvalidArgumentException(sprintf('The ExceptionalLatestDropOffDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail, "%s" given', is_object($carrierDetailExceptionalLatestDropOffDetailsItem) ? get_class($carrierDetailExceptionalLatestDropOffDetailsItem) : gettype($carrierDetailExceptionalLatestDropOffDetailsItem)), __LINE__);
            }
        }
        $this->ExceptionalLatestDropOffDetails = $exceptionalLatestDropOffDetails;
        return $this;
    }
    /**
     * Add item to ExceptionalLatestDropOffDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\CarrierDetail
     */
    public function addToExceptionalLatestDropOffDetails(\CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail) {
            throw new \InvalidArgumentException(sprintf('The ExceptionalLatestDropOffDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExceptionalLatestDropOffDetails[] = $item;
        return $this;
    }
    /**
     * Get EffectiveLatestDropOffDetails value
     * @return \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail|null
     */
    public function getEffectiveLatestDropOffDetails()
    {
        return $this->EffectiveLatestDropOffDetails;
    }
    /**
     * Set EffectiveLatestDropOffDetails value
     * @param \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail $effectiveLatestDropOffDetails
     * @return \CommerceFedEx\FedExPHP\Structs\CarrierDetail
     */
    public function setEffectiveLatestDropOffDetails(\CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail $effectiveLatestDropOffDetails = null)
    {
        $this->EffectiveLatestDropOffDetails = $effectiveLatestDropOffDetails;
        return $this;
    }
    /**
     * Get ShippingHolidays value
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingHoliday[]|null
     */
    public function getShippingHolidays()
    {
        return $this->ShippingHolidays;
    }
    /**
     * Set ShippingHolidays value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingHoliday[] $shippingHolidays
     * @return \CommerceFedEx\FedExPHP\Structs\CarrierDetail
     */
    public function setShippingHolidays(array $shippingHolidays = array())
    {
        foreach ($shippingHolidays as $carrierDetailShippingHolidaysItem) {
            // validation for constraint: itemType
            if (!$carrierDetailShippingHolidaysItem instanceof \CommerceFedEx\FedExPHP\Structs\ShippingHoliday) {
                throw new \InvalidArgumentException(sprintf('The ShippingHolidays property can only contain items of \CommerceFedEx\FedExPHP\Structs\ShippingHoliday, "%s" given', is_object($carrierDetailShippingHolidaysItem) ? get_class($carrierDetailShippingHolidaysItem) : gettype($carrierDetailShippingHolidaysItem)), __LINE__);
            }
        }
        $this->ShippingHolidays = $shippingHolidays;
        return $this;
    }
    /**
     * Add item to ShippingHolidays value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingHoliday $item
     * @return \CommerceFedEx\FedExPHP\Structs\CarrierDetail
     */
    public function addToShippingHolidays(\CommerceFedEx\FedExPHP\Structs\ShippingHoliday $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\ShippingHoliday) {
            throw new \InvalidArgumentException(sprintf('The ShippingHolidays property can only contain items of \CommerceFedEx\FedExPHP\Structs\ShippingHoliday, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShippingHolidays[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CarrierDetail
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
