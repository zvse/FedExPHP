<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestedDistributionLocation Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the type and location id of a distribution location used to process a consolidation.
 * @subpackage Structs
 */
class RequestedDistributionLocation extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - documentation: This is a customer-specified or system-assigned identifier that uniquely identifies the specific distibution location within a collection of distribution locations. This is not the same as the FedEx locationId or locationNumber.
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Identifies whether the distirbution location is a FedEx Express Station or a FedEx Ground Terminal.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The LocationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LocationId;
    /**
     * The LocationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LocationNumber;
    /**
     * The LocationContactAndAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ContactAndAddress
     */
    public $LocationContactAndAddress;
    /**
     * The ClearanceNumber
     * Meta informations extracted from the WSDL
     * - documentation: This specifies the clearance number (e.g.- PAPS number for US imports) associated with the distribution location.
     * - minOccurs: 0
     * @var string
     */
    public $ClearanceNumber;
    /**
     * The InclusionSpecifications
     * Meta informations extracted from the WSDL
     * - documentation: Specifies which kinds of shipments will be processed by this distribution location.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShipmentInclusionSpecification[]
     */
    public $InclusionSpecifications;
    /**
     * Constructor method for RequestedDistributionLocation
     * @uses RequestedDistributionLocation::setId()
     * @uses RequestedDistributionLocation::setType()
     * @uses RequestedDistributionLocation::setLocationId()
     * @uses RequestedDistributionLocation::setLocationNumber()
     * @uses RequestedDistributionLocation::setLocationContactAndAddress()
     * @uses RequestedDistributionLocation::setClearanceNumber()
     * @uses RequestedDistributionLocation::setInclusionSpecifications()
     * @param string $id
     * @param string $type
     * @param string $locationId
     * @param int $locationNumber
     * @param \CommerceFedEx\FedExPHP\Structs\ContactAndAddress $locationContactAndAddress
     * @param string $clearanceNumber
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentInclusionSpecification[] $inclusionSpecifications
     */
    public function __construct($id = null, $type = null, $locationId = null, $locationNumber = null, \CommerceFedEx\FedExPHP\Structs\ContactAndAddress $locationContactAndAddress = null, $clearanceNumber = null, array $inclusionSpecifications = array())
    {
        $this
            ->setId($id)
            ->setType($type)
            ->setLocationId($locationId)
            ->setLocationNumber($locationNumber)
            ->setLocationContactAndAddress($locationContactAndAddress)
            ->setClearanceNumber($clearanceNumber)
            ->setInclusionSpecifications($inclusionSpecifications);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \CommerceFedEx\FedExPHP\Enums\FedExDistributionLocationType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\FedExDistributionLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\FedExDistributionLocationType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \CommerceFedEx\FedExPHP\Enums\FedExDistributionLocationType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
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
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation
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
     * Get LocationNumber value
     * @return int|null
     */
    public function getLocationNumber()
    {
        return $this->LocationNumber;
    }
    /**
     * Set LocationNumber value
     * @param int $locationNumber
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation
     */
    public function setLocationNumber($locationNumber = null)
    {
        // validation for constraint: int
        if (!is_null($locationNumber) && !is_numeric($locationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($locationNumber)), __LINE__);
        }
        $this->LocationNumber = $locationNumber;
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
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation
     */
    public function setLocationContactAndAddress(\CommerceFedEx\FedExPHP\Structs\ContactAndAddress $locationContactAndAddress = null)
    {
        $this->LocationContactAndAddress = $locationContactAndAddress;
        return $this;
    }
    /**
     * Get ClearanceNumber value
     * @return string|null
     */
    public function getClearanceNumber()
    {
        return $this->ClearanceNumber;
    }
    /**
     * Set ClearanceNumber value
     * @param string $clearanceNumber
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation
     */
    public function setClearanceNumber($clearanceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($clearanceNumber) && !is_string($clearanceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clearanceNumber)), __LINE__);
        }
        $this->ClearanceNumber = $clearanceNumber;
        return $this;
    }
    /**
     * Get InclusionSpecifications value
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentInclusionSpecification[]|null
     */
    public function getInclusionSpecifications()
    {
        return $this->InclusionSpecifications;
    }
    /**
     * Set InclusionSpecifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentInclusionSpecification[] $inclusionSpecifications
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation
     */
    public function setInclusionSpecifications(array $inclusionSpecifications = array())
    {
        foreach ($inclusionSpecifications as $requestedDistributionLocationInclusionSpecificationsItem) {
            // validation for constraint: itemType
            if (!$requestedDistributionLocationInclusionSpecificationsItem instanceof \CommerceFedEx\FedExPHP\Structs\ShipmentInclusionSpecification) {
                throw new \InvalidArgumentException(sprintf('The InclusionSpecifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\ShipmentInclusionSpecification, "%s" given', is_object($requestedDistributionLocationInclusionSpecificationsItem) ? get_class($requestedDistributionLocationInclusionSpecificationsItem) : gettype($requestedDistributionLocationInclusionSpecificationsItem)), __LINE__);
            }
        }
        $this->InclusionSpecifications = $inclusionSpecifications;
        return $this;
    }
    /**
     * Add item to InclusionSpecifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentInclusionSpecification $item
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation
     */
    public function addToInclusionSpecifications(\CommerceFedEx\FedExPHP\Structs\ShipmentInclusionSpecification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\ShipmentInclusionSpecification) {
            throw new \InvalidArgumentException(sprintf('The InclusionSpecifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\ShipmentInclusionSpecification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InclusionSpecifications[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation
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
