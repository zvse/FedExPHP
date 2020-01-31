<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for UploadImageStatusType Enums
 * @subpackage Enumerations
 */
class UploadImageStatusType
{
    /**
     * Constant for value 'ERROR'
     * @return string 'ERROR'
     */
    const VALUE_ERROR = 'ERROR';
    /**
     * Constant for value 'FAILURE'
     * @return string 'FAILURE'
     */
    const VALUE_FAILURE = 'FAILURE';
    /**
     * Constant for value 'SUCCESS'
     * @return string 'SUCCESS'
     */
    const VALUE_SUCCESS = 'SUCCESS';
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
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_FAILURE
     * @uses self::VALUE_SUCCESS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ERROR,
            self::VALUE_FAILURE,
            self::VALUE_SUCCESS,
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
