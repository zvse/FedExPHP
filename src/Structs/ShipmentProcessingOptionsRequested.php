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
     * Constructor method for ShipmentProcessingOptionsRequested
     * @uses ShipmentProcessingOptionsRequested::setOptions()
     * @param string[] $options
     */
    public function __construct(array $options = array())
    {
        $this
            ->setOptions($options);
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
     * @uses \CommerceFedEx\FedExPHP\Enums\ShipmentProcessingOptionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ShipmentProcessingOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $options
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentProcessingOptionsRequested
     */
    public function setOptions(array $options = array())
    {
        $invalidValues = array();
        foreach ($options as $shipmentProcessingOptionsRequestedOptionsItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\ShipmentProcessingOptionType::valueIsValid($shipmentProcessingOptionsRequestedOptionsItem)) {
                $invalidValues[] = var_export($shipmentProcessingOptionsRequestedOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\ShipmentProcessingOptionType::getValidValues())), __LINE__);
        }
        $this->Options = $options;
        return $this;
    }
    /**
     * Add item to Options value
     * @uses \CommerceFedEx\FedExPHP\Enums\ShipmentProcessingOptionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ShipmentProcessingOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentProcessingOptionsRequested
     */
    public function addToOptions($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ShipmentProcessingOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\ShipmentProcessingOptionType::getValidValues())), __LINE__);
        }
        $this->Options[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentProcessingOptionsRequested
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
