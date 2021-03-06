<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentAdvisoryDetail Structs
 * @subpackage Structs
 */
class ShipmentAdvisoryDetail extends AbstractStructBase
{
    /**
     * The RegulatoryAdvisories
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\RegulatoryAdvisoryDetail[]
     */
    public $RegulatoryAdvisories;
    /**
     * Constructor method for ShipmentAdvisoryDetail
     * @uses ShipmentAdvisoryDetail::setRegulatoryAdvisories()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RegulatoryAdvisoryDetail[] $regulatoryAdvisories
     */
    public function __construct(array $regulatoryAdvisories = array())
    {
        $this
            ->setRegulatoryAdvisories($regulatoryAdvisories);
    }
    /**
     * Get RegulatoryAdvisories value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RegulatoryAdvisoryDetail[]|null
     */
    public function getRegulatoryAdvisories()
    {
        return $this->RegulatoryAdvisories;
    }
    /**
     * Set RegulatoryAdvisories value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RegulatoryAdvisoryDetail[] $regulatoryAdvisories
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAdvisoryDetail
     */
    public function setRegulatoryAdvisories(array $regulatoryAdvisories = array())
    {
        foreach ($regulatoryAdvisories as $shipmentAdvisoryDetailRegulatoryAdvisoriesItem) {
            // validation for constraint: itemType
            if (!$shipmentAdvisoryDetailRegulatoryAdvisoriesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\RegulatoryAdvisoryDetail) {
                throw new \InvalidArgumentException(sprintf('The RegulatoryAdvisories property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\RegulatoryAdvisoryDetail, "%s" given', is_object($shipmentAdvisoryDetailRegulatoryAdvisoriesItem) ? get_class($shipmentAdvisoryDetailRegulatoryAdvisoriesItem) : gettype($shipmentAdvisoryDetailRegulatoryAdvisoriesItem)), __LINE__);
            }
        }
        $this->RegulatoryAdvisories = $regulatoryAdvisories;
        return $this;
    }
    /**
     * Add item to RegulatoryAdvisories value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RegulatoryAdvisoryDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAdvisoryDetail
     */
    public function addToRegulatoryAdvisories(\NicholasCreativeMedia\FedExPHP\Structs\RegulatoryAdvisoryDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\RegulatoryAdvisoryDetail) {
            throw new \InvalidArgumentException(sprintf('The RegulatoryAdvisories property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\RegulatoryAdvisoryDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RegulatoryAdvisories[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAdvisoryDetail
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
