<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for DangerousGoodsRegulationAttributeType Enums
 * Meta informations extracted from the WSDL
 * - documentation: This attribute type identifies characteristics of a dangerous goods regulation that influence how FedEx systems process dangerous goods shipments.
 * @subpackage Enumerations
 */
class DangerousGoodsRegulationAttributeType
{
    /**
     * Constant for value 'DRY_ICE_DECLARATION_REQUIRED'
     * @return string 'DRY_ICE_DECLARATION_REQUIRED'
     */
    const VALUE_DRY_ICE_DECLARATION_REQUIRED = 'DRY_ICE_DECLARATION_REQUIRED';
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
     * @uses self::VALUE_DRY_ICE_DECLARATION_REQUIRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DRY_ICE_DECLARATION_REQUIRED,
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
