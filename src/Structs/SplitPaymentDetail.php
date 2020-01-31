<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Payment
     */
    public $Payment;
    /**
     * Constructor method for SplitPaymentDetail
     * @uses SplitPaymentDetail::setType()
     * @uses SplitPaymentDetail::setPayment()
     * @param string $type
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Payment $payment
     */
    public function __construct($type = null, \NicholasCreativeMedia\FedExPHP\Structs\Payment $payment = null)
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\SplitPaymentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\SplitPaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\SplitPaymentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\SplitPaymentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Payment value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Payment|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Payment $payment
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentDetail
     */
    public function setPayment(\NicholasCreativeMedia\FedExPHP\Structs\Payment $payment = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentDetail
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
