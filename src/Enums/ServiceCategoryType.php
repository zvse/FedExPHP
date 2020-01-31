<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for ServiceCategoryType Enums
 * @subpackage Enumerations
 */
class ServiceCategoryType
{
    /**
     * Constant for value 'EXPRESS_FREIGHT'
     * @return string 'EXPRESS_FREIGHT'
     */
    const VALUE_EXPRESS_FREIGHT = 'EXPRESS_FREIGHT';
    /**
     * Constant for value 'EXPRESS_PARCEL'
     * @return string 'EXPRESS_PARCEL'
     */
    const VALUE_EXPRESS_PARCEL = 'EXPRESS_PARCEL';
    /**
     * Constant for value 'GROUND_HOME_DELIVERY'
     * @return string 'GROUND_HOME_DELIVERY'
     */
    const VALUE_GROUND_HOME_DELIVERY = 'GROUND_HOME_DELIVERY';
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
     * @uses self::VALUE_EXPRESS_FREIGHT
     * @uses self::VALUE_EXPRESS_PARCEL
     * @uses self::VALUE_GROUND_HOME_DELIVERY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EXPRESS_FREIGHT,
            self::VALUE_EXPRESS_PARCEL,
            self::VALUE_GROUND_HOME_DELIVERY,
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
