<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for WebServiceEnvironment Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the environment (level) for which an AuthenticationCredential is valid, and within which transactions are received.
 * @subpackage Enumerations
 */
class WebServiceEnvironment
{
    /**
     * Constant for value 'PRODUCTION'
     * @return string 'PRODUCTION'
     */
    const VALUE_PRODUCTION = 'PRODUCTION';
    /**
     * Constant for value 'TEST'
     * @return string 'TEST'
     */
    const VALUE_TEST = 'TEST';
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
     * @uses self::VALUE_PRODUCTION
     * @uses self::VALUE_TEST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRODUCTION,
            self::VALUE_TEST,
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
