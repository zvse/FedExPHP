<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for EnterpriseDocumentType Enums
 * Meta informations extracted from the WSDL
 * - documentation: This identifies some of the document types recognized by Enterprise Document Management Service.
 * @subpackage Enumerations
 */
class EnterpriseDocumentType
{
    /**
     * Constant for value 'AIR_WAYBILL'
     * @return string 'AIR_WAYBILL'
     */
    const VALUE_AIR_WAYBILL = 'AIR_WAYBILL';
    /**
     * Constant for value 'CERTIFICATE_OF_ORIGIN'
     * @return string 'CERTIFICATE_OF_ORIGIN'
     */
    const VALUE_CERTIFICATE_OF_ORIGIN = 'CERTIFICATE_OF_ORIGIN';
    /**
     * Constant for value 'COMMERCIAL_INVOICE'
     * @return string 'COMMERCIAL_INVOICE'
     */
    const VALUE_COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
    /**
     * Constant for value 'NAFTA_CERTIFICATE_OF_ORIGIN'
     * @return string 'NAFTA_CERTIFICATE_OF_ORIGIN'
     */
    const VALUE_NAFTA_CERTIFICATE_OF_ORIGIN = 'NAFTA_CERTIFICATE_OF_ORIGIN';
    /**
     * Constant for value 'PRO_FORMA_INVOICE'
     * @return string 'PRO_FORMA_INVOICE'
     */
    const VALUE_PRO_FORMA_INVOICE = 'PRO_FORMA_INVOICE';
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
     * @uses self::VALUE_AIR_WAYBILL
     * @uses self::VALUE_CERTIFICATE_OF_ORIGIN
     * @uses self::VALUE_COMMERCIAL_INVOICE
     * @uses self::VALUE_NAFTA_CERTIFICATE_OF_ORIGIN
     * @uses self::VALUE_PRO_FORMA_INVOICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AIR_WAYBILL,
            self::VALUE_CERTIFICATE_OF_ORIGIN,
            self::VALUE_COMMERCIAL_INVOICE,
            self::VALUE_NAFTA_CERTIFICATE_OF_ORIGIN,
            self::VALUE_PRO_FORMA_INVOICE,
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
