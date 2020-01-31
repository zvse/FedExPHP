<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for ShipmentProcessingOptionType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identifies special or custom features to be applied to a shipment.
 * @subpackage Enumerations
 */
class ShipmentProcessingOptionType
{
    /**
     * Constant for value 'BYPASS_CLEARANCE_PROHIBITS'
     * @return string 'BYPASS_CLEARANCE_PROHIBITS'
     */
    const VALUE_BYPASS_CLEARANCE_PROHIBITS = 'BYPASS_CLEARANCE_PROHIBITS';
    /**
     * Constant for value 'FUTURE_DAY_SHIPMENT'
     * @return string 'FUTURE_DAY_SHIPMENT'
     */
    const VALUE_FUTURE_DAY_SHIPMENT = 'FUTURE_DAY_SHIPMENT';
    /**
     * Constant for value 'PACKAGE_LEVEL_COMMODITIES'
     * @return string 'PACKAGE_LEVEL_COMMODITIES'
     */
    const VALUE_PACKAGE_LEVEL_COMMODITIES = 'PACKAGE_LEVEL_COMMODITIES';
    /**
     * Constant for value 'PRE_EIG_PROCESSING'
     * @return string 'PRE_EIG_PROCESSING'
     */
    const VALUE_PRE_EIG_PROCESSING = 'PRE_EIG_PROCESSING';
    /**
     * Constant for value 'PRE_ETD_ENHANCEMENTS'
     * @return string 'PRE_ETD_ENHANCEMENTS'
     */
    const VALUE_PRE_ETD_ENHANCEMENTS = 'PRE_ETD_ENHANCEMENTS';
    /**
     * Constant for value 'PRE_MULTIPLIER_PROCESSING'
     * @return string 'PRE_MULTIPLIER_PROCESSING'
     */
    const VALUE_PRE_MULTIPLIER_PROCESSING = 'PRE_MULTIPLIER_PROCESSING';
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
     * @uses self::VALUE_BYPASS_CLEARANCE_PROHIBITS
     * @uses self::VALUE_FUTURE_DAY_SHIPMENT
     * @uses self::VALUE_PACKAGE_LEVEL_COMMODITIES
     * @uses self::VALUE_PRE_EIG_PROCESSING
     * @uses self::VALUE_PRE_ETD_ENHANCEMENTS
     * @uses self::VALUE_PRE_MULTIPLIER_PROCESSING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BYPASS_CLEARANCE_PROHIBITS,
            self::VALUE_FUTURE_DAY_SHIPMENT,
            self::VALUE_PACKAGE_LEVEL_COMMODITIES,
            self::VALUE_PRE_EIG_PROCESSING,
            self::VALUE_PRE_ETD_ENHANCEMENTS,
            self::VALUE_PRE_MULTIPLIER_PROCESSING,
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
