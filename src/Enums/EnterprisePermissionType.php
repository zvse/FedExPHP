<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for EnterprisePermissionType Enums
 * @subpackage Enumerations
 */
class EnterprisePermissionType
{
    /**
     * Constant for value 'ALLOWED'
     * @return string 'ALLOWED'
     */
    const VALUE_ALLOWED = 'ALLOWED';
    /**
     * Constant for value 'ALLOWED_BY_EXCEPTION'
     * @return string 'ALLOWED_BY_EXCEPTION'
     */
    const VALUE_ALLOWED_BY_EXCEPTION = 'ALLOWED_BY_EXCEPTION';
    /**
     * Constant for value 'DISALLOWED'
     * @return string 'DISALLOWED'
     */
    const VALUE_DISALLOWED = 'DISALLOWED';
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
     * @uses self::VALUE_ALLOWED
     * @uses self::VALUE_ALLOWED_BY_EXCEPTION
     * @uses self::VALUE_DISALLOWED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALLOWED,
            self::VALUE_ALLOWED_BY_EXCEPTION,
            self::VALUE_DISALLOWED,
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
