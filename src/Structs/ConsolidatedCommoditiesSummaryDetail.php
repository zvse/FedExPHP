<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsolidatedCommoditiesSummaryDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Provides data about the consolidated commodities.
 * @subpackage Structs
 */
class ConsolidatedCommoditiesSummaryDetail extends AbstractStructBase
{
    /**
     * The TotalCustomsValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $TotalCustomsValue;
    /**
     * The ConsolidatedCommodities
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDetail[]
     */
    public $ConsolidatedCommodities;
    /**
     * Constructor method for ConsolidatedCommoditiesSummaryDetail
     * @uses ConsolidatedCommoditiesSummaryDetail::setTotalCustomsValue()
     * @uses ConsolidatedCommoditiesSummaryDetail::setConsolidatedCommodities()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalCustomsValue
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDetail[] $consolidatedCommodities
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\Money $totalCustomsValue = null, array $consolidatedCommodities = array())
    {
        $this
            ->setTotalCustomsValue($totalCustomsValue)
            ->setConsolidatedCommodities($consolidatedCommodities);
    }
    /**
     * Get TotalCustomsValue value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getTotalCustomsValue()
    {
        return $this->TotalCustomsValue;
    }
    /**
     * Set TotalCustomsValue value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalCustomsValue
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommoditiesSummaryDetail
     */
    public function setTotalCustomsValue(\NicholasCreativeMedia\FedExPHP\Structs\Money $totalCustomsValue = null)
    {
        $this->TotalCustomsValue = $totalCustomsValue;
        return $this;
    }
    /**
     * Get ConsolidatedCommodities value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDetail[]|null
     */
    public function getConsolidatedCommodities()
    {
        return $this->ConsolidatedCommodities;
    }
    /**
     * Set ConsolidatedCommodities value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDetail[] $consolidatedCommodities
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommoditiesSummaryDetail
     */
    public function setConsolidatedCommodities(array $consolidatedCommodities = array())
    {
        foreach ($consolidatedCommodities as $consolidatedCommoditiesSummaryDetailConsolidatedCommoditiesItem) {
            // validation for constraint: itemType
            if (!$consolidatedCommoditiesSummaryDetailConsolidatedCommoditiesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDetail) {
                throw new \InvalidArgumentException(sprintf('The ConsolidatedCommodities property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDetail, "%s" given', is_object($consolidatedCommoditiesSummaryDetailConsolidatedCommoditiesItem) ? get_class($consolidatedCommoditiesSummaryDetailConsolidatedCommoditiesItem) : gettype($consolidatedCommoditiesSummaryDetailConsolidatedCommoditiesItem)), __LINE__);
            }
        }
        $this->ConsolidatedCommodities = $consolidatedCommodities;
        return $this;
    }
    /**
     * Add item to ConsolidatedCommodities value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommoditiesSummaryDetail
     */
    public function addToConsolidatedCommodities(\NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDetail) {
            throw new \InvalidArgumentException(sprintf('The ConsolidatedCommodities property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConsolidatedCommodities[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommoditiesSummaryDetail
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
