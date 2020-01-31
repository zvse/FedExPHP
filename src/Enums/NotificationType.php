<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for NotificationType Enums
 * @subpackage Enumerations
 */
class NotificationType
{
    /**
     * Constant for value 'EMAIL'
     * @return string 'EMAIL'
     */
    const VALUE_EMAIL = 'EMAIL';
    /**
     * Constant for value 'FAX'
     * @return string 'FAX'
     */
    const VALUE_FAX = 'FAX';
    /**
     * Constant for value 'SMS_TEXT_MESSAGE'
     * @return string 'SMS_TEXT_MESSAGE'
     */
    const VALUE_SMS_TEXT_MESSAGE = 'SMS_TEXT_MESSAGE';
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
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_FAX
     * @uses self::VALUE_SMS_TEXT_MESSAGE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EMAIL,
            self::VALUE_FAX,
            self::VALUE_SMS_TEXT_MESSAGE,
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
