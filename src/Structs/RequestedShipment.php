<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestedShipment Structs
 * @subpackage Structs
 */
class RequestedShipment extends AbstractStructBase
{
    /**
     * The ShipTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $ShipTimestamp;
    /**
     * The DropoffType
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $DropoffType;
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - documentation: This field contains the service type values, like PRIORITY_OVERNIGHT and FEDEX_GROUND.
     * - minOccurs: 1
     * @var string
     */
    public $ServiceType;
    /**
     * The PackagingType
     * Meta informations extracted from the WSDL
     * - documentation: This field contains the packaging type values, like YOUR_PACKAGING and FEDEX_ENVELOPE.
     * - minOccurs: 1
     * @var string
     */
    public $PackagingType;
    /**
     * The Shipper
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\Party
     */
    public $Shipper;
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\Party
     */
    public $Recipient;
    /**
     * The LabelSpecification
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\LabelSpecification
     */
    public $LabelSpecification;
    /**
     * The PackageCount
     * Meta informations extracted from the WSDL
     * - documentation: The total number of packages in the entire shipment (even when the shipment spans multiple transactions.)
     * - minOccurs: 1
     * @var int
     */
    public $PackageCount;
    /**
     * The ManifestDetail
     * Meta informations extracted from the WSDL
     * - documentation: This specifies information related to the manifest associated with the shipment.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShipmentManifestDetail
     */
    public $ManifestDetail;
    /**
     * The TotalWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Weight
     */
    public $TotalWeight;
    /**
     * The TotalInsuredValue
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the total declared value for carriage of the shipment. The declared value for carriage represents the maximum liability of FedEx in connection with a shipment, including, but not limited to, any loss, damage, delay,
     * mis-delivery, nondelivery, misinformation, any failure to provide information, or mis-delivery of information relating to the shipment.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $TotalInsuredValue;
    /**
     * The PreferredCurrency
     * Meta informations extracted from the WSDL
     * - documentation: This attribute indicates the currency the caller requests to have used in all returned monetary values (when a choice is possible).
     * - minOccurs: 0
     * @var string
     */
    public $PreferredCurrency;
    /**
     * The ShipmentAuthorizationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies details about the entity responsible for the shipment.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShipmentAuthorizationDetail
     */
    public $ShipmentAuthorizationDetail;
    /**
     * The RecipientLocationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RecipientLocationNumber;
    /**
     * The Origin
     * Meta informations extracted from the WSDL
     * - documentation: Physical starting address for the shipment, if different from shipper's address.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ContactAndAddress
     */
    public $Origin;
    /**
     * The SoldTo
     * Meta informations extracted from the WSDL
     * - documentation: The sold-to party is used for customs clearance; for example, in support of US import customs rules. The need for this field could vary based on whether a sold-to party was specified on a consolidation.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Party
     */
    public $SoldTo;
    /**
     * The ShippingChargesPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Payment
     */
    public $ShippingChargesPayment;
    /**
     * The SpecialServicesRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public $SpecialServicesRequested;
    /**
     * The ExpressFreightDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ExpressFreightDetail
     */
    public $ExpressFreightDetail;
    /**
     * The FreightShipmentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Data applicable to shipments using FEDEX_FREIGHT_ECONOMY and FEDEX_FREIGHT_PRIORITY services.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\FreightShipmentDetail
     */
    public $FreightShipmentDetail;
    /**
     * The DeliveryInstructions
     * Meta informations extracted from the WSDL
     * - documentation: Used with Ground Home Delivery and Freight.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryInstructions;
    /**
     * The VariableHandlingChargeDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\VariableHandlingChargeDetail
     */
    public $VariableHandlingChargeDetail;
    /**
     * The CustomsClearanceDetail
     * Meta informations extracted from the WSDL
     * - documentation: Customs clearance data, used for both international and intra-country shipping.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public $CustomsClearanceDetail;
    /**
     * The PickupDetail
     * Meta informations extracted from the WSDL
     * - documentation: For use in "process tag" transaction.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\PickupDetail
     */
    public $PickupDetail;
    /**
     * The SmartPostDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the characteristics of a shipment pertaining to SmartPost services.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\SmartPostShipmentDetail
     */
    public $SmartPostDetail;
    /**
     * The BlockInsightVisibility
     * Meta informations extracted from the WSDL
     * - documentation: If true, only the shipper/payor will have visibility of this shipment.
     * - minOccurs: 0
     * @var bool
     */
    public $BlockInsightVisibility;
    /**
     * The ShippingDocumentSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Contains data used to create additional (non-label) shipping documents.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public $ShippingDocumentSpecification;
    /**
     * The RateRequestTypes
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether and what kind of rates the customer wishes to have quoted on this shipment. The reply will also be constrained by other data on the shipment and customer.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RateRequestTypes;
    /**
     * The EdtRequestType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether the customer wishes to have Estimated Duties and Taxes provided with the rate quotation on this shipment. Only applies with shipments moving under international services.
     * - minOccurs: 0
     * @var string
     */
    public $EdtRequestType;
    /**
     * The MasterTrackingId
     * Meta informations extracted from the WSDL
     * - documentation: Only used with multiple-transaction shipments, to identify the master package in a multi-piece shipment.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TrackingId
     */
    public $MasterTrackingId;
    /**
     * The ConfigurationData
     * Meta informations extracted from the WSDL
     * - documentation: Specifies data structures that may be re-used multiple times with s single shipment.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShipmentConfigurationData
     */
    public $ConfigurationData;
    /**
     * The RequestedPackageLineItems
     * Meta informations extracted from the WSDL
     * - documentation: One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics all packages in the shipment.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem[]
     */
    public $RequestedPackageLineItems;
    /**
     * Constructor method for RequestedShipment
     * @uses RequestedShipment::setShipTimestamp()
     * @uses RequestedShipment::setDropoffType()
     * @uses RequestedShipment::setServiceType()
     * @uses RequestedShipment::setPackagingType()
     * @uses RequestedShipment::setShipper()
     * @uses RequestedShipment::setRecipient()
     * @uses RequestedShipment::setLabelSpecification()
     * @uses RequestedShipment::setPackageCount()
     * @uses RequestedShipment::setManifestDetail()
     * @uses RequestedShipment::setTotalWeight()
     * @uses RequestedShipment::setTotalInsuredValue()
     * @uses RequestedShipment::setPreferredCurrency()
     * @uses RequestedShipment::setShipmentAuthorizationDetail()
     * @uses RequestedShipment::setRecipientLocationNumber()
     * @uses RequestedShipment::setOrigin()
     * @uses RequestedShipment::setSoldTo()
     * @uses RequestedShipment::setShippingChargesPayment()
     * @uses RequestedShipment::setSpecialServicesRequested()
     * @uses RequestedShipment::setExpressFreightDetail()
     * @uses RequestedShipment::setFreightShipmentDetail()
     * @uses RequestedShipment::setDeliveryInstructions()
     * @uses RequestedShipment::setVariableHandlingChargeDetail()
     * @uses RequestedShipment::setCustomsClearanceDetail()
     * @uses RequestedShipment::setPickupDetail()
     * @uses RequestedShipment::setSmartPostDetail()
     * @uses RequestedShipment::setBlockInsightVisibility()
     * @uses RequestedShipment::setShippingDocumentSpecification()
     * @uses RequestedShipment::setRateRequestTypes()
     * @uses RequestedShipment::setEdtRequestType()
     * @uses RequestedShipment::setMasterTrackingId()
     * @uses RequestedShipment::setConfigurationData()
     * @uses RequestedShipment::setRequestedPackageLineItems()
     * @param string $shipTimestamp
     * @param string $dropoffType
     * @param string $serviceType
     * @param string $packagingType
     * @param \CommerceFedEx\FedExPHP\Structs\Party $shipper
     * @param \CommerceFedEx\FedExPHP\Structs\Party $recipient
     * @param \CommerceFedEx\FedExPHP\Structs\LabelSpecification $labelSpecification
     * @param int $packageCount
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentManifestDetail $manifestDetail
     * @param \CommerceFedEx\FedExPHP\Structs\Weight $totalWeight
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalInsuredValue
     * @param string $preferredCurrency
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentAuthorizationDetail $shipmentAuthorizationDetail
     * @param string $recipientLocationNumber
     * @param \CommerceFedEx\FedExPHP\Structs\ContactAndAddress $origin
     * @param \CommerceFedEx\FedExPHP\Structs\Party $soldTo
     * @param \CommerceFedEx\FedExPHP\Structs\Payment $shippingChargesPayment
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested $specialServicesRequested
     * @param \CommerceFedEx\FedExPHP\Structs\ExpressFreightDetail $expressFreightDetail
     * @param \CommerceFedEx\FedExPHP\Structs\FreightShipmentDetail $freightShipmentDetail
     * @param string $deliveryInstructions
     * @param \CommerceFedEx\FedExPHP\Structs\VariableHandlingChargeDetail $variableHandlingChargeDetail
     * @param \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail $customsClearanceDetail
     * @param \CommerceFedEx\FedExPHP\Structs\PickupDetail $pickupDetail
     * @param \CommerceFedEx\FedExPHP\Structs\SmartPostShipmentDetail $smartPostDetail
     * @param bool $blockInsightVisibility
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification $shippingDocumentSpecification
     * @param string[] $rateRequestTypes
     * @param string $edtRequestType
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId $masterTrackingId
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentConfigurationData $configurationData
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem[] $requestedPackageLineItems
     */
    public function __construct($shipTimestamp = null, $dropoffType = null, $serviceType = null, $packagingType = null, \CommerceFedEx\FedExPHP\Structs\Party $shipper = null, \CommerceFedEx\FedExPHP\Structs\Party $recipient = null, \CommerceFedEx\FedExPHP\Structs\LabelSpecification $labelSpecification = null, $packageCount = null, \CommerceFedEx\FedExPHP\Structs\ShipmentManifestDetail $manifestDetail = null, \CommerceFedEx\FedExPHP\Structs\Weight $totalWeight = null, \CommerceFedEx\FedExPHP\Structs\Money $totalInsuredValue = null, $preferredCurrency = null, \CommerceFedEx\FedExPHP\Structs\ShipmentAuthorizationDetail $shipmentAuthorizationDetail = null, $recipientLocationNumber = null, \CommerceFedEx\FedExPHP\Structs\ContactAndAddress $origin = null, \CommerceFedEx\FedExPHP\Structs\Party $soldTo = null, \CommerceFedEx\FedExPHP\Structs\Payment $shippingChargesPayment = null, \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested $specialServicesRequested = null, \CommerceFedEx\FedExPHP\Structs\ExpressFreightDetail $expressFreightDetail = null, \CommerceFedEx\FedExPHP\Structs\FreightShipmentDetail $freightShipmentDetail = null, $deliveryInstructions = null, \CommerceFedEx\FedExPHP\Structs\VariableHandlingChargeDetail $variableHandlingChargeDetail = null, \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail $customsClearanceDetail = null, \CommerceFedEx\FedExPHP\Structs\PickupDetail $pickupDetail = null, \CommerceFedEx\FedExPHP\Structs\SmartPostShipmentDetail $smartPostDetail = null, $blockInsightVisibility = null, \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification $shippingDocumentSpecification = null, array $rateRequestTypes = array(), $edtRequestType = null, \CommerceFedEx\FedExPHP\Structs\TrackingId $masterTrackingId = null, \CommerceFedEx\FedExPHP\Structs\ShipmentConfigurationData $configurationData = null, array $requestedPackageLineItems = array())
    {
        $this
            ->setShipTimestamp($shipTimestamp)
            ->setDropoffType($dropoffType)
            ->setServiceType($serviceType)
            ->setPackagingType($packagingType)
            ->setShipper($shipper)
            ->setRecipient($recipient)
            ->setLabelSpecification($labelSpecification)
            ->setPackageCount($packageCount)
            ->setManifestDetail($manifestDetail)
            ->setTotalWeight($totalWeight)
            ->setTotalInsuredValue($totalInsuredValue)
            ->setPreferredCurrency($preferredCurrency)
            ->setShipmentAuthorizationDetail($shipmentAuthorizationDetail)
            ->setRecipientLocationNumber($recipientLocationNumber)
            ->setOrigin($origin)
            ->setSoldTo($soldTo)
            ->setShippingChargesPayment($shippingChargesPayment)
            ->setSpecialServicesRequested($specialServicesRequested)
            ->setExpressFreightDetail($expressFreightDetail)
            ->setFreightShipmentDetail($freightShipmentDetail)
            ->setDeliveryInstructions($deliveryInstructions)
            ->setVariableHandlingChargeDetail($variableHandlingChargeDetail)
            ->setCustomsClearanceDetail($customsClearanceDetail)
            ->setPickupDetail($pickupDetail)
            ->setSmartPostDetail($smartPostDetail)
            ->setBlockInsightVisibility($blockInsightVisibility)
            ->setShippingDocumentSpecification($shippingDocumentSpecification)
            ->setRateRequestTypes($rateRequestTypes)
            ->setEdtRequestType($edtRequestType)
            ->setMasterTrackingId($masterTrackingId)
            ->setConfigurationData($configurationData)
            ->setRequestedPackageLineItems($requestedPackageLineItems);
    }
    /**
     * Get ShipTimestamp value
     * @return string
     */
    public function getShipTimestamp()
    {
        return $this->ShipTimestamp;
    }
    /**
     * Set ShipTimestamp value
     * @param string $shipTimestamp
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setShipTimestamp($shipTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($shipTimestamp) && !is_string($shipTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipTimestamp)), __LINE__);
        }
        $this->ShipTimestamp = $shipTimestamp;
        return $this;
    }
    /**
     * Get DropoffType value
     * @return string
     */
    public function getDropoffType()
    {
        return $this->DropoffType;
    }
    /**
     * Set DropoffType value
     * @uses \CommerceFedEx\FedExPHP\Enums\DropoffType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\DropoffType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dropoffType
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setDropoffType($dropoffType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\DropoffType::valueIsValid($dropoffType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dropoffType, implode(', ', \CommerceFedEx\FedExPHP\Enums\DropoffType::getValidValues())), __LINE__);
        }
        $this->DropoffType = $dropoffType;
        return $this;
    }
    /**
     * Get ServiceType value
     * @return string
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @param string $serviceType
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setServiceType($serviceType = null)
    {
        // validation for constraint: string
        if (!is_null($serviceType) && !is_string($serviceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceType)), __LINE__);
        }
        $this->ServiceType = $serviceType;
        return $this;
    }
    /**
     * Get PackagingType value
     * @return string
     */
    public function getPackagingType()
    {
        return $this->PackagingType;
    }
    /**
     * Set PackagingType value
     * @param string $packagingType
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setPackagingType($packagingType = null)
    {
        // validation for constraint: string
        if (!is_null($packagingType) && !is_string($packagingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packagingType)), __LINE__);
        }
        $this->PackagingType = $packagingType;
        return $this;
    }
    /**
     * Get Shipper value
     * @return \CommerceFedEx\FedExPHP\Structs\Party
     */
    public function getShipper()
    {
        return $this->Shipper;
    }
    /**
     * Set Shipper value
     * @param \CommerceFedEx\FedExPHP\Structs\Party $shipper
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setShipper(\CommerceFedEx\FedExPHP\Structs\Party $shipper = null)
    {
        $this->Shipper = $shipper;
        return $this;
    }
    /**
     * Get Recipient value
     * @return \CommerceFedEx\FedExPHP\Structs\Party
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \CommerceFedEx\FedExPHP\Structs\Party $recipient
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setRecipient(\CommerceFedEx\FedExPHP\Structs\Party $recipient = null)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    /**
     * Get LabelSpecification value
     * @return \CommerceFedEx\FedExPHP\Structs\LabelSpecification
     */
    public function getLabelSpecification()
    {
        return $this->LabelSpecification;
    }
    /**
     * Set LabelSpecification value
     * @param \CommerceFedEx\FedExPHP\Structs\LabelSpecification $labelSpecification
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setLabelSpecification(\CommerceFedEx\FedExPHP\Structs\LabelSpecification $labelSpecification = null)
    {
        $this->LabelSpecification = $labelSpecification;
        return $this;
    }
    /**
     * Get PackageCount value
     * @return int
     */
    public function getPackageCount()
    {
        return $this->PackageCount;
    }
    /**
     * Set PackageCount value
     * @param int $packageCount
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setPackageCount($packageCount = null)
    {
        // validation for constraint: int
        if (!is_null($packageCount) && !is_numeric($packageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($packageCount)), __LINE__);
        }
        $this->PackageCount = $packageCount;
        return $this;
    }
    /**
     * Get ManifestDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentManifestDetail|null
     */
    public function getManifestDetail()
    {
        return $this->ManifestDetail;
    }
    /**
     * Set ManifestDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentManifestDetail $manifestDetail
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setManifestDetail(\CommerceFedEx\FedExPHP\Structs\ShipmentManifestDetail $manifestDetail = null)
    {
        $this->ManifestDetail = $manifestDetail;
        return $this;
    }
    /**
     * Get TotalWeight value
     * @return \CommerceFedEx\FedExPHP\Structs\Weight|null
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }
    /**
     * Set TotalWeight value
     * @param \CommerceFedEx\FedExPHP\Structs\Weight $totalWeight
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setTotalWeight(\CommerceFedEx\FedExPHP\Structs\Weight $totalWeight = null)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    /**
     * Get TotalInsuredValue value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getTotalInsuredValue()
    {
        return $this->TotalInsuredValue;
    }
    /**
     * Set TotalInsuredValue value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalInsuredValue
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setTotalInsuredValue(\CommerceFedEx\FedExPHP\Structs\Money $totalInsuredValue = null)
    {
        $this->TotalInsuredValue = $totalInsuredValue;
        return $this;
    }
    /**
     * Get PreferredCurrency value
     * @return string|null
     */
    public function getPreferredCurrency()
    {
        return $this->PreferredCurrency;
    }
    /**
     * Set PreferredCurrency value
     * @param string $preferredCurrency
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setPreferredCurrency($preferredCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($preferredCurrency) && !is_string($preferredCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($preferredCurrency)), __LINE__);
        }
        $this->PreferredCurrency = $preferredCurrency;
        return $this;
    }
    /**
     * Get ShipmentAuthorizationDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentAuthorizationDetail|null
     */
    public function getShipmentAuthorizationDetail()
    {
        return $this->ShipmentAuthorizationDetail;
    }
    /**
     * Set ShipmentAuthorizationDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentAuthorizationDetail $shipmentAuthorizationDetail
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setShipmentAuthorizationDetail(\CommerceFedEx\FedExPHP\Structs\ShipmentAuthorizationDetail $shipmentAuthorizationDetail = null)
    {
        $this->ShipmentAuthorizationDetail = $shipmentAuthorizationDetail;
        return $this;
    }
    /**
     * Get RecipientLocationNumber value
     * @return string|null
     */
    public function getRecipientLocationNumber()
    {
        return $this->RecipientLocationNumber;
    }
    /**
     * Set RecipientLocationNumber value
     * @param string $recipientLocationNumber
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setRecipientLocationNumber($recipientLocationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($recipientLocationNumber) && !is_string($recipientLocationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientLocationNumber)), __LINE__);
        }
        $this->RecipientLocationNumber = $recipientLocationNumber;
        return $this;
    }
    /**
     * Get Origin value
     * @return \CommerceFedEx\FedExPHP\Structs\ContactAndAddress|null
     */
    public function getOrigin()
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param \CommerceFedEx\FedExPHP\Structs\ContactAndAddress $origin
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setOrigin(\CommerceFedEx\FedExPHP\Structs\ContactAndAddress $origin = null)
    {
        $this->Origin = $origin;
        return $this;
    }
    /**
     * Get SoldTo value
     * @return \CommerceFedEx\FedExPHP\Structs\Party|null
     */
    public function getSoldTo()
    {
        return $this->SoldTo;
    }
    /**
     * Set SoldTo value
     * @param \CommerceFedEx\FedExPHP\Structs\Party $soldTo
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setSoldTo(\CommerceFedEx\FedExPHP\Structs\Party $soldTo = null)
    {
        $this->SoldTo = $soldTo;
        return $this;
    }
    /**
     * Get ShippingChargesPayment value
     * @return \CommerceFedEx\FedExPHP\Structs\Payment|null
     */
    public function getShippingChargesPayment()
    {
        return $this->ShippingChargesPayment;
    }
    /**
     * Set ShippingChargesPayment value
     * @param \CommerceFedEx\FedExPHP\Structs\Payment $shippingChargesPayment
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setShippingChargesPayment(\CommerceFedEx\FedExPHP\Structs\Payment $shippingChargesPayment = null)
    {
        $this->ShippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    /**
     * Get SpecialServicesRequested value
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested|null
     */
    public function getSpecialServicesRequested()
    {
        return $this->SpecialServicesRequested;
    }
    /**
     * Set SpecialServicesRequested value
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested $specialServicesRequested
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setSpecialServicesRequested(\CommerceFedEx\FedExPHP\Structs\ShipmentSpecialServicesRequested $specialServicesRequested = null)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    /**
     * Get ExpressFreightDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ExpressFreightDetail|null
     */
    public function getExpressFreightDetail()
    {
        return $this->ExpressFreightDetail;
    }
    /**
     * Set ExpressFreightDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ExpressFreightDetail $expressFreightDetail
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setExpressFreightDetail(\CommerceFedEx\FedExPHP\Structs\ExpressFreightDetail $expressFreightDetail = null)
    {
        $this->ExpressFreightDetail = $expressFreightDetail;
        return $this;
    }
    /**
     * Get FreightShipmentDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\FreightShipmentDetail|null
     */
    public function getFreightShipmentDetail()
    {
        return $this->FreightShipmentDetail;
    }
    /**
     * Set FreightShipmentDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\FreightShipmentDetail $freightShipmentDetail
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setFreightShipmentDetail(\CommerceFedEx\FedExPHP\Structs\FreightShipmentDetail $freightShipmentDetail = null)
    {
        $this->FreightShipmentDetail = $freightShipmentDetail;
        return $this;
    }
    /**
     * Get DeliveryInstructions value
     * @return string|null
     */
    public function getDeliveryInstructions()
    {
        return $this->DeliveryInstructions;
    }
    /**
     * Set DeliveryInstructions value
     * @param string $deliveryInstructions
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setDeliveryInstructions($deliveryInstructions = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryInstructions) && !is_string($deliveryInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryInstructions)), __LINE__);
        }
        $this->DeliveryInstructions = $deliveryInstructions;
        return $this;
    }
    /**
     * Get VariableHandlingChargeDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\VariableHandlingChargeDetail|null
     */
    public function getVariableHandlingChargeDetail()
    {
        return $this->VariableHandlingChargeDetail;
    }
    /**
     * Set VariableHandlingChargeDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\VariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setVariableHandlingChargeDetail(\CommerceFedEx\FedExPHP\Structs\VariableHandlingChargeDetail $variableHandlingChargeDetail = null)
    {
        $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    /**
     * Get CustomsClearanceDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail|null
     */
    public function getCustomsClearanceDetail()
    {
        return $this->CustomsClearanceDetail;
    }
    /**
     * Set CustomsClearanceDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail $customsClearanceDetail
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setCustomsClearanceDetail(\CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail $customsClearanceDetail = null)
    {
        $this->CustomsClearanceDetail = $customsClearanceDetail;
        return $this;
    }
    /**
     * Get PickupDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\PickupDetail|null
     */
    public function getPickupDetail()
    {
        return $this->PickupDetail;
    }
    /**
     * Set PickupDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\PickupDetail $pickupDetail
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setPickupDetail(\CommerceFedEx\FedExPHP\Structs\PickupDetail $pickupDetail = null)
    {
        $this->PickupDetail = $pickupDetail;
        return $this;
    }
    /**
     * Get SmartPostDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\SmartPostShipmentDetail|null
     */
    public function getSmartPostDetail()
    {
        return $this->SmartPostDetail;
    }
    /**
     * Set SmartPostDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\SmartPostShipmentDetail $smartPostDetail
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setSmartPostDetail(\CommerceFedEx\FedExPHP\Structs\SmartPostShipmentDetail $smartPostDetail = null)
    {
        $this->SmartPostDetail = $smartPostDetail;
        return $this;
    }
    /**
     * Get BlockInsightVisibility value
     * @return bool|null
     */
    public function getBlockInsightVisibility()
    {
        return $this->BlockInsightVisibility;
    }
    /**
     * Set BlockInsightVisibility value
     * @param bool $blockInsightVisibility
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setBlockInsightVisibility($blockInsightVisibility = null)
    {
        $this->BlockInsightVisibility = $blockInsightVisibility;
        return $this;
    }
    /**
     * Get ShippingDocumentSpecification value
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification|null
     */
    public function getShippingDocumentSpecification()
    {
        return $this->ShippingDocumentSpecification;
    }
    /**
     * Set ShippingDocumentSpecification value
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification $shippingDocumentSpecification
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setShippingDocumentSpecification(\CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification $shippingDocumentSpecification = null)
    {
        $this->ShippingDocumentSpecification = $shippingDocumentSpecification;
        return $this;
    }
    /**
     * Get RateRequestTypes value
     * @return string[]|null
     */
    public function getRateRequestTypes()
    {
        return $this->RateRequestTypes;
    }
    /**
     * Set RateRequestTypes value
     * @uses \CommerceFedEx\FedExPHP\Enums\RateRequestType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\RateRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $rateRequestTypes
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setRateRequestTypes(array $rateRequestTypes = array())
    {
        $invalidValues = array();
        foreach ($rateRequestTypes as $requestedShipmentRateRequestTypesItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\RateRequestType::valueIsValid($requestedShipmentRateRequestTypesItem)) {
                $invalidValues[] = var_export($requestedShipmentRateRequestTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\RateRequestType::getValidValues())), __LINE__);
        }
        $this->RateRequestTypes = $rateRequestTypes;
        return $this;
    }
    /**
     * Add item to RateRequestTypes value
     * @uses \CommerceFedEx\FedExPHP\Enums\RateRequestType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\RateRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function addToRateRequestTypes($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\RateRequestType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\RateRequestType::getValidValues())), __LINE__);
        }
        $this->RateRequestTypes[] = $item;
        return $this;
    }
    /**
     * Get EdtRequestType value
     * @return string|null
     */
    public function getEdtRequestType()
    {
        return $this->EdtRequestType;
    }
    /**
     * Set EdtRequestType value
     * @uses \CommerceFedEx\FedExPHP\Enums\EdtRequestType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\EdtRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $edtRequestType
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setEdtRequestType($edtRequestType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\EdtRequestType::valueIsValid($edtRequestType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $edtRequestType, implode(', ', \CommerceFedEx\FedExPHP\Enums\EdtRequestType::getValidValues())), __LINE__);
        }
        $this->EdtRequestType = $edtRequestType;
        return $this;
    }
    /**
     * Get MasterTrackingId value
     * @return \CommerceFedEx\FedExPHP\Structs\TrackingId|null
     */
    public function getMasterTrackingId()
    {
        return $this->MasterTrackingId;
    }
    /**
     * Set MasterTrackingId value
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId $masterTrackingId
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setMasterTrackingId(\CommerceFedEx\FedExPHP\Structs\TrackingId $masterTrackingId = null)
    {
        $this->MasterTrackingId = $masterTrackingId;
        return $this;
    }
    /**
     * Get ConfigurationData value
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentConfigurationData|null
     */
    public function getConfigurationData()
    {
        return $this->ConfigurationData;
    }
    /**
     * Set ConfigurationData value
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentConfigurationData $configurationData
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setConfigurationData(\CommerceFedEx\FedExPHP\Structs\ShipmentConfigurationData $configurationData = null)
    {
        $this->ConfigurationData = $configurationData;
        return $this;
    }
    /**
     * Get RequestedPackageLineItems value
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem[]|null
     */
    public function getRequestedPackageLineItems()
    {
        return $this->RequestedPackageLineItems;
    }
    /**
     * Set RequestedPackageLineItems value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem[] $requestedPackageLineItems
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems = array())
    {
        foreach ($requestedPackageLineItems as $requestedShipmentRequestedPackageLineItemsItem) {
            // validation for constraint: itemType
            if (!$requestedShipmentRequestedPackageLineItemsItem instanceof \CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem) {
                throw new \InvalidArgumentException(sprintf('The RequestedPackageLineItems property can only contain items of \CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem, "%s" given', is_object($requestedShipmentRequestedPackageLineItemsItem) ? get_class($requestedShipmentRequestedPackageLineItemsItem) : gettype($requestedShipmentRequestedPackageLineItemsItem)), __LINE__);
            }
        }
        $this->RequestedPackageLineItems = $requestedPackageLineItems;
        return $this;
    }
    /**
     * Add item to RequestedPackageLineItems value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem $item
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public function addToRequestedPackageLineItems(\CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem) {
            throw new \InvalidArgumentException(sprintf('The RequestedPackageLineItems property can only contain items of \CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RequestedPackageLineItems[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment
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
