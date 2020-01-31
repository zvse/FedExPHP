<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomDiscountExclusionDetail Structs
 * @subpackage Structs
 */
class CustomDiscountExclusionDetail extends AbstractStructBase
{
    /**
     * The ExcludedTypes
     * Meta informations extracted from the WSDL
     * - documentation: Types of discounts that are excluded.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ExcludedTypes;
    /**
     * Constructor method for CustomDiscountExclusionDetail
     * @uses CustomDiscountExclusionDetail::setExcludedTypes()
     * @param string[] $excludedTypes
     */
    public function __construct(array $excludedTypes = array())
    {
        $this
            ->setExcludedTypes($excludedTypes);
    }
    /**
     * Get ExcludedTypes value
     * @return string[]|null
     */
    public function getExcludedTypes()
    {
        return $this->ExcludedTypes;
    }
    /**
     * Set ExcludedTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RateDiscountType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RateDiscountType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $excludedTypes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomDiscountExclusionDetail
     */
    public function setExcludedTypes(array $excludedTypes = array())
    {
        $invalidValues = array();
        foreach ($excludedTypes as $customDiscountExclusionDetailExcludedTypesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\RateDiscountType::valueIsValid($customDiscountExclusionDetailExcludedTypesItem)) {
                $invalidValues[] = var_export($customDiscountExclusionDetailExcludedTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\RateDiscountType::getValidValues())), __LINE__);
        }
        $this->ExcludedTypes = $excludedTypes;
        return $this;
    }
    /**
     * Add item to ExcludedTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RateDiscountType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RateDiscountType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomDiscountExclusionDetail
     */
    public function addToExcludedTypes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\RateDiscountType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\RateDiscountType::getValidValues())), __LINE__);
        }
        $this->ExcludedTypes[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomDiscountExclusionDetail
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
