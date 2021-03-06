<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for EmailOptionType Enums
 * @subpackage Enumerations
 */
class EmailOptionType
{
    /**
     * Constant for value 'PRODUCE_PAPERLESS_SHIPPING_FORMAT'
     * @return string 'PRODUCE_PAPERLESS_SHIPPING_FORMAT'
     */
    const VALUE_PRODUCE_PAPERLESS_SHIPPING_FORMAT = 'PRODUCE_PAPERLESS_SHIPPING_FORMAT';
    /**
     * Constant for value 'SUPPRESS_ACCESS_EMAILS'
     * @return string 'SUPPRESS_ACCESS_EMAILS'
     */
    const VALUE_SUPPRESS_ACCESS_EMAILS = 'SUPPRESS_ACCESS_EMAILS';
    /**
     * Constant for value 'SUPPRESS_ADDITIONAL_LANGUAGES'
     * @return string 'SUPPRESS_ADDITIONAL_LANGUAGES'
     */
    const VALUE_SUPPRESS_ADDITIONAL_LANGUAGES = 'SUPPRESS_ADDITIONAL_LANGUAGES';
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
     * @uses self::VALUE_PRODUCE_PAPERLESS_SHIPPING_FORMAT
     * @uses self::VALUE_SUPPRESS_ACCESS_EMAILS
     * @uses self::VALUE_SUPPRESS_ADDITIONAL_LANGUAGES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRODUCE_PAPERLESS_SHIPPING_FORMAT,
            self::VALUE_SUPPRESS_ACCESS_EMAILS,
            self::VALUE_SUPPRESS_ADDITIONAL_LANGUAGES,
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
