<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for SmartPostShipmentSpecialServiceType Enums
 * @subpackage Enumerations
 */
class SmartPostShipmentSpecialServiceType
{
    /**
     * Constant for value 'USPS_DELIVERY_CONFIRMATION'
     * @return string 'USPS_DELIVERY_CONFIRMATION'
     */
    const VALUE_USPS_DELIVERY_CONFIRMATION = 'USPS_DELIVERY_CONFIRMATION';
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
     * @uses self::VALUE_USPS_DELIVERY_CONFIRMATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_USPS_DELIVERY_CONFIRMATION,
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
