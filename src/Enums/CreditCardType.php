<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for CreditCardType Enums
 * @subpackage Enumerations
 */
class CreditCardType
{
    /**
     * Constant for value 'AMEX'
     * @return string 'AMEX'
     */
    const VALUE_AMEX = 'AMEX';
    /**
     * Constant for value 'DANKORT'
     * @return string 'DANKORT'
     */
    const VALUE_DANKORT = 'DANKORT';
    /**
     * Constant for value 'DINERS'
     * @return string 'DINERS'
     */
    const VALUE_DINERS = 'DINERS';
    /**
     * Constant for value 'DISCOVER'
     * @return string 'DISCOVER'
     */
    const VALUE_DISCOVER = 'DISCOVER';
    /**
     * Constant for value 'JCB'
     * @return string 'JCB'
     */
    const VALUE_JCB = 'JCB';
    /**
     * Constant for value 'MASTERCARD'
     * @return string 'MASTERCARD'
     */
    const VALUE_MASTERCARD = 'MASTERCARD';
    /**
     * Constant for value 'VISA'
     * @return string 'VISA'
     */
    const VALUE_VISA = 'VISA';
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
     * @uses self::VALUE_AMEX
     * @uses self::VALUE_DANKORT
     * @uses self::VALUE_DINERS
     * @uses self::VALUE_DISCOVER
     * @uses self::VALUE_JCB
     * @uses self::VALUE_MASTERCARD
     * @uses self::VALUE_VISA
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AMEX,
            self::VALUE_DANKORT,
            self::VALUE_DINERS,
            self::VALUE_DISCOVER,
            self::VALUE_JCB,
            self::VALUE_MASTERCARD,
            self::VALUE_VISA,
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
