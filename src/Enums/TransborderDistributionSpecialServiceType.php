<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for TransborderDistributionSpecialServiceType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identifies features of service requested for a Transborder Distribution shipment.
 * @subpackage Enumerations
 */
class TransborderDistributionSpecialServiceType
{
    /**
     * Constant for value 'FEDEX_LTL'
     * @return string 'FEDEX_LTL'
     */
    const VALUE_FEDEX_LTL = 'FEDEX_LTL';
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
     * @uses self::VALUE_FEDEX_LTL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FEDEX_LTL,
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
