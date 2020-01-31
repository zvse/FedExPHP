<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for DangerousGoodsPackingGroupType Enums
 * @subpackage Enumerations
 */
class DangerousGoodsPackingGroupType
{
    /**
     * Constant for value 'I'
     * @return string 'I'
     */
    const VALUE_I = 'I';
    /**
     * Constant for value 'II'
     * @return string 'II'
     */
    const VALUE_II = 'II';
    /**
     * Constant for value 'III'
     * @return string 'III'
     */
    const VALUE_III = 'III';
    /**
     * Constant for value 'UNDEFINED'
     * @return string 'UNDEFINED'
     */
    const VALUE_UNDEFINED = 'UNDEFINED';
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
     * @uses self::VALUE_I
     * @uses self::VALUE_II
     * @uses self::VALUE_III
     * @uses self::VALUE_UNDEFINED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_I,
            self::VALUE_II,
            self::VALUE_III,
            self::VALUE_UNDEFINED,
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
