<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for OperationalDocumentType Enums
 * @subpackage Enumerations
 */
class OperationalDocumentType
{
    /**
     * Constant for value 'SIGNATURE_RELEASE_DOCUMENT'
     * @return string 'SIGNATURE_RELEASE_DOCUMENT'
     */
    const VALUE_SIGNATURE_RELEASE_DOCUMENT = 'SIGNATURE_RELEASE_DOCUMENT';
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
     * @uses self::VALUE_SIGNATURE_RELEASE_DOCUMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SIGNATURE_RELEASE_DOCUMENT,
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
