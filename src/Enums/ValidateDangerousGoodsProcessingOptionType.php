<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for ValidateDangerousGoodsProcessingOptionType Enums
 * @subpackage Enumerations
 */
class ValidateDangerousGoodsProcessingOptionType
{
    /**
     * Constant for value 'BYPASS_PRODUCT_VALIDATION'
     * @return string 'BYPASS_PRODUCT_VALIDATION'
     */
    const VALUE_BYPASS_PRODUCT_VALIDATION = 'BYPASS_PRODUCT_VALIDATION';
    /**
     * Constant for value 'BYPASS_TRACKING_NUMBER_VALIDATION'
     * @return string 'BYPASS_TRACKING_NUMBER_VALIDATION'
     */
    const VALUE_BYPASS_TRACKING_NUMBER_VALIDATION = 'BYPASS_TRACKING_NUMBER_VALIDATION';
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
     * @uses self::VALUE_BYPASS_PRODUCT_VALIDATION
     * @uses self::VALUE_BYPASS_TRACKING_NUMBER_VALIDATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BYPASS_PRODUCT_VALIDATION,
            self::VALUE_BYPASS_TRACKING_NUMBER_VALIDATION,
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
