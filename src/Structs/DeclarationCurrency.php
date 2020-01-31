<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeclarationCurrency Structs
 * @subpackage Structs
 */
class DeclarationCurrency extends AbstractStructBase
{
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Currency;
    /**
     * Constructor method for DeclarationCurrency
     * @uses DeclarationCurrency::setValue()
     * @uses DeclarationCurrency::setCurrency()
     * @param string $value
     * @param string $currency
     */
    public function __construct($value = null, $currency = null)
    {
        $this
            ->setValue($value)
            ->setCurrency($currency);
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DeclarationValueType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DeclarationValueType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeclarationCurrency
     */
    public function setValue($value = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DeclarationValueType::valueIsValid($value)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $value, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DeclarationValueType::getValidValues())), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeclarationCurrency
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeclarationCurrency
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
