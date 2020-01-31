<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for CompletedEtdType Enums
 * @subpackage Enumerations
 */
class CompletedEtdType
{
    /**
     * Constant for value 'ELECTRONIC_DOCUMENTS_ONLY'
     * @return string 'ELECTRONIC_DOCUMENTS_ONLY'
     */
    const VALUE_ELECTRONIC_DOCUMENTS_ONLY = 'ELECTRONIC_DOCUMENTS_ONLY';
    /**
     * Constant for value 'ELECTRONIC_DOCUMENTS_WITH_ORIGINALS'
     * @return string 'ELECTRONIC_DOCUMENTS_WITH_ORIGINALS'
     */
    const VALUE_ELECTRONIC_DOCUMENTS_WITH_ORIGINALS = 'ELECTRONIC_DOCUMENTS_WITH_ORIGINALS';
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
     * @uses self::VALUE_ELECTRONIC_DOCUMENTS_ONLY
     * @uses self::VALUE_ELECTRONIC_DOCUMENTS_WITH_ORIGINALS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ELECTRONIC_DOCUMENTS_ONLY,
            self::VALUE_ELECTRONIC_DOCUMENTS_WITH_ORIGINALS,
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
