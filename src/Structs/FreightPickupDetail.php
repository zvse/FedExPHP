<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightPickupDetail Structs
 * @subpackage Structs
 */
class FreightPickupDetail extends AbstractStructBase
{
    /**
     * The ApprovedBy
     * Meta informations extracted from the WSDL
     * - documentation: Contact Information of origin service center representative that authorized the pickup
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Contact
     */
    public $ApprovedBy;
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Payment;
    /**
     * The Role
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Role;
    /**
     * The AlternateBilling
     * Meta informations extracted from the WSDL
     * - documentation: Used in connection with "Send Bill To" (SBT) identification of customer's account used for billing.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Party
     */
    public $AlternateBilling;
    /**
     * The SubmittedBy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Contact
     */
    public $SubmittedBy;
    /**
     * The LineItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\FreightPickupLineItem[]
     */
    public $LineItems;
    /**
     * Constructor method for FreightPickupDetail
     * @uses FreightPickupDetail::setApprovedBy()
     * @uses FreightPickupDetail::setPayment()
     * @uses FreightPickupDetail::setRole()
     * @uses FreightPickupDetail::setAlternateBilling()
     * @uses FreightPickupDetail::setSubmittedBy()
     * @uses FreightPickupDetail::setLineItems()
     * @param \CommerceFedEx\FedExPHP\Structs\Contact $approvedBy
     * @param string $payment
     * @param string $role
     * @param \CommerceFedEx\FedExPHP\Structs\Party $alternateBilling
     * @param \CommerceFedEx\FedExPHP\Structs\Contact $submittedBy
     * @param \CommerceFedEx\FedExPHP\Structs\FreightPickupLineItem[] $lineItems
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\Contact $approvedBy = null, $payment = null, $role = null, \CommerceFedEx\FedExPHP\Structs\Party $alternateBilling = null, \CommerceFedEx\FedExPHP\Structs\Contact $submittedBy = null, array $lineItems = array())
    {
        $this
            ->setApprovedBy($approvedBy)
            ->setPayment($payment)
            ->setRole($role)
            ->setAlternateBilling($alternateBilling)
            ->setSubmittedBy($submittedBy)
            ->setLineItems($lineItems);
    }
    /**
     * Get ApprovedBy value
     * @return \CommerceFedEx\FedExPHP\Structs\Contact|null
     */
    public function getApprovedBy()
    {
        return $this->ApprovedBy;
    }
    /**
     * Set ApprovedBy value
     * @param \CommerceFedEx\FedExPHP\Structs\Contact $approvedBy
     * @return \CommerceFedEx\FedExPHP\Structs\FreightPickupDetail
     */
    public function setApprovedBy(\CommerceFedEx\FedExPHP\Structs\Contact $approvedBy = null)
    {
        $this->ApprovedBy = $approvedBy;
        return $this;
    }
    /**
     * Get Payment value
     * @return string|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @uses \CommerceFedEx\FedExPHP\Enums\PaymentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\PaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $payment
     * @return \CommerceFedEx\FedExPHP\Structs\FreightPickupDetail
     */
    public function setPayment($payment = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\PaymentType::valueIsValid($payment)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $payment, implode(', ', \CommerceFedEx\FedExPHP\Enums\PaymentType::getValidValues())), __LINE__);
        }
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Get Role value
     * @return string|null
     */
    public function getRole()
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @uses \CommerceFedEx\FedExPHP\Enums\FreightShipmentRoleType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\FreightShipmentRoleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $role
     * @return \CommerceFedEx\FedExPHP\Structs\FreightPickupDetail
     */
    public function setRole($role = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\FreightShipmentRoleType::valueIsValid($role)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $role, implode(', ', \CommerceFedEx\FedExPHP\Enums\FreightShipmentRoleType::getValidValues())), __LINE__);
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Get AlternateBilling value
     * @return \CommerceFedEx\FedExPHP\Structs\Party|null
     */
    public function getAlternateBilling()
    {
        return $this->AlternateBilling;
    }
    /**
     * Set AlternateBilling value
     * @param \CommerceFedEx\FedExPHP\Structs\Party $alternateBilling
     * @return \CommerceFedEx\FedExPHP\Structs\FreightPickupDetail
     */
    public function setAlternateBilling(\CommerceFedEx\FedExPHP\Structs\Party $alternateBilling = null)
    {
        $this->AlternateBilling = $alternateBilling;
        return $this;
    }
    /**
     * Get SubmittedBy value
     * @return \CommerceFedEx\FedExPHP\Structs\Contact|null
     */
    public function getSubmittedBy()
    {
        return $this->SubmittedBy;
    }
    /**
     * Set SubmittedBy value
     * @param \CommerceFedEx\FedExPHP\Structs\Contact $submittedBy
     * @return \CommerceFedEx\FedExPHP\Structs\FreightPickupDetail
     */
    public function setSubmittedBy(\CommerceFedEx\FedExPHP\Structs\Contact $submittedBy = null)
    {
        $this->SubmittedBy = $submittedBy;
        return $this;
    }
    /**
     * Get LineItems value
     * @return \CommerceFedEx\FedExPHP\Structs\FreightPickupLineItem[]|null
     */
    public function getLineItems()
    {
        return $this->LineItems;
    }
    /**
     * Set LineItems value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\FreightPickupLineItem[] $lineItems
     * @return \CommerceFedEx\FedExPHP\Structs\FreightPickupDetail
     */
    public function setLineItems(array $lineItems = array())
    {
        foreach ($lineItems as $freightPickupDetailLineItemsItem) {
            // validation for constraint: itemType
            if (!$freightPickupDetailLineItemsItem instanceof \CommerceFedEx\FedExPHP\Structs\FreightPickupLineItem) {
                throw new \InvalidArgumentException(sprintf('The LineItems property can only contain items of \CommerceFedEx\FedExPHP\Structs\FreightPickupLineItem, "%s" given', is_object($freightPickupDetailLineItemsItem) ? get_class($freightPickupDetailLineItemsItem) : gettype($freightPickupDetailLineItemsItem)), __LINE__);
            }
        }
        $this->LineItems = $lineItems;
        return $this;
    }
    /**
     * Add item to LineItems value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\FreightPickupLineItem $item
     * @return \CommerceFedEx\FedExPHP\Structs\FreightPickupDetail
     */
    public function addToLineItems(\CommerceFedEx\FedExPHP\Structs\FreightPickupLineItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\FreightPickupLineItem) {
            throw new \InvalidArgumentException(sprintf('The LineItems property can only contain items of \CommerceFedEx\FedExPHP\Structs\FreightPickupLineItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LineItems[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\FreightPickupDetail
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
