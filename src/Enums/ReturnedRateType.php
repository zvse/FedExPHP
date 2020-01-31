<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for ReturnedRateType Enums
 * Meta informations extracted from the WSDL
 * - documentation: The "PAYOR..." rates are expressed in the currency identified in the payor's rate table(s). The "RATED..." rates are expressed in the currency of the origin country. Former "...COUNTER..." values have become "...RETAIL..." values,
 * except for PAYOR_COUNTER and RATED_COUNTER, which have been removed.
 * @subpackage Enumerations
 */
class ReturnedRateType
{
    /**
     * Constant for value 'INCENTIVE'
     * @return string 'INCENTIVE'
     */
    const VALUE_INCENTIVE = 'INCENTIVE';
    /**
     * Constant for value 'NEGOTIATED'
     * @return string 'NEGOTIATED'
     */
    const VALUE_NEGOTIATED = 'NEGOTIATED';
    /**
     * Constant for value 'PAYOR_ACCOUNT_PACKAGE'
     * @return string 'PAYOR_ACCOUNT_PACKAGE'
     */
    const VALUE_PAYOR_ACCOUNT_PACKAGE = 'PAYOR_ACCOUNT_PACKAGE';
    /**
     * Constant for value 'PAYOR_ACCOUNT_SHIPMENT'
     * @return string 'PAYOR_ACCOUNT_SHIPMENT'
     */
    const VALUE_PAYOR_ACCOUNT_SHIPMENT = 'PAYOR_ACCOUNT_SHIPMENT';
    /**
     * Constant for value 'PAYOR_CUSTOM_PACKAGE'
     * @return string 'PAYOR_CUSTOM_PACKAGE'
     */
    const VALUE_PAYOR_CUSTOM_PACKAGE = 'PAYOR_CUSTOM_PACKAGE';
    /**
     * Constant for value 'PAYOR_CUSTOM_SHIPMENT'
     * @return string 'PAYOR_CUSTOM_SHIPMENT'
     */
    const VALUE_PAYOR_CUSTOM_SHIPMENT = 'PAYOR_CUSTOM_SHIPMENT';
    /**
     * Constant for value 'PAYOR_LIST_PACKAGE'
     * @return string 'PAYOR_LIST_PACKAGE'
     */
    const VALUE_PAYOR_LIST_PACKAGE = 'PAYOR_LIST_PACKAGE';
    /**
     * Constant for value 'PAYOR_LIST_SHIPMENT'
     * @return string 'PAYOR_LIST_SHIPMENT'
     */
    const VALUE_PAYOR_LIST_SHIPMENT = 'PAYOR_LIST_SHIPMENT';
    /**
     * Constant for value 'PAYOR_RETAIL_PACKAGE'
     * @return string 'PAYOR_RETAIL_PACKAGE'
     */
    const VALUE_PAYOR_RETAIL_PACKAGE = 'PAYOR_RETAIL_PACKAGE';
    /**
     * Constant for value 'PAYOR_RETAIL_SHIPMENT'
     * @return string 'PAYOR_RETAIL_SHIPMENT'
     */
    const VALUE_PAYOR_RETAIL_SHIPMENT = 'PAYOR_RETAIL_SHIPMENT';
    /**
     * Constant for value 'PREFERRED_ACCOUNT_PACKAGE'
     * @return string 'PREFERRED_ACCOUNT_PACKAGE'
     */
    const VALUE_PREFERRED_ACCOUNT_PACKAGE = 'PREFERRED_ACCOUNT_PACKAGE';
    /**
     * Constant for value 'PREFERRED_ACCOUNT_SHIPMENT'
     * @return string 'PREFERRED_ACCOUNT_SHIPMENT'
     */
    const VALUE_PREFERRED_ACCOUNT_SHIPMENT = 'PREFERRED_ACCOUNT_SHIPMENT';
    /**
     * Constant for value 'PREFERRED_CUSTOM_PACKAGE'
     * @return string 'PREFERRED_CUSTOM_PACKAGE'
     */
    const VALUE_PREFERRED_CUSTOM_PACKAGE = 'PREFERRED_CUSTOM_PACKAGE';
    /**
     * Constant for value 'PREFERRED_CUSTOM_SHIPMENT'
     * @return string 'PREFERRED_CUSTOM_SHIPMENT'
     */
    const VALUE_PREFERRED_CUSTOM_SHIPMENT = 'PREFERRED_CUSTOM_SHIPMENT';
    /**
     * Constant for value 'PREFERRED_INCENTIVE'
     * @return string 'PREFERRED_INCENTIVE'
     */
    const VALUE_PREFERRED_INCENTIVE = 'PREFERRED_INCENTIVE';
    /**
     * Constant for value 'PREFERRED_LIST_PACKAGE'
     * @return string 'PREFERRED_LIST_PACKAGE'
     */
    const VALUE_PREFERRED_LIST_PACKAGE = 'PREFERRED_LIST_PACKAGE';
    /**
     * Constant for value 'PREFERRED_LIST_SHIPMENT'
     * @return string 'PREFERRED_LIST_SHIPMENT'
     */
    const VALUE_PREFERRED_LIST_SHIPMENT = 'PREFERRED_LIST_SHIPMENT';
    /**
     * Constant for value 'PREFERRED_NEGOTIATED'
     * @return string 'PREFERRED_NEGOTIATED'
     */
    const VALUE_PREFERRED_NEGOTIATED = 'PREFERRED_NEGOTIATED';
    /**
     * Constant for value 'PREFERRED_RETAIL_PACKAGE'
     * @return string 'PREFERRED_RETAIL_PACKAGE'
     */
    const VALUE_PREFERRED_RETAIL_PACKAGE = 'PREFERRED_RETAIL_PACKAGE';
    /**
     * Constant for value 'PREFERRED_RETAIL_SHIPMENT'
     * @return string 'PREFERRED_RETAIL_SHIPMENT'
     */
    const VALUE_PREFERRED_RETAIL_SHIPMENT = 'PREFERRED_RETAIL_SHIPMENT';
    /**
     * Constant for value 'RATED_ACCOUNT_PACKAGE'
     * @return string 'RATED_ACCOUNT_PACKAGE'
     */
    const VALUE_RATED_ACCOUNT_PACKAGE = 'RATED_ACCOUNT_PACKAGE';
    /**
     * Constant for value 'RATED_ACCOUNT_SHIPMENT'
     * @return string 'RATED_ACCOUNT_SHIPMENT'
     */
    const VALUE_RATED_ACCOUNT_SHIPMENT = 'RATED_ACCOUNT_SHIPMENT';
    /**
     * Constant for value 'RATED_CUSTOM_PACKAGE'
     * @return string 'RATED_CUSTOM_PACKAGE'
     */
    const VALUE_RATED_CUSTOM_PACKAGE = 'RATED_CUSTOM_PACKAGE';
    /**
     * Constant for value 'RATED_CUSTOM_SHIPMENT'
     * @return string 'RATED_CUSTOM_SHIPMENT'
     */
    const VALUE_RATED_CUSTOM_SHIPMENT = 'RATED_CUSTOM_SHIPMENT';
    /**
     * Constant for value 'RATED_LIST_PACKAGE'
     * @return string 'RATED_LIST_PACKAGE'
     */
    const VALUE_RATED_LIST_PACKAGE = 'RATED_LIST_PACKAGE';
    /**
     * Constant for value 'RATED_LIST_SHIPMENT'
     * @return string 'RATED_LIST_SHIPMENT'
     */
    const VALUE_RATED_LIST_SHIPMENT = 'RATED_LIST_SHIPMENT';
    /**
     * Constant for value 'RATED_RETAIL_PACKAGE'
     * @return string 'RATED_RETAIL_PACKAGE'
     */
    const VALUE_RATED_RETAIL_PACKAGE = 'RATED_RETAIL_PACKAGE';
    /**
     * Constant for value 'RATED_RETAIL_SHIPMENT'
     * @return string 'RATED_RETAIL_SHIPMENT'
     */
    const VALUE_RATED_RETAIL_SHIPMENT = 'RATED_RETAIL_SHIPMENT';
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
     * @uses self::VALUE_INCENTIVE
     * @uses self::VALUE_NEGOTIATED
     * @uses self::VALUE_PAYOR_ACCOUNT_PACKAGE
     * @uses self::VALUE_PAYOR_ACCOUNT_SHIPMENT
     * @uses self::VALUE_PAYOR_CUSTOM_PACKAGE
     * @uses self::VALUE_PAYOR_CUSTOM_SHIPMENT
     * @uses self::VALUE_PAYOR_LIST_PACKAGE
     * @uses self::VALUE_PAYOR_LIST_SHIPMENT
     * @uses self::VALUE_PAYOR_RETAIL_PACKAGE
     * @uses self::VALUE_PAYOR_RETAIL_SHIPMENT
     * @uses self::VALUE_PREFERRED_ACCOUNT_PACKAGE
     * @uses self::VALUE_PREFERRED_ACCOUNT_SHIPMENT
     * @uses self::VALUE_PREFERRED_CUSTOM_PACKAGE
     * @uses self::VALUE_PREFERRED_CUSTOM_SHIPMENT
     * @uses self::VALUE_PREFERRED_INCENTIVE
     * @uses self::VALUE_PREFERRED_LIST_PACKAGE
     * @uses self::VALUE_PREFERRED_LIST_SHIPMENT
     * @uses self::VALUE_PREFERRED_NEGOTIATED
     * @uses self::VALUE_PREFERRED_RETAIL_PACKAGE
     * @uses self::VALUE_PREFERRED_RETAIL_SHIPMENT
     * @uses self::VALUE_RATED_ACCOUNT_PACKAGE
     * @uses self::VALUE_RATED_ACCOUNT_SHIPMENT
     * @uses self::VALUE_RATED_CUSTOM_PACKAGE
     * @uses self::VALUE_RATED_CUSTOM_SHIPMENT
     * @uses self::VALUE_RATED_LIST_PACKAGE
     * @uses self::VALUE_RATED_LIST_SHIPMENT
     * @uses self::VALUE_RATED_RETAIL_PACKAGE
     * @uses self::VALUE_RATED_RETAIL_SHIPMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INCENTIVE,
            self::VALUE_NEGOTIATED,
            self::VALUE_PAYOR_ACCOUNT_PACKAGE,
            self::VALUE_PAYOR_ACCOUNT_SHIPMENT,
            self::VALUE_PAYOR_CUSTOM_PACKAGE,
            self::VALUE_PAYOR_CUSTOM_SHIPMENT,
            self::VALUE_PAYOR_LIST_PACKAGE,
            self::VALUE_PAYOR_LIST_SHIPMENT,
            self::VALUE_PAYOR_RETAIL_PACKAGE,
            self::VALUE_PAYOR_RETAIL_SHIPMENT,
            self::VALUE_PREFERRED_ACCOUNT_PACKAGE,
            self::VALUE_PREFERRED_ACCOUNT_SHIPMENT,
            self::VALUE_PREFERRED_CUSTOM_PACKAGE,
            self::VALUE_PREFERRED_CUSTOM_SHIPMENT,
            self::VALUE_PREFERRED_INCENTIVE,
            self::VALUE_PREFERRED_LIST_PACKAGE,
            self::VALUE_PREFERRED_LIST_SHIPMENT,
            self::VALUE_PREFERRED_NEGOTIATED,
            self::VALUE_PREFERRED_RETAIL_PACKAGE,
            self::VALUE_PREFERRED_RETAIL_SHIPMENT,
            self::VALUE_RATED_ACCOUNT_PACKAGE,
            self::VALUE_RATED_ACCOUNT_SHIPMENT,
            self::VALUE_RATED_CUSTOM_PACKAGE,
            self::VALUE_RATED_CUSTOM_SHIPMENT,
            self::VALUE_RATED_LIST_PACKAGE,
            self::VALUE_RATED_LIST_SHIPMENT,
            self::VALUE_RATED_RETAIL_PACKAGE,
            self::VALUE_RATED_RETAIL_SHIPMENT,
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
