<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsolidationTransborderDistributionDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies consolidation data for a tranborder distribution shipment. This is data that can be provided by the customer at the consolidation creation time.
 * @subpackage Structs
 */
class ConsolidationTransborderDistributionDetail extends AbstractStructBase
{
    /**
     * The SpecialServicesRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSpecialServicesRequested
     */
    public $SpecialServicesRequested;
    /**
     * The Routing
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how to route the transborder distribution CRNs to different distribution locations.
     * - minOccurs: 0
     * @var string
     */
    public $Routing;
    /**
     * Constructor method for ConsolidationTransborderDistributionDetail
     * @uses ConsolidationTransborderDistributionDetail::setSpecialServicesRequested()
     * @uses ConsolidationTransborderDistributionDetail::setRouting()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSpecialServicesRequested $specialServicesRequested
     * @param string $routing
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSpecialServicesRequested $specialServicesRequested = null, $routing = null)
    {
        $this
            ->setSpecialServicesRequested($specialServicesRequested)
            ->setRouting($routing);
    }
    /**
     * Get SpecialServicesRequested value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSpecialServicesRequested|null
     */
    public function getSpecialServicesRequested()
    {
        return $this->SpecialServicesRequested;
    }
    /**
     * Set SpecialServicesRequested value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSpecialServicesRequested $specialServicesRequested
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationTransborderDistributionDetail
     */
    public function setSpecialServicesRequested(\NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSpecialServicesRequested $specialServicesRequested = null)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    /**
     * Get Routing value
     * @return string|null
     */
    public function getRouting()
    {
        return $this->Routing;
    }
    /**
     * Set Routing value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TransborderDistributionRoutingType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TransborderDistributionRoutingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $routing
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationTransborderDistributionDetail
     */
    public function setRouting($routing = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TransborderDistributionRoutingType::valueIsValid($routing)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $routing, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TransborderDistributionRoutingType::getValidValues())), __LINE__);
        }
        $this->Routing = $routing;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationTransborderDistributionDetail
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
