<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsolidatedCommodityDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Represents all commodity data (summary and line items) within a consolidation.
 * @subpackage Structs
 */
class ConsolidatedCommodityDetail extends AbstractStructBase
{
    /**
     * The GroupDescription
     * Meta informations extracted from the WSDL
     * - documentation: Description of the commodity group which is summarised in the following subtotals.
     * - minOccurs: 0
     * @var string
     */
    public $GroupDescription;
    /**
     * The SubtotalQuantity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $SubtotalQuantity;
    /**
     * The SubtotalCustomsValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $SubtotalCustomsValue;
    /**
     * The Commodities
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodity[]
     */
    public $Commodities;
    /**
     * Constructor method for ConsolidatedCommodityDetail
     * @uses ConsolidatedCommodityDetail::setGroupDescription()
     * @uses ConsolidatedCommodityDetail::setSubtotalQuantity()
     * @uses ConsolidatedCommodityDetail::setSubtotalCustomsValue()
     * @uses ConsolidatedCommodityDetail::setCommodities()
     * @param string $groupDescription
     * @param float $subtotalQuantity
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $subtotalCustomsValue
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodity[] $commodities
     */
    public function __construct($groupDescription = null, $subtotalQuantity = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $subtotalCustomsValue = null, array $commodities = array())
    {
        $this
            ->setGroupDescription($groupDescription)
            ->setSubtotalQuantity($subtotalQuantity)
            ->setSubtotalCustomsValue($subtotalCustomsValue)
            ->setCommodities($commodities);
    }
    /**
     * Get GroupDescription value
     * @return string|null
     */
    public function getGroupDescription()
    {
        return $this->GroupDescription;
    }
    /**
     * Set GroupDescription value
     * @param string $groupDescription
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDetail
     */
    public function setGroupDescription($groupDescription = null)
    {
        // validation for constraint: string
        if (!is_null($groupDescription) && !is_string($groupDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupDescription)), __LINE__);
        }
        $this->GroupDescription = $groupDescription;
        return $this;
    }
    /**
     * Get SubtotalQuantity value
     * @return float|null
     */
    public function getSubtotalQuantity()
    {
        return $this->SubtotalQuantity;
    }
    /**
     * Set SubtotalQuantity value
     * @param float $subtotalQuantity
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDetail
     */
    public function setSubtotalQuantity($subtotalQuantity = null)
    {
        $this->SubtotalQuantity = $subtotalQuantity;
        return $this;
    }
    /**
     * Get SubtotalCustomsValue value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getSubtotalCustomsValue()
    {
        return $this->SubtotalCustomsValue;
    }
    /**
     * Set SubtotalCustomsValue value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $subtotalCustomsValue
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDetail
     */
    public function setSubtotalCustomsValue(\NicholasCreativeMedia\FedExPHP\Structs\Money $subtotalCustomsValue = null)
    {
        $this->SubtotalCustomsValue = $subtotalCustomsValue;
        return $this;
    }
    /**
     * Get Commodities value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodity[]|null
     */
    public function getCommodities()
    {
        return $this->Commodities;
    }
    /**
     * Set Commodities value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodity[] $commodities
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDetail
     */
    public function setCommodities(array $commodities = array())
    {
        foreach ($commodities as $consolidatedCommodityDetailCommoditiesItem) {
            // validation for constraint: itemType
            if (!$consolidatedCommodityDetailCommoditiesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodity) {
                throw new \InvalidArgumentException(sprintf('The Commodities property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodity, "%s" given', is_object($consolidatedCommodityDetailCommoditiesItem) ? get_class($consolidatedCommodityDetailCommoditiesItem) : gettype($consolidatedCommodityDetailCommoditiesItem)), __LINE__);
            }
        }
        $this->Commodities = $commodities;
        return $this;
    }
    /**
     * Add item to Commodities value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodity $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDetail
     */
    public function addToCommodities(\NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodity) {
            throw new \InvalidArgumentException(sprintf('The Commodities property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Commodities[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommodityDetail
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
