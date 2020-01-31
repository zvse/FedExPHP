<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressToValidate Structs
 * @subpackage Structs
 */
class AddressToValidate extends AbstractStructBase
{
    /**
     * The ClientReferenceId
     * Meta informations extracted from the WSDL
     * - documentation: A reference id provided by the client.
     * - minOccurs: 0
     * @var string
     */
    public $ClientReferenceId;
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Contact
     */
    public $Contact;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Address
     */
    public $Address;
    /**
     * Constructor method for AddressToValidate
     * @uses AddressToValidate::setClientReferenceId()
     * @uses AddressToValidate::setContact()
     * @uses AddressToValidate::setAddress()
     * @param string $clientReferenceId
     * @param \CommerceFedEx\FedExPHP\Structs\Contact $contact
     * @param \CommerceFedEx\FedExPHP\Structs\Address $address
     */
    public function __construct($clientReferenceId = null, \CommerceFedEx\FedExPHP\Structs\Contact $contact = null, \CommerceFedEx\FedExPHP\Structs\Address $address = null)
    {
        $this
            ->setClientReferenceId($clientReferenceId)
            ->setContact($contact)
            ->setAddress($address);
    }
    /**
     * Get ClientReferenceId value
     * @return string|null
     */
    public function getClientReferenceId()
    {
        return $this->ClientReferenceId;
    }
    /**
     * Set ClientReferenceId value
     * @param string $clientReferenceId
     * @return \CommerceFedEx\FedExPHP\Structs\AddressToValidate
     */
    public function setClientReferenceId($clientReferenceId = null)
    {
        // validation for constraint: string
        if (!is_null($clientReferenceId) && !is_string($clientReferenceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientReferenceId)), __LINE__);
        }
        $this->ClientReferenceId = $clientReferenceId;
        return $this;
    }
    /**
     * Get Contact value
     * @return \CommerceFedEx\FedExPHP\Structs\Contact|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \CommerceFedEx\FedExPHP\Structs\Contact $contact
     * @return \CommerceFedEx\FedExPHP\Structs\AddressToValidate
     */
    public function setContact(\CommerceFedEx\FedExPHP\Structs\Contact $contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Get Address value
     * @return \CommerceFedEx\FedExPHP\Structs\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \CommerceFedEx\FedExPHP\Structs\Address $address
     * @return \CommerceFedEx\FedExPHP\Structs\AddressToValidate
     */
    public function setAddress(\CommerceFedEx\FedExPHP\Structs\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\AddressToValidate
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
