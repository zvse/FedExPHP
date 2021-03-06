<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchLocationConstraints Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies additional constraints on the attributes of the locations being searched.
 * @subpackage Structs
 */
class SearchLocationConstraints extends AbstractStructBase
{
    /**
     * The RadiusDistance
     * Meta informations extracted from the WSDL
     * - documentation: Specifies value and units of the radius around the address to search for FedEx locations.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Distance
     */
    public $RadiusDistance;
    /**
     * The DropOffTimeNeeded
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DropOffTimeNeeded;
    /**
     * The ResultsFilters
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the criteria used to filter the results of locations search.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ResultsFilters;
    /**
     * The SupportedRedirectToHoldServices
     * Meta informations extracted from the WSDL
     * - documentation: DEPRECATED as of July 2017; See requiredLocationCapabilities.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SupportedRedirectToHoldServices;
    /**
     * The RequiredLocationAttributes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RequiredLocationAttributes;
    /**
     * The RequiredLocationCapabilities
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\LocationCapabilityDetail[]
     */
    public $RequiredLocationCapabilities;
    /**
     * The ShipmentDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedShipmentDetail
     */
    public $ShipmentDetail;
    /**
     * The ResultsToSkip
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ResultsToSkip;
    /**
     * The ResultsRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ResultsRequested;
    /**
     * The LocationContentOptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $LocationContentOptions;
    /**
     * The LocationTypesToInclude
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $LocationTypesToInclude;
    /**
     * Constructor method for SearchLocationConstraints
     * @uses SearchLocationConstraints::setRadiusDistance()
     * @uses SearchLocationConstraints::setDropOffTimeNeeded()
     * @uses SearchLocationConstraints::setResultsFilters()
     * @uses SearchLocationConstraints::setSupportedRedirectToHoldServices()
     * @uses SearchLocationConstraints::setRequiredLocationAttributes()
     * @uses SearchLocationConstraints::setRequiredLocationCapabilities()
     * @uses SearchLocationConstraints::setShipmentDetail()
     * @uses SearchLocationConstraints::setResultsToSkip()
     * @uses SearchLocationConstraints::setResultsRequested()
     * @uses SearchLocationConstraints::setLocationContentOptions()
     * @uses SearchLocationConstraints::setLocationTypesToInclude()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Distance $radiusDistance
     * @param string $dropOffTimeNeeded
     * @param string[] $resultsFilters
     * @param string[] $supportedRedirectToHoldServices
     * @param string[] $requiredLocationAttributes
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LocationCapabilityDetail[] $requiredLocationCapabilities
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedShipmentDetail $shipmentDetail
     * @param int $resultsToSkip
     * @param int $resultsRequested
     * @param string[] $locationContentOptions
     * @param string[] $locationTypesToInclude
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\Distance $radiusDistance = null, $dropOffTimeNeeded = null, array $resultsFilters = array(), array $supportedRedirectToHoldServices = array(), array $requiredLocationAttributes = array(), array $requiredLocationCapabilities = array(), \NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedShipmentDetail $shipmentDetail = null, $resultsToSkip = null, $resultsRequested = null, array $locationContentOptions = array(), array $locationTypesToInclude = array())
    {
        $this
            ->setRadiusDistance($radiusDistance)
            ->setDropOffTimeNeeded($dropOffTimeNeeded)
            ->setResultsFilters($resultsFilters)
            ->setSupportedRedirectToHoldServices($supportedRedirectToHoldServices)
            ->setRequiredLocationAttributes($requiredLocationAttributes)
            ->setRequiredLocationCapabilities($requiredLocationCapabilities)
            ->setShipmentDetail($shipmentDetail)
            ->setResultsToSkip($resultsToSkip)
            ->setResultsRequested($resultsRequested)
            ->setLocationContentOptions($locationContentOptions)
            ->setLocationTypesToInclude($locationTypesToInclude);
    }
    /**
     * Get RadiusDistance value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Distance|null
     */
    public function getRadiusDistance()
    {
        return $this->RadiusDistance;
    }
    /**
     * Set RadiusDistance value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Distance $radiusDistance
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
     */
    public function setRadiusDistance(\NicholasCreativeMedia\FedExPHP\Structs\Distance $radiusDistance = null)
    {
        $this->RadiusDistance = $radiusDistance;
        return $this;
    }
    /**
     * Get DropOffTimeNeeded value
     * @return string|null
     */
    public function getDropOffTimeNeeded()
    {
        return $this->DropOffTimeNeeded;
    }
    /**
     * Set DropOffTimeNeeded value
     * @param string $dropOffTimeNeeded
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
     */
    public function setDropOffTimeNeeded($dropOffTimeNeeded = null)
    {
        // validation for constraint: string
        if (!is_null($dropOffTimeNeeded) && !is_string($dropOffTimeNeeded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dropOffTimeNeeded)), __LINE__);
        }
        $this->DropOffTimeNeeded = $dropOffTimeNeeded;
        return $this;
    }
    /**
     * Get ResultsFilters value
     * @return string[]|null
     */
    public function getResultsFilters()
    {
        return $this->ResultsFilters;
    }
    /**
     * Set ResultsFilters value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationSearchFilterType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationSearchFilterType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $resultsFilters
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
     */
    public function setResultsFilters(array $resultsFilters = array())
    {
        $invalidValues = array();
        foreach ($resultsFilters as $searchLocationConstraintsResultsFiltersItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\LocationSearchFilterType::valueIsValid($searchLocationConstraintsResultsFiltersItem)) {
                $invalidValues[] = var_export($searchLocationConstraintsResultsFiltersItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\LocationSearchFilterType::getValidValues())), __LINE__);
        }
        $this->ResultsFilters = $resultsFilters;
        return $this;
    }
    /**
     * Add item to ResultsFilters value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationSearchFilterType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationSearchFilterType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
     */
    public function addToResultsFilters($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\LocationSearchFilterType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\LocationSearchFilterType::getValidValues())), __LINE__);
        }
        $this->ResultsFilters[] = $item;
        return $this;
    }
    /**
     * Get SupportedRedirectToHoldServices value
     * @return string[]|null
     */
    public function getSupportedRedirectToHoldServices()
    {
        return $this->SupportedRedirectToHoldServices;
    }
    /**
     * Set SupportedRedirectToHoldServices value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\SupportedRedirectToHoldServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\SupportedRedirectToHoldServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $supportedRedirectToHoldServices
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
     */
    public function setSupportedRedirectToHoldServices(array $supportedRedirectToHoldServices = array())
    {
        $invalidValues = array();
        foreach ($supportedRedirectToHoldServices as $searchLocationConstraintsSupportedRedirectToHoldServicesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\SupportedRedirectToHoldServiceType::valueIsValid($searchLocationConstraintsSupportedRedirectToHoldServicesItem)) {
                $invalidValues[] = var_export($searchLocationConstraintsSupportedRedirectToHoldServicesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\SupportedRedirectToHoldServiceType::getValidValues())), __LINE__);
        }
        $this->SupportedRedirectToHoldServices = $supportedRedirectToHoldServices;
        return $this;
    }
    /**
     * Add item to SupportedRedirectToHoldServices value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\SupportedRedirectToHoldServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\SupportedRedirectToHoldServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
     */
    public function addToSupportedRedirectToHoldServices($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\SupportedRedirectToHoldServiceType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\SupportedRedirectToHoldServiceType::getValidValues())), __LINE__);
        }
        $this->SupportedRedirectToHoldServices[] = $item;
        return $this;
    }
    /**
     * Get RequiredLocationAttributes value
     * @return string[]|null
     */
    public function getRequiredLocationAttributes()
    {
        return $this->RequiredLocationAttributes;
    }
    /**
     * Set RequiredLocationAttributes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationAttributesType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationAttributesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $requiredLocationAttributes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
     */
    public function setRequiredLocationAttributes(array $requiredLocationAttributes = array())
    {
        $invalidValues = array();
        foreach ($requiredLocationAttributes as $searchLocationConstraintsRequiredLocationAttributesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\LocationAttributesType::valueIsValid($searchLocationConstraintsRequiredLocationAttributesItem)) {
                $invalidValues[] = var_export($searchLocationConstraintsRequiredLocationAttributesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\LocationAttributesType::getValidValues())), __LINE__);
        }
        $this->RequiredLocationAttributes = $requiredLocationAttributes;
        return $this;
    }
    /**
     * Add item to RequiredLocationAttributes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationAttributesType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationAttributesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
     */
    public function addToRequiredLocationAttributes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\LocationAttributesType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\LocationAttributesType::getValidValues())), __LINE__);
        }
        $this->RequiredLocationAttributes[] = $item;
        return $this;
    }
    /**
     * Get RequiredLocationCapabilities value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationCapabilityDetail[]|null
     */
    public function getRequiredLocationCapabilities()
    {
        return $this->RequiredLocationCapabilities;
    }
    /**
     * Set RequiredLocationCapabilities value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LocationCapabilityDetail[] $requiredLocationCapabilities
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
     */
    public function setRequiredLocationCapabilities(array $requiredLocationCapabilities = array())
    {
        foreach ($requiredLocationCapabilities as $searchLocationConstraintsRequiredLocationCapabilitiesItem) {
            // validation for constraint: itemType
            if (!$searchLocationConstraintsRequiredLocationCapabilitiesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\LocationCapabilityDetail) {
                throw new \InvalidArgumentException(sprintf('The RequiredLocationCapabilities property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\LocationCapabilityDetail, "%s" given', is_object($searchLocationConstraintsRequiredLocationCapabilitiesItem) ? get_class($searchLocationConstraintsRequiredLocationCapabilitiesItem) : gettype($searchLocationConstraintsRequiredLocationCapabilitiesItem)), __LINE__);
            }
        }
        $this->RequiredLocationCapabilities = $requiredLocationCapabilities;
        return $this;
    }
    /**
     * Add item to RequiredLocationCapabilities value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LocationCapabilityDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
     */
    public function addToRequiredLocationCapabilities(\NicholasCreativeMedia\FedExPHP\Structs\LocationCapabilityDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\LocationCapabilityDetail) {
            throw new \InvalidArgumentException(sprintf('The RequiredLocationCapabilities property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\LocationCapabilityDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RequiredLocationCapabilities[] = $item;
        return $this;
    }
    /**
     * Get ShipmentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedShipmentDetail|null
     */
    public function getShipmentDetail()
    {
        return $this->ShipmentDetail;
    }
    /**
     * Set ShipmentDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedShipmentDetail $shipmentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
     */
    public function setShipmentDetail(\NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedShipmentDetail $shipmentDetail = null)
    {
        $this->ShipmentDetail = $shipmentDetail;
        return $this;
    }
    /**
     * Get ResultsToSkip value
     * @return int|null
     */
    public function getResultsToSkip()
    {
        return $this->ResultsToSkip;
    }
    /**
     * Set ResultsToSkip value
     * @param int $resultsToSkip
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
     */
    public function setResultsToSkip($resultsToSkip = null)
    {
        // validation for constraint: int
        if (!is_null($resultsToSkip) && !is_numeric($resultsToSkip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($resultsToSkip)), __LINE__);
        }
        $this->ResultsToSkip = $resultsToSkip;
        return $this;
    }
    /**
     * Get ResultsRequested value
     * @return int|null
     */
    public function getResultsRequested()
    {
        return $this->ResultsRequested;
    }
    /**
     * Set ResultsRequested value
     * @param int $resultsRequested
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
     */
    public function setResultsRequested($resultsRequested = null)
    {
        // validation for constraint: int
        if (!is_null($resultsRequested) && !is_numeric($resultsRequested)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($resultsRequested)), __LINE__);
        }
        $this->ResultsRequested = $resultsRequested;
        return $this;
    }
    /**
     * Get LocationContentOptions value
     * @return string[]|null
     */
    public function getLocationContentOptions()
    {
        return $this->LocationContentOptions;
    }
    /**
     * Set LocationContentOptions value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationContentOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationContentOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $locationContentOptions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
     */
    public function setLocationContentOptions(array $locationContentOptions = array())
    {
        $invalidValues = array();
        foreach ($locationContentOptions as $searchLocationConstraintsLocationContentOptionsItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\LocationContentOptionType::valueIsValid($searchLocationConstraintsLocationContentOptionsItem)) {
                $invalidValues[] = var_export($searchLocationConstraintsLocationContentOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\LocationContentOptionType::getValidValues())), __LINE__);
        }
        $this->LocationContentOptions = $locationContentOptions;
        return $this;
    }
    /**
     * Add item to LocationContentOptions value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationContentOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationContentOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
     */
    public function addToLocationContentOptions($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\LocationContentOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\LocationContentOptionType::getValidValues())), __LINE__);
        }
        $this->LocationContentOptions[] = $item;
        return $this;
    }
    /**
     * Get LocationTypesToInclude value
     * @return string[]|null
     */
    public function getLocationTypesToInclude()
    {
        return $this->LocationTypesToInclude;
    }
    /**
     * Set LocationTypesToInclude value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\FedExLocationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\FedExLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $locationTypesToInclude
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
     */
    public function setLocationTypesToInclude(array $locationTypesToInclude = array())
    {
        $invalidValues = array();
        foreach ($locationTypesToInclude as $searchLocationConstraintsLocationTypesToIncludeItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\FedExLocationType::valueIsValid($searchLocationConstraintsLocationTypesToIncludeItem)) {
                $invalidValues[] = var_export($searchLocationConstraintsLocationTypesToIncludeItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\FedExLocationType::getValidValues())), __LINE__);
        }
        $this->LocationTypesToInclude = $locationTypesToInclude;
        return $this;
    }
    /**
     * Add item to LocationTypesToInclude value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\FedExLocationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\FedExLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
     */
    public function addToLocationTypesToInclude($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\FedExLocationType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\FedExLocationType::getValidValues())), __LINE__);
        }
        $this->LocationTypesToInclude[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
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
