<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransborderDistributionLtlDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies details for origin-country LTL services performed by FedEx.
 * @subpackage Structs
 */
class TransborderDistributionLtlDetail extends AbstractStructBase
{
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - documentation: Payment for LTL transportation.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Payment
     */
    public $Payment;
    /**
     * The LtlScacCode
     * Meta informations extracted from the WSDL
     * - documentation: Standard Carrier Alpha Code for origin-country LTL services.
     * - minOccurs: 0
     * @var string
     */
    public $LtlScacCode;
    /**
     * Constructor method for TransborderDistributionLtlDetail
     * @uses TransborderDistributionLtlDetail::setPayment()
     * @uses TransborderDistributionLtlDetail::setLtlScacCode()
     * @param \CommerceFedEx\FedExPHP\Structs\Payment $payment
     * @param string $ltlScacCode
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\Payment $payment = null, $ltlScacCode = null)
    {
        $this
            ->setPayment($payment)
            ->setLtlScacCode($ltlScacCode);
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
     * @return \CommerceFedEx\FedExPHP\Structs\TransborderDistributionLtlDetail
     */
    public function setPayment(\CommerceFedEx\FedExPHP\Structs\Payment $payment = null)
    {
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Get LtlScacCode value
     * @return string|null
     */
    public function getLtlScacCode()
    {
        return $this->LtlScacCode;
    }
    /**
     * Set LtlScacCode value
     * @param string $ltlScacCode
     * @return \CommerceFedEx\FedExPHP\Structs\TransborderDistributionLtlDetail
     */
    public function setLtlScacCode($ltlScacCode = null)
    {
        // validation for constraint: string
        if (!is_null($ltlScacCode) && !is_string($ltlScacCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ltlScacCode)), __LINE__);
        }
        $this->LtlScacCode = $ltlScacCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\TransborderDistributionLtlDetail
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
