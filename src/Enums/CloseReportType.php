<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for CloseReportType Enums
 * @subpackage Enumerations
 */
class CloseReportType
{
    /**
     * Constant for value 'ALL'
     * @return string 'ALL'
     */
    const VALUE_ALL = 'ALL';
    /**
     * Constant for value 'COD'
     * @return string 'COD'
     */
    const VALUE_COD = 'COD';
    /**
     * Constant for value 'HAZMAT'
     * @return string 'HAZMAT'
     */
    const VALUE_HAZMAT = 'HAZMAT';
    /**
     * Constant for value 'MANIFEST'
     * @return string 'MANIFEST'
     */
    const VALUE_MANIFEST = 'MANIFEST';
    /**
     * Constant for value 'MULTIWEIGHT'
     * @return string 'MULTIWEIGHT'
     */
    const VALUE_MULTIWEIGHT = 'MULTIWEIGHT';
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
     * @uses self::VALUE_ALL
     * @uses self::VALUE_COD
     * @uses self::VALUE_HAZMAT
     * @uses self::VALUE_MANIFEST
     * @uses self::VALUE_MULTIWEIGHT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_COD,
            self::VALUE_HAZMAT,
            self::VALUE_MANIFEST,
            self::VALUE_MULTIWEIGHT,
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
