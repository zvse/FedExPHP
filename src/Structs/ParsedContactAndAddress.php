<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParsedContactAndAddress Structs
 * Meta informations extracted from the WSDL
 * - documentation: This type contains equivalent data to ContactAndAddress, but uses a form of person name with separate first, middle and last names.
 * @subpackage Structs
 */
class ParsedContactAndAddress extends AbstractStructBase
{
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ParsedContact
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
     * Constructor method for ParsedContactAndAddress
     * @uses ParsedContactAndAddress::setContact()
     * @uses ParsedContactAndAddress::setAddress()
     * @param \CommerceFedEx\FedExPHP\Structs\ParsedContact $contact
     * @param \CommerceFedEx\FedExPHP\Structs\Address $address
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\ParsedContact $contact = null, \CommerceFedEx\FedExPHP\Structs\Address $address = null)
    {
        $this
            ->setContact($contact)
            ->setAddress($address);
    }
    /**
     * Get Contact value
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedContact|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \CommerceFedEx\FedExPHP\Structs\ParsedContact $contact
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedContactAndAddress
     */
    public function setContact(\CommerceFedEx\FedExPHP\Structs\ParsedContact $contact = null)
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
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedContactAndAddress
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
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedContactAndAddress
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
