<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for PackageLineItemStatusType Enums
 * @subpackage Enumerations
 */
class PackageLineItemStatusType
{
    /**
     * Constant for value 'DELETED'
     * @return string 'DELETED'
     */
    const VALUE_DELETED = 'DELETED';
    /**
     * Constant for value 'EXPIRED'
     * @return string 'EXPIRED'
     */
    const VALUE_EXPIRED = 'EXPIRED';
    /**
     * Constant for value 'EXPIRING'
     * @return string 'EXPIRING'
     */
    const VALUE_EXPIRING = 'EXPIRING';
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
     * @uses self::VALUE_DELETED
     * @uses self::VALUE_EXPIRED
     * @uses self::VALUE_EXPIRING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DELETED,
            self::VALUE_EXPIRED,
            self::VALUE_EXPIRING,
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
