<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for TrackingDocumentDispositionType Enums
 * @subpackage Enumerations
 */
class TrackingDocumentDispositionType
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
     * Constant for value 'RETURN'
     * @return string 'RETURN'
     */
    const VALUE_RETURN = 'RETURN';
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
     * @uses self::VALUE_RETURN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EMAIL,
            self::VALUE_FAX,
            self::VALUE_RETURN,
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
