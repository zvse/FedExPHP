<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for DeleteRecordedShipmentRequestServiceLevel Enums
 * @subpackage Enumerations
 */
class DeleteRecordedShipmentRequestServiceLevel
{
    /**
     * Constant for value 'DELETE_ALL_PACKAGES'
     * @return string 'DELETE_ALL_PACKAGES'
     */
    const VALUE_DELETE_ALL_PACKAGES = 'DELETE_ALL_PACKAGES';
    /**
     * Constant for value 'DELETE_ENTIRE_CONSOLIDATION'
     * @return string 'DELETE_ENTIRE_CONSOLIDATION'
     */
    const VALUE_DELETE_ENTIRE_CONSOLIDATION = 'DELETE_ENTIRE_CONSOLIDATION';
    /**
     * Constant for value 'DELETE_ONE_PACKAGE'
     * @return string 'DELETE_ONE_PACKAGE'
     */
    const VALUE_DELETE_ONE_PACKAGE = 'DELETE_ONE_PACKAGE';
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
     * @uses self::VALUE_DELETE_ALL_PACKAGES
     * @uses self::VALUE_DELETE_ENTIRE_CONSOLIDATION
     * @uses self::VALUE_DELETE_ONE_PACKAGE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DELETE_ALL_PACKAGES,
            self::VALUE_DELETE_ENTIRE_CONSOLIDATION,
            self::VALUE_DELETE_ONE_PACKAGE,
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
