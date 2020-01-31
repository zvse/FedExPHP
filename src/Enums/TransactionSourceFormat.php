<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for TransactionSourceFormat Enums
 * @subpackage Enumerations
 */
class TransactionSourceFormat
{
    /**
     * Constant for value 'API_CTS'
     * @return string 'API_CTS'
     */
    const VALUE_API_CTS = 'API_CTS';
    /**
     * Constant for value 'API_XML'
     * @return string 'API_XML'
     */
    const VALUE_API_XML = 'API_XML';
    /**
     * Constant for value 'DIRECT'
     * @return string 'DIRECT'
     */
    const VALUE_DIRECT = 'DIRECT';
    /**
     * Constant for value 'DIRECT_XML'
     * @return string 'DIRECT_XML'
     */
    const VALUE_DIRECT_XML = 'DIRECT_XML';
    /**
     * Constant for value 'FXRS_CTS'
     * @return string 'FXRS_CTS'
     */
    const VALUE_FXRS_CTS = 'FXRS_CTS';
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const VALUE_UNKNOWN = 'UNKNOWN';
    /**
     * Constant for value 'WSI_XML'
     * @return string 'WSI_XML'
     */
    const VALUE_WSI_XML = 'WSI_XML';
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
     * @uses self::VALUE_API_CTS
     * @uses self::VALUE_API_XML
     * @uses self::VALUE_DIRECT
     * @uses self::VALUE_DIRECT_XML
     * @uses self::VALUE_FXRS_CTS
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_WSI_XML
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_API_CTS,
            self::VALUE_API_XML,
            self::VALUE_DIRECT,
            self::VALUE_DIRECT_XML,
            self::VALUE_FXRS_CTS,
            self::VALUE_UNKNOWN,
            self::VALUE_WSI_XML,
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
