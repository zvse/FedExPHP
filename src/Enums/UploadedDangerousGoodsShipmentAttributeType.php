<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for UploadedDangerousGoodsShipmentAttributeType Enums
 * @subpackage Enumerations
 */
class UploadedDangerousGoodsShipmentAttributeType
{
    /**
     * Constant for value 'MANUAL_SHIPPING_LABEL'
     * @return string 'MANUAL_SHIPPING_LABEL'
     */
    const VALUE_MANUAL_SHIPPING_LABEL = 'MANUAL_SHIPPING_LABEL';
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
     * @uses self::VALUE_MANUAL_SHIPPING_LABEL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MANUAL_SHIPPING_LABEL,
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
