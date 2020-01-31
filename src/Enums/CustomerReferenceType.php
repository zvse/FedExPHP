<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for CustomerReferenceType Enums
 * @subpackage Enumerations
 */
class CustomerReferenceType
{
    /**
     * Constant for value 'CUSTOMER_REFERENCE'
     * @return string 'CUSTOMER_REFERENCE'
     */
    const VALUE_CUSTOMER_REFERENCE = 'CUSTOMER_REFERENCE';
    /**
     * Constant for value 'DEPARTMENT_NUMBER'
     * @return string 'DEPARTMENT_NUMBER'
     */
    const VALUE_DEPARTMENT_NUMBER = 'DEPARTMENT_NUMBER';
    /**
     * Constant for value 'INTRACOUNTRY_REGULATORY_REFERENCE'
     * @return string 'INTRACOUNTRY_REGULATORY_REFERENCE'
     */
    const VALUE_INTRACOUNTRY_REGULATORY_REFERENCE = 'INTRACOUNTRY_REGULATORY_REFERENCE';
    /**
     * Constant for value 'INVOICE_NUMBER'
     * @return string 'INVOICE_NUMBER'
     */
    const VALUE_INVOICE_NUMBER = 'INVOICE_NUMBER';
    /**
     * Constant for value 'P_O_NUMBER'
     * @return string 'P_O_NUMBER'
     */
    const VALUE_P_O_NUMBER = 'P_O_NUMBER';
    /**
     * Constant for value 'RMA_ASSOCIATION'
     * @return string 'RMA_ASSOCIATION'
     */
    const VALUE_RMA_ASSOCIATION = 'RMA_ASSOCIATION';
    /**
     * Constant for value 'SHIPMENT_INTEGRITY'
     * @return string 'SHIPMENT_INTEGRITY'
     */
    const VALUE_SHIPMENT_INTEGRITY = 'SHIPMENT_INTEGRITY';
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
     * @uses self::VALUE_CUSTOMER_REFERENCE
     * @uses self::VALUE_DEPARTMENT_NUMBER
     * @uses self::VALUE_INTRACOUNTRY_REGULATORY_REFERENCE
     * @uses self::VALUE_INVOICE_NUMBER
     * @uses self::VALUE_P_O_NUMBER
     * @uses self::VALUE_RMA_ASSOCIATION
     * @uses self::VALUE_SHIPMENT_INTEGRITY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CUSTOMER_REFERENCE,
            self::VALUE_DEPARTMENT_NUMBER,
            self::VALUE_INTRACOUNTRY_REGULATORY_REFERENCE,
            self::VALUE_INVOICE_NUMBER,
            self::VALUE_P_O_NUMBER,
            self::VALUE_RMA_ASSOCIATION,
            self::VALUE_SHIPMENT_INTEGRITY,
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
