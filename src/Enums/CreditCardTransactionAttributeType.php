<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for CreditCardTransactionAttributeType Enums
 * @subpackage Enumerations
 */
class CreditCardTransactionAttributeType
{
    /**
     * Constant for value 'ORIGINATED_BY_AUTHORIZED_PERSONNEL'
     * @return string 'ORIGINATED_BY_AUTHORIZED_PERSONNEL'
     */
    const VALUE_ORIGINATED_BY_AUTHORIZED_PERSONNEL = 'ORIGINATED_BY_AUTHORIZED_PERSONNEL';
    /**
     * Constant for value 'ORIGINATED_BY_UNAUTHORIZED_PERSONNEL'
     * @return string 'ORIGINATED_BY_UNAUTHORIZED_PERSONNEL'
     */
    const VALUE_ORIGINATED_BY_UNAUTHORIZED_PERSONNEL = 'ORIGINATED_BY_UNAUTHORIZED_PERSONNEL';
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
     * @uses self::VALUE_ORIGINATED_BY_AUTHORIZED_PERSONNEL
     * @uses self::VALUE_ORIGINATED_BY_UNAUTHORIZED_PERSONNEL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ORIGINATED_BY_AUTHORIZED_PERSONNEL,
            self::VALUE_ORIGINATED_BY_UNAUTHORIZED_PERSONNEL,
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
