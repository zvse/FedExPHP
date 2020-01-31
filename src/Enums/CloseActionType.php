<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for CloseActionType Enums
 * @subpackage Enumerations
 */
class CloseActionType
{
    /**
     * Constant for value 'CLOSE'
     * @return string 'CLOSE'
     */
    const VALUE_CLOSE = 'CLOSE';
    /**
     * Constant for value 'PREVIEW_CLOSE_DOCUMENTS'
     * @return string 'PREVIEW_CLOSE_DOCUMENTS'
     */
    const VALUE_PREVIEW_CLOSE_DOCUMENTS = 'PREVIEW_CLOSE_DOCUMENTS';
    /**
     * Constant for value 'REPRINT_CLOSE_DOCUMENTS'
     * @return string 'REPRINT_CLOSE_DOCUMENTS'
     */
    const VALUE_REPRINT_CLOSE_DOCUMENTS = 'REPRINT_CLOSE_DOCUMENTS';
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
     * @uses self::VALUE_CLOSE
     * @uses self::VALUE_PREVIEW_CLOSE_DOCUMENTS
     * @uses self::VALUE_REPRINT_CLOSE_DOCUMENTS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CLOSE,
            self::VALUE_PREVIEW_CLOSE_DOCUMENTS,
            self::VALUE_REPRINT_CLOSE_DOCUMENTS,
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
