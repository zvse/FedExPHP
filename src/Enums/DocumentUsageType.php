<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for DocumentUsageType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the usage or intent of the document in the current context.
 * @subpackage Enumerations
 */
class DocumentUsageType
{
    /**
     * Constant for value 'CUSTOMER_INFORMATION'
     * @return string 'CUSTOMER_INFORMATION'
     */
    const VALUE_CUSTOMER_INFORMATION = 'CUSTOMER_INFORMATION';
    /**
     * Constant for value 'ELECTRONIC_TRADE_DOCUMENTS'
     * @return string 'ELECTRONIC_TRADE_DOCUMENTS'
     */
    const VALUE_ELECTRONIC_TRADE_DOCUMENTS = 'ELECTRONIC_TRADE_DOCUMENTS';
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
     * @uses self::VALUE_CUSTOMER_INFORMATION
     * @uses self::VALUE_ELECTRONIC_TRADE_DOCUMENTS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CUSTOMER_INFORMATION,
            self::VALUE_ELECTRONIC_TRADE_DOCUMENTS,
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
