<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for BarcodeEntryType Enums
 * @subpackage Enumerations
 */
class BarcodeEntryType
{
    /**
     * Constant for value 'MANUAL_ENTRY'
     * @return string 'MANUAL_ENTRY'
     */
    const VALUE_MANUAL_ENTRY = 'MANUAL_ENTRY';
    /**
     * Constant for value 'SCAN'
     * @return string 'SCAN'
     */
    const VALUE_SCAN = 'SCAN';
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
     * @uses self::VALUE_MANUAL_ENTRY
     * @uses self::VALUE_SCAN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MANUAL_ENTRY,
            self::VALUE_SCAN,
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
