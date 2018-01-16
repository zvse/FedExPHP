<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationContactAndAddress Structs
 * @subpackage Structs
 */
class LocationContactAndAddress extends AbstractStructBase
{
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
     * The AddressAncillaryDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\AddressAncillaryDetail
     */
    public $AddressAncillaryDetail;
    /**
     * Constructor method for LocationContactAndAddress
     * @uses LocationContactAndAddress::setContact()
     * @uses LocationContactAndAddress::setAddress()
     * @uses LocationContactAndAddress::setAddressAncillaryDetail()
     * @param \CommerceFedEx\FedExPHP\Structs\Contact $contact
     * @param \CommerceFedEx\FedExPHP\Structs\Address $address
     * @param \CommerceFedEx\FedExPHP\Structs\AddressAncillaryDetail $addressAncillaryDetail
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\Contact $contact = null, \CommerceFedEx\FedExPHP\Structs\Address $address = null, \CommerceFedEx\FedExPHP\Structs\AddressAncillaryDetail $addressAncillaryDetail = null)
    {
        $this
            ->setContact($contact)
            ->setAddress($address)
            ->setAddressAncillaryDetail($addressAncillaryDetail);
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
     * @return \CommerceFedEx\FedExPHP\Structs\LocationContactAndAddress
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
     * @return \CommerceFedEx\FedExPHP\Structs\LocationContactAndAddress
     */
    public function setAddress(\CommerceFedEx\FedExPHP\Structs\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get AddressAncillaryDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\AddressAncillaryDetail|null
     */
    public function getAddressAncillaryDetail()
    {
        return $this->AddressAncillaryDetail;
    }
    /**
     * Set AddressAncillaryDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\AddressAncillaryDetail $addressAncillaryDetail
     * @return \CommerceFedEx\FedExPHP\Structs\LocationContactAndAddress
     */
    public function setAddressAncillaryDetail(\CommerceFedEx\FedExPHP\Structs\AddressAncillaryDetail $addressAncillaryDetail = null)
    {
        $this->AddressAncillaryDetail = $addressAncillaryDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\LocationContactAndAddress
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
