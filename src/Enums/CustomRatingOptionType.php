<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for CustomRatingOptionType Enums
 * @subpackage Enumerations
 */
class CustomRatingOptionType
{
    /**
     * Constant for value 'DISCOUNT_EXCLUSION'
     * @return string 'DISCOUNT_EXCLUSION'
     */
    const VALUE_DISCOUNT_EXCLUSION = 'DISCOUNT_EXCLUSION';
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
     * @uses self::VALUE_DISCOUNT_EXCLUSION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISCOUNT_EXCLUSION,
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
