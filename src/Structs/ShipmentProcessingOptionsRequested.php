<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentProcessingOptionsRequested Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies special or custom features to be applied during the processing of the enclosing RequestedShipment.
 * @subpackage Structs
 */
class ShipmentProcessingOptionsRequested extends AbstractStructBase
{
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - documentation: Identifies options to be applied.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Options;
    /**
     * The CustomTransitTimeDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies custom transit time to be applied to the shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CustomTransitTimeDetail
     */
    public $CustomTransitTimeDetail;
    /**
     * Constructor method for ShipmentProcessingOptionsRequested
     * @uses ShipmentProcessingOptionsRequested::setOptions()
     * @uses ShipmentProcessingOptionsRequested::setCustomTransitTimeDetail()
     * @param string[] $options
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomTransitTimeDetail $customTransitTimeDetail
     */
    public function __construct(array $options = array(), \NicholasCreativeMedia\FedExPHP\Structs\CustomTransitTimeDetail $customTransitTimeDetail = null)
    {
        $this
            ->setOptions($options)
            ->setCustomTransitTimeDetail($customTransitTimeDetail);
    }
    /**
     * Get Options value
     * @return string[]|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShipmentProcessingOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShipmentProcessingOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $options
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentProcessingOptionsRequested
     */
    public function setOptions(array $options = array())
    {
        $invalidValues = array();
        foreach ($options as $shipmentProcessingOptionsRequestedOptionsItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\ShipmentProcessingOptionType::valueIsValid($shipmentProcessingOptionsRequestedOptionsItem)) {
                $invalidValues[] = var_export($shipmentProcessingOptionsRequestedOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ShipmentProcessingOptionType::getValidValues())), __LINE__);
        }
        $this->Options = $options;
        return $this;
    }
    /**
     * Add item to Options value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShipmentProcessingOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShipmentProcessingOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentProcessingOptionsRequested
     */
    public function addToOptions($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ShipmentProcessingOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ShipmentProcessingOptionType::getValidValues())), __LINE__);
        }
        $this->Options[] = $item;
        return $this;
    }
    /**
     * Get CustomTransitTimeDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomTransitTimeDetail|null
     */
    public function getCustomTransitTimeDetail()
    {
        return $this->CustomTransitTimeDetail;
    }
    /**
     * Set CustomTransitTimeDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomTransitTimeDetail $customTransitTimeDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentProcessingOptionsRequested
     */
    public function setCustomTransitTimeDetail(\NicholasCreativeMedia\FedExPHP\Structs\CustomTransitTimeDetail $customTransitTimeDetail = null)
    {
        $this->CustomTransitTimeDetail = $customTransitTimeDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentProcessingOptionsRequested
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
