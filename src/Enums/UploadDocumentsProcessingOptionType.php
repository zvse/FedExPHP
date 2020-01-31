<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for UploadDocumentsProcessingOptionType Enums
 * @subpackage Enumerations
 */
class UploadDocumentsProcessingOptionType
{
    /**
     * Constant for value 'POST_SHIPMENT_UPLOAD'
     * @return string 'POST_SHIPMENT_UPLOAD'
     */
    const VALUE_POST_SHIPMENT_UPLOAD = 'POST_SHIPMENT_UPLOAD';
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
     * @uses self::VALUE_POST_SHIPMENT_UPLOAD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_POST_SHIPMENT_UPLOAD,
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
