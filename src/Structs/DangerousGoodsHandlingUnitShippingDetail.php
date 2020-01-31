<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DangerousGoodsHandlingUnitShippingDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: This provides the information needed for shipping, rating, validation, and label generation.
 * @subpackage Structs
 */
class DangerousGoodsHandlingUnitShippingDetail extends AbstractStructBase
{
    /**
     * The TrackingNumberUnits
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit[]
     */
    public $TrackingNumberUnits;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: The customer provided description for this handling unit.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The AircraftCategoryType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AircraftCategoryType;
    /**
     * The DangerousGoodsDescriptors
     * Meta informations extracted from the WSDL
     * - documentation: FOR FEDEX INTERNAL USE ONLY: These descriptors are used for shipping clients to apply the correct behavior for validation and label generation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DangerousGoodsDescriptors;
    /**
     * The Accessibility
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Accessibility;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Options;
    /**
     * The DryIceWeight
     * Meta informations extracted from the WSDL
     * - documentation: The total dry ice weight for this handling unit (or package).
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Weight
     */
    public $DryIceWeight;
    /**
     * Constructor method for DangerousGoodsHandlingUnitShippingDetail
     * @uses DangerousGoodsHandlingUnitShippingDetail::setTrackingNumberUnits()
     * @uses DangerousGoodsHandlingUnitShippingDetail::setDescription()
     * @uses DangerousGoodsHandlingUnitShippingDetail::setAircraftCategoryType()
     * @uses DangerousGoodsHandlingUnitShippingDetail::setDangerousGoodsDescriptors()
     * @uses DangerousGoodsHandlingUnitShippingDetail::setAccessibility()
     * @uses DangerousGoodsHandlingUnitShippingDetail::setOptions()
     * @uses DangerousGoodsHandlingUnitShippingDetail::setDryIceWeight()
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit[] $trackingNumberUnits
     * @param string $description
     * @param string $aircraftCategoryType
     * @param string[] $dangerousGoodsDescriptors
     * @param string $accessibility
     * @param string[] $options
     * @param \CommerceFedEx\FedExPHP\Structs\Weight $dryIceWeight
     */
    public function __construct(array $trackingNumberUnits = array(), $description = null, $aircraftCategoryType = null, array $dangerousGoodsDescriptors = array(), $accessibility = null, array $options = array(), \CommerceFedEx\FedExPHP\Structs\Weight $dryIceWeight = null)
    {
        $this
            ->setTrackingNumberUnits($trackingNumberUnits)
            ->setDescription($description)
            ->setAircraftCategoryType($aircraftCategoryType)
            ->setDangerousGoodsDescriptors($dangerousGoodsDescriptors)
            ->setAccessibility($accessibility)
            ->setOptions($options)
            ->setDryIceWeight($dryIceWeight);
    }
    /**
     * Get TrackingNumberUnits value
     * @return \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit[]|null
     */
    public function getTrackingNumberUnits()
    {
        return $this->TrackingNumberUnits;
    }
    /**
     * Set TrackingNumberUnits value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit[] $trackingNumberUnits
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail
     */
    public function setTrackingNumberUnits(array $trackingNumberUnits = array())
    {
        foreach ($trackingNumberUnits as $dangerousGoodsHandlingUnitShippingDetailTrackingNumberUnitsItem) {
            // validation for constraint: itemType
            if (!$dangerousGoodsHandlingUnitShippingDetailTrackingNumberUnitsItem instanceof \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit) {
                throw new \InvalidArgumentException(sprintf('The TrackingNumberUnits property can only contain items of \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit, "%s" given', is_object($dangerousGoodsHandlingUnitShippingDetailTrackingNumberUnitsItem) ? get_class($dangerousGoodsHandlingUnitShippingDetailTrackingNumberUnitsItem) : gettype($dangerousGoodsHandlingUnitShippingDetailTrackingNumberUnitsItem)), __LINE__);
            }
        }
        $this->TrackingNumberUnits = $trackingNumberUnits;
        return $this;
    }
    /**
     * Add item to TrackingNumberUnits value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit $item
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail
     */
    public function addToTrackingNumberUnits(\CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit) {
            throw new \InvalidArgumentException(sprintf('The TrackingNumberUnits property can only contain items of \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TrackingNumberUnits[] = $item;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get AircraftCategoryType value
     * @return string|null
     */
    public function getAircraftCategoryType()
    {
        return $this->AircraftCategoryType;
    }
    /**
     * Set AircraftCategoryType value
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsAircraftCategoryType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsAircraftCategoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $aircraftCategoryType
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail
     */
    public function setAircraftCategoryType($aircraftCategoryType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\DangerousGoodsAircraftCategoryType::valueIsValid($aircraftCategoryType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $aircraftCategoryType, implode(', ', \CommerceFedEx\FedExPHP\Enums\DangerousGoodsAircraftCategoryType::getValidValues())), __LINE__);
        }
        $this->AircraftCategoryType = $aircraftCategoryType;
        return $this;
    }
    /**
     * Get DangerousGoodsDescriptors value
     * @return string[]|null
     */
    public function getDangerousGoodsDescriptors()
    {
        return $this->DangerousGoodsDescriptors;
    }
    /**
     * Set DangerousGoodsDescriptors value
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsDescriptorType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsDescriptorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $dangerousGoodsDescriptors
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail
     */
    public function setDangerousGoodsDescriptors(array $dangerousGoodsDescriptors = array())
    {
        $invalidValues = array();
        foreach ($dangerousGoodsDescriptors as $dangerousGoodsHandlingUnitShippingDetailDangerousGoodsDescriptorsItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\DangerousGoodsDescriptorType::valueIsValid($dangerousGoodsHandlingUnitShippingDetailDangerousGoodsDescriptorsItem)) {
                $invalidValues[] = var_export($dangerousGoodsHandlingUnitShippingDetailDangerousGoodsDescriptorsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\DangerousGoodsDescriptorType::getValidValues())), __LINE__);
        }
        $this->DangerousGoodsDescriptors = $dangerousGoodsDescriptors;
        return $this;
    }
    /**
     * Add item to DangerousGoodsDescriptors value
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsDescriptorType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsDescriptorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail
     */
    public function addToDangerousGoodsDescriptors($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\DangerousGoodsDescriptorType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\DangerousGoodsDescriptorType::getValidValues())), __LINE__);
        }
        $this->DangerousGoodsDescriptors[] = $item;
        return $this;
    }
    /**
     * Get Accessibility value
     * @return string|null
     */
    public function getAccessibility()
    {
        return $this->Accessibility;
    }
    /**
     * Set Accessibility value
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsAccessibilityType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsAccessibilityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accessibility
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail
     */
    public function setAccessibility($accessibility = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\DangerousGoodsAccessibilityType::valueIsValid($accessibility)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $accessibility, implode(', ', \CommerceFedEx\FedExPHP\Enums\DangerousGoodsAccessibilityType::getValidValues())), __LINE__);
        }
        $this->Accessibility = $accessibility;
        return $this;
    }
    /**
     * Get Options value
     * @return string[]|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @uses \CommerceFedEx\FedExPHP\Enums\HazardousCommodityOptionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\HazardousCommodityOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $options
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail
     */
    public function setOptions(array $options = array())
    {
        $invalidValues = array();
        foreach ($options as $dangerousGoodsHandlingUnitShippingDetailOptionsItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\HazardousCommodityOptionType::valueIsValid($dangerousGoodsHandlingUnitShippingDetailOptionsItem)) {
                $invalidValues[] = var_export($dangerousGoodsHandlingUnitShippingDetailOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\HazardousCommodityOptionType::getValidValues())), __LINE__);
        }
        $this->Options = $options;
        return $this;
    }
    /**
     * Add item to Options value
     * @uses \CommerceFedEx\FedExPHP\Enums\HazardousCommodityOptionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\HazardousCommodityOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail
     */
    public function addToOptions($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\HazardousCommodityOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\HazardousCommodityOptionType::getValidValues())), __LINE__);
        }
        $this->Options[] = $item;
        return $this;
    }
    /**
     * Get DryIceWeight value
     * @return \CommerceFedEx\FedExPHP\Structs\Weight|null
     */
    public function getDryIceWeight()
    {
        return $this->DryIceWeight;
    }
    /**
     * Set DryIceWeight value
     * @param \CommerceFedEx\FedExPHP\Structs\Weight $dryIceWeight
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail
     */
    public function setDryIceWeight(\CommerceFedEx\FedExPHP\Structs\Weight $dryIceWeight = null)
    {
        $this->DryIceWeight = $dryIceWeight;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail
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
