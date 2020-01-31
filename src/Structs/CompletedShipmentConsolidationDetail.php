<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedShipmentConsolidationDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Associates a shipment within a consolidation with data about the consolidation.
 * @subpackage Structs
 */
class CompletedShipmentConsolidationDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of consolidation containing this shipment.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Role
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the role of this shipment within the consolidation.
     * - minOccurs: 0
     * @var string
     */
    public $Role;
    /**
     * The CompletedTransborderDistributionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CompletedTransborderDistributionDetail
     */
    public $CompletedTransborderDistributionDetail;
    /**
     * The AssociatedTrackingIds
     * Meta informations extracted from the WSDL
     * - documentation: Identifies other tracking IDs associated with this shipment in the same consolidation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\AssociatedTrackingId[]
     */
    public $AssociatedTrackingIds;
    /**
     * Constructor method for CompletedShipmentConsolidationDetail
     * @uses CompletedShipmentConsolidationDetail::setType()
     * @uses CompletedShipmentConsolidationDetail::setRole()
     * @uses CompletedShipmentConsolidationDetail::setCompletedTransborderDistributionDetail()
     * @uses CompletedShipmentConsolidationDetail::setAssociatedTrackingIds()
     * @param string $type
     * @param string $role
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedTransborderDistributionDetail $completedTransborderDistributionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AssociatedTrackingId[] $associatedTrackingIds
     */
    public function __construct($type = null, $role = null, \NicholasCreativeMedia\FedExPHP\Structs\CompletedTransborderDistributionDetail $completedTransborderDistributionDetail = null, array $associatedTrackingIds = array())
    {
        $this
            ->setType($type)
            ->setRole($role)
            ->setCompletedTransborderDistributionDetail($completedTransborderDistributionDetail)
            ->setAssociatedTrackingIds($associatedTrackingIds);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentConsolidationDetail
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentConsolidationDetail
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
     * Get CompletedTransborderDistributionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedTransborderDistributionDetail|null
     */
    public function getCompletedTransborderDistributionDetail()
    {
        return $this->CompletedTransborderDistributionDetail;
    }
    /**
     * Set CompletedTransborderDistributionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedTransborderDistributionDetail $completedTransborderDistributionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentConsolidationDetail
     */
    public function setCompletedTransborderDistributionDetail(\NicholasCreativeMedia\FedExPHP\Structs\CompletedTransborderDistributionDetail $completedTransborderDistributionDetail = null)
    {
        $this->CompletedTransborderDistributionDetail = $completedTransborderDistributionDetail;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentConsolidationDetail
     */
    public function setAssociatedTrackingIds(array $associatedTrackingIds = array())
    {
        foreach ($associatedTrackingIds as $completedShipmentConsolidationDetailAssociatedTrackingIdsItem) {
            // validation for constraint: itemType
            if (!$completedShipmentConsolidationDetailAssociatedTrackingIdsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\AssociatedTrackingId) {
                throw new \InvalidArgumentException(sprintf('The AssociatedTrackingIds property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AssociatedTrackingId, "%s" given', is_object($completedShipmentConsolidationDetailAssociatedTrackingIdsItem) ? get_class($completedShipmentConsolidationDetailAssociatedTrackingIdsItem) : gettype($completedShipmentConsolidationDetailAssociatedTrackingIdsItem)), __LINE__);
            }
        }
        $this->AssociatedTrackingIds = $associatedTrackingIds;
        return $this;
    }
    /**
     * Add item to AssociatedTrackingIds value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AssociatedTrackingId $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentConsolidationDetail
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentConsolidationDetail
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
