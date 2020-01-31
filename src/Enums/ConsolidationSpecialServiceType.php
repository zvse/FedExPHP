<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for ConsolidationSpecialServiceType Enums
 * @subpackage Enumerations
 */
class ConsolidationSpecialServiceType
{
    /**
     * Constant for value 'BROKER_SELECT_OPTION'
     * @return string 'BROKER_SELECT_OPTION'
     */
    const VALUE_BROKER_SELECT_OPTION = 'BROKER_SELECT_OPTION';
    /**
     * Constant for value 'PRIORITY_ALERT'
     * @return string 'PRIORITY_ALERT'
     */
    const VALUE_PRIORITY_ALERT = 'PRIORITY_ALERT';
    /**
     * Constant for value 'SATURDAY_PICKUP'
     * @return string 'SATURDAY_PICKUP'
     */
    const VALUE_SATURDAY_PICKUP = 'SATURDAY_PICKUP';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_BROKER_SELECT_OPTION
     * @uses self::VALUE_PRIORITY_ALERT
     * @uses self::VALUE_SATURDAY_PICKUP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BROKER_SELECT_OPTION,
            self::VALUE_PRIORITY_ALERT,
            self::VALUE_SATURDAY_PICKUP,
        );
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
