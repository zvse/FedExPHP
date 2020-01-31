<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for DangerousGoodsAircraftCategoryType Enums
 * @subpackage Enumerations
 */
class DangerousGoodsAircraftCategoryType
{
    /**
     * Constant for value 'CARGO_AIRCRAFT_ONLY'
     * @return string 'CARGO_AIRCRAFT_ONLY'
     */
    const VALUE_CARGO_AIRCRAFT_ONLY = 'CARGO_AIRCRAFT_ONLY';
    /**
     * Constant for value 'PASSENGER_AND_CARGO_AIRCRAFT'
     * @return string 'PASSENGER_AND_CARGO_AIRCRAFT'
     */
    const VALUE_PASSENGER_AND_CARGO_AIRCRAFT = 'PASSENGER_AND_CARGO_AIRCRAFT';
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
     * @uses self::VALUE_CARGO_AIRCRAFT_ONLY
     * @uses self::VALUE_PASSENGER_AND_CARGO_AIRCRAFT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CARGO_AIRCRAFT_ONLY,
            self::VALUE_PASSENGER_AND_CARGO_AIRCRAFT,
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
