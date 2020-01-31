<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsolidationShipment Structs
 * Meta informations extracted from the WSDL
 * - documentation: Contains role and completed shipment data for shipments produced while confirming a consolidation.
 * @subpackage Structs
 */
class ConsolidationShipment extends AbstractStructBase
{
    /**
     * The ShipmentRoleType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the role of this shipment in the consolidation.
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentRoleType;
    /**
     * The RequestedShipment
     * Meta informations extracted from the WSDL
     * - documentation: Contains requested shipment data for a single shipment role in the consolidation.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public $RequestedShipment;
    /**
     * The CompletedShipmentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Contains completed shipment data for a single shipment role in the consolidation.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CompletedShipmentDetail
     */
    public $CompletedShipmentDetail;
    /**
     * Constructor method for ConsolidationShipment
     * @uses ConsolidationShipment::setShipmentRoleType()
     * @uses ConsolidationShipment::setRequestedShipment()
     * @uses ConsolidationShipment::setCompletedShipmentDetail()
     * @param string $shipmentRoleType
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedShipment $requestedShipment
     * @param \CommerceFedEx\FedExPHP\Structs\CompletedShipmentDetail $completedShipmentDetail
     */
    public function __construct($shipmentRoleType = null, \CommerceFedEx\FedExPHP\Structs\RequestedShipment $requestedShipment = null, \CommerceFedEx\FedExPHP\Structs\CompletedShipmentDetail $completedShipmentDetail = null)
    {
        $this
            ->setShipmentRoleType($shipmentRoleType)
            ->setRequestedShipment($requestedShipment)
            ->setCompletedShipmentDetail($completedShipmentDetail);
    }
    /**
     * Get ShipmentRoleType value
     * @return string|null
     */
    public function getShipmentRoleType()
    {
        return $this->ShipmentRoleType;
    }
    /**
     * Set ShipmentRoleType value
     * @uses \CommerceFedEx\FedExPHP\Enums\ConsolidationShipmentRoleType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ConsolidationShipmentRoleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shipmentRoleType
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationShipment
     */
    public function setShipmentRoleType($shipmentRoleType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ConsolidationShipmentRoleType::valueIsValid($shipmentRoleType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shipmentRoleType, implode(', ', \CommerceFedEx\FedExPHP\Enums\ConsolidationShipmentRoleType::getValidValues())), __LINE__);
        }
        $this->ShipmentRoleType = $shipmentRoleType;
        return $this;
    }
    /**
     * Get RequestedShipment value
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment|null
     */
    public function getRequestedShipment()
    {
        return $this->RequestedShipment;
    }
    /**
     * Set RequestedShipment value
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedShipment $requestedShipment
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationShipment
     */
    public function setRequestedShipment(\CommerceFedEx\FedExPHP\Structs\RequestedShipment $requestedShipment = null)
    {
        $this->RequestedShipment = $requestedShipment;
        return $this;
    }
    /**
     * Get CompletedShipmentDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedShipmentDetail|null
     */
    public function getCompletedShipmentDetail()
    {
        return $this->CompletedShipmentDetail;
    }
    /**
     * Set CompletedShipmentDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\CompletedShipmentDetail $completedShipmentDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationShipment
     */
    public function setCompletedShipmentDetail(\CommerceFedEx\FedExPHP\Structs\CompletedShipmentDetail $completedShipmentDetail = null)
    {
        $this->CompletedShipmentDetail = $completedShipmentDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationShipment
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
