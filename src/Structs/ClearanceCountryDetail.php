<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClearanceCountryDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the special services supported at the clearance location for an individual destination country.
 * @subpackage Structs
 */
class ClearanceCountryDetail extends AbstractStructBase
{
    /**
     * The ClearanceCountry
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the country whose special services are specified below.
     * - minOccurs: 0
     * @var string
     */
    public $ClearanceCountry;
    /**
     * The ServicesSupported
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ServicesSupported;
    /**
     * The SpecialServicesSupported
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SpecialServicesSupported;
    /**
     * Constructor method for ClearanceCountryDetail
     * @uses ClearanceCountryDetail::setClearanceCountry()
     * @uses ClearanceCountryDetail::setServicesSupported()
     * @uses ClearanceCountryDetail::setSpecialServicesSupported()
     * @param string $clearanceCountry
     * @param string[] $servicesSupported
     * @param string[] $specialServicesSupported
     */
    public function __construct($clearanceCountry = null, array $servicesSupported = array(), array $specialServicesSupported = array())
    {
        $this
            ->setClearanceCountry($clearanceCountry)
            ->setServicesSupported($servicesSupported)
            ->setSpecialServicesSupported($specialServicesSupported);
    }
    /**
     * Get ClearanceCountry value
     * @return string|null
     */
    public function getClearanceCountry()
    {
        return $this->ClearanceCountry;
    }
    /**
     * Set ClearanceCountry value
     * @param string $clearanceCountry
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail
     */
    public function setClearanceCountry($clearanceCountry = null)
    {
        // validation for constraint: string
        if (!is_null($clearanceCountry) && !is_string($clearanceCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clearanceCountry)), __LINE__);
        }
        $this->ClearanceCountry = $clearanceCountry;
        return $this;
    }
    /**
     * Get ServicesSupported value
     * @return string[]|null
     */
    public function getServicesSupported()
    {
        return $this->ServicesSupported;
    }
    /**
     * Set ServicesSupported value
     * @throws \InvalidArgumentException
     * @param string[] $servicesSupported
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail
     */
    public function setServicesSupported(array $servicesSupported = array())
    {
        foreach ($servicesSupported as $clearanceCountryDetailServicesSupportedItem) {
            // validation for constraint: itemType
            if (!is_string($clearanceCountryDetailServicesSupportedItem)) {
                throw new \InvalidArgumentException(sprintf('The ServicesSupported property can only contain items of string, "%s" given', is_object($clearanceCountryDetailServicesSupportedItem) ? get_class($clearanceCountryDetailServicesSupportedItem) : gettype($clearanceCountryDetailServicesSupportedItem)), __LINE__);
            }
        }
        $this->ServicesSupported = $servicesSupported;
        return $this;
    }
    /**
     * Add item to ServicesSupported value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail
     */
    public function addToServicesSupported($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ServicesSupported property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ServicesSupported[] = $item;
        return $this;
    }
    /**
     * Get SpecialServicesSupported value
     * @return string[]|null
     */
    public function getSpecialServicesSupported()
    {
        return $this->SpecialServicesSupported;
    }
    /**
     * Set SpecialServicesSupported value
     * @throws \InvalidArgumentException
     * @param string[] $specialServicesSupported
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail
     */
    public function setSpecialServicesSupported(array $specialServicesSupported = array())
    {
        foreach ($specialServicesSupported as $clearanceCountryDetailSpecialServicesSupportedItem) {
            // validation for constraint: itemType
            if (!is_string($clearanceCountryDetailSpecialServicesSupportedItem)) {
                throw new \InvalidArgumentException(sprintf('The SpecialServicesSupported property can only contain items of string, "%s" given', is_object($clearanceCountryDetailSpecialServicesSupportedItem) ? get_class($clearanceCountryDetailSpecialServicesSupportedItem) : gettype($clearanceCountryDetailSpecialServicesSupportedItem)), __LINE__);
            }
        }
        $this->SpecialServicesSupported = $specialServicesSupported;
        return $this;
    }
    /**
     * Add item to SpecialServicesSupported value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail
     */
    public function addToSpecialServicesSupported($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SpecialServicesSupported property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialServicesSupported[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail
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
