<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for ProhibitionType Enums
 * @subpackage Enumerations
 */
class ProhibitionType
{
    /**
     * Constant for value 'COMMODITY'
     * @return string 'COMMODITY'
     */
    const VALUE_COMMODITY = 'COMMODITY';
    /**
     * Constant for value 'COUNTRY'
     * @return string 'COUNTRY'
     */
    const VALUE_COUNTRY = 'COUNTRY';
    /**
     * Constant for value 'DOCUMENT'
     * @return string 'DOCUMENT'
     */
    const VALUE_DOCUMENT = 'DOCUMENT';
    /**
     * Constant for value 'SHIPMENT'
     * @return string 'SHIPMENT'
     */
    const VALUE_SHIPMENT = 'SHIPMENT';
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
     * @uses self::VALUE_COMMODITY
     * @uses self::VALUE_COUNTRY
     * @uses self::VALUE_DOCUMENT
     * @uses self::VALUE_SHIPMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COMMODITY,
            self::VALUE_COUNTRY,
            self::VALUE_DOCUMENT,
            self::VALUE_SHIPMENT,
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
