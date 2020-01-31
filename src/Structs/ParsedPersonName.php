<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParsedPersonName Structs
 * Meta informations extracted from the WSDL
 * - documentation: The descriptive data for a person's name broken out into individual name elements such as first name, last name.
 * @subpackage Structs
 */
class ParsedPersonName extends AbstractStructBase
{
    /**
     * The Prefix
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the salutation part of the name, if any is specified. Examples of prefix: Sir, Madam, Monsieur.
     * - minOccurs: 0
     * @var string
     */
    public $Prefix;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the professional title in the person name, if any is specified.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FirstName;
    /**
     * The MiddleName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MiddleName;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastName;
    /**
     * The Suffix
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the contact person's name suffix.
     * - minOccurs: 0
     * @var string
     */
    public $Suffix;
    /**
     * Constructor method for ParsedPersonName
     * @uses ParsedPersonName::setPrefix()
     * @uses ParsedPersonName::setTitle()
     * @uses ParsedPersonName::setFirstName()
     * @uses ParsedPersonName::setMiddleName()
     * @uses ParsedPersonName::setLastName()
     * @uses ParsedPersonName::setSuffix()
     * @param string $prefix
     * @param string $title
     * @param string $firstName
     * @param string $middleName
     * @param string $lastName
     * @param string $suffix
     */
    public function __construct($prefix = null, $title = null, $firstName = null, $middleName = null, $lastName = null, $suffix = null)
    {
        $this
            ->setPrefix($prefix)
            ->setTitle($title)
            ->setFirstName($firstName)
            ->setMiddleName($middleName)
            ->setLastName($lastName)
            ->setSuffix($suffix);
    }
    /**
     * Get Prefix value
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->Prefix;
    }
    /**
     * Set Prefix value
     * @param string $prefix
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedPersonName
     */
    public function setPrefix($prefix = null)
    {
        // validation for constraint: string
        if (!is_null($prefix) && !is_string($prefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($prefix)), __LINE__);
        }
        $this->Prefix = $prefix;
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
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedPersonName
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
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedPersonName
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get MiddleName value
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }
    /**
     * Set MiddleName value
     * @param string $middleName
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedPersonName
     */
    public function setMiddleName($middleName = null)
    {
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($middleName)), __LINE__);
        }
        $this->MiddleName = $middleName;
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedPersonName
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        return $this;
    }
    /**
     * Get Suffix value
     * @return string|null
     */
    public function getSuffix()
    {
        return $this->Suffix;
    }
    /**
     * Set Suffix value
     * @param string $suffix
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedPersonName
     */
    public function setSuffix($suffix = null)
    {
        // validation for constraint: string
        if (!is_null($suffix) && !is_string($suffix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($suffix)), __LINE__);
        }
        $this->Suffix = $suffix;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedPersonName
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
