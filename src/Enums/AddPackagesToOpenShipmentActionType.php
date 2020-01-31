<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for AddPackagesToOpenShipmentActionType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Each value in this enumeration specifies an action to be taken as part of the processing of an "add package to open shipment" transaction.
 * @subpackage Enumerations
 */
class AddPackagesToOpenShipmentActionType
{
    /**
     * Constant for value 'STRONG_VALIDATION'
     * @return string 'STRONG_VALIDATION'
     */
    const VALUE_STRONG_VALIDATION = 'STRONG_VALIDATION';
    /**
     * Constant for value 'WEAK_VALIDATION'
     * @return string 'WEAK_VALIDATION'
     */
    const VALUE_WEAK_VALIDATION = 'WEAK_VALIDATION';
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
     * @uses self::VALUE_STRONG_VALIDATION
     * @uses self::VALUE_WEAK_VALIDATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_STRONG_VALIDATION,
            self::VALUE_WEAK_VALIDATION,
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
