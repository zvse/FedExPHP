<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupShipmentAttributes Structs
 * @subpackage Structs
 */
class PickupShipmentAttributes extends AbstractStructBase
{
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceType;
    /**
     * The PackagingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackagingType;
    /**
     * The Dimensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Dimensions
     */
    public $Dimensions;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Weight
     */
    public $Weight;
    /**
     * Constructor method for PickupShipmentAttributes
     * @uses PickupShipmentAttributes::setServiceType()
     * @uses PickupShipmentAttributes::setPackagingType()
     * @uses PickupShipmentAttributes::setDimensions()
     * @uses PickupShipmentAttributes::setWeight()
     * @param string $serviceType
     * @param string $packagingType
     * @param \CommerceFedEx\FedExPHP\Structs\Dimensions $dimensions
     * @param \CommerceFedEx\FedExPHP\Structs\Weight $weight
     */
    public function __construct($serviceType = null, $packagingType = null, \CommerceFedEx\FedExPHP\Structs\Dimensions $dimensions = null, \CommerceFedEx\FedExPHP\Structs\Weight $weight = null)
    {
        $this
            ->setServiceType($serviceType)
            ->setPackagingType($packagingType)
            ->setDimensions($dimensions)
            ->setWeight($weight);
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
     * @return \CommerceFedEx\FedExPHP\Structs\PickupShipmentAttributes
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
     * Get PackagingType value
     * @return string|null
     */
    public function getPackagingType()
    {
        return $this->PackagingType;
    }
    /**
     * Set PackagingType value
     * @uses \CommerceFedEx\FedExPHP\Enums\PackagingType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\PackagingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packagingType
     * @return \CommerceFedEx\FedExPHP\Structs\PickupShipmentAttributes
     */
    public function setPackagingType($packagingType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\PackagingType::valueIsValid($packagingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packagingType, implode(', ', \CommerceFedEx\FedExPHP\Enums\PackagingType::getValidValues())), __LINE__);
        }
        $this->PackagingType = $packagingType;
        return $this;
    }
    /**
     * Get Dimensions value
     * @return \CommerceFedEx\FedExPHP\Structs\Dimensions|null
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    /**
     * Set Dimensions value
     * @param \CommerceFedEx\FedExPHP\Structs\Dimensions $dimensions
     * @return \CommerceFedEx\FedExPHP\Structs\PickupShipmentAttributes
     */
    public function setDimensions(\CommerceFedEx\FedExPHP\Structs\Dimensions $dimensions = null)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    /**
     * Get Weight value
     * @return \CommerceFedEx\FedExPHP\Structs\Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \CommerceFedEx\FedExPHP\Structs\Weight $weight
     * @return \CommerceFedEx\FedExPHP\Structs\PickupShipmentAttributes
     */
    public function setWeight(\CommerceFedEx\FedExPHP\Structs\Weight $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\PickupShipmentAttributes
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
