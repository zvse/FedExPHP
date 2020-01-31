<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsolidatedCommodityDestinationDetail Structs
 * @subpackage Structs
 */
class ConsolidatedCommodityDestinationDetail extends AbstractStructBase
{
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CountryCode;
    /**
     * The StateOrProvinceCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StateOrProvinceCode;
    /**
     * The Residential
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Residential;
    /**
     * Constructor method for ConsolidatedCommodityDestinationDetail
     * @uses ConsolidatedCommodityDestinationDetail::setCountryCode()
     * @uses ConsolidatedCommodityDestinationDetail::setStateOrProvinceCode()
     * @uses ConsolidatedCommodityDestinationDetail::setResidential()
     * @param string $countryCode
     * @param string $stateOrProvinceCode
     * @param bool $residential
     */
    public function __construct($countryCode = null, $stateOrProvinceCode = null, $residential = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setStateOrProvinceCode($stateOrProvinceCode)
            ->setResidential($residential);
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDestinationDetail
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get StateOrProvinceCode value
     * @return string|null
     */
    public function getStateOrProvinceCode()
    {
        return $this->StateOrProvinceCode;
    }
    /**
     * Set StateOrProvinceCode value
     * @param string $stateOrProvinceCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDestinationDetail
     */
    public function setStateOrProvinceCode($stateOrProvinceCode = null)
    {
        // validation for constraint: string
        if (!is_null($stateOrProvinceCode) && !is_string($stateOrProvinceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stateOrProvinceCode)), __LINE__);
        }
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    /**
     * Get Residential value
     * @return bool|null
     */
    public function getResidential()
    {
        return $this->Residential;
    }
    /**
     * Set Residential value
     * @param bool $residential
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDestinationDetail
     */
    public function setResidential($residential = null)
    {
        $this->Residential = $residential;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDestinationDetail
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
