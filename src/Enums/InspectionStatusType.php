<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for InspectionStatusType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the status of a package inspection performed by an agent.
 * @subpackage Enumerations
 */
class InspectionStatusType
{
    /**
     * Constant for value 'CUSTOMER_REFUSED_INSPECTION'
     * @return string 'CUSTOMER_REFUSED_INSPECTION'
     */
    const VALUE_CUSTOMER_REFUSED_INSPECTION = 'CUSTOMER_REFUSED_INSPECTION';
    /**
     * Constant for value 'INSPECTED'
     * @return string 'INSPECTED'
     */
    const VALUE_INSPECTED = 'INSPECTED';
    /**
     * Constant for value 'NOT_INSPECTED'
     * @return string 'NOT_INSPECTED'
     */
    const VALUE_NOT_INSPECTED = 'NOT_INSPECTED';
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
     * @uses self::VALUE_CUSTOMER_REFUSED_INSPECTION
     * @uses self::VALUE_INSPECTED
     * @uses self::VALUE_NOT_INSPECTED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CUSTOMER_REFUSED_INSPECTION,
            self::VALUE_INSPECTED,
            self::VALUE_NOT_INSPECTED,
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
