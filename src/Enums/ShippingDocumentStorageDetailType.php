<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for ShippingDocumentStorageDetailType Enums
 * @subpackage Enumerations
 */
class ShippingDocumentStorageDetailType
{
    /**
     * Constant for value 'ASYNC_SERVICE'
     * @return string 'ASYNC_SERVICE'
     */
    const VALUE_ASYNC_SERVICE = 'ASYNC_SERVICE';
    /**
     * Constant for value 'LOCAL_FILE_SYSTEM'
     * @return string 'LOCAL_FILE_SYSTEM'
     */
    const VALUE_LOCAL_FILE_SYSTEM = 'LOCAL_FILE_SYSTEM';
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
     * @uses self::VALUE_ASYNC_SERVICE
     * @uses self::VALUE_LOCAL_FILE_SYSTEM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ASYNC_SERVICE,
            self::VALUE_LOCAL_FILE_SYSTEM,
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
