<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for CreateOpenShipmentActionType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Each value in this enumeration specifies an action to be taken as part of the processing of a "create open shipment" transaction.
 * @subpackage Enumerations
 */
class CreateOpenShipmentActionType
{
    /**
     * Constant for value 'CONFIRM'
     * @return string 'CONFIRM'
     */
    const VALUE_CONFIRM = 'CONFIRM';
    /**
     * Constant for value 'CREATE_PACKAGE'
     * @return string 'CREATE_PACKAGE'
     */
    const VALUE_CREATE_PACKAGE = 'CREATE_PACKAGE';
    /**
     * Constant for value 'STRONG_VALIDATION'
     * @return string 'STRONG_VALIDATION'
     */
    const VALUE_STRONG_VALIDATION = 'STRONG_VALIDATION';
    /**
     * Constant for value 'TRANSFER'
     * @return string 'TRANSFER'
     */
    const VALUE_TRANSFER = 'TRANSFER';
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
     * @uses self::VALUE_CONFIRM
     * @uses self::VALUE_CREATE_PACKAGE
     * @uses self::VALUE_STRONG_VALIDATION
     * @uses self::VALUE_TRANSFER
     * @uses self::VALUE_WEAK_VALIDATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONFIRM,
            self::VALUE_CREATE_PACKAGE,
            self::VALUE_STRONG_VALIDATION,
            self::VALUE_TRANSFER,
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
