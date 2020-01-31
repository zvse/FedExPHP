<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for LocationTransferOfPossessionType Enums
 * @subpackage Enumerations
 */
class LocationTransferOfPossessionType
{
    /**
     * Constant for value 'DROPOFF'
     * @return string 'DROPOFF'
     */
    const VALUE_DROPOFF = 'DROPOFF';
    /**
     * Constant for value 'HOLD_AT_LOCATION'
     * @return string 'HOLD_AT_LOCATION'
     */
    const VALUE_HOLD_AT_LOCATION = 'HOLD_AT_LOCATION';
    /**
     * Constant for value 'REDIRECT_TO_HOLD_AT_LOCATION'
     * @return string 'REDIRECT_TO_HOLD_AT_LOCATION'
     */
    const VALUE_REDIRECT_TO_HOLD_AT_LOCATION = 'REDIRECT_TO_HOLD_AT_LOCATION';
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
     * @uses self::VALUE_DROPOFF
     * @uses self::VALUE_HOLD_AT_LOCATION
     * @uses self::VALUE_REDIRECT_TO_HOLD_AT_LOCATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DROPOFF,
            self::VALUE_HOLD_AT_LOCATION,
            self::VALUE_REDIRECT_TO_HOLD_AT_LOCATION,
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
