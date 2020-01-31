<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for RateTypeBasisType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Select the type of rate from which the element is to be selected.
 * @subpackage Enumerations
 */
class RateTypeBasisType
{
    /**
     * Constant for value 'ACCOUNT'
     * @return string 'ACCOUNT'
     */
    const VALUE_ACCOUNT = 'ACCOUNT';
    /**
     * Constant for value 'ACTUAL'
     * @return string 'ACTUAL'
     */
    const VALUE_ACTUAL = 'ACTUAL';
    /**
     * Constant for value 'CURRENT'
     * @return string 'CURRENT'
     */
    const VALUE_CURRENT = 'CURRENT';
    /**
     * Constant for value 'CUSTOM'
     * @return string 'CUSTOM'
     */
    const VALUE_CUSTOM = 'CUSTOM';
    /**
     * Constant for value 'LIST'
     * @return string 'LIST'
     */
    const VALUE_LIST = 'LIST';
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
     * @uses self::VALUE_ACTUAL
     * @uses self::VALUE_CURRENT
     * @uses self::VALUE_CUSTOM
     * @uses self::VALUE_LIST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACCOUNT,
            self::VALUE_ACTUAL,
            self::VALUE_CURRENT,
            self::VALUE_CUSTOM,
            self::VALUE_LIST,
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
