<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for TrackingDocumentType Enums
 * @subpackage Enumerations
 */
class TrackingDocumentType
{
    /**
     * Constant for value 'BILL_OF_LADING'
     * @return string 'BILL_OF_LADING'
     */
    const VALUE_BILL_OF_LADING = 'BILL_OF_LADING';
    /**
     * Constant for value 'FREIGHT_BILLING_DOCUMENT'
     * @return string 'FREIGHT_BILLING_DOCUMENT'
     */
    const VALUE_FREIGHT_BILLING_DOCUMENT = 'FREIGHT_BILLING_DOCUMENT';
    /**
     * Constant for value 'SIGNATURE_PROOF_OF_DELIVERY'
     * @return string 'SIGNATURE_PROOF_OF_DELIVERY'
     */
    const VALUE_SIGNATURE_PROOF_OF_DELIVERY = 'SIGNATURE_PROOF_OF_DELIVERY';
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
     * @uses self::VALUE_BILL_OF_LADING
     * @uses self::VALUE_FREIGHT_BILLING_DOCUMENT
     * @uses self::VALUE_SIGNATURE_PROOF_OF_DELIVERY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BILL_OF_LADING,
            self::VALUE_FREIGHT_BILLING_DOCUMENT,
            self::VALUE_SIGNATURE_PROOF_OF_DELIVERY,
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
