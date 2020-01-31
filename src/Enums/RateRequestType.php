<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for RateRequestType Enums
 * @subpackage Enumerations
 */
class RateRequestType
{
    /**
     * Constant for value 'ACCOUNT'
     * @return string 'ACCOUNT'
     */
    const VALUE_ACCOUNT = 'ACCOUNT';
    /**
     * Constant for value 'CUSTOM'
     * @return string 'CUSTOM'
     */
    const VALUE_CUSTOM = 'CUSTOM';
    /**
     * Constant for value 'INCENTIVE'
     * @return string 'INCENTIVE'
     */
    const VALUE_INCENTIVE = 'INCENTIVE';
    /**
     * Constant for value 'LIST'
     * @return string 'LIST'
     */
    const VALUE_LIST = 'LIST';
    /**
     * Constant for value 'NONE'
     * @return string 'NONE'
     */
    const VALUE_NONE = 'NONE';
    /**
     * Constant for value 'PREFERRED'
     * @return string 'PREFERRED'
     */
    const VALUE_PREFERRED = 'PREFERRED';
    /**
     * Constant for value 'RATED'
     * @return string 'RATED'
     */
    const VALUE_RATED = 'RATED';
    /**
     * Constant for value 'RETAIL'
     * @return string 'RETAIL'
     */
    const VALUE_RETAIL = 'RETAIL';
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
     * @uses self::VALUE_ACCOUNT
     * @uses self::VALUE_CUSTOM
     * @uses self::VALUE_INCENTIVE
     * @uses self::VALUE_LIST
     * @uses self::VALUE_NONE
     * @uses self::VALUE_PREFERRED
     * @uses self::VALUE_RATED
     * @uses self::VALUE_RETAIL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACCOUNT,
            self::VALUE_CUSTOM,
            self::VALUE_INCENTIVE,
            self::VALUE_LIST,
            self::VALUE_NONE,
            self::VALUE_PREFERRED,
            self::VALUE_RATED,
            self::VALUE_RETAIL,
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
