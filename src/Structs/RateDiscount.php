<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateDiscount Structs
 * @subpackage Structs
 */
class RateDiscount extends AbstractStructBase
{
    /**
     * The RateDiscountType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RateDiscountType;
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
     * Constructor method for RateDiscount
     * @uses RateDiscount::setRateDiscountType()
     * @uses RateDiscount::setDescription()
     * @uses RateDiscount::setAmount()
     * @uses RateDiscount::setPercent()
     * @param string $rateDiscountType
     * @param string $description
     * @param \CommerceFedEx\FedExPHP\Structs\Money $amount
     * @param float $percent
     */
    public function __construct($rateDiscountType = null, $description = null, \CommerceFedEx\FedExPHP\Structs\Money $amount = null, $percent = null)
    {
        $this
            ->setRateDiscountType($rateDiscountType)
            ->setDescription($description)
            ->setAmount($amount)
            ->setPercent($percent);
    }
    /**
     * Get RateDiscountType value
     * @return string|null
     */
    public function getRateDiscountType()
    {
        return $this->RateDiscountType;
    }
    /**
     * Set RateDiscountType value
     * @uses \CommerceFedEx\FedExPHP\Enums\RateDiscountType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\RateDiscountType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $rateDiscountType
     * @return \CommerceFedEx\FedExPHP\Structs\RateDiscount
     */
    public function setRateDiscountType($rateDiscountType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\RateDiscountType::valueIsValid($rateDiscountType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $rateDiscountType, implode(', ', \CommerceFedEx\FedExPHP\Enums\RateDiscountType::getValidValues())), __LINE__);
        }
        $this->RateDiscountType = $rateDiscountType;
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
     * @return \CommerceFedEx\FedExPHP\Structs\RateDiscount
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
     * @return \CommerceFedEx\FedExPHP\Structs\RateDiscount
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
     * @return \CommerceFedEx\FedExPHP\Structs\RateDiscount
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
     * @return \CommerceFedEx\FedExPHP\Structs\RateDiscount
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
