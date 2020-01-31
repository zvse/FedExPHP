<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for ShippingDocumentNamingType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the convention by which file names are constructed for STORED or DEFERRED documents.
 * @subpackage Enumerations
 */
class ShippingDocumentNamingType
{
    /**
     * Constant for value 'FAST'
     * @return string 'FAST'
     */
    const VALUE_FAST = 'FAST';
    /**
     * Constant for value 'LEGACY_FXRS'
     * @return string 'LEGACY_FXRS'
     */
    const VALUE_LEGACY_FXRS = 'LEGACY_FXRS';
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
     * @uses self::VALUE_FAST
     * @uses self::VALUE_LEGACY_FXRS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FAST,
            self::VALUE_LEGACY_FXRS,
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
