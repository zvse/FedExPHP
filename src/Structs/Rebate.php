<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rebate Structs
 * @subpackage Structs
 */
class Rebate extends AbstractStructBase
{
    /**
     * The RebateType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RebateType;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $Amount;
    /**
     * The Percent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Percent;
    /**
     * Constructor method for Rebate
     * @uses Rebate::setRebateType()
     * @uses Rebate::setDescription()
     * @uses Rebate::setAmount()
     * @uses Rebate::setPercent()
     * @param string $rebateType
     * @param string $description
     * @param \CommerceFedEx\FedExPHP\Structs\Money $amount
     * @param float $percent
     */
    public function __construct($rebateType = null, $description = null, \CommerceFedEx\FedExPHP\Structs\Money $amount = null, $percent = null)
    {
        $this
            ->setRebateType($rebateType)
            ->setDescription($description)
            ->setAmount($amount)
            ->setPercent($percent);
    }
    /**
     * Get RebateType value
     * @return string|null
     */
    public function getRebateType()
    {
        return $this->RebateType;
    }
    /**
     * Set RebateType value
     * @uses \CommerceFedEx\FedExPHP\Enums\RebateType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\RebateType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $rebateType
     * @return \CommerceFedEx\FedExPHP\Structs\Rebate
     */
    public function setRebateType($rebateType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\RebateType::valueIsValid($rebateType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $rebateType, implode(', ', \CommerceFedEx\FedExPHP\Enums\RebateType::getValidValues())), __LINE__);
        }
        $this->RebateType = $rebateType;
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
     * @return \CommerceFedEx\FedExPHP\Structs\Rebate
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
     * Get Amount value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $amount
     * @return \CommerceFedEx\FedExPHP\Structs\Rebate
     */
    public function setAmount(\CommerceFedEx\FedExPHP\Structs\Money $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get Percent value
     * @return float|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param float $percent
     * @return \CommerceFedEx\FedExPHP\Structs\Rebate
     */
    public function setPercent($percent = null)
    {
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\Rebate
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
