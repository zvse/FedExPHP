<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for AsynchronousProcessingResultType Enums
 * @subpackage Enumerations
 */
class AsynchronousProcessingResultType
{
    /**
     * Constant for value 'ASYNCHRONOUSLY_PROCESSED'
     * @return string 'ASYNCHRONOUSLY_PROCESSED'
     */
    const VALUE_ASYNCHRONOUSLY_PROCESSED = 'ASYNCHRONOUSLY_PROCESSED';
    /**
     * Constant for value 'SYNCHRONOUSLY_PROCESSED'
     * @return string 'SYNCHRONOUSLY_PROCESSED'
     */
    const VALUE_SYNCHRONOUSLY_PROCESSED = 'SYNCHRONOUSLY_PROCESSED';
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
     * @uses self::VALUE_ASYNCHRONOUSLY_PROCESSED
     * @uses self::VALUE_SYNCHRONOUSLY_PROCESSED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ASYNCHRONOUSLY_PROCESSED,
            self::VALUE_SYNCHRONOUSLY_PROCESSED,
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
