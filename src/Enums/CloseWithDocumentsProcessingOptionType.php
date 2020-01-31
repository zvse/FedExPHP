<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for CloseWithDocumentsProcessingOptionType Enums
 * @subpackage Enumerations
 */
class CloseWithDocumentsProcessingOptionType
{
    /**
     * Constant for value 'ERROR_IF_OPEN_SHIPMENTS_FOUND'
     * @return string 'ERROR_IF_OPEN_SHIPMENTS_FOUND'
     */
    const VALUE_ERROR_IF_OPEN_SHIPMENTS_FOUND = 'ERROR_IF_OPEN_SHIPMENTS_FOUND';
    /**
     * Constant for value 'WARNING_IF_OPEN_SHIPMENTS_FOUND'
     * @return string 'WARNING_IF_OPEN_SHIPMENTS_FOUND'
     */
    const VALUE_WARNING_IF_OPEN_SHIPMENTS_FOUND = 'WARNING_IF_OPEN_SHIPMENTS_FOUND';
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
     * @uses self::VALUE_ERROR_IF_OPEN_SHIPMENTS_FOUND
     * @uses self::VALUE_WARNING_IF_OPEN_SHIPMENTS_FOUND
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ERROR_IF_OPEN_SHIPMENTS_FOUND,
            self::VALUE_WARNING_IF_OPEN_SHIPMENTS_FOUND,
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
