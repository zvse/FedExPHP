<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreciseQuantity Structs
 * @subpackage Structs
 */
class PreciseQuantity extends AbstractStructBase
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Amount;
    /**
     * The Units
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Units;
    /**
     * Constructor method for PreciseQuantity
     * @uses PreciseQuantity::setAmount()
     * @uses PreciseQuantity::setUnits()
     * @param float $amount
     * @param string $units
     */
    public function __construct($amount = null, $units = null)
    {
        $this
            ->setAmount($amount)
            ->setUnits($units);
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \CommerceFedEx\FedExPHP\Structs\PreciseQuantity
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get Units value
     * @return string|null
     */
    public function getUnits()
    {
        return $this->Units;
    }
    /**
     * Set Units value
     * @param string $units
     * @return \CommerceFedEx\FedExPHP\Structs\PreciseQuantity
     */
    public function setUnits($units = null)
    {
        // validation for constraint: string
        if (!is_null($units) && !is_string($units)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($units)), __LINE__);
        }
        $this->Units = $units;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\PreciseQuantity
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
