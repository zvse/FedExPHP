<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for UnitSystemType Enums
 * @subpackage Enumerations
 */
class UnitSystemType
{
    /**
     * Constant for value 'ENGLISH'
     * @return string 'ENGLISH'
     */
    const VALUE_ENGLISH = 'ENGLISH';
    /**
     * Constant for value 'METRIC'
     * @return string 'METRIC'
     */
    const VALUE_METRIC = 'METRIC';
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
     * @uses self::VALUE_ENGLISH
     * @uses self::VALUE_METRIC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ENGLISH,
            self::VALUE_METRIC,
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
