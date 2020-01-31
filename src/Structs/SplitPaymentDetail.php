<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SplitPaymentDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies payment for a single aspect of a shipment.
 * @subpackage Structs
 */
class SplitPaymentDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the aspect of the shiipment to be paid separately.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the form of payment to be used.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Payment
     */
    public $Payment;
    /**
     * Constructor method for SplitPaymentDetail
     * @uses SplitPaymentDetail::setType()
     * @uses SplitPaymentDetail::setPayment()
     * @param string $type
     * @param \CommerceFedEx\FedExPHP\Structs\Payment $payment
     */
    public function __construct($type = null, \CommerceFedEx\FedExPHP\Structs\Payment $payment = null)
    {
        $this
            ->setType($type)
            ->setPayment($payment);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \CommerceFedEx\FedExPHP\Enums\SplitPaymentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\SplitPaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \CommerceFedEx\FedExPHP\Structs\SplitPaymentDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\SplitPaymentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \CommerceFedEx\FedExPHP\Enums\SplitPaymentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Payment value
     * @return \CommerceFedEx\FedExPHP\Structs\Payment|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \CommerceFedEx\FedExPHP\Structs\Payment $payment
     * @return \CommerceFedEx\FedExPHP\Structs\SplitPaymentDetail
     */
    public function setPayment(\CommerceFedEx\FedExPHP\Structs\Payment $payment = null)
    {
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\SplitPaymentDetail
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
