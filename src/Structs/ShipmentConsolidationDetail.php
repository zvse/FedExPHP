<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentConsolidationDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the characteristics of the containing RequestedShipment that define its participation in a consolidation.
 * @subpackage Structs
 */
class ShipmentConsolidationDetail extends AbstractStructBase
{
    /**
     * The RelationshipTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: The time at which this shipment was associated with the consolidation.
     * - minOccurs: 0
     * @var string
     */
    public $RelationshipTimestamp;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: The type of consolidation that contains this shipment.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Role
     * Meta informations extracted from the WSDL
     * - documentation: The role this shipment plays within the consolidation.
     * - minOccurs: 0
     * @var string
     */
    public $Role;
    /**
     * The AssociatedTrackingIds
     * Meta informations extracted from the WSDL
     * - documentation: Identifies other tracking IDs related to this shipment within the same consolidation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\AssociatedTrackingId[]
     */
    public $AssociatedTrackingIds;
    /**
     * The SpecialServicesRequested
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the consolidation-level special services to be performed for this shipment.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ConsolidationSpecialServicesRequested
     */
    public $SpecialServicesRequested;
    /**
     * The InternationalDistributionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies attributes of a shipment within an international distribution.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShipmentInternationalDistributionDetail
     */
    public $InternationalDistributionDetail;
    /**
     * The TransborderDistributionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies attributes of a shipment within a transborder distribution.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShipmentTransborderDistributionDetail
     */
    public $TransborderDistributionDetail;
    /**
     * The DistributionLocations
     * Meta informations extracted from the WSDL
     * - documentation: FOR INTERNAL FEDEX USE ONLY: Identifies the distribution facility where this shipment will be de-consolidated and distributed.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation[]
     */
    public $DistributionLocations;
    /**
     * Constructor method for ShipmentConsolidationDetail
     * @uses ShipmentConsolidationDetail::setRelationshipTimestamp()
     * @uses ShipmentConsolidationDetail::setType()
     * @uses ShipmentConsolidationDetail::setRole()
     * @uses ShipmentConsolidationDetail::setAssociatedTrackingIds()
     * @uses ShipmentConsolidationDetail::setSpecialServicesRequested()
     * @uses ShipmentConsolidationDetail::setInternationalDistributionDetail()
     * @uses ShipmentConsolidationDetail::setTransborderDistributionDetail()
     * @uses ShipmentConsolidationDetail::setDistributionLocations()
     * @param string $relationshipTimestamp
     * @param string $type
     * @param string $role
     * @param \CommerceFedEx\FedExPHP\Structs\AssociatedTrackingId[] $associatedTrackingIds
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidationSpecialServicesRequested $specialServicesRequested
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentInternationalDistributionDetail $internationalDistributionDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentTransborderDistributionDetail $transborderDistributionDetail
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation[] $distributionLocations
     */
    public function __construct($relationshipTimestamp = null, $type = null, $role = null, array $associatedTrackingIds = array(), \CommerceFedEx\FedExPHP\Structs\ConsolidationSpecialServicesRequested $specialServicesRequested = null, \CommerceFedEx\FedExPHP\Structs\ShipmentInternationalDistributionDetail $internationalDistributionDetail = null, \CommerceFedEx\FedExPHP\Structs\ShipmentTransborderDistributionDetail $transborderDistributionDetail = null, array $distributionLocations = array())
    {
        $this
            ->setRelationshipTimestamp($relationshipTimestamp)
            ->setType($type)
            ->setRole($role)
            ->setAssociatedTrackingIds($associatedTrackingIds)
            ->setSpecialServicesRequested($specialServicesRequested)
            ->setInternationalDistributionDetail($internationalDistributionDetail)
            ->setTransborderDistributionDetail($transborderDistributionDetail)
            ->setDistributionLocations($distributionLocations);
    }
    /**
     * Get RelationshipTimestamp value
     * @return string|null
     */
    public function getRelationshipTimestamp()
    {
        return $this->RelationshipTimestamp;
    }
    /**
     * Set RelationshipTimestamp value
     * @param string $relationshipTimestamp
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public function setRelationshipTimestamp($relationshipTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($relationshipTimestamp) && !is_string($relationshipTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relationshipTimestamp)), __LINE__);
        }
        $this->RelationshipTimestamp = $relationshipTimestamp;
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
     * @uses \CommerceFedEx\FedExPHP\Enums\ConsolidationType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ConsolidationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ConsolidationType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \CommerceFedEx\FedExPHP\Enums\ConsolidationType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
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
     * @uses \CommerceFedEx\FedExPHP\Enums\ConsolidationShipmentRoleType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ConsolidationShipmentRoleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $role
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public function setRole($role = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ConsolidationShipmentRoleType::valueIsValid($role)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $role, implode(', ', \CommerceFedEx\FedExPHP\Enums\ConsolidationShipmentRoleType::getValidValues())), __LINE__);
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Get AssociatedTrackingIds value
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedTrackingId[]|null
     */
    public function getAssociatedTrackingIds()
    {
        return $this->AssociatedTrackingIds;
    }
    /**
     * Set AssociatedTrackingIds value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\AssociatedTrackingId[] $associatedTrackingIds
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public function setAssociatedTrackingIds(array $associatedTrackingIds = array())
    {
        foreach ($associatedTrackingIds as $shipmentConsolidationDetailAssociatedTrackingIdsItem) {
            // validation for constraint: itemType
            if (!$shipmentConsolidationDetailAssociatedTrackingIdsItem instanceof \CommerceFedEx\FedExPHP\Structs\AssociatedTrackingId) {
                throw new \InvalidArgumentException(sprintf('The AssociatedTrackingIds property can only contain items of \CommerceFedEx\FedExPHP\Structs\AssociatedTrackingId, "%s" given', is_object($shipmentConsolidationDetailAssociatedTrackingIdsItem) ? get_class($shipmentConsolidationDetailAssociatedTrackingIdsItem) : gettype($shipmentConsolidationDetailAssociatedTrackingIdsItem)), __LINE__);
            }
        }
        $this->AssociatedTrackingIds = $associatedTrackingIds;
        return $this;
    }
    /**
     * Add item to AssociatedTrackingIds value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\AssociatedTrackingId $item
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public function addToAssociatedTrackingIds(\CommerceFedEx\FedExPHP\Structs\AssociatedTrackingId $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\AssociatedTrackingId) {
            throw new \InvalidArgumentException(sprintf('The AssociatedTrackingIds property can only contain items of \CommerceFedEx\FedExPHP\Structs\AssociatedTrackingId, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AssociatedTrackingIds[] = $item;
        return $this;
    }
    /**
     * Get SpecialServicesRequested value
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationSpecialServicesRequested|null
     */
    public function getSpecialServicesRequested()
    {
        return $this->SpecialServicesRequested;
    }
    /**
     * Set SpecialServicesRequested value
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidationSpecialServicesRequested $specialServicesRequested
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public function setSpecialServicesRequested(\CommerceFedEx\FedExPHP\Structs\ConsolidationSpecialServicesRequested $specialServicesRequested = null)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    /**
     * Get InternationalDistributionDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentInternationalDistributionDetail|null
     */
    public function getInternationalDistributionDetail()
    {
        return $this->InternationalDistributionDetail;
    }
    /**
     * Set InternationalDistributionDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentInternationalDistributionDetail $internationalDistributionDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public function setInternationalDistributionDetail(\CommerceFedEx\FedExPHP\Structs\ShipmentInternationalDistributionDetail $internationalDistributionDetail = null)
    {
        $this->InternationalDistributionDetail = $internationalDistributionDetail;
        return $this;
    }
    /**
     * Get TransborderDistributionDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentTransborderDistributionDetail|null
     */
    public function getTransborderDistributionDetail()
    {
        return $this->TransborderDistributionDetail;
    }
    /**
     * Set TransborderDistributionDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentTransborderDistributionDetail $transborderDistributionDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public function setTransborderDistributionDetail(\CommerceFedEx\FedExPHP\Structs\ShipmentTransborderDistributionDetail $transborderDistributionDetail = null)
    {
        $this->TransborderDistributionDetail = $transborderDistributionDetail;
        return $this;
    }
    /**
     * Get DistributionLocations value
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation[]|null
     */
    public function getDistributionLocations()
    {
        return $this->DistributionLocations;
    }
    /**
     * Set DistributionLocations value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation[] $distributionLocations
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public function setDistributionLocations(array $distributionLocations = array())
    {
        foreach ($distributionLocations as $shipmentConsolidationDetailDistributionLocationsItem) {
            // validation for constraint: itemType
            if (!$shipmentConsolidationDetailDistributionLocationsItem instanceof \CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation) {
                throw new \InvalidArgumentException(sprintf('The DistributionLocations property can only contain items of \CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation, "%s" given', is_object($shipmentConsolidationDetailDistributionLocationsItem) ? get_class($shipmentConsolidationDetailDistributionLocationsItem) : gettype($shipmentConsolidationDetailDistributionLocationsItem)), __LINE__);
            }
        }
        $this->DistributionLocations = $distributionLocations;
        return $this;
    }
    /**
     * Add item to DistributionLocations value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation $item
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public function addToDistributionLocations(\CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation) {
            throw new \InvalidArgumentException(sprintf('The DistributionLocations property can only contain items of \CommerceFedEx\FedExPHP\Structs\RequestedDistributionLocation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DistributionLocations[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentConsolidationDetail
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
