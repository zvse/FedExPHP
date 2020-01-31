<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for ShipmentRuleType Enums
 * @subpackage Enumerations
 */
class ShipmentRuleType
{
    /**
     * Constant for value 'EXPORT'
     * @return string 'EXPORT'
     */
    const VALUE_EXPORT = 'EXPORT';
    /**
     * Constant for value 'GENERAL'
     * @return string 'GENERAL'
     */
    const VALUE_GENERAL = 'GENERAL';
    /**
     * Constant for value 'IMPORT'
     * @return string 'IMPORT'
     */
    const VALUE_IMPORT = 'IMPORT';
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
     * @uses self::VALUE_EXPORT
     * @uses self::VALUE_GENERAL
     * @uses self::VALUE_IMPORT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EXPORT,
            self::VALUE_GENERAL,
            self::VALUE_IMPORT,
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
