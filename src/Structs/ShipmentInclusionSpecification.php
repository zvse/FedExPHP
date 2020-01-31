<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentInclusionSpecification Structs
 * @subpackage Structs
 */
class ShipmentInclusionSpecification extends AbstractStructBase
{
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies which carrier should be included.
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * The ServiceCategory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceCategory;
    /**
     * Constructor method for ShipmentInclusionSpecification
     * @uses ShipmentInclusionSpecification::setCarrierCode()
     * @uses ShipmentInclusionSpecification::setServiceCategory()
     * @param string $carrierCode
     * @param string $serviceCategory
     */
    public function __construct($carrierCode = null, $serviceCategory = null)
    {
        $this
            ->setCarrierCode($carrierCode)
            ->setServiceCategory($serviceCategory);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrierCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentInclusionSpecification
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierCode, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceCategoryType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceCategoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $serviceCategory
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentInclusionSpecification
     */
    public function setServiceCategory($serviceCategory = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ServiceCategoryType::valueIsValid($serviceCategory)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $serviceCategory, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ServiceCategoryType::getValidValues())), __LINE__);
        }
        $this->ServiceCategory = $serviceCategory;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentInclusionSpecification
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
