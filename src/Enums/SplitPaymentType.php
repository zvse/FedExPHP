<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for SplitPaymentType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identifies an aspect of a shipment that may be paid separately.
 * @subpackage Enumerations
 */
class SplitPaymentType
{
    /**
     * Constant for value 'APPOINTMENT_DELIVERY'
     * @return string 'APPOINTMENT_DELIVERY'
     */
    const VALUE_APPOINTMENT_DELIVERY = 'APPOINTMENT_DELIVERY';
    /**
     * Constant for value 'PIECE_COUNT_VERIFICATION'
     * @return string 'PIECE_COUNT_VERIFICATION'
     */
    const VALUE_PIECE_COUNT_VERIFICATION = 'PIECE_COUNT_VERIFICATION';
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
     * @uses self::VALUE_APPOINTMENT_DELIVERY
     * @uses self::VALUE_PIECE_COUNT_VERIFICATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_APPOINTMENT_DELIVERY,
            self::VALUE_PIECE_COUNT_VERIFICATION,
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
