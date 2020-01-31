<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedHoldAtLocationDetail Structs
 * @subpackage Structs
 */
class CompletedHoldAtLocationDetail extends AbstractStructBase
{
    /**
     * The HoldingLocation
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the branded location name, the hold at location phone number and the address of the location.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ContactAndAddress
     */
    public $HoldingLocation;
    /**
     * The HoldingLocationType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of FedEx location.
     * - minOccurs: 0
     * @var string
     */
    public $HoldingLocationType;
    /**
     * The HoldingLocationTypeForDisplay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HoldingLocationTypeForDisplay;
    /**
     * Constructor method for CompletedHoldAtLocationDetail
     * @uses CompletedHoldAtLocationDetail::setHoldingLocation()
     * @uses CompletedHoldAtLocationDetail::setHoldingLocationType()
     * @uses CompletedHoldAtLocationDetail::setHoldingLocationTypeForDisplay()
     * @param \CommerceFedEx\FedExPHP\Structs\ContactAndAddress $holdingLocation
     * @param string $holdingLocationType
     * @param string $holdingLocationTypeForDisplay
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\ContactAndAddress $holdingLocation = null, $holdingLocationType = null, $holdingLocationTypeForDisplay = null)
    {
        $this
            ->setHoldingLocation($holdingLocation)
            ->setHoldingLocationType($holdingLocationType)
            ->setHoldingLocationTypeForDisplay($holdingLocationTypeForDisplay);
    }
    /**
     * Get HoldingLocation value
     * @return \CommerceFedEx\FedExPHP\Structs\ContactAndAddress|null
     */
    public function getHoldingLocation()
    {
        return $this->HoldingLocation;
    }
    /**
     * Set HoldingLocation value
     * @param \CommerceFedEx\FedExPHP\Structs\ContactAndAddress $holdingLocation
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedHoldAtLocationDetail
     */
    public function setHoldingLocation(\CommerceFedEx\FedExPHP\Structs\ContactAndAddress $holdingLocation = null)
    {
        $this->HoldingLocation = $holdingLocation;
        return $this;
    }
    /**
     * Get HoldingLocationType value
     * @return string|null
     */
    public function getHoldingLocationType()
    {
        return $this->HoldingLocationType;
    }
    /**
     * Set HoldingLocationType value
     * @uses \CommerceFedEx\FedExPHP\Enums\FedExLocationType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\FedExLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $holdingLocationType
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedHoldAtLocationDetail
     */
    public function setHoldingLocationType($holdingLocationType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\FedExLocationType::valueIsValid($holdingLocationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $holdingLocationType, implode(', ', \CommerceFedEx\FedExPHP\Enums\FedExLocationType::getValidValues())), __LINE__);
        }
        $this->HoldingLocationType = $holdingLocationType;
        return $this;
    }
    /**
     * Get HoldingLocationTypeForDisplay value
     * @return string|null
     */
    public function getHoldingLocationTypeForDisplay()
    {
        return $this->HoldingLocationTypeForDisplay;
    }
    /**
     * Set HoldingLocationTypeForDisplay value
     * @param string $holdingLocationTypeForDisplay
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedHoldAtLocationDetail
     */
    public function setHoldingLocationTypeForDisplay($holdingLocationTypeForDisplay = null)
    {
        // validation for constraint: string
        if (!is_null($holdingLocationTypeForDisplay) && !is_string($holdingLocationTypeForDisplay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($holdingLocationTypeForDisplay)), __LINE__);
        }
        $this->HoldingLocationTypeForDisplay = $holdingLocationTypeForDisplay;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedHoldAtLocationDetail
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
