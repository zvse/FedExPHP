<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for AsynchronousProcessingOptionType Enums
 * @subpackage Enumerations
 */
class AsynchronousProcessingOptionType
{
    /**
     * Constant for value 'ALLOW_ASYNCHRONOUS'
     * @return string 'ALLOW_ASYNCHRONOUS'
     */
    const VALUE_ALLOW_ASYNCHRONOUS = 'ALLOW_ASYNCHRONOUS';
    /**
     * Constant for value 'ASYNCHRONOUS_ONLY'
     * @return string 'ASYNCHRONOUS_ONLY'
     */
    const VALUE_ASYNCHRONOUS_ONLY = 'ASYNCHRONOUS_ONLY';
    /**
     * Constant for value 'SYNCHRONOUS_ONLY'
     * @return string 'SYNCHRONOUS_ONLY'
     */
    const VALUE_SYNCHRONOUS_ONLY = 'SYNCHRONOUS_ONLY';
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
     * @uses self::VALUE_ALLOW_ASYNCHRONOUS
     * @uses self::VALUE_ASYNCHRONOUS_ONLY
     * @uses self::VALUE_SYNCHRONOUS_ONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALLOW_ASYNCHRONOUS,
            self::VALUE_ASYNCHRONOUS_ONLY,
            self::VALUE_SYNCHRONOUS_ONLY,
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
