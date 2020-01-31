<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for ConsolidationDataType Enums
 * @subpackage Enumerations
 */
class ConsolidationDataType
{
    /**
     * Constant for value 'TOTAL_CUSTOMS_VALUE'
     * @return string 'TOTAL_CUSTOMS_VALUE'
     */
    const VALUE_TOTAL_CUSTOMS_VALUE = 'TOTAL_CUSTOMS_VALUE';
    /**
     * Constant for value 'TOTAL_FREIGHT_CHARGES'
     * @return string 'TOTAL_FREIGHT_CHARGES'
     */
    const VALUE_TOTAL_FREIGHT_CHARGES = 'TOTAL_FREIGHT_CHARGES';
    /**
     * Constant for value 'TOTAL_HANDLING_COSTS'
     * @return string 'TOTAL_HANDLING_COSTS'
     */
    const VALUE_TOTAL_HANDLING_COSTS = 'TOTAL_HANDLING_COSTS';
    /**
     * Constant for value 'TOTAL_INSURANCE_CHARGES'
     * @return string 'TOTAL_INSURANCE_CHARGES'
     */
    const VALUE_TOTAL_INSURANCE_CHARGES = 'TOTAL_INSURANCE_CHARGES';
    /**
     * Constant for value 'TOTAL_INSURED_VALUE'
     * @return string 'TOTAL_INSURED_VALUE'
     */
    const VALUE_TOTAL_INSURED_VALUE = 'TOTAL_INSURED_VALUE';
    /**
     * Constant for value 'TOTAL_PACKING_COSTS'
     * @return string 'TOTAL_PACKING_COSTS'
     */
    const VALUE_TOTAL_PACKING_COSTS = 'TOTAL_PACKING_COSTS';
    /**
     * Constant for value 'TOTAL_TAXES_OR_MISCELLANEOUS_CHARGES'
     * @return string 'TOTAL_TAXES_OR_MISCELLANEOUS_CHARGES'
     */
    const VALUE_TOTAL_TAXES_OR_MISCELLANEOUS_CHARGES = 'TOTAL_TAXES_OR_MISCELLANEOUS_CHARGES';
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
     * @uses self::VALUE_TOTAL_CUSTOMS_VALUE
     * @uses self::VALUE_TOTAL_FREIGHT_CHARGES
     * @uses self::VALUE_TOTAL_HANDLING_COSTS
     * @uses self::VALUE_TOTAL_INSURANCE_CHARGES
     * @uses self::VALUE_TOTAL_INSURED_VALUE
     * @uses self::VALUE_TOTAL_PACKING_COSTS
     * @uses self::VALUE_TOTAL_TAXES_OR_MISCELLANEOUS_CHARGES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TOTAL_CUSTOMS_VALUE,
            self::VALUE_TOTAL_FREIGHT_CHARGES,
            self::VALUE_TOTAL_HANDLING_COSTS,
            self::VALUE_TOTAL_INSURANCE_CHARGES,
            self::VALUE_TOTAL_INSURED_VALUE,
            self::VALUE_TOTAL_PACKING_COSTS,
            self::VALUE_TOTAL_TAXES_OR_MISCELLANEOUS_CHARGES,
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
