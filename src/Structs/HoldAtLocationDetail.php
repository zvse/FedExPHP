<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HoldAtLocationDetail Structs
 * @subpackage Structs
 */
class HoldAtLocationDetail extends AbstractStructBase
{
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - documentation: Contact phone number for recipient of shipment.
     * - minOccurs: 1
     * @var string
     */
    public $PhoneNumber;
    /**
     * The LocationContactAndAddress
     * Meta informations extracted from the WSDL
     * - documentation: Contact and address of FedEx facility at which shipment is to be held.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ContactAndAddress
     */
    public $LocationContactAndAddress;
    /**
     * The LocationType
     * Meta informations extracted from the WSDL
     * - documentation: Type of facility at which package/shipment is to be held.
     * - minOccurs: 0
     * @var string
     */
    public $LocationType;
    /**
     * The LocationId
     * Meta informations extracted from the WSDL
     * - documentation: Location identification (for facilities identified by an alphanumeric location code).
     * - minOccurs: 0
     * @var string
     */
    public $LocationId;
    /**
     * Constructor method for HoldAtLocationDetail
     * @uses HoldAtLocationDetail::setPhoneNumber()
     * @uses HoldAtLocationDetail::setLocationContactAndAddress()
     * @uses HoldAtLocationDetail::setLocationType()
     * @uses HoldAtLocationDetail::setLocationId()
     * @param string $phoneNumber
     * @param \CommerceFedEx\FedExPHP\Structs\ContactAndAddress $locationContactAndAddress
     * @param string $locationType
     * @param string $locationId
     */
    public function __construct($phoneNumber = null, \CommerceFedEx\FedExPHP\Structs\ContactAndAddress $locationContactAndAddress = null, $locationType = null, $locationId = null)
    {
        $this
            ->setPhoneNumber($phoneNumber)
            ->setLocationContactAndAddress($locationContactAndAddress)
            ->setLocationType($locationType)
            ->setLocationId($locationId);
    }
    /**
     * Get PhoneNumber value
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param string $phoneNumber
     * @return \CommerceFedEx\FedExPHP\Structs\HoldAtLocationDetail
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
     * Get LocationContactAndAddress value
     * @return \CommerceFedEx\FedExPHP\Structs\ContactAndAddress|null
     */
    public function getLocationContactAndAddress()
    {
        return $this->LocationContactAndAddress;
    }
    /**
     * Set LocationContactAndAddress value
     * @param \CommerceFedEx\FedExPHP\Structs\ContactAndAddress $locationContactAndAddress
     * @return \CommerceFedEx\FedExPHP\Structs\HoldAtLocationDetail
     */
    public function setLocationContactAndAddress(\CommerceFedEx\FedExPHP\Structs\ContactAndAddress $locationContactAndAddress = null)
    {
        $this->LocationContactAndAddress = $locationContactAndAddress;
        return $this;
    }
    /**
     * Get LocationType value
     * @return string|null
     */
    public function getLocationType()
    {
        return $this->LocationType;
    }
    /**
     * Set LocationType value
     * @uses \CommerceFedEx\FedExPHP\Enums\FedExLocationType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\FedExLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $locationType
     * @return \CommerceFedEx\FedExPHP\Structs\HoldAtLocationDetail
     */
    public function setLocationType($locationType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\FedExLocationType::valueIsValid($locationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $locationType, implode(', ', \CommerceFedEx\FedExPHP\Enums\FedExLocationType::getValidValues())), __LINE__);
        }
        $this->LocationType = $locationType;
        return $this;
    }
    /**
     * Get LocationId value
     * @return string|null
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }
    /**
     * Set LocationId value
     * @param string $locationId
     * @return \CommerceFedEx\FedExPHP\Structs\HoldAtLocationDetail
     */
    public function setLocationId($locationId = null)
    {
        // validation for constraint: string
        if (!is_null($locationId) && !is_string($locationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationId)), __LINE__);
        }
        $this->LocationId = $locationId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\HoldAtLocationDetail
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
