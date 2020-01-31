<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentTransborderDistributionDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the attributes of a shipment related to its role in a transborder distribution (consolidation).
 * @subpackage Structs
 */
class ShipmentTransborderDistributionDetail extends AbstractStructBase
{
    /**
     * The SpecialServicesRequested
     * Meta informations extracted from the WSDL
     * - documentation: Specifies special services to be performed on this shipment as part of a transborder distribution.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSpecialServicesRequested
     */
    public $SpecialServicesRequested;
    /**
     * The SummaryDetail
     * Meta informations extracted from the WSDL
     * - documentation: Provides summary totals across all CRNs in a distribution.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSummaryDetail
     */
    public $SummaryDetail;
    /**
     * Constructor method for ShipmentTransborderDistributionDetail
     * @uses ShipmentTransborderDistributionDetail::setSpecialServicesRequested()
     * @uses ShipmentTransborderDistributionDetail::setSummaryDetail()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSpecialServicesRequested $specialServicesRequested
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSummaryDetail $summaryDetail
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSpecialServicesRequested $specialServicesRequested = null, \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSummaryDetail $summaryDetail = null)
    {
        $this
            ->setSpecialServicesRequested($specialServicesRequested)
            ->setSummaryDetail($summaryDetail);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentTransborderDistributionDetail
     */
    public function setSpecialServicesRequested(\NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSpecialServicesRequested $specialServicesRequested = null)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    /**
     * Get SummaryDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSummaryDetail|null
     */
    public function getSummaryDetail()
    {
        return $this->SummaryDetail;
    }
    /**
     * Set SummaryDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSummaryDetail $summaryDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentTransborderDistributionDetail
     */
    public function setSummaryDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSummaryDetail $summaryDetail = null)
    {
        $this->SummaryDetail = $summaryDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentTransborderDistributionDetail
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
