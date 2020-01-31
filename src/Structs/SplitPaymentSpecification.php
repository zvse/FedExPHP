<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SplitPaymentSpecification Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies how charges relating to different aspects of a shipment are to be paid.
 * @subpackage Structs
 */
class SplitPaymentSpecification extends AbstractStructBase
{
    /**
     * The Payments
     * Meta informations extracted from the WSDL
     * - documentation: Each entry specifies payement for a single aspect of the shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentDetail[]
     */
    public $Payments;
    /**
     * Constructor method for SplitPaymentSpecification
     * @uses SplitPaymentSpecification::setPayments()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentDetail[] $payments
     */
    public function __construct(array $payments = array())
    {
        $this
            ->setPayments($payments);
    }
    /**
     * Get Payments value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentDetail[]|null
     */
    public function getPayments()
    {
        return $this->Payments;
    }
    /**
     * Set Payments value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentDetail[] $payments
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentSpecification
     */
    public function setPayments(array $payments = array())
    {
        foreach ($payments as $splitPaymentSpecificationPaymentsItem) {
            // validation for constraint: itemType
            if (!$splitPaymentSpecificationPaymentsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentDetail) {
                throw new \InvalidArgumentException(sprintf('The Payments property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentDetail, "%s" given', is_object($splitPaymentSpecificationPaymentsItem) ? get_class($splitPaymentSpecificationPaymentsItem) : gettype($splitPaymentSpecificationPaymentsItem)), __LINE__);
            }
        }
        $this->Payments = $payments;
        return $this;
    }
    /**
     * Add item to Payments value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentSpecification
     */
    public function addToPayments(\NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentDetail) {
            throw new \InvalidArgumentException(sprintf('The Payments property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Payments[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentSpecification
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
