<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for DeliveryActionType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the actions that can be taken on a delivery option.
 * @subpackage Enumerations
 */
class DeliveryActionType
{
    /**
     * Constant for value 'ADD'
     * @return string 'ADD'
     */
    const VALUE_ADD = 'ADD';
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
     * @uses self::VALUE_ADD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADD,
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
