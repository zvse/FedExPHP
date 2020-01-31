<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestedPickupPackageDetail Structs
 * @subpackage Structs
 */
class RequestedPickupPackageDetail extends AbstractStructBase
{
    /**
     * The PackageSpecialServices
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PickupPackageSpecialServicesRequested
     */
    public $PackageSpecialServices;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $Weight;
    /**
     * Constructor method for RequestedPickupPackageDetail
     * @uses RequestedPickupPackageDetail::setPackageSpecialServices()
     * @uses RequestedPickupPackageDetail::setWeight()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PickupPackageSpecialServicesRequested $packageSpecialServices
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $weight
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\PickupPackageSpecialServicesRequested $packageSpecialServices = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $weight = null)
    {
        $this
            ->setPackageSpecialServices($packageSpecialServices)
            ->setWeight($weight);
    }
    /**
     * Get PackageSpecialServices value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupPackageSpecialServicesRequested|null
     */
    public function getPackageSpecialServices()
    {
        return $this->PackageSpecialServices;
    }
    /**
     * Set PackageSpecialServices value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PickupPackageSpecialServicesRequested $packageSpecialServices
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPickupPackageDetail
     */
    public function setPackageSpecialServices(\NicholasCreativeMedia\FedExPHP\Structs\PickupPackageSpecialServicesRequested $packageSpecialServices = null)
    {
        $this->PackageSpecialServices = $packageSpecialServices;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPickupPackageDetail
     */
    public function setWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPickupPackageDetail
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
