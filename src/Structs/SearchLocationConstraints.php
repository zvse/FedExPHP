<?php

namespace CommerceFedEx\FedExPHP\Structs;

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
     * @var \CommerceFedEx\FedExPHP\Structs\Distance
     */
    public $RadiusDistance;
    /**
     * The ExpressDropOffTimeNeeded
     * Meta informations extracted from the WSDL
     * - documentation: The latest time at which the customer can drop off a package for being shipped using an express service.
     * - minOccurs: 0
     * @var string
     */
    public $ExpressDropOffTimeNeeded;
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
     * - documentation: Specifies the types of services supported by a FedEx location for redirect to hold.
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
     * @uses SearchLocationConstraints::setExpressDropOffTimeNeeded()
     * @uses SearchLocationConstraints::setResultsFilters()
     * @uses SearchLocationConstraints::setSupportedRedirectToHoldServices()
     * @uses SearchLocationConstraints::setRequiredLocationAttributes()
     * @uses SearchLocationConstraints::setResultsToSkip()
     * @uses SearchLocationConstraints::setResultsRequested()
     * @uses SearchLocationConstraints::setLocationContentOptions()
     * @uses SearchLocationConstraints::setLocationTypesToInclude()
     * @param \CommerceFedEx\FedExPHP\Structs\Distance $radiusDistance
     * @param string $expressDropOffTimeNeeded
     * @param string[] $resultsFilters
     * @param string[] $supportedRedirectToHoldServices
     * @param string[] $requiredLocationAttributes
     * @param int $resultsToSkip
     * @param int $resultsRequested
     * @param string[] $locationContentOptions
     * @param string[] $locationTypesToInclude
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\Distance $radiusDistance = null, $expressDropOffTimeNeeded = null, array $resultsFilters = array(), array $supportedRedirectToHoldServices = array(), array $requiredLocationAttributes = array(), $resultsToSkip = null, $resultsRequested = null, array $locationContentOptions = array(), array $locationTypesToInclude = array())
    {
        $this
            ->setRadiusDistance($radiusDistance)
            ->setExpressDropOffTimeNeeded($expressDropOffTimeNeeded)
            ->setResultsFilters($resultsFilters)
            ->setSupportedRedirectToHoldServices($supportedRedirectToHoldServices)
            ->setRequiredLocationAttributes($requiredLocationAttributes)
            ->setResultsToSkip($resultsToSkip)
            ->setResultsRequested($resultsRequested)
            ->setLocationContentOptions($locationContentOptions)
            ->setLocationTypesToInclude($locationTypesToInclude);
    }
    /**
     * Get RadiusDistance value
     * @return \CommerceFedEx\FedExPHP\Structs\Distance|null
     */
    public function getRadiusDistance()
    {
        return $this->RadiusDistance;
    }
    /**
     * Set RadiusDistance value
     * @param \CommerceFedEx\FedExPHP\Structs\Distance $radiusDistance
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationConstraints
     */
    public function setRadiusDistance(\CommerceFedEx\FedExPHP\Structs\Distance $radiusDistance = null)
    {
        $this->RadiusDistance = $radiusDistance;
        return $this;
    }
    /**
     * Get ExpressDropOffTimeNeeded value
     * @return string|null
     */
    public function getExpressDropOffTimeNeeded()
    {
        return $this->ExpressDropOffTimeNeeded;
    }
    /**
     * Set ExpressDropOffTimeNeeded value
     * @param string $expressDropOffTimeNeeded
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationConstraints
     */
    public function setExpressDropOffTimeNeeded($expressDropOffTimeNeeded = null)
    {
        // validation for constraint: string
        if (!is_null($expressDropOffTimeNeeded) && !is_string($expressDropOffTimeNeeded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expressDropOffTimeNeeded)), __LINE__);
        }
        $this->ExpressDropOffTimeNeeded = $expressDropOffTimeNeeded;
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
     * @uses \CommerceFedEx\FedExPHP\Enums\LocationSearchFilterType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\LocationSearchFilterType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $resultsFilters
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationConstraints
     */
    public function setResultsFilters(array $resultsFilters = array())
    {
        $invalidValues = array();
        foreach ($resultsFilters as $searchLocationConstraintsResultsFiltersItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\LocationSearchFilterType::valueIsValid($searchLocationConstraintsResultsFiltersItem)) {
                $invalidValues[] = var_export($searchLocationConstraintsResultsFiltersItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\LocationSearchFilterType::getValidValues())), __LINE__);
        }
        $this->ResultsFilters = $resultsFilters;
        return $this;
    }
    /**
     * Add item to ResultsFilters value
     * @uses \CommerceFedEx\FedExPHP\Enums\LocationSearchFilterType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\LocationSearchFilterType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationConstraints
     */
    public function addToResultsFilters($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\LocationSearchFilterType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\LocationSearchFilterType::getValidValues())), __LINE__);
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
     * @uses \CommerceFedEx\FedExPHP\Enums\SupportedRedirectToHoldServiceType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\SupportedRedirectToHoldServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $supportedRedirectToHoldServices
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationConstraints
     */
    public function setSupportedRedirectToHoldServices(array $supportedRedirectToHoldServices = array())
    {
        $invalidValues = array();
        foreach ($supportedRedirectToHoldServices as $searchLocationConstraintsSupportedRedirectToHoldServicesItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\SupportedRedirectToHoldServiceType::valueIsValid($searchLocationConstraintsSupportedRedirectToHoldServicesItem)) {
                $invalidValues[] = var_export($searchLocationConstraintsSupportedRedirectToHoldServicesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\SupportedRedirectToHoldServiceType::getValidValues())), __LINE__);
        }
        $this->SupportedRedirectToHoldServices = $supportedRedirectToHoldServices;
        return $this;
    }
    /**
     * Add item to SupportedRedirectToHoldServices value
     * @uses \CommerceFedEx\FedExPHP\Enums\SupportedRedirectToHoldServiceType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\SupportedRedirectToHoldServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationConstraints
     */
    public function addToSupportedRedirectToHoldServices($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\SupportedRedirectToHoldServiceType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\SupportedRedirectToHoldServiceType::getValidValues())), __LINE__);
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
     * @uses \CommerceFedEx\FedExPHP\Enums\LocationAttributesType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\LocationAttributesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $requiredLocationAttributes
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationConstraints
     */
    public function setRequiredLocationAttributes(array $requiredLocationAttributes = array())
    {
        $invalidValues = array();
        foreach ($requiredLocationAttributes as $searchLocationConstraintsRequiredLocationAttributesItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\LocationAttributesType::valueIsValid($searchLocationConstraintsRequiredLocationAttributesItem)) {
                $invalidValues[] = var_export($searchLocationConstraintsRequiredLocationAttributesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\LocationAttributesType::getValidValues())), __LINE__);
        }
        $this->RequiredLocationAttributes = $requiredLocationAttributes;
        return $this;
    }
    /**
     * Add item to RequiredLocationAttributes value
     * @uses \CommerceFedEx\FedExPHP\Enums\LocationAttributesType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\LocationAttributesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationConstraints
     */
    public function addToRequiredLocationAttributes($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\LocationAttributesType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\LocationAttributesType::getValidValues())), __LINE__);
        }
        $this->RequiredLocationAttributes[] = $item;
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
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationConstraints
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
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationConstraints
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
     * @uses \CommerceFedEx\FedExPHP\Enums\LocationContentOptionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\LocationContentOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $locationContentOptions
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationConstraints
     */
    public function setLocationContentOptions(array $locationContentOptions = array())
    {
        $invalidValues = array();
        foreach ($locationContentOptions as $searchLocationConstraintsLocationContentOptionsItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\LocationContentOptionType::valueIsValid($searchLocationConstraintsLocationContentOptionsItem)) {
                $invalidValues[] = var_export($searchLocationConstraintsLocationContentOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\LocationContentOptionType::getValidValues())), __LINE__);
        }
        $this->LocationContentOptions = $locationContentOptions;
        return $this;
    }
    /**
     * Add item to LocationContentOptions value
     * @uses \CommerceFedEx\FedExPHP\Enums\LocationContentOptionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\LocationContentOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationConstraints
     */
    public function addToLocationContentOptions($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\LocationContentOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\LocationContentOptionType::getValidValues())), __LINE__);
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
     * @uses \CommerceFedEx\FedExPHP\Enums\FedExLocationType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\FedExLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $locationTypesToInclude
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationConstraints
     */
    public function setLocationTypesToInclude(array $locationTypesToInclude = array())
    {
        $invalidValues = array();
        foreach ($locationTypesToInclude as $searchLocationConstraintsLocationTypesToIncludeItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\FedExLocationType::valueIsValid($searchLocationConstraintsLocationTypesToIncludeItem)) {
                $invalidValues[] = var_export($searchLocationConstraintsLocationTypesToIncludeItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\FedExLocationType::getValidValues())), __LINE__);
        }
        $this->LocationTypesToInclude = $locationTypesToInclude;
        return $this;
    }
    /**
     * Add item to LocationTypesToInclude value
     * @uses \CommerceFedEx\FedExPHP\Enums\FedExLocationType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\FedExLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationConstraints
     */
    public function addToLocationTypesToInclude($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\FedExLocationType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\FedExLocationType::getValidValues())), __LINE__);
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
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationConstraints
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
