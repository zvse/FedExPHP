<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for CustomerIntegrationModeType Enums
 * Meta informations extracted from the WSDL
 * - documentation: The Customer Integration Mode Type is intended to provide clients the ability to know how new products like special services can be supported. Some special services are STANDARD and can be supported with just the special service type
 * in the request. CUSTOM special services will require the client application to send more information. For example, HOLD_AT_LOCATION requires the holdAtLocationDetail to be populated.
 * @subpackage Enumerations
 */
class CustomerIntegrationModeType
{
    /**
     * Constant for value 'CUSTOM'
     * @return string 'CUSTOM'
     */
    const VALUE_CUSTOM = 'CUSTOM';
    /**
     * Constant for value 'STANDARD'
     * @return string 'STANDARD'
     */
    const VALUE_STANDARD = 'STANDARD';
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
     * @uses self::VALUE_CUSTOM
     * @uses self::VALUE_STANDARD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CUSTOM,
            self::VALUE_STANDARD,
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
