<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for RequirementType Enums
 * @subpackage Enumerations
 */
class RequirementType
{
    /**
     * Constant for value 'OPTIONAL'
     * @return string 'OPTIONAL'
     */
    const VALUE_OPTIONAL = 'OPTIONAL';
    /**
     * Constant for value 'PROHIBITED'
     * @return string 'PROHIBITED'
     */
    const VALUE_PROHIBITED = 'PROHIBITED';
    /**
     * Constant for value 'REQUIRED'
     * @return string 'REQUIRED'
     */
    const VALUE_REQUIRED = 'REQUIRED';
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
     * @uses self::VALUE_OPTIONAL
     * @uses self::VALUE_PROHIBITED
     * @uses self::VALUE_REQUIRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OPTIONAL,
            self::VALUE_PROHIBITED,
            self::VALUE_REQUIRED,
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
