<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CodDetail
     */
    public $CodDetail;
    /**
     * The DeliveryOnInvoiceAcceptanceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DeliveryOnInvoiceAcceptanceDetail
     */
    public $DeliveryOnInvoiceAcceptanceDetail;
    /**
     * The HoldAtLocationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\HoldAtLocationDetail
     */
    public $HoldAtLocationDetail;
    /**
     * The EventNotificationDetail
     * Meta informations extracted from the WSDL
     * - documentation: This replaces eMailNotificationDetail
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentEventNotificationDetail
     */
    public $EventNotificationDetail;
    /**
     * The ReturnShipmentDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ReturnShipmentDetail
     */
    public $ReturnShipmentDetail;
    /**
     * The PendingShipmentDetail
     * Meta informations extracted from the WSDL
     * - documentation: This field should be populated for pending shipments (e.g. e-mail label) It is required by a PENDING_SHIPMENT special service type.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PendingShipmentDetail
     */
    public $PendingShipmentDetail;
    /**
     * The InternationalControlledExportDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\InternationalControlledExportDetail
     */
    public $InternationalControlledExportDetail;
    /**
     * The InternationalTrafficInArmsRegulationsDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\InternationalTrafficInArmsRegulationsDetail
     */
    public $InternationalTrafficInArmsRegulationsDetail;
    /**
     * The ShipmentDryIceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentDryIceDetail
     */
    public $ShipmentDryIceDetail;
    /**
     * The HomeDeliveryPremiumDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\HomeDeliveryPremiumDetail
     */
    public $HomeDeliveryPremiumDetail;
    /**
     * The FlatbedTrailerDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\FlatbedTrailerDetail
     */
    public $FlatbedTrailerDetail;
    /**
     * The FreightGuaranteeDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\FreightGuaranteeDetail
     */
    public $FreightGuaranteeDetail;
    /**
     * The EtdDetail
     * Meta informations extracted from the WSDL
     * - documentation: Electronic Trade document references.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\EtdDetail
     */
    public $EtdDetail;
    /**
     * The ExtraLaborDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specification for labor to be performed with the shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ExtraLaborDetail
     */
    public $ExtraLaborDetail;
    /**
     * The PalletShrinkwrapDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifications for pallets to be shrinkwrapped as part of a Freight shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PalletShrinkwrapDetail
     */
    public $PalletShrinkwrapDetail;
    /**
     * The PalletsProvidedDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifications for pallets to be provided on Freight shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PalletsProvidedDetail
     */
    public $PalletsProvidedDetail;
    /**
     * The DetentionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifications for pup/set or vehicle delayed for loading or unloading.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DetentionDetail
     */
    public $DetentionDetail;
    /**
     * The MarkingOrTaggingDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specification for marking or tagging of pieces in shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\MarkingOrTaggingDetail
     */
    public $MarkingOrTaggingDetail;
    /**
     * The NonBusinessTimeDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specification for services performed during non-business hours and/or days.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\NonBusinessTimeDetail
     */
    public $NonBusinessTimeDetail;
    /**
     * The ShipmentAssemblyDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specification for assembly performed on shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAssemblyDetail
     */
    public $ShipmentAssemblyDetail;
    /**
     * The SortAndSegregateDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specification for sorting and/or segregating performed on shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\SortAndSegregateDetail
     */
    public $SortAndSegregateDetail;
    /**
     * The SpecialEquipmentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specification for special equipment used in loading/unloading shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentDetail
     */
    public $SpecialEquipmentDetail;
    /**
     * The StorageDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specification for storage provided for shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\StorageDetail
     */
    public $StorageDetail;
    /**
     * The WeighingDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specification for weighing services provided for shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\WeighingDetail
     */
    public $WeighingDetail;
    /**
     * The CustomDeliveryWindowDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specification for date or range of dates on which delivery is to be attempted.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CustomDeliveryWindowDetail
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
     * @uses ShipmentSpecialServicesRequested::setFlatbedTrailerDetail()
     * @uses ShipmentSpecialServicesRequested::setFreightGuaranteeDetail()
     * @uses ShipmentSpecialServicesRequested::setEtdDetail()
     * @uses ShipmentSpecialServicesRequested::setExtraLaborDetail()
     * @uses ShipmentSpecialServicesRequested::setPalletShrinkwrapDetail()
     * @uses ShipmentSpecialServicesRequested::setPalletsProvidedDetail()
     * @uses ShipmentSpecialServicesRequested::setDetentionDetail()
     * @uses ShipmentSpecialServicesRequested::setMarkingOrTaggingDetail()
     * @uses ShipmentSpecialServicesRequested::setNonBusinessTimeDetail()
     * @uses ShipmentSpecialServicesRequested::setShipmentAssemblyDetail()
     * @uses ShipmentSpecialServicesRequested::setSortAndSegregateDetail()
     * @uses ShipmentSpecialServicesRequested::setSpecialEquipmentDetail()
     * @uses ShipmentSpecialServicesRequested::setStorageDetail()
     * @uses ShipmentSpecialServicesRequested::setWeighingDetail()
     * @uses ShipmentSpecialServicesRequested::setCustomDeliveryWindowDetail()
     * @param string[] $specialServiceTypes
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CodDetail $codDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\HoldAtLocationDetail $holdAtLocationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentEventNotificationDetail $eventNotificationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ReturnShipmentDetail $returnShipmentDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PendingShipmentDetail $pendingShipmentDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\InternationalControlledExportDetail $internationalControlledExportDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentDryIceDetail $shipmentDryIceDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FlatbedTrailerDetail $flatbedTrailerDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightGuaranteeDetail $freightGuaranteeDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\EtdDetail $etdDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ExtraLaborDetail $extraLaborDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PalletShrinkwrapDetail $palletShrinkwrapDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PalletsProvidedDetail $palletsProvidedDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DetentionDetail $detentionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\MarkingOrTaggingDetail $markingOrTaggingDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\NonBusinessTimeDetail $nonBusinessTimeDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAssemblyDetail $shipmentAssemblyDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SortAndSegregateDetail $sortAndSegregateDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentDetail $specialEquipmentDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\StorageDetail $storageDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WeighingDetail $weighingDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomDeliveryWindowDetail $customDeliveryWindowDetail
     */
    public function __construct(array $specialServiceTypes = array(), \NicholasCreativeMedia\FedExPHP\Structs\CodDetail $codDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\HoldAtLocationDetail $holdAtLocationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ShipmentEventNotificationDetail $eventNotificationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ReturnShipmentDetail $returnShipmentDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\PendingShipmentDetail $pendingShipmentDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\InternationalControlledExportDetail $internationalControlledExportDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ShipmentDryIceDetail $shipmentDryIceDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\FlatbedTrailerDetail $flatbedTrailerDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\FreightGuaranteeDetail $freightGuaranteeDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\EtdDetail $etdDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ExtraLaborDetail $extraLaborDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\PalletShrinkwrapDetail $palletShrinkwrapDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\PalletsProvidedDetail $palletsProvidedDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\DetentionDetail $detentionDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\MarkingOrTaggingDetail $markingOrTaggingDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\NonBusinessTimeDetail $nonBusinessTimeDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAssemblyDetail $shipmentAssemblyDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\SortAndSegregateDetail $sortAndSegregateDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentDetail $specialEquipmentDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\StorageDetail $storageDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\WeighingDetail $weighingDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\CustomDeliveryWindowDetail $customDeliveryWindowDetail = null)
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
            ->setFlatbedTrailerDetail($flatbedTrailerDetail)
            ->setFreightGuaranteeDetail($freightGuaranteeDetail)
            ->setEtdDetail($etdDetail)
            ->setExtraLaborDetail($extraLaborDetail)
            ->setPalletShrinkwrapDetail($palletShrinkwrapDetail)
            ->setPalletsProvidedDetail($palletsProvidedDetail)
            ->setDetentionDetail($detentionDetail)
            ->setMarkingOrTaggingDetail($markingOrTaggingDetail)
            ->setNonBusinessTimeDetail($nonBusinessTimeDetail)
            ->setShipmentAssemblyDetail($shipmentAssemblyDetail)
            ->setSortAndSegregateDetail($sortAndSegregateDetail)
            ->setSpecialEquipmentDetail($specialEquipmentDetail)
            ->setStorageDetail($storageDetail)
            ->setWeighingDetail($weighingDetail)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodDetail|null
     */
    public function getCodDetail()
    {
        return $this->CodDetail;
    }
    /**
     * Set CodDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CodDetail $codDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setCodDetail(\NicholasCreativeMedia\FedExPHP\Structs\CodDetail $codDetail = null)
    {
        $this->CodDetail = $codDetail;
        return $this;
    }
    /**
     * Get DeliveryOnInvoiceAcceptanceDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeliveryOnInvoiceAcceptanceDetail|null
     */
    public function getDeliveryOnInvoiceAcceptanceDetail()
    {
        return $this->DeliveryOnInvoiceAcceptanceDetail;
    }
    /**
     * Set DeliveryOnInvoiceAcceptanceDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setDeliveryOnInvoiceAcceptanceDetail(\NicholasCreativeMedia\FedExPHP\Structs\DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail = null)
    {
        $this->DeliveryOnInvoiceAcceptanceDetail = $deliveryOnInvoiceAcceptanceDetail;
        return $this;
    }
    /**
     * Get HoldAtLocationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\HoldAtLocationDetail|null
     */
    public function getHoldAtLocationDetail()
    {
        return $this->HoldAtLocationDetail;
    }
    /**
     * Set HoldAtLocationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\HoldAtLocationDetail $holdAtLocationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setHoldAtLocationDetail(\NicholasCreativeMedia\FedExPHP\Structs\HoldAtLocationDetail $holdAtLocationDetail = null)
    {
        $this->HoldAtLocationDetail = $holdAtLocationDetail;
        return $this;
    }
    /**
     * Get EventNotificationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentEventNotificationDetail|null
     */
    public function getEventNotificationDetail()
    {
        return $this->EventNotificationDetail;
    }
    /**
     * Set EventNotificationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentEventNotificationDetail $eventNotificationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setEventNotificationDetail(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentEventNotificationDetail $eventNotificationDetail = null)
    {
        $this->EventNotificationDetail = $eventNotificationDetail;
        return $this;
    }
    /**
     * Get ReturnShipmentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReturnShipmentDetail|null
     */
    public function getReturnShipmentDetail()
    {
        return $this->ReturnShipmentDetail;
    }
    /**
     * Set ReturnShipmentDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ReturnShipmentDetail $returnShipmentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setReturnShipmentDetail(\NicholasCreativeMedia\FedExPHP\Structs\ReturnShipmentDetail $returnShipmentDetail = null)
    {
        $this->ReturnShipmentDetail = $returnShipmentDetail;
        return $this;
    }
    /**
     * Get PendingShipmentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PendingShipmentDetail|null
     */
    public function getPendingShipmentDetail()
    {
        return $this->PendingShipmentDetail;
    }
    /**
     * Set PendingShipmentDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PendingShipmentDetail $pendingShipmentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setPendingShipmentDetail(\NicholasCreativeMedia\FedExPHP\Structs\PendingShipmentDetail $pendingShipmentDetail = null)
    {
        $this->PendingShipmentDetail = $pendingShipmentDetail;
        return $this;
    }
    /**
     * Get InternationalControlledExportDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalControlledExportDetail|null
     */
    public function getInternationalControlledExportDetail()
    {
        return $this->InternationalControlledExportDetail;
    }
    /**
     * Set InternationalControlledExportDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\InternationalControlledExportDetail $internationalControlledExportDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setInternationalControlledExportDetail(\NicholasCreativeMedia\FedExPHP\Structs\InternationalControlledExportDetail $internationalControlledExportDetail = null)
    {
        $this->InternationalControlledExportDetail = $internationalControlledExportDetail;
        return $this;
    }
    /**
     * Get InternationalTrafficInArmsRegulationsDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalTrafficInArmsRegulationsDetail|null
     */
    public function getInternationalTrafficInArmsRegulationsDetail()
    {
        return $this->InternationalTrafficInArmsRegulationsDetail;
    }
    /**
     * Set InternationalTrafficInArmsRegulationsDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setInternationalTrafficInArmsRegulationsDetail(\NicholasCreativeMedia\FedExPHP\Structs\InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail = null)
    {
        $this->InternationalTrafficInArmsRegulationsDetail = $internationalTrafficInArmsRegulationsDetail;
        return $this;
    }
    /**
     * Get ShipmentDryIceDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentDryIceDetail|null
     */
    public function getShipmentDryIceDetail()
    {
        return $this->ShipmentDryIceDetail;
    }
    /**
     * Set ShipmentDryIceDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentDryIceDetail $shipmentDryIceDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setShipmentDryIceDetail(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentDryIceDetail $shipmentDryIceDetail = null)
    {
        $this->ShipmentDryIceDetail = $shipmentDryIceDetail;
        return $this;
    }
    /**
     * Get HomeDeliveryPremiumDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\HomeDeliveryPremiumDetail|null
     */
    public function getHomeDeliveryPremiumDetail()
    {
        return $this->HomeDeliveryPremiumDetail;
    }
    /**
     * Set HomeDeliveryPremiumDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setHomeDeliveryPremiumDetail(\NicholasCreativeMedia\FedExPHP\Structs\HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail = null)
    {
        $this->HomeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;
        return $this;
    }
    /**
     * Get FlatbedTrailerDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FlatbedTrailerDetail|null
     */
    public function getFlatbedTrailerDetail()
    {
        return $this->FlatbedTrailerDetail;
    }
    /**
     * Set FlatbedTrailerDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FlatbedTrailerDetail $flatbedTrailerDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setFlatbedTrailerDetail(\NicholasCreativeMedia\FedExPHP\Structs\FlatbedTrailerDetail $flatbedTrailerDetail = null)
    {
        $this->FlatbedTrailerDetail = $flatbedTrailerDetail;
        return $this;
    }
    /**
     * Get FreightGuaranteeDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightGuaranteeDetail|null
     */
    public function getFreightGuaranteeDetail()
    {
        return $this->FreightGuaranteeDetail;
    }
    /**
     * Set FreightGuaranteeDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightGuaranteeDetail $freightGuaranteeDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setFreightGuaranteeDetail(\NicholasCreativeMedia\FedExPHP\Structs\FreightGuaranteeDetail $freightGuaranteeDetail = null)
    {
        $this->FreightGuaranteeDetail = $freightGuaranteeDetail;
        return $this;
    }
    /**
     * Get EtdDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EtdDetail|null
     */
    public function getEtdDetail()
    {
        return $this->EtdDetail;
    }
    /**
     * Set EtdDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\EtdDetail $etdDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setEtdDetail(\NicholasCreativeMedia\FedExPHP\Structs\EtdDetail $etdDetail = null)
    {
        $this->EtdDetail = $etdDetail;
        return $this;
    }
    /**
     * Get ExtraLaborDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ExtraLaborDetail|null
     */
    public function getExtraLaborDetail()
    {
        return $this->ExtraLaborDetail;
    }
    /**
     * Set ExtraLaborDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ExtraLaborDetail $extraLaborDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setExtraLaborDetail(\NicholasCreativeMedia\FedExPHP\Structs\ExtraLaborDetail $extraLaborDetail = null)
    {
        $this->ExtraLaborDetail = $extraLaborDetail;
        return $this;
    }
    /**
     * Get PalletShrinkwrapDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PalletShrinkwrapDetail|null
     */
    public function getPalletShrinkwrapDetail()
    {
        return $this->PalletShrinkwrapDetail;
    }
    /**
     * Set PalletShrinkwrapDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PalletShrinkwrapDetail $palletShrinkwrapDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setPalletShrinkwrapDetail(\NicholasCreativeMedia\FedExPHP\Structs\PalletShrinkwrapDetail $palletShrinkwrapDetail = null)
    {
        $this->PalletShrinkwrapDetail = $palletShrinkwrapDetail;
        return $this;
    }
    /**
     * Get PalletsProvidedDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PalletsProvidedDetail|null
     */
    public function getPalletsProvidedDetail()
    {
        return $this->PalletsProvidedDetail;
    }
    /**
     * Set PalletsProvidedDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PalletsProvidedDetail $palletsProvidedDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setPalletsProvidedDetail(\NicholasCreativeMedia\FedExPHP\Structs\PalletsProvidedDetail $palletsProvidedDetail = null)
    {
        $this->PalletsProvidedDetail = $palletsProvidedDetail;
        return $this;
    }
    /**
     * Get DetentionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DetentionDetail|null
     */
    public function getDetentionDetail()
    {
        return $this->DetentionDetail;
    }
    /**
     * Set DetentionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DetentionDetail $detentionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setDetentionDetail(\NicholasCreativeMedia\FedExPHP\Structs\DetentionDetail $detentionDetail = null)
    {
        $this->DetentionDetail = $detentionDetail;
        return $this;
    }
    /**
     * Get MarkingOrTaggingDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\MarkingOrTaggingDetail|null
     */
    public function getMarkingOrTaggingDetail()
    {
        return $this->MarkingOrTaggingDetail;
    }
    /**
     * Set MarkingOrTaggingDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\MarkingOrTaggingDetail $markingOrTaggingDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setMarkingOrTaggingDetail(\NicholasCreativeMedia\FedExPHP\Structs\MarkingOrTaggingDetail $markingOrTaggingDetail = null)
    {
        $this->MarkingOrTaggingDetail = $markingOrTaggingDetail;
        return $this;
    }
    /**
     * Get NonBusinessTimeDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\NonBusinessTimeDetail|null
     */
    public function getNonBusinessTimeDetail()
    {
        return $this->NonBusinessTimeDetail;
    }
    /**
     * Set NonBusinessTimeDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\NonBusinessTimeDetail $nonBusinessTimeDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setNonBusinessTimeDetail(\NicholasCreativeMedia\FedExPHP\Structs\NonBusinessTimeDetail $nonBusinessTimeDetail = null)
    {
        $this->NonBusinessTimeDetail = $nonBusinessTimeDetail;
        return $this;
    }
    /**
     * Get ShipmentAssemblyDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAssemblyDetail|null
     */
    public function getShipmentAssemblyDetail()
    {
        return $this->ShipmentAssemblyDetail;
    }
    /**
     * Set ShipmentAssemblyDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAssemblyDetail $shipmentAssemblyDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setShipmentAssemblyDetail(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentAssemblyDetail $shipmentAssemblyDetail = null)
    {
        $this->ShipmentAssemblyDetail = $shipmentAssemblyDetail;
        return $this;
    }
    /**
     * Get SortAndSegregateDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SortAndSegregateDetail|null
     */
    public function getSortAndSegregateDetail()
    {
        return $this->SortAndSegregateDetail;
    }
    /**
     * Set SortAndSegregateDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SortAndSegregateDetail $sortAndSegregateDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setSortAndSegregateDetail(\NicholasCreativeMedia\FedExPHP\Structs\SortAndSegregateDetail $sortAndSegregateDetail = null)
    {
        $this->SortAndSegregateDetail = $sortAndSegregateDetail;
        return $this;
    }
    /**
     * Get SpecialEquipmentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentDetail|null
     */
    public function getSpecialEquipmentDetail()
    {
        return $this->SpecialEquipmentDetail;
    }
    /**
     * Set SpecialEquipmentDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentDetail $specialEquipmentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setSpecialEquipmentDetail(\NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentDetail $specialEquipmentDetail = null)
    {
        $this->SpecialEquipmentDetail = $specialEquipmentDetail;
        return $this;
    }
    /**
     * Get StorageDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\StorageDetail|null
     */
    public function getStorageDetail()
    {
        return $this->StorageDetail;
    }
    /**
     * Set StorageDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\StorageDetail $storageDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setStorageDetail(\NicholasCreativeMedia\FedExPHP\Structs\StorageDetail $storageDetail = null)
    {
        $this->StorageDetail = $storageDetail;
        return $this;
    }
    /**
     * Get WeighingDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\WeighingDetail|null
     */
    public function getWeighingDetail()
    {
        return $this->WeighingDetail;
    }
    /**
     * Set WeighingDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WeighingDetail $weighingDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setWeighingDetail(\NicholasCreativeMedia\FedExPHP\Structs\WeighingDetail $weighingDetail = null)
    {
        $this->WeighingDetail = $weighingDetail;
        return $this;
    }
    /**
     * Get CustomDeliveryWindowDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomDeliveryWindowDetail|null
     */
    public function getCustomDeliveryWindowDetail()
    {
        return $this->CustomDeliveryWindowDetail;
    }
    /**
     * Set CustomDeliveryWindowDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomDeliveryWindowDetail $customDeliveryWindowDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public function setCustomDeliveryWindowDetail(\NicholasCreativeMedia\FedExPHP\Structs\CustomDeliveryWindowDetail $customDeliveryWindowDetail = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
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
