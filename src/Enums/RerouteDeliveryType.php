<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for RerouteDeliveryType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the different ways to reroute a shipment.
 * @subpackage Enumerations
 */
class RerouteDeliveryType
{
    /**
     * Constant for value 'CROSS_COUNTRY_DEFERRED'
     * @return string 'CROSS_COUNTRY_DEFERRED'
     */
    const VALUE_CROSS_COUNTRY_DEFERRED = 'CROSS_COUNTRY_DEFERRED';
    /**
     * Constant for value 'CROSS_COUNTRY_EXPEDITED'
     * @return string 'CROSS_COUNTRY_EXPEDITED'
     */
    const VALUE_CROSS_COUNTRY_EXPEDITED = 'CROSS_COUNTRY_EXPEDITED';
    /**
     * Constant for value 'LOCAL'
     * @return string 'LOCAL'
     */
    const VALUE_LOCAL = 'LOCAL';
    /**
     * Constant for value 'UNDETERMINED'
     * @return string 'UNDETERMINED'
     */
    const VALUE_UNDETERMINED = 'UNDETERMINED';
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
     * @uses self::VALUE_CROSS_COUNTRY_DEFERRED
     * @uses self::VALUE_CROSS_COUNTRY_EXPEDITED
     * @uses self::VALUE_LOCAL
     * @uses self::VALUE_UNDETERMINED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CROSS_COUNTRY_DEFERRED,
            self::VALUE_CROSS_COUNTRY_EXPEDITED,
            self::VALUE_LOCAL,
            self::VALUE_UNDETERMINED,
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
