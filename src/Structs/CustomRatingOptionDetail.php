<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomRatingOptionDetail Structs
 * @subpackage Structs
 */
class CustomRatingOptionDetail extends AbstractStructBase
{
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Options;
    /**
     * The CustomDiscountExclusionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CustomDiscountExclusionDetail
     */
    public $CustomDiscountExclusionDetail;
    /**
     * Constructor method for CustomRatingOptionDetail
     * @uses CustomRatingOptionDetail::setOptions()
     * @uses CustomRatingOptionDetail::setCustomDiscountExclusionDetail()
     * @param string[] $options
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomDiscountExclusionDetail $customDiscountExclusionDetail
     */
    public function __construct(array $options = array(), \NicholasCreativeMedia\FedExPHP\Structs\CustomDiscountExclusionDetail $customDiscountExclusionDetail = null)
    {
        $this
            ->setOptions($options)
            ->setCustomDiscountExclusionDetail($customDiscountExclusionDetail);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CustomRatingOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CustomRatingOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $options
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomRatingOptionDetail
     */
    public function setOptions(array $options = array())
    {
        $invalidValues = array();
        foreach ($options as $customRatingOptionDetailOptionsItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\CustomRatingOptionType::valueIsValid($customRatingOptionDetailOptionsItem)) {
                $invalidValues[] = var_export($customRatingOptionDetailOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CustomRatingOptionType::getValidValues())), __LINE__);
        }
        $this->Options = $options;
        return $this;
    }
    /**
     * Add item to Options value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CustomRatingOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CustomRatingOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomRatingOptionDetail
     */
    public function addToOptions($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CustomRatingOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CustomRatingOptionType::getValidValues())), __LINE__);
        }
        $this->Options[] = $item;
        return $this;
    }
    /**
     * Get CustomDiscountExclusionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomDiscountExclusionDetail|null
     */
    public function getCustomDiscountExclusionDetail()
    {
        return $this->CustomDiscountExclusionDetail;
    }
    /**
     * Set CustomDiscountExclusionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomDiscountExclusionDetail $customDiscountExclusionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomRatingOptionDetail
     */
    public function setCustomDiscountExclusionDetail(\NicholasCreativeMedia\FedExPHP\Structs\CustomDiscountExclusionDetail $customDiscountExclusionDetail = null)
    {
        $this->CustomDiscountExclusionDetail = $customDiscountExclusionDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomRatingOptionDetail
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
