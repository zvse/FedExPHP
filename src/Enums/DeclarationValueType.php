<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for DeclarationValueType Enums
 * @subpackage Enumerations
 */
class DeclarationValueType
{
    /**
     * Constant for value 'CUSTOMS_VALUE'
     * @return string 'CUSTOMS_VALUE'
     */
    const VALUE_CUSTOMS_VALUE = 'CUSTOMS_VALUE';
    /**
     * Constant for value 'INSURED_VALUE'
     * @return string 'INSURED_VALUE'
     */
    const VALUE_INSURED_VALUE = 'INSURED_VALUE';
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
     * @uses self::VALUE_CUSTOMS_VALUE
     * @uses self::VALUE_INSURED_VALUE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CUSTOMS_VALUE,
            self::VALUE_INSURED_VALUE,
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
