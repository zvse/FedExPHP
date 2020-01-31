<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for CloseDocumentType Enums
 * @subpackage Enumerations
 */
class CloseDocumentType
{
    /**
     * Constant for value 'COD_REPORT'
     * @return string 'COD_REPORT'
     */
    const VALUE_COD_REPORT = 'COD_REPORT';
    /**
     * Constant for value 'DETAILED_DELIVERY_MANIFEST'
     * @return string 'DETAILED_DELIVERY_MANIFEST'
     */
    const VALUE_DETAILED_DELIVERY_MANIFEST = 'DETAILED_DELIVERY_MANIFEST';
    /**
     * Constant for value 'HAZARDOUS_MATERIALS_CERTIFICATION'
     * @return string 'HAZARDOUS_MATERIALS_CERTIFICATION'
     */
    const VALUE_HAZARDOUS_MATERIALS_CERTIFICATION = 'HAZARDOUS_MATERIALS_CERTIFICATION';
    /**
     * Constant for value 'MANIFEST'
     * @return string 'MANIFEST'
     */
    const VALUE_MANIFEST = 'MANIFEST';
    /**
     * Constant for value 'MULTIWEIGHT_REPORT'
     * @return string 'MULTIWEIGHT_REPORT'
     */
    const VALUE_MULTIWEIGHT_REPORT = 'MULTIWEIGHT_REPORT';
    /**
     * Constant for value 'OP_950'
     * @return string 'OP_950'
     */
    const VALUE_OP_950 = 'OP_950';
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
     * @uses self::VALUE_COD_REPORT
     * @uses self::VALUE_DETAILED_DELIVERY_MANIFEST
     * @uses self::VALUE_HAZARDOUS_MATERIALS_CERTIFICATION
     * @uses self::VALUE_MANIFEST
     * @uses self::VALUE_MULTIWEIGHT_REPORT
     * @uses self::VALUE_OP_950
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COD_REPORT,
            self::VALUE_DETAILED_DELIVERY_MANIFEST,
            self::VALUE_HAZARDOUS_MATERIALS_CERTIFICATION,
            self::VALUE_MANIFEST,
            self::VALUE_MULTIWEIGHT_REPORT,
            self::VALUE_OP_950,
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
