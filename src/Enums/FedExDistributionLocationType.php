<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for FedExDistributionLocationType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the type of FedEx distribution location.
 * @subpackage Enumerations
 */
class FedExDistributionLocationType
{
    /**
     * Constant for value 'CUSTOMER_SPECIFIED'
     * @return string 'CUSTOMER_SPECIFIED'
     */
    const VALUE_CUSTOMER_SPECIFIED = 'CUSTOMER_SPECIFIED';
    /**
     * Constant for value 'FEDEX_EXPRESS_FREIGHT_RAMP'
     * @return string 'FEDEX_EXPRESS_FREIGHT_RAMP'
     */
    const VALUE_FEDEX_EXPRESS_FREIGHT_RAMP = 'FEDEX_EXPRESS_FREIGHT_RAMP';
    /**
     * Constant for value 'FEDEX_EXPRESS_STATION'
     * @return string 'FEDEX_EXPRESS_STATION'
     */
    const VALUE_FEDEX_EXPRESS_STATION = 'FEDEX_EXPRESS_STATION';
    /**
     * Constant for value 'FEDEX_GROUND_TERMINAL'
     * @return string 'FEDEX_GROUND_TERMINAL'
     */
    const VALUE_FEDEX_GROUND_TERMINAL = 'FEDEX_GROUND_TERMINAL';
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
     * @uses self::VALUE_CUSTOMER_SPECIFIED
     * @uses self::VALUE_FEDEX_EXPRESS_FREIGHT_RAMP
     * @uses self::VALUE_FEDEX_EXPRESS_STATION
     * @uses self::VALUE_FEDEX_GROUND_TERMINAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CUSTOMER_SPECIFIED,
            self::VALUE_FEDEX_EXPRESS_FREIGHT_RAMP,
            self::VALUE_FEDEX_EXPRESS_STATION,
            self::VALUE_FEDEX_GROUND_TERMINAL,
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
