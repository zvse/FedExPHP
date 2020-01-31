<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for CreditCardAuthorizationType Enums
 * @subpackage Enumerations
 */
class CreditCardAuthorizationType
{
    /**
     * Constant for value 'AUTHORIZE_NON_ACCOUNT'
     * @return string 'AUTHORIZE_NON_ACCOUNT'
     */
    const VALUE_AUTHORIZE_NON_ACCOUNT = 'AUTHORIZE_NON_ACCOUNT';
    /**
     * Constant for value 'AUTHORIZE_WITH_ACCOUNT'
     * @return string 'AUTHORIZE_WITH_ACCOUNT'
     */
    const VALUE_AUTHORIZE_WITH_ACCOUNT = 'AUTHORIZE_WITH_ACCOUNT';
    /**
     * Constant for value 'VERIFY_WITH_ACCOUNT'
     * @return string 'VERIFY_WITH_ACCOUNT'
     */
    const VALUE_VERIFY_WITH_ACCOUNT = 'VERIFY_WITH_ACCOUNT';
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
     * @uses self::VALUE_AUTHORIZE_NON_ACCOUNT
     * @uses self::VALUE_AUTHORIZE_WITH_ACCOUNT
     * @uses self::VALUE_VERIFY_WITH_ACCOUNT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AUTHORIZE_NON_ACCOUNT,
            self::VALUE_AUTHORIZE_WITH_ACCOUNT,
            self::VALUE_VERIFY_WITH_ACCOUNT,
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
