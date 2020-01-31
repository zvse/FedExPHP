<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for LocationContentOptionType Enums
 * @subpackage Enumerations
 */
class LocationContentOptionType
{
    /**
     * Constant for value 'HOLIDAYS'
     * @return string 'HOLIDAYS'
     */
    const VALUE_HOLIDAYS = 'HOLIDAYS';
    /**
     * Constant for value 'LOCATION_DROPOFF_TIMES'
     * @return string 'LOCATION_DROPOFF_TIMES'
     */
    const VALUE_LOCATION_DROPOFF_TIMES = 'LOCATION_DROPOFF_TIMES';
    /**
     * Constant for value 'MAP_URL'
     * @return string 'MAP_URL'
     */
    const VALUE_MAP_URL = 'MAP_URL';
    /**
     * Constant for value 'TIMEZONE_OFFSET'
     * @return string 'TIMEZONE_OFFSET'
     */
    const VALUE_TIMEZONE_OFFSET = 'TIMEZONE_OFFSET';
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
     * @uses self::VALUE_HOLIDAYS
     * @uses self::VALUE_LOCATION_DROPOFF_TIMES
     * @uses self::VALUE_MAP_URL
     * @uses self::VALUE_TIMEZONE_OFFSET
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HOLIDAYS,
            self::VALUE_LOCATION_DROPOFF_TIMES,
            self::VALUE_MAP_URL,
            self::VALUE_TIMEZONE_OFFSET,
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
