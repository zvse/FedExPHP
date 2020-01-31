<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentSpecialServicesRequested Structs
 * Meta informations extracted from the WSDL
 * - documentation: These special services are available at the shipment level for some or all service types. If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must
 * be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 * @subpackage Structs
 */
class ShipmentSpecialServicesRequested extends AbstractStructBase
{
    /**
     * The SpecialServiceTypes
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the shipment special service types that are requested on this shipment. For a list of the valid shipment special service types, please consult your integration documentation or get the list of the available special services
     * from the getAllSpecialServices method of the Validation Availability and Commitment service.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SpecialServiceTypes;
    /**
     * The CodDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CodDetail
     */
    public $CodDetail;
    /**
     * The DeliveryOnInvoiceAcceptanceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\DeliveryOnInvoiceAcceptanceDetail
     */
    public $DeliveryOnInvoiceAcceptanceDetail;
    /**
     * The HoldAtLocationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\HoldAtLocationDetail
     */
    public $HoldAtLocationDetail;
    /**
     * The EventNotificationDetail
     * Meta informations extracted from the WSDL
     * - documentation: This replaces eMailNotificationDetail
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShipmentEventNotificationDetail
     */
    public $EventNotificationDetail;
    /**
     * The ReturnShipmentDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ReturnShipmentDetail
     */
    public $ReturnShipmentDetail;
    /**
     * The PendingShipmentDetail
     * Meta informations extracted from the WSDL
     * - documentation: This field should be populated for pending shipments (e.g. e-mail label) It is required by a PENDING_SHIPMENT special service type.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\PendingShipmentDetail
     */
    public $PendingShipmentDetail;
    /**
     * The InternationalControlledExportDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\InternationalControlledExportDetail
     */
    public $InternationalControlledExportDetail;
    /**
     * The InternationalTrafficInArmsRegulationsDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\InternationalTrafficInArmsRegulationsDetail
     */
    public $InternationalTrafficInArmsRegulationsDetail;
    /**
     * The ShipmentDryIceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail
     */
    public $ShipmentDryIceDetail;
    /**
     * The HomeDeliveryPremiumDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\HomeDeliveryPremiumDetail
     */
    public $HomeDeliveryPremiumDetail;
    /**
     * The FreightGuaranteeDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\FreightGuaranteeDetail
     */
    public $FreightGuaranteeDetail;
    /**
     * The EtdDetail
     * Meta informations extracted from the WSDL
     * - documentation: Electronic Trade document references.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\EtdDetail
     */
    public $EtdDetail;
    /**
     * The CustomDeliveryWindowDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specification for date or range of dates on which delivery is to be attempted.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CustomDeliveryWindowDetail
     */
    public $CustomDeliveryWindowDetail;
    /**
     * Constructor method for ShipmentSpecialServicesRequested
     * @uses ShipmentSpecialServicesRequested::setSpecialServiceTypes()
     * @uses ShipmentSpecialServicesRequested::setCodDetail()
     * @uses ShipmentSpecialServicesRequested::setDeliveryOnInvoiceAcceptanceDetail()
     * @uses ShipmentSpecialServicesRequested::setHoldAtLocationDetail()
     * @uses ShipmentSpecialServicesRequested::setEventNotificationDetail()
     * @uses ShipmentSpecialServicesRequested::setReturnShipmentDetail()
     * @uses ShipmentSpecialServicesRequested::setPendingShipmentDetail()
     * @uses ShipmentSpecialServicesRequested::setInternationalControlledExportDetail()
     * @uses ShipmentSpecialServicesRequested::setInternationalTrafficInArmsRegulationsDetail()
     * @uses ShipmentSpecialServicesRequested::setShipmentDryIceDetail()
     * @uses ShipmentSpecialServicesRequested::setHomeDeliveryPremiumDetail()
     * @uses ShipmentSpecialServicesRequested::setFreightGuaranteeDetail()
     * @uses ShipmentSpecialServicesRequested::setEtdDetail()
     * @uses ShipmentSpecialServicesRequested::setCustomDeliveryWindowDetail()
     * @param string[] $specialServiceTypes
     * @param \CommerceFedEx\FedExPHP\Structs\CodDetail $codDetail
     * @param \CommerceFedEx\FedExPHP\Structs\DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
     * @param \CommerceFedEx\FedExPHP\Structs\HoldAtLocationDetail $holdAtLocationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentEventNotificationDetail $eventNotificationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ReturnShipmentDetail $returnShipmentDetail
     * @param \CommerceFedEx\FedExPHP\Structs\PendingShipmentDetail $pendingShipmentDetail
     * @param \CommerceFedEx\FedExPHP\Structs\InternationalControlledExportDetail $internationalControlledExportDetail
     * @param \CommerceFedEx\FedExPHP\Structs\InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail $shipmentDryIceDetail
     * @param \CommerceFedEx\FedExPHP\Structs\HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     * @param \CommerceFedEx\FedExPHP\Structs\FreightGuaranteeDetail $freightGuaranteeDetail
     * @param \CommerceFedEx\FedExPHP\Structs\EtdDetail $etdDetail
     * @param \CommerceFedEx\FedExPHP\Structs\CustomDeliveryWindowDetail $customDeliveryWindowDetail
     */
    public function __construct(array $specialServiceTypes = array(), \CommerceFedEx\FedExPHP\Structs\CodDetail $codDetail = null, \CommerceFedEx\FedExPHP\Structs\DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail = null, \CommerceFedEx\FedExPHP\Structs\HoldAtLocationDetail $holdAtLocationDetail = null, \CommerceFedEx\FedExPHP\Structs\ShipmentEventNotificationDetail $eventNotificationDetail = null, \CommerceFedEx\FedExPHP\Structs\ReturnShipmentDetail $returnShipmentDetail = null, \CommerceFedEx\FedExPHP\Structs\PendingShipmentDetail $pendingShipmentDetail = null, \CommerceFedEx\FedExPHP\Structs\InternationalControlledExportDetail $internationalControlledExportDetail = null, \CommerceFedEx\FedExPHP\Structs\InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail = null, \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail $shipmentDryIceDetail = null, \CommerceFedEx\FedExPHP\Structs\HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail = null, \CommerceFedEx\FedExPHP\Structs\FreightGuaranteeDetail $freightGuaranteeDetail = null, \CommerceFedEx\FedExPHP\Structs\EtdDetail $etdDetail = null, \CommerceFedEx\FedExPHP\Structs\CustomDeliveryWindowDetail $customDeliveryWindowDetail = null)
    {
        $this
            ->setSpecialServiceTypes($specialServiceTypes)
            ->setCodDetail($codDetail)
            ->setDeliveryOnInvoiceAcceptanceDetail($deliveryOnInvoiceAcceptanceDetail)
            ->setHoldAtLocationDetail($holdAtLocationDetail)
            ->setEventNotificationDetail($eventNotificationDetail)
            ->setReturnShipmentDetail($returnShipmentDetail)
            ->setPendingShipmentDetail($pendingShipmentDetail)
            ->setInternationalControlledExportDetail($internationalControlledExportDetail)
            ->setInternationalTrafficInArmsRegulationsDetail($internationalTrafficInArmsRegulationsDetail)
            ->setShipmentDryIceDetail($shipmentDryIceDetail)
            ->setHomeDeliveryPremiumDetail($homeDeliveryPremiumDetail)
            ->setFreightGuaranteeDetail($freightGuaranteeDetail)
            ->setEtdDetail($etdDetail)
            ->setCustomDeliveryWindowDetail($customDeliveryWindowDetail);
    }
    /**
     * Get SpecialServiceTypes value
     * @return string[]|null
     */
    public function getSpecialServiceTypes()
    {
        return $this->SpecialServiceTypes;
    }
    /**
     * Set SpecialServiceTypes value
     * @throws \InvalidArgumentException
     * @param string[] $specialServiceTypes
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes = array())
    {
        foreach ($specialServiceTypes as $shipmentSpecialServicesRequestedSpecialServiceTypesItem) {
            // validation for constraint: itemType
            if (!is_string($shipmentSpecialServicesRequestedSpecialServiceTypesItem)) {
                throw new \InvalidArgumentException(sprintf('The SpecialServiceTypes property can only contain items of string, "%s" given', is_object($shipmentSpecialServicesRequestedSpecialServiceTypesItem) ? get_class($shipmentSpecialServicesRequestedSpecialServiceTypesItem) : gettype($shipmentSpecialServicesRequestedSpecialServiceTypesItem)), __LINE__);
            }
        }
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    /**
     * Add item to SpecialServiceTypes value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function addToSpecialServiceTypes($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SpecialServiceTypes property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialServiceTypes[] = $item;
        return $this;
    }
    /**
     * Get CodDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\CodDetail|null
     */
    public function getCodDetail()
    {
        return $this->CodDetail;
    }
    /**
     * Set CodDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\CodDetail $codDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setCodDetail(\CommerceFedEx\FedExPHP\Structs\CodDetail $codDetail = null)
    {
        $this->CodDetail = $codDetail;
        return $this;
    }
    /**
     * Get DeliveryOnInvoiceAcceptanceDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\DeliveryOnInvoiceAcceptanceDetail|null
     */
    public function getDeliveryOnInvoiceAcceptanceDetail()
    {
        return $this->DeliveryOnInvoiceAcceptanceDetail;
    }
    /**
     * Set DeliveryOnInvoiceAcceptanceDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setDeliveryOnInvoiceAcceptanceDetail(\CommerceFedEx\FedExPHP\Structs\DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail = null)
    {
        $this->DeliveryOnInvoiceAcceptanceDetail = $deliveryOnInvoiceAcceptanceDetail;
        return $this;
    }
    /**
     * Get HoldAtLocationDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\HoldAtLocationDetail|null
     */
    public function getHoldAtLocationDetail()
    {
        return $this->HoldAtLocationDetail;
    }
    /**
     * Set HoldAtLocationDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\HoldAtLocationDetail $holdAtLocationDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setHoldAtLocationDetail(\CommerceFedEx\FedExPHP\Structs\HoldAtLocationDetail $holdAtLocationDetail = null)
    {
        $this->HoldAtLocationDetail = $holdAtLocationDetail;
        return $this;
    }
    /**
     * Get EventNotificationDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentEventNotificationDetail|null
     */
    public function getEventNotificationDetail()
    {
        return $this->EventNotificationDetail;
    }
    /**
     * Set EventNotificationDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentEventNotificationDetail $eventNotificationDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setEventNotificationDetail(\CommerceFedEx\FedExPHP\Structs\ShipmentEventNotificationDetail $eventNotificationDetail = null)
    {
        $this->EventNotificationDetail = $eventNotificationDetail;
        return $this;
    }
    /**
     * Get ReturnShipmentDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ReturnShipmentDetail|null
     */
    public function getReturnShipmentDetail()
    {
        return $this->ReturnShipmentDetail;
    }
    /**
     * Set ReturnShipmentDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ReturnShipmentDetail $returnShipmentDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setReturnShipmentDetail(\CommerceFedEx\FedExPHP\Structs\ReturnShipmentDetail $returnShipmentDetail = null)
    {
        $this->ReturnShipmentDetail = $returnShipmentDetail;
        return $this;
    }
    /**
     * Get PendingShipmentDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\PendingShipmentDetail|null
     */
    public function getPendingShipmentDetail()
    {
        return $this->PendingShipmentDetail;
    }
    /**
     * Set PendingShipmentDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\PendingShipmentDetail $pendingShipmentDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setPendingShipmentDetail(\CommerceFedEx\FedExPHP\Structs\PendingShipmentDetail $pendingShipmentDetail = null)
    {
        $this->PendingShipmentDetail = $pendingShipmentDetail;
        return $this;
    }
    /**
     * Get InternationalControlledExportDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\InternationalControlledExportDetail|null
     */
    public function getInternationalControlledExportDetail()
    {
        return $this->InternationalControlledExportDetail;
    }
    /**
     * Set InternationalControlledExportDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\InternationalControlledExportDetail $internationalControlledExportDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setInternationalControlledExportDetail(\CommerceFedEx\FedExPHP\Structs\InternationalControlledExportDetail $internationalControlledExportDetail = null)
    {
        $this->InternationalControlledExportDetail = $internationalControlledExportDetail;
        return $this;
    }
    /**
     * Get InternationalTrafficInArmsRegulationsDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\InternationalTrafficInArmsRegulationsDetail|null
     */
    public function getInternationalTrafficInArmsRegulationsDetail()
    {
        return $this->InternationalTrafficInArmsRegulationsDetail;
    }
    /**
     * Set InternationalTrafficInArmsRegulationsDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setInternationalTrafficInArmsRegulationsDetail(\CommerceFedEx\FedExPHP\Structs\InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail = null)
    {
        $this->InternationalTrafficInArmsRegulationsDetail = $internationalTrafficInArmsRegulationsDetail;
        return $this;
    }
    /**
     * Get ShipmentDryIceDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail|null
     */
    public function getShipmentDryIceDetail()
    {
        return $this->ShipmentDryIceDetail;
    }
    /**
     * Set ShipmentDryIceDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail $shipmentDryIceDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setShipmentDryIceDetail(\CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail $shipmentDryIceDetail = null)
    {
        $this->ShipmentDryIceDetail = $shipmentDryIceDetail;
        return $this;
    }
    /**
     * Get HomeDeliveryPremiumDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\HomeDeliveryPremiumDetail|null
     */
    public function getHomeDeliveryPremiumDetail()
    {
        return $this->HomeDeliveryPremiumDetail;
    }
    /**
     * Set HomeDeliveryPremiumDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setHomeDeliveryPremiumDetail(\CommerceFedEx\FedExPHP\Structs\HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail = null)
    {
        $this->HomeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;
        return $this;
    }
    /**
     * Get FreightGuaranteeDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\FreightGuaranteeDetail|null
     */
    public function getFreightGuaranteeDetail()
    {
        return $this->FreightGuaranteeDetail;
    }
    /**
     * Set FreightGuaranteeDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\FreightGuaranteeDetail $freightGuaranteeDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setFreightGuaranteeDetail(\CommerceFedEx\FedExPHP\Structs\FreightGuaranteeDetail $freightGuaranteeDetail = null)
    {
        $this->FreightGuaranteeDetail = $freightGuaranteeDetail;
        return $this;
    }
    /**
     * Get EtdDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\EtdDetail|null
     */
    public function getEtdDetail()
    {
        return $this->EtdDetail;
    }
    /**
     * Set EtdDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\EtdDetail $etdDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setEtdDetail(\CommerceFedEx\FedExPHP\Structs\EtdDetail $etdDetail = null)
    {
        $this->EtdDetail = $etdDetail;
        return $this;
    }
    /**
     * Get CustomDeliveryWindowDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\CustomDeliveryWindowDetail|null
     */
    public function getCustomDeliveryWindowDetail()
    {
        return $this->CustomDeliveryWindowDetail;
    }
    /**
     * Set CustomDeliveryWindowDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\CustomDeliveryWindowDetail $customDeliveryWindowDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setCustomDeliveryWindowDetail(\CommerceFedEx\FedExPHP\Structs\CustomDeliveryWindowDetail $customDeliveryWindowDetail = null)
    {
        $this->CustomDeliveryWindowDetail = $customDeliveryWindowDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested
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
