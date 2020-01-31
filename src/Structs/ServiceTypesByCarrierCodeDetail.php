<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceTypesByCarrierCodeDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the services types supported for a specific carrier code.
 * @subpackage Structs
 */
class ServiceTypesByCarrierCodeDetail extends AbstractStructBase
{
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * The Services
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Services;
    /**
     * Constructor method for ServiceTypesByCarrierCodeDetail
     * @uses ServiceTypesByCarrierCodeDetail::setCarrierCode()
     * @uses ServiceTypesByCarrierCodeDetail::setServices()
     * @param string $carrierCode
     * @param string[] $services
     */
    public function __construct($carrierCode = null, array $services = array())
    {
        $this
            ->setCarrierCode($carrierCode)
            ->setServices($services);
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrierCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceTypesByCarrierCodeDetail
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierCode, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get Services value
     * @return string[]|null
     */
    public function getServices()
    {
        return $this->Services;
    }
    /**
     * Set Services value
     * @throws \InvalidArgumentException
     * @param string[] $services
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceTypesByCarrierCodeDetail
     */
    public function setServices(array $services = array())
    {
        foreach ($services as $serviceTypesByCarrierCodeDetailServicesItem) {
            // validation for constraint: itemType
            if (!is_string($serviceTypesByCarrierCodeDetailServicesItem)) {
                throw new \InvalidArgumentException(sprintf('The Services property can only contain items of string, "%s" given', is_object($serviceTypesByCarrierCodeDetailServicesItem) ? get_class($serviceTypesByCarrierCodeDetailServicesItem) : gettype($serviceTypesByCarrierCodeDetailServicesItem)), __LINE__);
            }
        }
        $this->Services = $services;
        return $this;
    }
    /**
     * Add item to Services value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceTypesByCarrierCodeDetail
     */
    public function addToServices($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Services property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Services[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceTypesByCarrierCodeDetail
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
