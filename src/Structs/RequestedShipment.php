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
     * - minOccurs: 0
     * @var string
     */
    public $ShipTimestamp;
    /**
     * The DropoffType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DropoffType;
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - documentation: This field contains the service type values, like PRIORITY_OVERNIGHT and FEDEX_GROUND.
     * - minOccurs: 0
     * @var string
     */
    public $ServiceType;
    /**
     * The PackagingType
     * Meta informations extracted from the WSDL
     * - documentation: This field contains the packaging type values, like YOUR_PACKAGING and FEDEX_ENVELOPE.
     * - minOccurs: 0
     * @var string
     */
    public $PackagingType;
    /**
     * The ShippingCycle
     * Meta informations extracted from the WSDL
     * - documentation: The client's shipping cycle to which this shipment belongs.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCycle;
    /**
     * The ManifestDetail
     * Meta informations extracted from the WSDL
     * - documentation: This specifies information related to the manifest associated with the shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentManifestDetail
     */
    public $ManifestDetail;
    /**
     * The VariationOptions
     * Meta informations extracted from the WSDL
     * - documentation: The shipment variations for the current shipment expressed in key-value pairs.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentVariationOptionDetail[]
     */
    public $VariationOptions;
    /**
     * The TotalWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $TotalWeight;
    /**
     * The TotalInsuredValue
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the total declared value for carriage of the shipment. The declared value for carriage represents the maximum liability of FedEx in connection with a shipment, including, but not limited to, any loss, damage, delay,
     * mis-delivery, nondelivery, misinformation, any failure to provide information, or mis-delivery of information relating to the shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $TotalInsuredValue;
    /**
     * The TotalDimensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Dimensions
     */
    public $TotalDimensions;
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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAuthorizationDetail
     */
    public $ShipmentAuthorizationDetail;
    /**
     * The Shipper
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Party
     */
    public $Shipper;
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Party
     */
    public $Recipient;
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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress
     */
    public $Origin;
    /**
     * The SoldTo
     * Meta informations extracted from the WSDL
     * - documentation: The sold-to party is used for customs clearance; for example, in support of US import customs rules. The need for this field could vary based on whether a sold-to party was specified on a consolidation.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Party
     */
    public $SoldTo;
    /**
     * The ShippingChargesPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Payment
     */
    public $ShippingChargesPayment;
    /**
     * The SpecialServicesRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public $SpecialServicesRequested;
    /**
     * The ProcessingOptionsRequested
     * Meta informations extracted from the WSDL
     * - documentation: Specifies any custom processing to be applied to this shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentProcessingOptionsRequested
     */
    public $ProcessingOptionsRequested;
    /**
     * The ExpressFreightDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ExpressFreightDetail
     */
    public $ExpressFreightDetail;
    /**
     * The FreightShipmentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Data applicable to shipments using FEDEX_FREIGHT_ECONOMY and FEDEX_FREIGHT_PRIORITY services.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public $FreightShipmentDetail;
    /**
     * The ConsolidationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Data applicable to shipments that are a part of a consolidation.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConsolidationDetail
     */
    public $ConsolidationDetail;
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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\VariableHandlingChargeDetail
     */
    public $VariableHandlingChargeDetail;
    /**
     * The CustomsClearanceDetail
     * Meta informations extracted from the WSDL
     * - documentation: Customs clearance data, used for both international and intra-country shipping.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CustomsClearanceDetail
     */
    public $CustomsClearanceDetail;
    /**
     * The PickupDetail
     * Meta informations extracted from the WSDL
     * - documentation: For use in "process tag" transaction.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PickupDetail
     */
    public $PickupDetail;
    /**
     * The SmartPostDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the characteristics of a shipment pertaining to SmartPost services.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\SmartPostShipmentDetail
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
     * The ErrorLabelBehavior
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the client-requested response in the event of errors within shipment.
     * - minOccurs: 0
     * @var string
     */
    public $ErrorLabelBehavior;
    /**
     * The LabelSpecification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification
     */
    public $LabelSpecification;
    /**
     * The ShippingDocumentSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Contains data used to create additional (non-label) shipping documents.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentSpecification
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
     * The CustomerSelectedActualRateType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the type of rate the customer wishes to have used as the actual rate type.
     * - minOccurs: 0
     * @var string
     */
    public $CustomerSelectedActualRateType;
    /**
     * The EdtRequestType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether the customer wishes to have Estimated Duties and Taxes provided with the rate quotation on this shipment. Only applies with shipments moving under international services.
     * - minOccurs: 0
     * @var string
     */
    public $EdtRequestType;
    /**
     * The CustomRatingOptionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details for the custom rates.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CustomRatingOptionDetail
     */
    public $CustomRatingOptionDetail;
    /**
     * The MasterTrackingId
     * Meta informations extracted from the WSDL
     * - documentation: Only used with multiple-transaction shipments, to identify the master package in a multi-piece shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingId
     */
    public $MasterTrackingId;
    /**
     * The PackageCount
     * Meta informations extracted from the WSDL
     * - documentation: The total number of packages in the entire shipment (even when the shipment spans multiple transactions.)
     * - minOccurs: 0
     * @var int
     */
    public $PackageCount;
    /**
     * The ShipmentOnlyFields
     * Meta informations extracted from the WSDL
     * - documentation: Specifies which package-level data values are provided at the shipment-level only. The package-level data values types specified here will not be provided at the package-level.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ShipmentOnlyFields;
    /**
     * The ConfigurationData
     * Meta informations extracted from the WSDL
     * - documentation: Specifies data structures that may be re-used multiple times with s single shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConfigurationData
     */
    public $ConfigurationData;
    /**
     * The RequestedPackageLineItems
     * Meta informations extracted from the WSDL
     * - documentation: One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics all packages in the shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem[]
     */
    public $RequestedPackageLineItems;
    /**
     * Constructor method for RequestedShipment
     * @uses RequestedShipment::setShipTimestamp()
     * @uses RequestedShipment::setDropoffType()
     * @uses RequestedShipment::setServiceType()
     * @uses RequestedShipment::setPackagingType()
     * @uses RequestedShipment::setShippingCycle()
     * @uses RequestedShipment::setManifestDetail()
     * @uses RequestedShipment::setVariationOptions()
     * @uses RequestedShipment::setTotalWeight()
     * @uses RequestedShipment::setTotalInsuredValue()
     * @uses RequestedShipment::setTotalDimensions()
     * @uses RequestedShipment::setPreferredCurrency()
     * @uses RequestedShipment::setShipmentAuthorizationDetail()
     * @uses RequestedShipment::setShipper()
     * @uses RequestedShipment::setRecipient()
     * @uses RequestedShipment::setRecipientLocationNumber()
     * @uses RequestedShipment::setOrigin()
     * @uses RequestedShipment::setSoldTo()
     * @uses RequestedShipment::setShippingChargesPayment()
     * @uses RequestedShipment::setSpecialServicesRequested()
     * @uses RequestedShipment::setProcessingOptionsRequested()
     * @uses RequestedShipment::setExpressFreightDetail()
     * @uses RequestedShipment::setFreightShipmentDetail()
     * @uses RequestedShipment::setConsolidationDetail()
     * @uses RequestedShipment::setDeliveryInstructions()
     * @uses RequestedShipment::setVariableHandlingChargeDetail()
     * @uses RequestedShipment::setCustomsClearanceDetail()
     * @uses RequestedShipment::setPickupDetail()
     * @uses RequestedShipment::setSmartPostDetail()
     * @uses RequestedShipment::setBlockInsightVisibility()
     * @uses RequestedShipment::setErrorLabelBehavior()
     * @uses RequestedShipment::setLabelSpecification()
     * @uses RequestedShipment::setShippingDocumentSpecification()
     * @uses RequestedShipment::setRateRequestTypes()
     * @uses RequestedShipment::setCustomerSelectedActualRateType()
     * @uses RequestedShipment::setEdtRequestType()
     * @uses RequestedShipment::setCustomRatingOptionDetail()
     * @uses RequestedShipment::setMasterTrackingId()
     * @uses RequestedShipment::setPackageCount()
     * @uses RequestedShipment::setShipmentOnlyFields()
     * @uses RequestedShipment::setConfigurationData()
     * @uses RequestedShipment::setRequestedPackageLineItems()
     * @param string $shipTimestamp
     * @param string $dropoffType
     * @param string $serviceType
     * @param string $packagingType
     * @param string $shippingCycle
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentManifestDetail $manifestDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentVariationOptionDetail[] $variationOptions
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $totalWeight
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalInsuredValue
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $totalDimensions
     * @param string $preferredCurrency
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAuthorizationDetail $shipmentAuthorizationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $shipper
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $recipient
     * @param string $recipientLocationNumber
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $origin
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $soldTo
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Payment $shippingChargesPayment
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested $specialServicesRequested
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentProcessingOptionsRequested $processingOptionsRequested
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ExpressFreightDetail $expressFreightDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail $freightShipmentDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConsolidationDetail $consolidationDetail
     * @param string $deliveryInstructions
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VariableHandlingChargeDetail $variableHandlingChargeDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomsClearanceDetail $customsClearanceDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PickupDetail $pickupDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SmartPostShipmentDetail $smartPostDetail
     * @param bool $blockInsightVisibility
     * @param string $errorLabelBehavior
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification $labelSpecification
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentSpecification $shippingDocumentSpecification
     * @param string[] $rateRequestTypes
     * @param string $customerSelectedActualRateType
     * @param string $edtRequestType
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomRatingOptionDetail $customRatingOptionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $masterTrackingId
     * @param int $packageCount
     * @param string[] $shipmentOnlyFields
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConfigurationData $configurationData
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem[] $requestedPackageLineItems
     */
    public function __construct($shipTimestamp = null, $dropoffType = null, $serviceType = null, $packagingType = null, $shippingCycle = null, \NicholasCreativeMedia\FedExPHP\Structs\ShipmentManifestDetail $manifestDetail = null, array $variationOptions = array(), \NicholasCreativeMedia\FedExPHP\Structs\Weight $totalWeight = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $totalInsuredValue = null, \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $totalDimensions = null, $preferredCurrency = null, \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAuthorizationDetail $shipmentAuthorizationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\Party $shipper = null, \NicholasCreativeMedia\FedExPHP\Structs\Party $recipient = null, $recipientLocationNumber = null, \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $origin = null, \NicholasCreativeMedia\FedExPHP\Structs\Party $soldTo = null, \NicholasCreativeMedia\FedExPHP\Structs\Payment $shippingChargesPayment = null, \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested $specialServicesRequested = null, \NicholasCreativeMedia\FedExPHP\Structs\ShipmentProcessingOptionsRequested $processingOptionsRequested = null, \NicholasCreativeMedia\FedExPHP\Structs\ExpressFreightDetail $expressFreightDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail $freightShipmentDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConsolidationDetail $consolidationDetail = null, $deliveryInstructions = null, \NicholasCreativeMedia\FedExPHP\Structs\VariableHandlingChargeDetail $variableHandlingChargeDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\CustomsClearanceDetail $customsClearanceDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\PickupDetail $pickupDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\SmartPostShipmentDetail $smartPostDetail = null, $blockInsightVisibility = null, $errorLabelBehavior = null, \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification $labelSpecification = null, \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentSpecification $shippingDocumentSpecification = null, array $rateRequestTypes = array(), $customerSelectedActualRateType = null, $edtRequestType = null, \NicholasCreativeMedia\FedExPHP\Structs\CustomRatingOptionDetail $customRatingOptionDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $masterTrackingId = null, $packageCount = null, array $shipmentOnlyFields = array(), \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConfigurationData $configurationData = null, array $requestedPackageLineItems = array())
    {
        $this
            ->setShipTimestamp($shipTimestamp)
            ->setDropoffType($dropoffType)
            ->setServiceType($serviceType)
            ->setPackagingType($packagingType)
            ->setShippingCycle($shippingCycle)
            ->setManifestDetail($manifestDetail)
            ->setVariationOptions($variationOptions)
            ->setTotalWeight($totalWeight)
            ->setTotalInsuredValue($totalInsuredValue)
            ->setTotalDimensions($totalDimensions)
            ->setPreferredCurrency($preferredCurrency)
            ->setShipmentAuthorizationDetail($shipmentAuthorizationDetail)
            ->setShipper($shipper)
            ->setRecipient($recipient)
            ->setRecipientLocationNumber($recipientLocationNumber)
            ->setOrigin($origin)
            ->setSoldTo($soldTo)
            ->setShippingChargesPayment($shippingChargesPayment)
            ->setSpecialServicesRequested($specialServicesRequested)
            ->setProcessingOptionsRequested($processingOptionsRequested)
            ->setExpressFreightDetail($expressFreightDetail)
            ->setFreightShipmentDetail($freightShipmentDetail)
            ->setConsolidationDetail($consolidationDetail)
            ->setDeliveryInstructions($deliveryInstructions)
            ->setVariableHandlingChargeDetail($variableHandlingChargeDetail)
            ->setCustomsClearanceDetail($customsClearanceDetail)
            ->setPickupDetail($pickupDetail)
            ->setSmartPostDetail($smartPostDetail)
            ->setBlockInsightVisibility($blockInsightVisibility)
            ->setErrorLabelBehavior($errorLabelBehavior)
            ->setLabelSpecification($labelSpecification)
            ->setShippingDocumentSpecification($shippingDocumentSpecification)
            ->setRateRequestTypes($rateRequestTypes)
            ->setCustomerSelectedActualRateType($customerSelectedActualRateType)
            ->setEdtRequestType($edtRequestType)
            ->setCustomRatingOptionDetail($customRatingOptionDetail)
            ->setMasterTrackingId($masterTrackingId)
            ->setPackageCount($packageCount)
            ->setShipmentOnlyFields($shipmentOnlyFields)
            ->setConfigurationData($configurationData)
            ->setRequestedPackageLineItems($requestedPackageLineItems);
    }
    /**
     * Get ShipTimestamp value
     * @return string|null
     */
    public function getShipTimestamp()
    {
        return $this->ShipTimestamp;
    }
    /**
     * Set ShipTimestamp value
     * @param string $shipTimestamp
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
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
     * @return string|null
     */
    public function getDropoffType()
    {
        return $this->DropoffType;
    }
    /**
     * Set DropoffType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DropoffType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DropoffType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dropoffType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setDropoffType($dropoffType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DropoffType::valueIsValid($dropoffType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dropoffType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DropoffType::getValidValues())), __LINE__);
        }
        $this->DropoffType = $dropoffType;
        return $this;
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @param string $serviceType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
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
     * @return string|null
     */
    public function getPackagingType()
    {
        return $this->PackagingType;
    }
    /**
     * Set PackagingType value
     * @param string $packagingType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
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
     * Get ShippingCycle value
     * @return string|null
     */
    public function getShippingCycle()
    {
        return $this->ShippingCycle;
    }
    /**
     * Set ShippingCycle value
     * @param string $shippingCycle
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setShippingCycle($shippingCycle = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCycle) && !is_string($shippingCycle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingCycle)), __LINE__);
        }
        $this->ShippingCycle = $shippingCycle;
        return $this;
    }
    /**
     * Get ManifestDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentManifestDetail|null
     */
    public function getManifestDetail()
    {
        return $this->ManifestDetail;
    }
    /**
     * Set ManifestDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentManifestDetail $manifestDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setManifestDetail(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentManifestDetail $manifestDetail = null)
    {
        $this->ManifestDetail = $manifestDetail;
        return $this;
    }
    /**
     * Get VariationOptions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentVariationOptionDetail[]|null
     */
    public function getVariationOptions()
    {
        return $this->VariationOptions;
    }
    /**
     * Set VariationOptions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentVariationOptionDetail[] $variationOptions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setVariationOptions(array $variationOptions = array())
    {
        foreach ($variationOptions as $requestedShipmentVariationOptionsItem) {
            // validation for constraint: itemType
            if (!$requestedShipmentVariationOptionsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShipmentVariationOptionDetail) {
                throw new \InvalidArgumentException(sprintf('The VariationOptions property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShipmentVariationOptionDetail, "%s" given', is_object($requestedShipmentVariationOptionsItem) ? get_class($requestedShipmentVariationOptionsItem) : gettype($requestedShipmentVariationOptionsItem)), __LINE__);
            }
        }
        $this->VariationOptions = $variationOptions;
        return $this;
    }
    /**
     * Add item to VariationOptions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentVariationOptionDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function addToVariationOptions(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentVariationOptionDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShipmentVariationOptionDetail) {
            throw new \InvalidArgumentException(sprintf('The VariationOptions property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShipmentVariationOptionDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VariationOptions[] = $item;
        return $this;
    }
    /**
     * Get TotalWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }
    /**
     * Set TotalWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $totalWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setTotalWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $totalWeight = null)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    /**
     * Get TotalInsuredValue value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getTotalInsuredValue()
    {
        return $this->TotalInsuredValue;
    }
    /**
     * Set TotalInsuredValue value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalInsuredValue
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setTotalInsuredValue(\NicholasCreativeMedia\FedExPHP\Structs\Money $totalInsuredValue = null)
    {
        $this->TotalInsuredValue = $totalInsuredValue;
        return $this;
    }
    /**
     * Get TotalDimensions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Dimensions|null
     */
    public function getTotalDimensions()
    {
        return $this->TotalDimensions;
    }
    /**
     * Set TotalDimensions value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $totalDimensions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setTotalDimensions(\NicholasCreativeMedia\FedExPHP\Structs\Dimensions $totalDimensions = null)
    {
        $this->TotalDimensions = $totalDimensions;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAuthorizationDetail|null
     */
    public function getShipmentAuthorizationDetail()
    {
        return $this->ShipmentAuthorizationDetail;
    }
    /**
     * Set ShipmentAuthorizationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAuthorizationDetail $shipmentAuthorizationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setShipmentAuthorizationDetail(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentAuthorizationDetail $shipmentAuthorizationDetail = null)
    {
        $this->ShipmentAuthorizationDetail = $shipmentAuthorizationDetail;
        return $this;
    }
    /**
     * Get Shipper value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Party|null
     */
    public function getShipper()
    {
        return $this->Shipper;
    }
    /**
     * Set Shipper value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $shipper
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setShipper(\NicholasCreativeMedia\FedExPHP\Structs\Party $shipper = null)
    {
        $this->Shipper = $shipper;
        return $this;
    }
    /**
     * Get Recipient value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Party|null
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $recipient
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setRecipient(\NicholasCreativeMedia\FedExPHP\Structs\Party $recipient = null)
    {
        $this->Recipient = $recipient;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress|null
     */
    public function getOrigin()
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $origin
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setOrigin(\NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $origin = null)
    {
        $this->Origin = $origin;
        return $this;
    }
    /**
     * Get SoldTo value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Party|null
     */
    public function getSoldTo()
    {
        return $this->SoldTo;
    }
    /**
     * Set SoldTo value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $soldTo
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setSoldTo(\NicholasCreativeMedia\FedExPHP\Structs\Party $soldTo = null)
    {
        $this->SoldTo = $soldTo;
        return $this;
    }
    /**
     * Get ShippingChargesPayment value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Payment|null
     */
    public function getShippingChargesPayment()
    {
        return $this->ShippingChargesPayment;
    }
    /**
     * Set ShippingChargesPayment value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Payment $shippingChargesPayment
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setShippingChargesPayment(\NicholasCreativeMedia\FedExPHP\Structs\Payment $shippingChargesPayment = null)
    {
        $this->ShippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    /**
     * Get SpecialServicesRequested value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested|null
     */
    public function getSpecialServicesRequested()
    {
        return $this->SpecialServicesRequested;
    }
    /**
     * Set SpecialServicesRequested value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested $specialServicesRequested
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setSpecialServicesRequested(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested $specialServicesRequested = null)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    /**
     * Get ProcessingOptionsRequested value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentProcessingOptionsRequested|null
     */
    public function getProcessingOptionsRequested()
    {
        return $this->ProcessingOptionsRequested;
    }
    /**
     * Set ProcessingOptionsRequested value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentProcessingOptionsRequested $processingOptionsRequested
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setProcessingOptionsRequested(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentProcessingOptionsRequested $processingOptionsRequested = null)
    {
        $this->ProcessingOptionsRequested = $processingOptionsRequested;
        return $this;
    }
    /**
     * Get ExpressFreightDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ExpressFreightDetail|null
     */
    public function getExpressFreightDetail()
    {
        return $this->ExpressFreightDetail;
    }
    /**
     * Set ExpressFreightDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ExpressFreightDetail $expressFreightDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setExpressFreightDetail(\NicholasCreativeMedia\FedExPHP\Structs\ExpressFreightDetail $expressFreightDetail = null)
    {
        $this->ExpressFreightDetail = $expressFreightDetail;
        return $this;
    }
    /**
     * Get FreightShipmentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail|null
     */
    public function getFreightShipmentDetail()
    {
        return $this->FreightShipmentDetail;
    }
    /**
     * Set FreightShipmentDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail $freightShipmentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setFreightShipmentDetail(\NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail $freightShipmentDetail = null)
    {
        $this->FreightShipmentDetail = $freightShipmentDetail;
        return $this;
    }
    /**
     * Get ConsolidationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConsolidationDetail|null
     */
    public function getConsolidationDetail()
    {
        return $this->ConsolidationDetail;
    }
    /**
     * Set ConsolidationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConsolidationDetail $consolidationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setConsolidationDetail(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentConsolidationDetail $consolidationDetail = null)
    {
        $this->ConsolidationDetail = $consolidationDetail;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\VariableHandlingChargeDetail|null
     */
    public function getVariableHandlingChargeDetail()
    {
        return $this->VariableHandlingChargeDetail;
    }
    /**
     * Set VariableHandlingChargeDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setVariableHandlingChargeDetail(\NicholasCreativeMedia\FedExPHP\Structs\VariableHandlingChargeDetail $variableHandlingChargeDetail = null)
    {
        $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    /**
     * Get CustomsClearanceDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomsClearanceDetail|null
     */
    public function getCustomsClearanceDetail()
    {
        return $this->CustomsClearanceDetail;
    }
    /**
     * Set CustomsClearanceDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomsClearanceDetail $customsClearanceDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setCustomsClearanceDetail(\NicholasCreativeMedia\FedExPHP\Structs\CustomsClearanceDetail $customsClearanceDetail = null)
    {
        $this->CustomsClearanceDetail = $customsClearanceDetail;
        return $this;
    }
    /**
     * Get PickupDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupDetail|null
     */
    public function getPickupDetail()
    {
        return $this->PickupDetail;
    }
    /**
     * Set PickupDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PickupDetail $pickupDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setPickupDetail(\NicholasCreativeMedia\FedExPHP\Structs\PickupDetail $pickupDetail = null)
    {
        $this->PickupDetail = $pickupDetail;
        return $this;
    }
    /**
     * Get SmartPostDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SmartPostShipmentDetail|null
     */
    public function getSmartPostDetail()
    {
        return $this->SmartPostDetail;
    }
    /**
     * Set SmartPostDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SmartPostShipmentDetail $smartPostDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setSmartPostDetail(\NicholasCreativeMedia\FedExPHP\Structs\SmartPostShipmentDetail $smartPostDetail = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setBlockInsightVisibility($blockInsightVisibility = null)
    {
        $this->BlockInsightVisibility = $blockInsightVisibility;
        return $this;
    }
    /**
     * Get ErrorLabelBehavior value
     * @return string|null
     */
    public function getErrorLabelBehavior()
    {
        return $this->ErrorLabelBehavior;
    }
    /**
     * Set ErrorLabelBehavior value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ErrorLabelBehaviorType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ErrorLabelBehaviorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $errorLabelBehavior
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setErrorLabelBehavior($errorLabelBehavior = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ErrorLabelBehaviorType::valueIsValid($errorLabelBehavior)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $errorLabelBehavior, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ErrorLabelBehaviorType::getValidValues())), __LINE__);
        }
        $this->ErrorLabelBehavior = $errorLabelBehavior;
        return $this;
    }
    /**
     * Get LabelSpecification value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification|null
     */
    public function getLabelSpecification()
    {
        return $this->LabelSpecification;
    }
    /**
     * Set LabelSpecification value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification $labelSpecification
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setLabelSpecification(\NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification $labelSpecification = null)
    {
        $this->LabelSpecification = $labelSpecification;
        return $this;
    }
    /**
     * Get ShippingDocumentSpecification value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentSpecification|null
     */
    public function getShippingDocumentSpecification()
    {
        return $this->ShippingDocumentSpecification;
    }
    /**
     * Set ShippingDocumentSpecification value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentSpecification $shippingDocumentSpecification
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setShippingDocumentSpecification(\NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentSpecification $shippingDocumentSpecification = null)
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RateRequestType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RateRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $rateRequestTypes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setRateRequestTypes(array $rateRequestTypes = array())
    {
        $invalidValues = array();
        foreach ($rateRequestTypes as $requestedShipmentRateRequestTypesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\RateRequestType::valueIsValid($requestedShipmentRateRequestTypesItem)) {
                $invalidValues[] = var_export($requestedShipmentRateRequestTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\RateRequestType::getValidValues())), __LINE__);
        }
        $this->RateRequestTypes = $rateRequestTypes;
        return $this;
    }
    /**
     * Add item to RateRequestTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RateRequestType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RateRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function addToRateRequestTypes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\RateRequestType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\RateRequestType::getValidValues())), __LINE__);
        }
        $this->RateRequestTypes[] = $item;
        return $this;
    }
    /**
     * Get CustomerSelectedActualRateType value
     * @return string|null
     */
    public function getCustomerSelectedActualRateType()
    {
        return $this->CustomerSelectedActualRateType;
    }
    /**
     * Set CustomerSelectedActualRateType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ReturnedRateType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ReturnedRateType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $customerSelectedActualRateType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setCustomerSelectedActualRateType($customerSelectedActualRateType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ReturnedRateType::valueIsValid($customerSelectedActualRateType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $customerSelectedActualRateType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ReturnedRateType::getValidValues())), __LINE__);
        }
        $this->CustomerSelectedActualRateType = $customerSelectedActualRateType;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\EdtRequestType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\EdtRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $edtRequestType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setEdtRequestType($edtRequestType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\EdtRequestType::valueIsValid($edtRequestType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $edtRequestType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\EdtRequestType::getValidValues())), __LINE__);
        }
        $this->EdtRequestType = $edtRequestType;
        return $this;
    }
    /**
     * Get CustomRatingOptionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomRatingOptionDetail|null
     */
    public function getCustomRatingOptionDetail()
    {
        return $this->CustomRatingOptionDetail;
    }
    /**
     * Set CustomRatingOptionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomRatingOptionDetail $customRatingOptionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setCustomRatingOptionDetail(\NicholasCreativeMedia\FedExPHP\Structs\CustomRatingOptionDetail $customRatingOptionDetail = null)
    {
        $this->CustomRatingOptionDetail = $customRatingOptionDetail;
        return $this;
    }
    /**
     * Get MasterTrackingId value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingId|null
     */
    public function getMasterTrackingId()
    {
        return $this->MasterTrackingId;
    }
    /**
     * Set MasterTrackingId value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $masterTrackingId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setMasterTrackingId(\NicholasCreativeMedia\FedExPHP\Structs\TrackingId $masterTrackingId = null)
    {
        $this->MasterTrackingId = $masterTrackingId;
        return $this;
    }
    /**
     * Get PackageCount value
     * @return int|null
     */
    public function getPackageCount()
    {
        return $this->PackageCount;
    }
    /**
     * Set PackageCount value
     * @param int $packageCount
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
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
     * Get ShipmentOnlyFields value
     * @return string[]|null
     */
    public function getShipmentOnlyFields()
    {
        return $this->ShipmentOnlyFields;
    }
    /**
     * Set ShipmentOnlyFields value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShipmentOnlyFieldsType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShipmentOnlyFieldsType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $shipmentOnlyFields
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setShipmentOnlyFields(array $shipmentOnlyFields = array())
    {
        $invalidValues = array();
        foreach ($shipmentOnlyFields as $requestedShipmentShipmentOnlyFieldsItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\ShipmentOnlyFieldsType::valueIsValid($requestedShipmentShipmentOnlyFieldsItem)) {
                $invalidValues[] = var_export($requestedShipmentShipmentOnlyFieldsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ShipmentOnlyFieldsType::getValidValues())), __LINE__);
        }
        $this->ShipmentOnlyFields = $shipmentOnlyFields;
        return $this;
    }
    /**
     * Add item to ShipmentOnlyFields value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShipmentOnlyFieldsType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShipmentOnlyFieldsType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function addToShipmentOnlyFields($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ShipmentOnlyFieldsType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ShipmentOnlyFieldsType::getValidValues())), __LINE__);
        }
        $this->ShipmentOnlyFields[] = $item;
        return $this;
    }
    /**
     * Get ConfigurationData value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConfigurationData|null
     */
    public function getConfigurationData()
    {
        return $this->ConfigurationData;
    }
    /**
     * Set ConfigurationData value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentConfigurationData $configurationData
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setConfigurationData(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentConfigurationData $configurationData = null)
    {
        $this->ConfigurationData = $configurationData;
        return $this;
    }
    /**
     * Get RequestedPackageLineItems value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem[]|null
     */
    public function getRequestedPackageLineItems()
    {
        return $this->RequestedPackageLineItems;
    }
    /**
     * Set RequestedPackageLineItems value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem[] $requestedPackageLineItems
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems = array())
    {
        foreach ($requestedPackageLineItems as $requestedShipmentRequestedPackageLineItemsItem) {
            // validation for constraint: itemType
            if (!$requestedShipmentRequestedPackageLineItemsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem) {
                throw new \InvalidArgumentException(sprintf('The RequestedPackageLineItems property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem, "%s" given', is_object($requestedShipmentRequestedPackageLineItemsItem) ? get_class($requestedShipmentRequestedPackageLineItemsItem) : gettype($requestedShipmentRequestedPackageLineItemsItem)), __LINE__);
            }
        }
        $this->RequestedPackageLineItems = $requestedPackageLineItems;
        return $this;
    }
    /**
     * Add item to RequestedPackageLineItems value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public function addToRequestedPackageLineItems(\NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem) {
            throw new \InvalidArgumentException(sprintf('The RequestedPackageLineItems property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
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
