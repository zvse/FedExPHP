<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for ErrorLabelBehaviorType Enums
 * @subpackage Enumerations
 */
class ErrorLabelBehaviorType
{
    /**
     * Constant for value 'PACKAGE_ERROR_LABELS'
     * @return string 'PACKAGE_ERROR_LABELS'
     */
    const VALUE_PACKAGE_ERROR_LABELS = 'PACKAGE_ERROR_LABELS';
    /**
     * Constant for value 'STANDARD'
     * @return string 'STANDARD'
     */
    const VALUE_STANDARD = 'STANDARD';
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
     * @uses self::VALUE_PACKAGE_ERROR_LABELS
     * @uses self::VALUE_STANDARD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PACKAGE_ERROR_LABELS,
            self::VALUE_STANDARD,
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
