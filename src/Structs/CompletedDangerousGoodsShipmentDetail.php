<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedDangerousGoodsShipmentDetail Structs
 * @subpackage Structs
 */
class CompletedDangerousGoodsShipmentDetail extends AbstractStructBase
{
    /**
     * The Regulation
     * Meta informations extracted from the WSDL
     * - documentation: The regulation under which the DG data has been validated.
     * - minOccurs: 0
     * @var string
     */
    public $Regulation;
    /**
     * The RegulationAttributes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RegulationAttributes;
    /**
     * The TotalHandlingUnitCount
     * Meta informations extracted from the WSDL
     * - documentation: The total number of DG handling units (or packages) in the shipment.
     * - minOccurs: 0
     * @var int
     */
    public $TotalHandlingUnitCount;
    /**
     * The AircraftCategoryType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of aircraft category allowed for the shipment.
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
     * The ShipmentDryIceDetail
     * Meta informations extracted from the WSDL
     * - documentation: The total dry ice information for the shipment.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail
     */
    public $ShipmentDryIceDetail;
    /**
     * The ExpirationDate
     * Meta informations extracted from the WSDL
     * - documentation: The date on which previously uploaded dangerous goods data will expire and no longer be accessible.
     * - minOccurs: 0
     * @var string
     */
    public $ExpirationDate;
    /**
     * Constructor method for CompletedDangerousGoodsShipmentDetail
     * @uses CompletedDangerousGoodsShipmentDetail::setRegulation()
     * @uses CompletedDangerousGoodsShipmentDetail::setRegulationAttributes()
     * @uses CompletedDangerousGoodsShipmentDetail::setTotalHandlingUnitCount()
     * @uses CompletedDangerousGoodsShipmentDetail::setAircraftCategoryType()
     * @uses CompletedDangerousGoodsShipmentDetail::setDangerousGoodsDescriptors()
     * @uses CompletedDangerousGoodsShipmentDetail::setAccessibility()
     * @uses CompletedDangerousGoodsShipmentDetail::setOptions()
     * @uses CompletedDangerousGoodsShipmentDetail::setShipmentDryIceDetail()
     * @uses CompletedDangerousGoodsShipmentDetail::setExpirationDate()
     * @param string $regulation
     * @param string[] $regulationAttributes
     * @param int $totalHandlingUnitCount
     * @param string $aircraftCategoryType
     * @param string[] $dangerousGoodsDescriptors
     * @param string $accessibility
     * @param string[] $options
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail $shipmentDryIceDetail
     * @param string $expirationDate
     */
    public function __construct($regulation = null, array $regulationAttributes = array(), $totalHandlingUnitCount = null, $aircraftCategoryType = null, array $dangerousGoodsDescriptors = array(), $accessibility = null, array $options = array(), \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail $shipmentDryIceDetail = null, $expirationDate = null)
    {
        $this
            ->setRegulation($regulation)
            ->setRegulationAttributes($regulationAttributes)
            ->setTotalHandlingUnitCount($totalHandlingUnitCount)
            ->setAircraftCategoryType($aircraftCategoryType)
            ->setDangerousGoodsDescriptors($dangerousGoodsDescriptors)
            ->setAccessibility($accessibility)
            ->setOptions($options)
            ->setShipmentDryIceDetail($shipmentDryIceDetail)
            ->setExpirationDate($expirationDate);
    }
    /**
     * Get Regulation value
     * @return string|null
     */
    public function getRegulation()
    {
        return $this->Regulation;
    }
    /**
     * Set Regulation value
     * @uses \CommerceFedEx\FedExPHP\Enums\HazardousCommodityRegulationType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\HazardousCommodityRegulationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $regulation
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail
     */
    public function setRegulation($regulation = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\HazardousCommodityRegulationType::valueIsValid($regulation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $regulation, implode(', ', \CommerceFedEx\FedExPHP\Enums\HazardousCommodityRegulationType::getValidValues())), __LINE__);
        }
        $this->Regulation = $regulation;
        return $this;
    }
    /**
     * Get RegulationAttributes value
     * @return string[]|null
     */
    public function getRegulationAttributes()
    {
        return $this->RegulationAttributes;
    }
    /**
     * Set RegulationAttributes value
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsRegulationAttributeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsRegulationAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $regulationAttributes
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail
     */
    public function setRegulationAttributes(array $regulationAttributes = array())
    {
        $invalidValues = array();
        foreach ($regulationAttributes as $completedDangerousGoodsShipmentDetailRegulationAttributesItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\DangerousGoodsRegulationAttributeType::valueIsValid($completedDangerousGoodsShipmentDetailRegulationAttributesItem)) {
                $invalidValues[] = var_export($completedDangerousGoodsShipmentDetailRegulationAttributesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\DangerousGoodsRegulationAttributeType::getValidValues())), __LINE__);
        }
        $this->RegulationAttributes = $regulationAttributes;
        return $this;
    }
    /**
     * Add item to RegulationAttributes value
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsRegulationAttributeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsRegulationAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail
     */
    public function addToRegulationAttributes($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\DangerousGoodsRegulationAttributeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\DangerousGoodsRegulationAttributeType::getValidValues())), __LINE__);
        }
        $this->RegulationAttributes[] = $item;
        return $this;
    }
    /**
     * Get TotalHandlingUnitCount value
     * @return int|null
     */
    public function getTotalHandlingUnitCount()
    {
        return $this->TotalHandlingUnitCount;
    }
    /**
     * Set TotalHandlingUnitCount value
     * @param int $totalHandlingUnitCount
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail
     */
    public function setTotalHandlingUnitCount($totalHandlingUnitCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalHandlingUnitCount) && !is_numeric($totalHandlingUnitCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalHandlingUnitCount)), __LINE__);
        }
        $this->TotalHandlingUnitCount = $totalHandlingUnitCount;
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
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail
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
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail
     */
    public function setDangerousGoodsDescriptors(array $dangerousGoodsDescriptors = array())
    {
        $invalidValues = array();
        foreach ($dangerousGoodsDescriptors as $completedDangerousGoodsShipmentDetailDangerousGoodsDescriptorsItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\DangerousGoodsDescriptorType::valueIsValid($completedDangerousGoodsShipmentDetailDangerousGoodsDescriptorsItem)) {
                $invalidValues[] = var_export($completedDangerousGoodsShipmentDetailDangerousGoodsDescriptorsItem);
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
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail
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
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail
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
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail
     */
    public function setOptions(array $options = array())
    {
        $invalidValues = array();
        foreach ($options as $completedDangerousGoodsShipmentDetailOptionsItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\HazardousCommodityOptionType::valueIsValid($completedDangerousGoodsShipmentDetailOptionsItem)) {
                $invalidValues[] = var_export($completedDangerousGoodsShipmentDetailOptionsItem);
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
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail
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
     * Get ShipmentDryIceDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail|null
     */
    public function getShipmentDryIceDetail()
    {
        return $this->ShipmentDryIceDetail;
    }
    /**
     * Set ShipmentDryIceDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail $shipmentDryIceDetail
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail
     */
    public function setShipmentDryIceDetail(\CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail $shipmentDryIceDetail = null)
    {
        $this->ShipmentDryIceDetail = $shipmentDryIceDetail;
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail
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
