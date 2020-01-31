<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalDistributionDetail Structs
 * @subpackage Structs
 */
class InternationalDistributionDetail extends AbstractStructBase
{
    /**
     * The DropoffType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DropoffType;
    /**
     * The TotalDimensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Dimensions
     */
    public $TotalDimensions;
    /**
     * The TotalInsuredValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $TotalInsuredValue;
    /**
     * The UnitSystem
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UnitSystem;
    /**
     * The DeclarationCurrencies
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DeclarationCurrency[]
     */
    public $DeclarationCurrencies;
    /**
     * The ClearanceFacilityLocationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClearanceFacilityLocationId;
    /**
     * Constructor method for InternationalDistributionDetail
     * @uses InternationalDistributionDetail::setDropoffType()
     * @uses InternationalDistributionDetail::setTotalDimensions()
     * @uses InternationalDistributionDetail::setTotalInsuredValue()
     * @uses InternationalDistributionDetail::setUnitSystem()
     * @uses InternationalDistributionDetail::setDeclarationCurrencies()
     * @uses InternationalDistributionDetail::setClearanceFacilityLocationId()
     * @param string $dropoffType
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $totalDimensions
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalInsuredValue
     * @param string $unitSystem
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeclarationCurrency[] $declarationCurrencies
     * @param string $clearanceFacilityLocationId
     */
    public function __construct($dropoffType = null, \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $totalDimensions = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $totalInsuredValue = null, $unitSystem = null, array $declarationCurrencies = array(), $clearanceFacilityLocationId = null)
    {
        $this
            ->setDropoffType($dropoffType)
            ->setTotalDimensions($totalDimensions)
            ->setTotalInsuredValue($totalInsuredValue)
            ->setUnitSystem($unitSystem)
            ->setDeclarationCurrencies($declarationCurrencies)
            ->setClearanceFacilityLocationId($clearanceFacilityLocationId);
    }
    /**
     * Get DropoffType value
     * @return string|null
     */
    public function getDropoffType()
    {
        return $this->DropoffType;
    }
    /**
     * Set DropoffType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DropoffType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DropoffType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dropoffType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionDetail
     */
    public function setDropoffType($dropoffType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DropoffType::valueIsValid($dropoffType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dropoffType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DropoffType::getValidValues())), __LINE__);
        }
        $this->DropoffType = $dropoffType;
        return $this;
    }
    /**
     * Get TotalDimensions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Dimensions|null
     */
    public function getTotalDimensions()
    {
        return $this->TotalDimensions;
    }
    /**
     * Set TotalDimensions value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $totalDimensions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionDetail
     */
    public function setTotalDimensions(\NicholasCreativeMedia\FedExPHP\Structs\Dimensions $totalDimensions = null)
    {
        $this->TotalDimensions = $totalDimensions;
        return $this;
    }
    /**
     * Get TotalInsuredValue value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getTotalInsuredValue()
    {
        return $this->TotalInsuredValue;
    }
    /**
     * Set TotalInsuredValue value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalInsuredValue
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionDetail
     */
    public function setTotalInsuredValue(\NicholasCreativeMedia\FedExPHP\Structs\Money $totalInsuredValue = null)
    {
        $this->TotalInsuredValue = $totalInsuredValue;
        return $this;
    }
    /**
     * Get UnitSystem value
     * @return string|null
     */
    public function getUnitSystem()
    {
        return $this->UnitSystem;
    }
    /**
     * Set UnitSystem value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\UnitSystemType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\UnitSystemType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $unitSystem
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionDetail
     */
    public function setUnitSystem($unitSystem = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\UnitSystemType::valueIsValid($unitSystem)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $unitSystem, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\UnitSystemType::getValidValues())), __LINE__);
        }
        $this->UnitSystem = $unitSystem;
        return $this;
    }
    /**
     * Get DeclarationCurrencies value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeclarationCurrency[]|null
     */
    public function getDeclarationCurrencies()
    {
        return $this->DeclarationCurrencies;
    }
    /**
     * Set DeclarationCurrencies value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeclarationCurrency[] $declarationCurrencies
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionDetail
     */
    public function setDeclarationCurrencies(array $declarationCurrencies = array())
    {
        foreach ($declarationCurrencies as $internationalDistributionDetailDeclarationCurrenciesItem) {
            // validation for constraint: itemType
            if (!$internationalDistributionDetailDeclarationCurrenciesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\DeclarationCurrency) {
                throw new \InvalidArgumentException(sprintf('The DeclarationCurrencies property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\DeclarationCurrency, "%s" given', is_object($internationalDistributionDetailDeclarationCurrenciesItem) ? get_class($internationalDistributionDetailDeclarationCurrenciesItem) : gettype($internationalDistributionDetailDeclarationCurrenciesItem)), __LINE__);
            }
        }
        $this->DeclarationCurrencies = $declarationCurrencies;
        return $this;
    }
    /**
     * Add item to DeclarationCurrencies value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeclarationCurrency $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionDetail
     */
    public function addToDeclarationCurrencies(\NicholasCreativeMedia\FedExPHP\Structs\DeclarationCurrency $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\DeclarationCurrency) {
            throw new \InvalidArgumentException(sprintf('The DeclarationCurrencies property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\DeclarationCurrency, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DeclarationCurrencies[] = $item;
        return $this;
    }
    /**
     * Get ClearanceFacilityLocationId value
     * @return string|null
     */
    public function getClearanceFacilityLocationId()
    {
        return $this->ClearanceFacilityLocationId;
    }
    /**
     * Set ClearanceFacilityLocationId value
     * @param string $clearanceFacilityLocationId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionDetail
     */
    public function setClearanceFacilityLocationId($clearanceFacilityLocationId = null)
    {
        // validation for constraint: string
        if (!is_null($clearanceFacilityLocationId) && !is_string($clearanceFacilityLocationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clearanceFacilityLocationId)), __LINE__);
        }
        $this->ClearanceFacilityLocationId = $clearanceFacilityLocationId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionDetail
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
