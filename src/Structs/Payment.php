<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Payment Structs
 * @subpackage Structs
 */
class Payment extends AbstractStructBase
{
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $PaymentType;
    /**
     * The Payor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Payor
     */
    public $Payor;
    /**
     * Constructor method for Payment
     * @uses Payment::setPaymentType()
     * @uses Payment::setPayor()
     * @param string $paymentType
     * @param \CommerceFedEx\FedExPHP\Structs\Payor $payor
     */
    public function __construct($paymentType = null, \CommerceFedEx\FedExPHP\Structs\Payor $payor = null)
    {
        $this
            ->setPaymentType($paymentType)
            ->setPayor($payor);
    }
    /**
     * Get PaymentType value
     * @return string
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @uses \CommerceFedEx\FedExPHP\Enums\PaymentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\PaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentType
     * @return \CommerceFedEx\FedExPHP\Structs\Payment
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\PaymentType::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentType, implode(', ', \CommerceFedEx\FedExPHP\Enums\PaymentType::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Get Payor value
     * @return \CommerceFedEx\FedExPHP\Structs\Payor|null
     */
    public function getPayor()
    {
        return $this->Payor;
    }
    /**
     * Set Payor value
     * @param \CommerceFedEx\FedExPHP\Structs\Payor $payor
     * @return \CommerceFedEx\FedExPHP\Structs\Payment
     */
    public function setPayor(\CommerceFedEx\FedExPHP\Structs\Payor $payor = null)
    {
        $this->Payor = $payor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\Payment
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
