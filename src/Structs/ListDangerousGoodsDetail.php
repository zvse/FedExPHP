<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListDangerousGoodsDetail Structs
 * @subpackage Structs
 */
class ListDangerousGoodsDetail extends AbstractStructBase
{
    /**
     * The TrackingNumbers
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $TrackingNumbers;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Specifies detailed commodity information related to the regulations.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
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
     * Constructor method for ListDangerousGoodsDetail
     * @uses ListDangerousGoodsDetail::setTrackingNumbers()
     * @uses ListDangerousGoodsDetail::setDescription()
     * @uses ListDangerousGoodsDetail::setAccessibility()
     * @uses ListDangerousGoodsDetail::setOptions()
     * @param string[] $trackingNumbers
     * @param string $description
     * @param string $accessibility
     * @param string[] $options
     */
    public function __construct(array $trackingNumbers = array(), $description = null, $accessibility = null, array $options = array())
    {
        $this
            ->setTrackingNumbers($trackingNumbers)
            ->setDescription($description)
            ->setAccessibility($accessibility)
            ->setOptions($options);
    }
    /**
     * Get TrackingNumbers value
     * @return string[]|null
     */
    public function getTrackingNumbers()
    {
        return $this->TrackingNumbers;
    }
    /**
     * Set TrackingNumbers value
     * @throws \InvalidArgumentException
     * @param string[] $trackingNumbers
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsDetail
     */
    public function setTrackingNumbers(array $trackingNumbers = array())
    {
        foreach ($trackingNumbers as $listDangerousGoodsDetailTrackingNumbersItem) {
            // validation for constraint: itemType
            if (!is_string($listDangerousGoodsDetailTrackingNumbersItem)) {
                throw new \InvalidArgumentException(sprintf('The TrackingNumbers property can only contain items of string, "%s" given', is_object($listDangerousGoodsDetailTrackingNumbersItem) ? get_class($listDangerousGoodsDetailTrackingNumbersItem) : gettype($listDangerousGoodsDetailTrackingNumbersItem)), __LINE__);
            }
        }
        $this->TrackingNumbers = $trackingNumbers;
        return $this;
    }
    /**
     * Add item to TrackingNumbers value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsDetail
     */
    public function addToTrackingNumbers($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The TrackingNumbers property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TrackingNumbers[] = $item;
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
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsDetail
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
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsDetail
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
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsDetail
     */
    public function setOptions(array $options = array())
    {
        $invalidValues = array();
        foreach ($options as $listDangerousGoodsDetailOptionsItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\HazardousCommodityOptionType::valueIsValid($listDangerousGoodsDetailOptionsItem)) {
                $invalidValues[] = var_export($listDangerousGoodsDetailOptionsItem);
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
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsDetail
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsDetail
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
