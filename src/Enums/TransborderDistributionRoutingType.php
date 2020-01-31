<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for TransborderDistributionRoutingType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies how to route the transborder distribution CRNs to different distribution locations.
 * @subpackage Enumerations
 */
class TransborderDistributionRoutingType
{
    /**
     * Constant for value 'BY_METER'
     * @return string 'BY_METER'
     */
    const VALUE_BY_METER = 'BY_METER';
    /**
     * Constant for value 'BY_ORIGIN'
     * @return string 'BY_ORIGIN'
     */
    const VALUE_BY_ORIGIN = 'BY_ORIGIN';
    /**
     * Constant for value 'CUSTOMER_SPECIFIED'
     * @return string 'CUSTOMER_SPECIFIED'
     */
    const VALUE_CUSTOMER_SPECIFIED = 'CUSTOMER_SPECIFIED';
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
     * @uses self::VALUE_BY_METER
     * @uses self::VALUE_BY_ORIGIN
     * @uses self::VALUE_CUSTOMER_SPECIFIED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BY_METER,
            self::VALUE_BY_ORIGIN,
            self::VALUE_CUSTOMER_SPECIFIED,
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
