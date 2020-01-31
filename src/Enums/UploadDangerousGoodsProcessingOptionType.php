<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for UploadDangerousGoodsProcessingOptionType Enums
 * @subpackage Enumerations
 */
class UploadDangerousGoodsProcessingOptionType
{
    /**
     * Constant for value 'VALIDATION_ERRORS_AS_WARNINGS'
     * @return string 'VALIDATION_ERRORS_AS_WARNINGS'
     */
    const VALUE_VALIDATION_ERRORS_AS_WARNINGS = 'VALIDATION_ERRORS_AS_WARNINGS';
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
     * @uses self::VALUE_VALIDATION_ERRORS_AS_WARNINGS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_VALIDATION_ERRORS_AS_WARNINGS,
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
