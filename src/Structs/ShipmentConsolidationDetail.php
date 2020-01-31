<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\AssociatedTrackingId[]
     */
    public $AssociatedTrackingIds;
    /**
     * The SpecialServicesRequested
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the consolidation-level special services to be performed for this shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationSpecialServicesRequested
     */
    public $SpecialServicesRequested;
    /**
     * The ConsolidationOriginAddress
     * Meta informations extracted from the WSDL
     * - documentation: This is the origin address of the consolidation.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $ConsolidationOriginAddress;
    /**
     * The InternationalDistributionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies attributes of a shipment within an international distribution.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentInternationalDistributionDetail
     */
    public $InternationalDistributionDetail;
    /**
     * The TransborderDistributionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies attributes of a shipment within a transborder distribution.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentTransborderDistributionDetail
     */
    public $TransborderDistributionDetail;
    /**
     * Constructor method for ShipmentConsolidationDetail
     * @uses ShipmentConsolidationDetail::setRelationshipTimestamp()
     * @uses ShipmentConsolidationDetail::setType()
     * @uses ShipmentConsolidationDetail::setRole()
     * @uses ShipmentConsolidationDetail::setAssociatedTrackingIds()
     * @uses ShipmentConsolidationDetail::setSpecialServicesRequested()
     * @uses ShipmentConsolidationDetail::setConsolidationOriginAddress()
     * @uses ShipmentConsolidationDetail::setInternationalDistributionDetail()
     * @uses ShipmentConsolidationDetail::setTransborderDistributionDetail()
     * @param string $relationshipTimestamp
     * @param string $type
     * @param string $role
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AssociatedTrackingId[] $associatedTrackingIds
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationSpecialServicesRequested $specialServicesRequested
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $consolidationOriginAddress
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentInternationalDistributionDetail $internationalDistributionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentTransborderDistributionDetail $transborderDistributionDetail
     */
    public function __construct($relationshipTimestamp = null, $type = null, $role = null, array $associatedTrackingIds = array(), \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationSpecialServicesRequested $specialServicesRequested = null, \NicholasCreativeMedia\FedExPHP\Structs\Address $consolidationOriginAddress = null, \NicholasCreativeMedia\FedExPHP\Structs\ShipmentInternationalDistributionDetail $internationalDistributionDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ShipmentTransborderDistributionDetail $transborderDistributionDetail = null)
    {
        $this
            ->setRelationshipTimestamp($relationshipTimestamp)
            ->setType($type)
            ->setRole($role)
            ->setAssociatedTrackingIds($associatedTrackingIds)
            ->setSpecialServicesRequested($specialServicesRequested)
            ->setConsolidationOriginAddress($consolidationOriginAddress)
            ->setInternationalDistributionDetail($internationalDistributionDetail)
            ->setTransborderDistributionDetail($transborderDistributionDetail);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConsolidationDetail
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ConsolidationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ConsolidationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ConsolidationType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ConsolidationType::getValidValues())), __LINE__);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ConsolidationShipmentRoleType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ConsolidationShipmentRoleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $role
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public function setRole($role = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ConsolidationShipmentRoleType::valueIsValid($role)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $role, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ConsolidationShipmentRoleType::getValidValues())), __LINE__);
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Get AssociatedTrackingIds value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AssociatedTrackingId[]|null
     */
    public function getAssociatedTrackingIds()
    {
        return $this->AssociatedTrackingIds;
    }
    /**
     * Set AssociatedTrackingIds value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AssociatedTrackingId[] $associatedTrackingIds
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public function setAssociatedTrackingIds(array $associatedTrackingIds = array())
    {
        foreach ($associatedTrackingIds as $shipmentConsolidationDetailAssociatedTrackingIdsItem) {
            // validation for constraint: itemType
            if (!$shipmentConsolidationDetailAssociatedTrackingIdsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\AssociatedTrackingId) {
                throw new \InvalidArgumentException(sprintf('The AssociatedTrackingIds property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AssociatedTrackingId, "%s" given', is_object($shipmentConsolidationDetailAssociatedTrackingIdsItem) ? get_class($shipmentConsolidationDetailAssociatedTrackingIdsItem) : gettype($shipmentConsolidationDetailAssociatedTrackingIdsItem)), __LINE__);
            }
        }
        $this->AssociatedTrackingIds = $associatedTrackingIds;
        return $this;
    }
    /**
     * Add item to AssociatedTrackingIds value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AssociatedTrackingId $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public function addToAssociatedTrackingIds(\NicholasCreativeMedia\FedExPHP\Structs\AssociatedTrackingId $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\AssociatedTrackingId) {
            throw new \InvalidArgumentException(sprintf('The AssociatedTrackingIds property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AssociatedTrackingId, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AssociatedTrackingIds[] = $item;
        return $this;
    }
    /**
     * Get SpecialServicesRequested value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationSpecialServicesRequested|null
     */
    public function getSpecialServicesRequested()
    {
        return $this->SpecialServicesRequested;
    }
    /**
     * Set SpecialServicesRequested value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationSpecialServicesRequested $specialServicesRequested
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public function setSpecialServicesRequested(\NicholasCreativeMedia\FedExPHP\Structs\ConsolidationSpecialServicesRequested $specialServicesRequested = null)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    /**
     * Get ConsolidationOriginAddress value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address|null
     */
    public function getConsolidationOriginAddress()
    {
        return $this->ConsolidationOriginAddress;
    }
    /**
     * Set ConsolidationOriginAddress value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $consolidationOriginAddress
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public function setConsolidationOriginAddress(\NicholasCreativeMedia\FedExPHP\Structs\Address $consolidationOriginAddress = null)
    {
        $this->ConsolidationOriginAddress = $consolidationOriginAddress;
        return $this;
    }
    /**
     * Get InternationalDistributionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentInternationalDistributionDetail|null
     */
    public function getInternationalDistributionDetail()
    {
        return $this->InternationalDistributionDetail;
    }
    /**
     * Set InternationalDistributionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentInternationalDistributionDetail $internationalDistributionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public function setInternationalDistributionDetail(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentInternationalDistributionDetail $internationalDistributionDetail = null)
    {
        $this->InternationalDistributionDetail = $internationalDistributionDetail;
        return $this;
    }
    /**
     * Get TransborderDistributionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentTransborderDistributionDetail|null
     */
    public function getTransborderDistributionDetail()
    {
        return $this->TransborderDistributionDetail;
    }
    /**
     * Set TransborderDistributionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentTransborderDistributionDetail $transborderDistributionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public function setTransborderDistributionDetail(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentTransborderDistributionDetail $transborderDistributionDetail = null)
    {
        $this->TransborderDistributionDetail = $transborderDistributionDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConsolidationDetail
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
