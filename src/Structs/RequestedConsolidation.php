<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestedConsolidation Structs
 * @subpackage Structs
 */
class RequestedConsolidation extends AbstractStructBase
{
    /**
     * The ConsolidationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ConsolidationType;
    /**
     * The ShipDate
     * Meta informations extracted from the WSDL
     * - documentation: Date for the (intended) actual movement of the consolidation.
     * - minOccurs: 0
     * @var string
     */
    public $ShipDate;
    /**
     * The TrackingIds
     * Meta informations extracted from the WSDL
     * - documentation: Master Air Way Bill tracking ID
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingId[]
     */
    public $TrackingIds;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Specifies a human readable description of the consolidation that is provided by the client, in order to easily identify the consolidation.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Shipper
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Party
     */
    public $Shipper;
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
     * - documentation: Indicates the party responsible for purchasing the goods shipped from the shipper to the recipient. The sold to party is not necessarily the recipient or the importer of record. The sold to party is relevant when the purchaser,
     * rather than the recipient, determines when certain customs regulations apply.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Party
     */
    public $SoldTo;
    /**
     * The BookingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BookingNumber;
    /**
     * The ConsolidationDataSources
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how selected values in the consolidation are to be determined.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDataSource[]
     */
    public $ConsolidationDataSources;
    /**
     * The SpecialServicesRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationSpecialServicesRequested
     */
    public $SpecialServicesRequested;
    /**
     * The CustomerReferences
     * Meta informations extracted from the WSDL
     * - documentation: References applying to the entire consolidation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CustomerReference[]
     */
    public $CustomerReferences;
    /**
     * The LabelSpecification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification
     */
    public $LabelSpecification;
    /**
     * The InternationalDistributionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionDetail
     */
    public $InternationalDistributionDetail;
    /**
     * The TransborderDistributionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the transborder data when the consolidation type is transborder distribution.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationTransborderDistributionDetail
     */
    public $TransborderDistributionDetail;
    /**
     * The DistributionLocations
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the type and location id for the distribution location to be used to process the consolidation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation[]
     */
    public $DistributionLocations;
    /**
     * The CustomsClearanceDetail
     * Meta informations extracted from the WSDL
     * - documentation: Customs clearance data, used for both international and intra-country shipping.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CustomsClearanceDetail
     */
    public $CustomsClearanceDetail;
    /**
     * The ShippingChargesPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Payment
     */
    public $ShippingChargesPayment;
    /**
     * The ConsolidationDocumentSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Provides requirements for production of all documents for this consolidation.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public $ConsolidationDocumentSpecification;
    /**
     * The CrnShippingDocumentTypes
     * Meta informations extracted from the WSDL
     * - documentation: If specifies, identifies the documents that are required to be generated for every CRN in the consolidation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CrnShippingDocumentTypes;
    /**
     * Constructor method for RequestedConsolidation
     * @uses RequestedConsolidation::setConsolidationType()
     * @uses RequestedConsolidation::setShipDate()
     * @uses RequestedConsolidation::setTrackingIds()
     * @uses RequestedConsolidation::setDescription()
     * @uses RequestedConsolidation::setShipper()
     * @uses RequestedConsolidation::setOrigin()
     * @uses RequestedConsolidation::setSoldTo()
     * @uses RequestedConsolidation::setBookingNumber()
     * @uses RequestedConsolidation::setConsolidationDataSources()
     * @uses RequestedConsolidation::setSpecialServicesRequested()
     * @uses RequestedConsolidation::setCustomerReferences()
     * @uses RequestedConsolidation::setLabelSpecification()
     * @uses RequestedConsolidation::setInternationalDistributionDetail()
     * @uses RequestedConsolidation::setTransborderDistributionDetail()
     * @uses RequestedConsolidation::setDistributionLocations()
     * @uses RequestedConsolidation::setCustomsClearanceDetail()
     * @uses RequestedConsolidation::setShippingChargesPayment()
     * @uses RequestedConsolidation::setConsolidationDocumentSpecification()
     * @uses RequestedConsolidation::setCrnShippingDocumentTypes()
     * @param string $consolidationType
     * @param string $shipDate
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId[] $trackingIds
     * @param string $description
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $shipper
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $origin
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $soldTo
     * @param string $bookingNumber
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDataSource[] $consolidationDataSources
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationSpecialServicesRequested $specialServicesRequested
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomerReference[] $customerReferences
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification $labelSpecification
     * @param \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionDetail $internationalDistributionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationTransborderDistributionDetail $transborderDistributionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation[] $distributionLocations
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomsClearanceDetail $customsClearanceDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Payment $shippingChargesPayment
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification $consolidationDocumentSpecification
     * @param string[] $crnShippingDocumentTypes
     */
    public function __construct($consolidationType = null, $shipDate = null, array $trackingIds = array(), $description = null, \NicholasCreativeMedia\FedExPHP\Structs\Party $shipper = null, \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $origin = null, \NicholasCreativeMedia\FedExPHP\Structs\Party $soldTo = null, $bookingNumber = null, array $consolidationDataSources = array(), \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationSpecialServicesRequested $specialServicesRequested = null, array $customerReferences = array(), \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification $labelSpecification = null, \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionDetail $internationalDistributionDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationTransborderDistributionDetail $transborderDistributionDetail = null, array $distributionLocations = array(), \NicholasCreativeMedia\FedExPHP\Structs\CustomsClearanceDetail $customsClearanceDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\Payment $shippingChargesPayment = null, \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification $consolidationDocumentSpecification = null, array $crnShippingDocumentTypes = array())
    {
        $this
            ->setConsolidationType($consolidationType)
            ->setShipDate($shipDate)
            ->setTrackingIds($trackingIds)
            ->setDescription($description)
            ->setShipper($shipper)
            ->setOrigin($origin)
            ->setSoldTo($soldTo)
            ->setBookingNumber($bookingNumber)
            ->setConsolidationDataSources($consolidationDataSources)
            ->setSpecialServicesRequested($specialServicesRequested)
            ->setCustomerReferences($customerReferences)
            ->setLabelSpecification($labelSpecification)
            ->setInternationalDistributionDetail($internationalDistributionDetail)
            ->setTransborderDistributionDetail($transborderDistributionDetail)
            ->setDistributionLocations($distributionLocations)
            ->setCustomsClearanceDetail($customsClearanceDetail)
            ->setShippingChargesPayment($shippingChargesPayment)
            ->setConsolidationDocumentSpecification($consolidationDocumentSpecification)
            ->setCrnShippingDocumentTypes($crnShippingDocumentTypes);
    }
    /**
     * Get ConsolidationType value
     * @return string|null
     */
    public function getConsolidationType()
    {
        return $this->ConsolidationType;
    }
    /**
     * Set ConsolidationType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ConsolidationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ConsolidationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $consolidationType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function setConsolidationType($consolidationType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ConsolidationType::valueIsValid($consolidationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $consolidationType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ConsolidationType::getValidValues())), __LINE__);
        }
        $this->ConsolidationType = $consolidationType;
        return $this;
    }
    /**
     * Get ShipDate value
     * @return string|null
     */
    public function getShipDate()
    {
        return $this->ShipDate;
    }
    /**
     * Set ShipDate value
     * @param string $shipDate
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function setShipDate($shipDate = null)
    {
        // validation for constraint: string
        if (!is_null($shipDate) && !is_string($shipDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipDate)), __LINE__);
        }
        $this->ShipDate = $shipDate;
        return $this;
    }
    /**
     * Get TrackingIds value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingId[]|null
     */
    public function getTrackingIds()
    {
        return $this->TrackingIds;
    }
    /**
     * Set TrackingIds value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId[] $trackingIds
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function setTrackingIds(array $trackingIds = array())
    {
        foreach ($trackingIds as $requestedConsolidationTrackingIdsItem) {
            // validation for constraint: itemType
            if (!$requestedConsolidationTrackingIdsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackingId) {
                throw new \InvalidArgumentException(sprintf('The TrackingIds property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackingId, "%s" given', is_object($requestedConsolidationTrackingIdsItem) ? get_class($requestedConsolidationTrackingIdsItem) : gettype($requestedConsolidationTrackingIdsItem)), __LINE__);
            }
        }
        $this->TrackingIds = $trackingIds;
        return $this;
    }
    /**
     * Add item to TrackingIds value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function addToTrackingIds(\NicholasCreativeMedia\FedExPHP\Structs\TrackingId $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackingId) {
            throw new \InvalidArgumentException(sprintf('The TrackingIds property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackingId, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TrackingIds[] = $item;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function setShipper(\NicholasCreativeMedia\FedExPHP\Structs\Party $shipper = null)
    {
        $this->Shipper = $shipper;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function setSoldTo(\NicholasCreativeMedia\FedExPHP\Structs\Party $soldTo = null)
    {
        $this->SoldTo = $soldTo;
        return $this;
    }
    /**
     * Get BookingNumber value
     * @return string|null
     */
    public function getBookingNumber()
    {
        return $this->BookingNumber;
    }
    /**
     * Set BookingNumber value
     * @param string $bookingNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function setBookingNumber($bookingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bookingNumber) && !is_string($bookingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingNumber)), __LINE__);
        }
        $this->BookingNumber = $bookingNumber;
        return $this;
    }
    /**
     * Get ConsolidationDataSources value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDataSource[]|null
     */
    public function getConsolidationDataSources()
    {
        return $this->ConsolidationDataSources;
    }
    /**
     * Set ConsolidationDataSources value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDataSource[] $consolidationDataSources
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function setConsolidationDataSources(array $consolidationDataSources = array())
    {
        foreach ($consolidationDataSources as $requestedConsolidationConsolidationDataSourcesItem) {
            // validation for constraint: itemType
            if (!$requestedConsolidationConsolidationDataSourcesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDataSource) {
                throw new \InvalidArgumentException(sprintf('The ConsolidationDataSources property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDataSource, "%s" given', is_object($requestedConsolidationConsolidationDataSourcesItem) ? get_class($requestedConsolidationConsolidationDataSourcesItem) : gettype($requestedConsolidationConsolidationDataSourcesItem)), __LINE__);
            }
        }
        $this->ConsolidationDataSources = $consolidationDataSources;
        return $this;
    }
    /**
     * Add item to ConsolidationDataSources value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDataSource $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function addToConsolidationDataSources(\NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDataSource $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDataSource) {
            throw new \InvalidArgumentException(sprintf('The ConsolidationDataSources property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDataSource, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConsolidationDataSources[] = $item;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function setSpecialServicesRequested(\NicholasCreativeMedia\FedExPHP\Structs\ConsolidationSpecialServicesRequested $specialServicesRequested = null)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    /**
     * Get CustomerReferences value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomerReference[]|null
     */
    public function getCustomerReferences()
    {
        return $this->CustomerReferences;
    }
    /**
     * Set CustomerReferences value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomerReference[] $customerReferences
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function setCustomerReferences(array $customerReferences = array())
    {
        foreach ($customerReferences as $requestedConsolidationCustomerReferencesItem) {
            // validation for constraint: itemType
            if (!$requestedConsolidationCustomerReferencesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\CustomerReference) {
                throw new \InvalidArgumentException(sprintf('The CustomerReferences property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CustomerReference, "%s" given', is_object($requestedConsolidationCustomerReferencesItem) ? get_class($requestedConsolidationCustomerReferencesItem) : gettype($requestedConsolidationCustomerReferencesItem)), __LINE__);
            }
        }
        $this->CustomerReferences = $customerReferences;
        return $this;
    }
    /**
     * Add item to CustomerReferences value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomerReference $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function addToCustomerReferences(\NicholasCreativeMedia\FedExPHP\Structs\CustomerReference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\CustomerReference) {
            throw new \InvalidArgumentException(sprintf('The CustomerReferences property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CustomerReference, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomerReferences[] = $item;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function setLabelSpecification(\NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification $labelSpecification = null)
    {
        $this->LabelSpecification = $labelSpecification;
        return $this;
    }
    /**
     * Get InternationalDistributionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionDetail|null
     */
    public function getInternationalDistributionDetail()
    {
        return $this->InternationalDistributionDetail;
    }
    /**
     * Set InternationalDistributionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionDetail $internationalDistributionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function setInternationalDistributionDetail(\NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionDetail $internationalDistributionDetail = null)
    {
        $this->InternationalDistributionDetail = $internationalDistributionDetail;
        return $this;
    }
    /**
     * Get TransborderDistributionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationTransborderDistributionDetail|null
     */
    public function getTransborderDistributionDetail()
    {
        return $this->TransborderDistributionDetail;
    }
    /**
     * Set TransborderDistributionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationTransborderDistributionDetail $transborderDistributionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function setTransborderDistributionDetail(\NicholasCreativeMedia\FedExPHP\Structs\ConsolidationTransborderDistributionDetail $transborderDistributionDetail = null)
    {
        $this->TransborderDistributionDetail = $transborderDistributionDetail;
        return $this;
    }
    /**
     * Get DistributionLocations value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation[]|null
     */
    public function getDistributionLocations()
    {
        return $this->DistributionLocations;
    }
    /**
     * Set DistributionLocations value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation[] $distributionLocations
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function setDistributionLocations(array $distributionLocations = array())
    {
        foreach ($distributionLocations as $requestedConsolidationDistributionLocationsItem) {
            // validation for constraint: itemType
            if (!$requestedConsolidationDistributionLocationsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation) {
                throw new \InvalidArgumentException(sprintf('The DistributionLocations property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation, "%s" given', is_object($requestedConsolidationDistributionLocationsItem) ? get_class($requestedConsolidationDistributionLocationsItem) : gettype($requestedConsolidationDistributionLocationsItem)), __LINE__);
            }
        }
        $this->DistributionLocations = $distributionLocations;
        return $this;
    }
    /**
     * Add item to DistributionLocations value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function addToDistributionLocations(\NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation) {
            throw new \InvalidArgumentException(sprintf('The DistributionLocations property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DistributionLocations[] = $item;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function setCustomsClearanceDetail(\NicholasCreativeMedia\FedExPHP\Structs\CustomsClearanceDetail $customsClearanceDetail = null)
    {
        $this->CustomsClearanceDetail = $customsClearanceDetail;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function setShippingChargesPayment(\NicholasCreativeMedia\FedExPHP\Structs\Payment $shippingChargesPayment = null)
    {
        $this->ShippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    /**
     * Get ConsolidationDocumentSpecification value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification|null
     */
    public function getConsolidationDocumentSpecification()
    {
        return $this->ConsolidationDocumentSpecification;
    }
    /**
     * Set ConsolidationDocumentSpecification value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification $consolidationDocumentSpecification
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function setConsolidationDocumentSpecification(\NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification $consolidationDocumentSpecification = null)
    {
        $this->ConsolidationDocumentSpecification = $consolidationDocumentSpecification;
        return $this;
    }
    /**
     * Get CrnShippingDocumentTypes value
     * @return string[]|null
     */
    public function getCrnShippingDocumentTypes()
    {
        return $this->CrnShippingDocumentTypes;
    }
    /**
     * Set CrnShippingDocumentTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RequestedShippingDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RequestedShippingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $crnShippingDocumentTypes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function setCrnShippingDocumentTypes(array $crnShippingDocumentTypes = array())
    {
        $invalidValues = array();
        foreach ($crnShippingDocumentTypes as $requestedConsolidationCrnShippingDocumentTypesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\RequestedShippingDocumentType::valueIsValid($requestedConsolidationCrnShippingDocumentTypesItem)) {
                $invalidValues[] = var_export($requestedConsolidationCrnShippingDocumentTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\RequestedShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->CrnShippingDocumentTypes = $crnShippingDocumentTypes;
        return $this;
    }
    /**
     * Add item to CrnShippingDocumentTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RequestedShippingDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RequestedShippingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
     */
    public function addToCrnShippingDocumentTypes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\RequestedShippingDocumentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\RequestedShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->CrnShippingDocumentTypes[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
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
