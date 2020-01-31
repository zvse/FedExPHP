<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestedPackageLineItem Structs
 * Meta informations extracted from the WSDL
 * - documentation: This class rationalizes RequestedPackage and RequestedPackageSummary from previous interfaces.
 * @subpackage Structs
 */
class RequestedPackageLineItem extends AbstractStructBase
{
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: Used only with INDIVIDUAL_PACKAGE, as a unique identifier of each requested package.
     * - minOccurs: 0
     * @var int
     */
    public $SequenceNumber;
    /**
     * The GroupNumber
     * Meta informations extracted from the WSDL
     * - documentation: Used only with PACKAGE_GROUPS, as a unique identifier of each group of identical packages.
     * - minOccurs: 0
     * @var int
     */
    public $GroupNumber;
    /**
     * The GroupPackageCount
     * Meta informations extracted from the WSDL
     * - documentation: Used only with PACKAGE_GROUPS, as a count of packages within a group of identical packages.
     * - minOccurs: 0
     * @var int
     */
    public $GroupPackageCount;
    /**
     * The StatusDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PackageStatusDetail
     */
    public $StatusDetail;
    /**
     * The TrackingIds
     * Meta informations extracted from the WSDL
     * - documentation: Only used for INDIVIDUAL_PACKAGES.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingId[]
     */
    public $TrackingIds;
    /**
     * The VariableHandlingChargeDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\VariableHandlingChargeDetail
     */
    public $VariableHandlingChargeDetail;
    /**
     * The InsuredValue
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the declared value for carriage of the package. The declared value for carriage represents the maximum liability of FedEx in connection with a shipment, including, but not limited to, any loss, damage, delay, mis-delivery,
     * nondelivery, misinformation, any failure to provide information, or mis-delivery of information relating to the package. This field is only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. Ignored for PACKAGE_SUMMARY, in which case totalInsuredValue
     * and packageCount on the shipment will be used to determine this value.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $InsuredValue;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - documentation: Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. Ignored for PACKAGE_SUMMARY, in which case total weight and packageCount on the shipment will be used to determine this value.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $Weight;
    /**
     * The Dimensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Dimensions
     */
    public $Dimensions;
    /**
     * The PhysicalPackaging
     * Meta informations extracted from the WSDL
     * - documentation: Provides additional detail on how the customer has physically packaged this item. As of June 2009, required for packages moving under international and SmartPost services.
     * - minOccurs: 0
     * @var string
     */
    public $PhysicalPackaging;
    /**
     * The AssociatedFreightLineItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\AssociatedFreightLineItemDetail[]
     */
    public $AssociatedFreightLineItems;
    /**
     * The ItemDescription
     * Meta informations extracted from the WSDL
     * - documentation: Human-readable text describing the package.
     * - minOccurs: 0
     * @var string
     */
    public $ItemDescription;
    /**
     * The ItemDescriptionForClearance
     * Meta informations extracted from the WSDL
     * - documentation: Human-readable text describing the contents of the package to be used for clearance purposes.
     * - minOccurs: 0
     * @var string
     */
    public $ItemDescriptionForClearance;
    /**
     * The CustomerReferences
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CustomerReference[]
     */
    public $CustomerReferences;
    /**
     * The SpecialServicesRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public $SpecialServicesRequested;
    /**
     * The SpecialHandlingDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialHandlingDetail
     */
    public $SpecialHandlingDetail;
    /**
     * The ContentRecords
     * Meta informations extracted from the WSDL
     * - documentation: Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ContentRecord[]
     */
    public $ContentRecords;
    /**
     * The Commodities
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Commodity[]
     */
    public $Commodities;
    /**
     * The ConveyanceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipperConveyanceDetail
     */
    public $ConveyanceDetail;
    /**
     * Constructor method for RequestedPackageLineItem
     * @uses RequestedPackageLineItem::setSequenceNumber()
     * @uses RequestedPackageLineItem::setGroupNumber()
     * @uses RequestedPackageLineItem::setGroupPackageCount()
     * @uses RequestedPackageLineItem::setStatusDetail()
     * @uses RequestedPackageLineItem::setTrackingIds()
     * @uses RequestedPackageLineItem::setVariableHandlingChargeDetail()
     * @uses RequestedPackageLineItem::setInsuredValue()
     * @uses RequestedPackageLineItem::setWeight()
     * @uses RequestedPackageLineItem::setDimensions()
     * @uses RequestedPackageLineItem::setPhysicalPackaging()
     * @uses RequestedPackageLineItem::setAssociatedFreightLineItems()
     * @uses RequestedPackageLineItem::setItemDescription()
     * @uses RequestedPackageLineItem::setItemDescriptionForClearance()
     * @uses RequestedPackageLineItem::setCustomerReferences()
     * @uses RequestedPackageLineItem::setSpecialServicesRequested()
     * @uses RequestedPackageLineItem::setSpecialHandlingDetail()
     * @uses RequestedPackageLineItem::setContentRecords()
     * @uses RequestedPackageLineItem::setCommodities()
     * @uses RequestedPackageLineItem::setConveyanceDetail()
     * @param int $sequenceNumber
     * @param int $groupNumber
     * @param int $groupPackageCount
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackageStatusDetail $statusDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId[] $trackingIds
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VariableHandlingChargeDetail $variableHandlingChargeDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $insuredValue
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $weight
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $dimensions
     * @param string $physicalPackaging
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AssociatedFreightLineItemDetail[] $associatedFreightLineItems
     * @param string $itemDescription
     * @param string $itemDescriptionForClearance
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomerReference[] $customerReferences
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested $specialServicesRequested
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialHandlingDetail $specialHandlingDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContentRecord[] $contentRecords
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Commodity[] $commodities
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipperConveyanceDetail $conveyanceDetail
     */
    public function __construct($sequenceNumber = null, $groupNumber = null, $groupPackageCount = null, \NicholasCreativeMedia\FedExPHP\Structs\PackageStatusDetail $statusDetail = null, array $trackingIds = array(), \NicholasCreativeMedia\FedExPHP\Structs\VariableHandlingChargeDetail $variableHandlingChargeDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $insuredValue = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $weight = null, \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $dimensions = null, $physicalPackaging = null, array $associatedFreightLineItems = array(), $itemDescription = null, $itemDescriptionForClearance = null, array $customerReferences = array(), \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested $specialServicesRequested = null, \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialHandlingDetail $specialHandlingDetail = null, array $contentRecords = array(), array $commodities = array(), \NicholasCreativeMedia\FedExPHP\Structs\ShipperConveyanceDetail $conveyanceDetail = null)
    {
        $this
            ->setSequenceNumber($sequenceNumber)
            ->setGroupNumber($groupNumber)
            ->setGroupPackageCount($groupPackageCount)
            ->setStatusDetail($statusDetail)
            ->setTrackingIds($trackingIds)
            ->setVariableHandlingChargeDetail($variableHandlingChargeDetail)
            ->setInsuredValue($insuredValue)
            ->setWeight($weight)
            ->setDimensions($dimensions)
            ->setPhysicalPackaging($physicalPackaging)
            ->setAssociatedFreightLineItems($associatedFreightLineItems)
            ->setItemDescription($itemDescription)
            ->setItemDescriptionForClearance($itemDescriptionForClearance)
            ->setCustomerReferences($customerReferences)
            ->setSpecialServicesRequested($specialServicesRequested)
            ->setSpecialHandlingDetail($specialHandlingDetail)
            ->setContentRecords($contentRecords)
            ->setCommodities($commodities)
            ->setConveyanceDetail($conveyanceDetail);
    }
    /**
     * Get SequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param int $sequenceNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !is_numeric($sequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNumber)), __LINE__);
        }
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get GroupNumber value
     * @return int|null
     */
    public function getGroupNumber()
    {
        return $this->GroupNumber;
    }
    /**
     * Set GroupNumber value
     * @param int $groupNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setGroupNumber($groupNumber = null)
    {
        // validation for constraint: int
        if (!is_null($groupNumber) && !is_numeric($groupNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($groupNumber)), __LINE__);
        }
        $this->GroupNumber = $groupNumber;
        return $this;
    }
    /**
     * Get GroupPackageCount value
     * @return int|null
     */
    public function getGroupPackageCount()
    {
        return $this->GroupPackageCount;
    }
    /**
     * Set GroupPackageCount value
     * @param int $groupPackageCount
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setGroupPackageCount($groupPackageCount = null)
    {
        // validation for constraint: int
        if (!is_null($groupPackageCount) && !is_numeric($groupPackageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($groupPackageCount)), __LINE__);
        }
        $this->GroupPackageCount = $groupPackageCount;
        return $this;
    }
    /**
     * Get StatusDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageStatusDetail|null
     */
    public function getStatusDetail()
    {
        return $this->StatusDetail;
    }
    /**
     * Set StatusDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackageStatusDetail $statusDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setStatusDetail(\NicholasCreativeMedia\FedExPHP\Structs\PackageStatusDetail $statusDetail = null)
    {
        $this->StatusDetail = $statusDetail;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setTrackingIds(array $trackingIds = array())
    {
        foreach ($trackingIds as $requestedPackageLineItemTrackingIdsItem) {
            // validation for constraint: itemType
            if (!$requestedPackageLineItemTrackingIdsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackingId) {
                throw new \InvalidArgumentException(sprintf('The TrackingIds property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackingId, "%s" given', is_object($requestedPackageLineItemTrackingIdsItem) ? get_class($requestedPackageLineItemTrackingIdsItem) : gettype($requestedPackageLineItemTrackingIdsItem)), __LINE__);
            }
        }
        $this->TrackingIds = $trackingIds;
        return $this;
    }
    /**
     * Add item to TrackingIds value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setVariableHandlingChargeDetail(\NicholasCreativeMedia\FedExPHP\Structs\VariableHandlingChargeDetail $variableHandlingChargeDetail = null)
    {
        $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    /**
     * Get InsuredValue value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getInsuredValue()
    {
        return $this->InsuredValue;
    }
    /**
     * Set InsuredValue value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $insuredValue
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setInsuredValue(\NicholasCreativeMedia\FedExPHP\Structs\Money $insuredValue = null)
    {
        $this->InsuredValue = $insuredValue;
        return $this;
    }
    /**
     * Get Weight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $weight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Dimensions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Dimensions|null
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    /**
     * Set Dimensions value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $dimensions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setDimensions(\NicholasCreativeMedia\FedExPHP\Structs\Dimensions $dimensions = null)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    /**
     * Get PhysicalPackaging value
     * @return string|null
     */
    public function getPhysicalPackaging()
    {
        return $this->PhysicalPackaging;
    }
    /**
     * Set PhysicalPackaging value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PhysicalPackagingType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PhysicalPackagingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $physicalPackaging
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setPhysicalPackaging($physicalPackaging = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PhysicalPackagingType::valueIsValid($physicalPackaging)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $physicalPackaging, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PhysicalPackagingType::getValidValues())), __LINE__);
        }
        $this->PhysicalPackaging = $physicalPackaging;
        return $this;
    }
    /**
     * Get AssociatedFreightLineItems value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AssociatedFreightLineItemDetail[]|null
     */
    public function getAssociatedFreightLineItems()
    {
        return $this->AssociatedFreightLineItems;
    }
    /**
     * Set AssociatedFreightLineItems value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AssociatedFreightLineItemDetail[] $associatedFreightLineItems
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setAssociatedFreightLineItems(array $associatedFreightLineItems = array())
    {
        foreach ($associatedFreightLineItems as $requestedPackageLineItemAssociatedFreightLineItemsItem) {
            // validation for constraint: itemType
            if (!$requestedPackageLineItemAssociatedFreightLineItemsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\AssociatedFreightLineItemDetail) {
                throw new \InvalidArgumentException(sprintf('The AssociatedFreightLineItems property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AssociatedFreightLineItemDetail, "%s" given', is_object($requestedPackageLineItemAssociatedFreightLineItemsItem) ? get_class($requestedPackageLineItemAssociatedFreightLineItemsItem) : gettype($requestedPackageLineItemAssociatedFreightLineItemsItem)), __LINE__);
            }
        }
        $this->AssociatedFreightLineItems = $associatedFreightLineItems;
        return $this;
    }
    /**
     * Add item to AssociatedFreightLineItems value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AssociatedFreightLineItemDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function addToAssociatedFreightLineItems(\NicholasCreativeMedia\FedExPHP\Structs\AssociatedFreightLineItemDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\AssociatedFreightLineItemDetail) {
            throw new \InvalidArgumentException(sprintf('The AssociatedFreightLineItems property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AssociatedFreightLineItemDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AssociatedFreightLineItems[] = $item;
        return $this;
    }
    /**
     * Get ItemDescription value
     * @return string|null
     */
    public function getItemDescription()
    {
        return $this->ItemDescription;
    }
    /**
     * Set ItemDescription value
     * @param string $itemDescription
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setItemDescription($itemDescription = null)
    {
        // validation for constraint: string
        if (!is_null($itemDescription) && !is_string($itemDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemDescription)), __LINE__);
        }
        $this->ItemDescription = $itemDescription;
        return $this;
    }
    /**
     * Get ItemDescriptionForClearance value
     * @return string|null
     */
    public function getItemDescriptionForClearance()
    {
        return $this->ItemDescriptionForClearance;
    }
    /**
     * Set ItemDescriptionForClearance value
     * @param string $itemDescriptionForClearance
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setItemDescriptionForClearance($itemDescriptionForClearance = null)
    {
        // validation for constraint: string
        if (!is_null($itemDescriptionForClearance) && !is_string($itemDescriptionForClearance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemDescriptionForClearance)), __LINE__);
        }
        $this->ItemDescriptionForClearance = $itemDescriptionForClearance;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setCustomerReferences(array $customerReferences = array())
    {
        foreach ($customerReferences as $requestedPackageLineItemCustomerReferencesItem) {
            // validation for constraint: itemType
            if (!$requestedPackageLineItemCustomerReferencesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\CustomerReference) {
                throw new \InvalidArgumentException(sprintf('The CustomerReferences property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CustomerReference, "%s" given', is_object($requestedPackageLineItemCustomerReferencesItem) ? get_class($requestedPackageLineItemCustomerReferencesItem) : gettype($requestedPackageLineItemCustomerReferencesItem)), __LINE__);
            }
        }
        $this->CustomerReferences = $customerReferences;
        return $this;
    }
    /**
     * Add item to CustomerReferences value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomerReference $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
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
     * Get SpecialServicesRequested value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested|null
     */
    public function getSpecialServicesRequested()
    {
        return $this->SpecialServicesRequested;
    }
    /**
     * Set SpecialServicesRequested value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested $specialServicesRequested
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setSpecialServicesRequested(\NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested $specialServicesRequested = null)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    /**
     * Get SpecialHandlingDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialHandlingDetail|null
     */
    public function getSpecialHandlingDetail()
    {
        return $this->SpecialHandlingDetail;
    }
    /**
     * Set SpecialHandlingDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialHandlingDetail $specialHandlingDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setSpecialHandlingDetail(\NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialHandlingDetail $specialHandlingDetail = null)
    {
        $this->SpecialHandlingDetail = $specialHandlingDetail;
        return $this;
    }
    /**
     * Get ContentRecords value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ContentRecord[]|null
     */
    public function getContentRecords()
    {
        return $this->ContentRecords;
    }
    /**
     * Set ContentRecords value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContentRecord[] $contentRecords
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setContentRecords(array $contentRecords = array())
    {
        foreach ($contentRecords as $requestedPackageLineItemContentRecordsItem) {
            // validation for constraint: itemType
            if (!$requestedPackageLineItemContentRecordsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ContentRecord) {
                throw new \InvalidArgumentException(sprintf('The ContentRecords property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ContentRecord, "%s" given', is_object($requestedPackageLineItemContentRecordsItem) ? get_class($requestedPackageLineItemContentRecordsItem) : gettype($requestedPackageLineItemContentRecordsItem)), __LINE__);
            }
        }
        $this->ContentRecords = $contentRecords;
        return $this;
    }
    /**
     * Add item to ContentRecords value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContentRecord $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function addToContentRecords(\NicholasCreativeMedia\FedExPHP\Structs\ContentRecord $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ContentRecord) {
            throw new \InvalidArgumentException(sprintf('The ContentRecords property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ContentRecord, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ContentRecords[] = $item;
        return $this;
    }
    /**
     * Get Commodities value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity[]|null
     */
    public function getCommodities()
    {
        return $this->Commodities;
    }
    /**
     * Set Commodities value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Commodity[] $commodities
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setCommodities(array $commodities = array())
    {
        foreach ($commodities as $requestedPackageLineItemCommoditiesItem) {
            // validation for constraint: itemType
            if (!$requestedPackageLineItemCommoditiesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Commodity) {
                throw new \InvalidArgumentException(sprintf('The Commodities property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Commodity, "%s" given', is_object($requestedPackageLineItemCommoditiesItem) ? get_class($requestedPackageLineItemCommoditiesItem) : gettype($requestedPackageLineItemCommoditiesItem)), __LINE__);
            }
        }
        $this->Commodities = $commodities;
        return $this;
    }
    /**
     * Add item to Commodities value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Commodity $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function addToCommodities(\NicholasCreativeMedia\FedExPHP\Structs\Commodity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\Commodity) {
            throw new \InvalidArgumentException(sprintf('The Commodities property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Commodity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Commodities[] = $item;
        return $this;
    }
    /**
     * Get ConveyanceDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipperConveyanceDetail|null
     */
    public function getConveyanceDetail()
    {
        return $this->ConveyanceDetail;
    }
    /**
     * Set ConveyanceDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipperConveyanceDetail $conveyanceDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public function setConveyanceDetail(\NicholasCreativeMedia\FedExPHP\Structs\ShipperConveyanceDetail $conveyanceDetail = null)
    {
        $this->ConveyanceDetail = $conveyanceDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
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
