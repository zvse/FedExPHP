<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for ReprintGroundCloseDocumentsOptionType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the requested options to reprinting Ground Close Documents
 * @subpackage Enumerations
 */
class ReprintGroundCloseDocumentsOptionType
{
    /**
     * Constant for value 'BY_SHIP_DATE'
     * @return string 'BY_SHIP_DATE'
     */
    const VALUE_BY_SHIP_DATE = 'BY_SHIP_DATE';
    /**
     * Constant for value 'BY_TRACKING_NUMBER'
     * @return string 'BY_TRACKING_NUMBER'
     */
    const VALUE_BY_TRACKING_NUMBER = 'BY_TRACKING_NUMBER';
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
     * @uses self::VALUE_BY_SHIP_DATE
     * @uses self::VALUE_BY_TRACKING_NUMBER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BY_SHIP_DATE,
            self::VALUE_BY_TRACKING_NUMBER,
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
