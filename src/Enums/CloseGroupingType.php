<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for CloseGroupingType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies how the shipment close requests are grouped.
 * @subpackage Enumerations
 */
class CloseGroupingType
{
    /**
     * Constant for value 'MANIFEST_REFERENCE'
     * @return string 'MANIFEST_REFERENCE'
     */
    const VALUE_MANIFEST_REFERENCE = 'MANIFEST_REFERENCE';
    /**
     * Constant for value 'SHIPPING_CYCLE'
     * @return string 'SHIPPING_CYCLE'
     */
    const VALUE_SHIPPING_CYCLE = 'SHIPPING_CYCLE';
    /**
     * Constant for value 'TIME'
     * @return string 'TIME'
     */
    const VALUE_TIME = 'TIME';
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
     * @uses self::VALUE_MANIFEST_REFERENCE
     * @uses self::VALUE_SHIPPING_CYCLE
     * @uses self::VALUE_TIME
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MANIFEST_REFERENCE,
            self::VALUE_SHIPPING_CYCLE,
            self::VALUE_TIME,
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
