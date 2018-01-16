<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingHoliday Structs
 * @subpackage Structs
 */
class ShippingHoliday extends AbstractStructBase
{
    /**
     * The Holiday
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Holiday
     */
    public $Holiday;
    /**
     * The UnavailableActions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $UnavailableActions;
    /**
     * Constructor method for ShippingHoliday
     * @uses ShippingHoliday::setHoliday()
     * @uses ShippingHoliday::setUnavailableActions()
     * @param \CommerceFedEx\FedExPHP\Structs\Holiday $holiday
     * @param string[] $unavailableActions
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\Holiday $holiday = null, array $unavailableActions = array())
    {
        $this
            ->setHoliday($holiday)
            ->setUnavailableActions($unavailableActions);
    }
    /**
     * Get Holiday value
     * @return \CommerceFedEx\FedExPHP\Structs\Holiday|null
     */
    public function getHoliday()
    {
        return $this->Holiday;
    }
    /**
     * Set Holiday value
     * @param \CommerceFedEx\FedExPHP\Structs\Holiday $holiday
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingHoliday
     */
    public function setHoliday(\CommerceFedEx\FedExPHP\Structs\Holiday $holiday = null)
    {
        $this->Holiday = $holiday;
        return $this;
    }
    /**
     * Get UnavailableActions value
     * @return string[]|null
     */
    public function getUnavailableActions()
    {
        return $this->UnavailableActions;
    }
    /**
     * Set UnavailableActions value
     * @uses \CommerceFedEx\FedExPHP\Enums\ShippingActionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ShippingActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $unavailableActions
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingHoliday
     */
    public function setUnavailableActions(array $unavailableActions = array())
    {
        $invalidValues = array();
        foreach ($unavailableActions as $shippingHolidayUnavailableActionsItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\ShippingActionType::valueIsValid($shippingHolidayUnavailableActionsItem)) {
                $invalidValues[] = var_export($shippingHolidayUnavailableActionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\ShippingActionType::getValidValues())), __LINE__);
        }
        $this->UnavailableActions = $unavailableActions;
        return $this;
    }
    /**
     * Add item to UnavailableActions value
     * @uses \CommerceFedEx\FedExPHP\Enums\ShippingActionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ShippingActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingHoliday
     */
    public function addToUnavailableActions($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ShippingActionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\ShippingActionType::getValidValues())), __LINE__);
        }
        $this->UnavailableActions[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingHoliday
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
