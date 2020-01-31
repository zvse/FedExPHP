<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParsedContact Structs
 * Meta informations extracted from the WSDL
 * - documentation: This type contains equivalent data to Contact, but uses a form of person name with separate first and last names.
 * @subpackage Structs
 */
class ParsedContact extends AbstractStructBase
{
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ParsedPersonName
     */
    public $PersonName;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CompanyName;
    /**
     * The PhoneNumberCountryCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the country code to be dialled when calling the phone number listed as a part of the contact.
     * - minOccurs: 0
     * @var string
     */
    public $PhoneNumberCountryCode;
    /**
     * The PhoneNumberAreaCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the area code of the phone number listed as a part of the contact.
     * - minOccurs: 0
     * @var string
     */
    public $PhoneNumberAreaCode;
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhoneNumber;
    /**
     * The PhoneExtension
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhoneExtension;
    /**
     * The PagerNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PagerNumber;
    /**
     * The FaxNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FaxNumber;
    /**
     * The EMailAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EMailAddress;
    /**
     * Constructor method for ParsedContact
     * @uses ParsedContact::setPersonName()
     * @uses ParsedContact::setTitle()
     * @uses ParsedContact::setCompanyName()
     * @uses ParsedContact::setPhoneNumberCountryCode()
     * @uses ParsedContact::setPhoneNumberAreaCode()
     * @uses ParsedContact::setPhoneNumber()
     * @uses ParsedContact::setPhoneExtension()
     * @uses ParsedContact::setPagerNumber()
     * @uses ParsedContact::setFaxNumber()
     * @uses ParsedContact::setEMailAddress()
     * @param \CommerceFedEx\FedExPHP\Structs\ParsedPersonName $personName
     * @param string $title
     * @param string $companyName
     * @param string $phoneNumberCountryCode
     * @param string $phoneNumberAreaCode
     * @param string $phoneNumber
     * @param string $phoneExtension
     * @param string $pagerNumber
     * @param string $faxNumber
     * @param string $eMailAddress
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\ParsedPersonName $personName = null, $title = null, $companyName = null, $phoneNumberCountryCode = null, $phoneNumberAreaCode = null, $phoneNumber = null, $phoneExtension = null, $pagerNumber = null, $faxNumber = null, $eMailAddress = null)
    {
        $this
            ->setPersonName($personName)
            ->setTitle($title)
            ->setCompanyName($companyName)
            ->setPhoneNumberCountryCode($phoneNumberCountryCode)
            ->setPhoneNumberAreaCode($phoneNumberAreaCode)
            ->setPhoneNumber($phoneNumber)
            ->setPhoneExtension($phoneExtension)
            ->setPagerNumber($pagerNumber)
            ->setFaxNumber($faxNumber)
            ->setEMailAddress($eMailAddress);
    }
    /**
     * Get PersonName value
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedPersonName|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param \CommerceFedEx\FedExPHP\Structs\ParsedPersonName $personName
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedContact
     */
    public function setPersonName(\CommerceFedEx\FedExPHP\Structs\ParsedPersonName $personName = null)
    {
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedContact
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get CompanyName value
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param string $companyName
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedContact
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyName)), __LINE__);
        }
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get PhoneNumberCountryCode value
     * @return string|null
     */
    public function getPhoneNumberCountryCode()
    {
        return $this->PhoneNumberCountryCode;
    }
    /**
     * Set PhoneNumberCountryCode value
     * @param string $phoneNumberCountryCode
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedContact
     */
    public function setPhoneNumberCountryCode($phoneNumberCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumberCountryCode) && !is_string($phoneNumberCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumberCountryCode)), __LINE__);
        }
        $this->PhoneNumberCountryCode = $phoneNumberCountryCode;
        return $this;
    }
    /**
     * Get PhoneNumberAreaCode value
     * @return string|null
     */
    public function getPhoneNumberAreaCode()
    {
        return $this->PhoneNumberAreaCode;
    }
    /**
     * Set PhoneNumberAreaCode value
     * @param string $phoneNumberAreaCode
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedContact
     */
    public function setPhoneNumberAreaCode($phoneNumberAreaCode = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumberAreaCode) && !is_string($phoneNumberAreaCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumberAreaCode)), __LINE__);
        }
        $this->PhoneNumberAreaCode = $phoneNumberAreaCode;
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param string $phoneNumber
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedContact
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Get PhoneExtension value
     * @return string|null
     */
    public function getPhoneExtension()
    {
        return $this->PhoneExtension;
    }
    /**
     * Set PhoneExtension value
     * @param string $phoneExtension
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedContact
     */
    public function setPhoneExtension($phoneExtension = null)
    {
        // validation for constraint: string
        if (!is_null($phoneExtension) && !is_string($phoneExtension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneExtension)), __LINE__);
        }
        $this->PhoneExtension = $phoneExtension;
        return $this;
    }
    /**
     * Get PagerNumber value
     * @return string|null
     */
    public function getPagerNumber()
    {
        return $this->PagerNumber;
    }
    /**
     * Set PagerNumber value
     * @param string $pagerNumber
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedContact
     */
    public function setPagerNumber($pagerNumber = null)
    {
        // validation for constraint: string
        if (!is_null($pagerNumber) && !is_string($pagerNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pagerNumber)), __LINE__);
        }
        $this->PagerNumber = $pagerNumber;
        return $this;
    }
    /**
     * Get FaxNumber value
     * @return string|null
     */
    public function getFaxNumber()
    {
        return $this->FaxNumber;
    }
    /**
     * Set FaxNumber value
     * @param string $faxNumber
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedContact
     */
    public function setFaxNumber($faxNumber = null)
    {
        // validation for constraint: string
        if (!is_null($faxNumber) && !is_string($faxNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($faxNumber)), __LINE__);
        }
        $this->FaxNumber = $faxNumber;
        return $this;
    }
    /**
     * Get EMailAddress value
     * @return string|null
     */
    public function getEMailAddress()
    {
        return $this->EMailAddress;
    }
    /**
     * Set EMailAddress value
     * @param string $eMailAddress
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedContact
     */
    public function setEMailAddress($eMailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($eMailAddress) && !is_string($eMailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMailAddress)), __LINE__);
        }
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedContact
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
