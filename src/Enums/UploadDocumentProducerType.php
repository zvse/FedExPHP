<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for UploadDocumentProducerType Enums
 * @subpackage Enumerations
 */
class UploadDocumentProducerType
{
    /**
     * Constant for value 'CUSTOMER'
     * @return string 'CUSTOMER'
     */
    const VALUE_CUSTOMER = 'CUSTOMER';
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
     * @uses self::VALUE_CUSTOMER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CUSTOMER,
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
