<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsolidatedCommodity Structs
 * @subpackage Structs
 */
class ConsolidatedCommodity extends AbstractStructBase
{
    /**
     * The DestinationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDestinationDetail
     */
    public $DestinationDetail;
    /**
     * The Commodity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public $Commodity;
    /**
     * Constructor method for ConsolidatedCommodity
     * @uses ConsolidatedCommodity::setDestinationDetail()
     * @uses ConsolidatedCommodity::setCommodity()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDestinationDetail $destinationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Commodity $commodity
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDestinationDetail $destinationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\Commodity $commodity = null)
    {
        $this
            ->setDestinationDetail($destinationDetail)
            ->setCommodity($commodity);
    }
    /**
     * Get DestinationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDestinationDetail|null
     */
    public function getDestinationDetail()
    {
        return $this->DestinationDetail;
    }
    /**
     * Set DestinationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDestinationDetail $destinationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodity
     */
    public function setDestinationDetail(\NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDestinationDetail $destinationDetail = null)
    {
        $this->DestinationDetail = $destinationDetail;
        return $this;
    }
    /**
     * Get Commodity value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity|null
     */
    public function getCommodity()
    {
        return $this->Commodity;
    }
    /**
     * Set Commodity value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Commodity $commodity
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodity
     */
    public function setCommodity(\NicholasCreativeMedia\FedExPHP\Structs\Commodity $commodity = null)
    {
        $this->Commodity = $commodity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodity
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
