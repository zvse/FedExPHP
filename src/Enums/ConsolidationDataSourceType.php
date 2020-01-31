<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for ConsolidationDataSourceType Enums
 * @subpackage Enumerations
 */
class ConsolidationDataSourceType
{
    /**
     * Constant for value 'ACCUMULATED'
     * @return string 'ACCUMULATED'
     */
    const VALUE_ACCUMULATED = 'ACCUMULATED';
    /**
     * Constant for value 'CLIENT'
     * @return string 'CLIENT'
     */
    const VALUE_CLIENT = 'CLIENT';
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
     * @uses self::VALUE_ACCUMULATED
     * @uses self::VALUE_CLIENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACCUMULATED,
            self::VALUE_CLIENT,
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
