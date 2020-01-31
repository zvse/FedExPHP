<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for CreditCardSettlementScheduleType Enums
 * @subpackage Enumerations
 */
class CreditCardSettlementScheduleType
{
    /**
     * Constant for value 'SETTLE_IMMEDIATELY'
     * @return string 'SETTLE_IMMEDIATELY'
     */
    const VALUE_SETTLE_IMMEDIATELY = 'SETTLE_IMMEDIATELY';
    /**
     * Constant for value 'SETTLE_NEXT_DAY'
     * @return string 'SETTLE_NEXT_DAY'
     */
    const VALUE_SETTLE_NEXT_DAY = 'SETTLE_NEXT_DAY';
    /**
     * Constant for value 'SETTLE_ON_DELIVERY'
     * @return string 'SETTLE_ON_DELIVERY'
     */
    const VALUE_SETTLE_ON_DELIVERY = 'SETTLE_ON_DELIVERY';
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
     * @uses self::VALUE_SETTLE_IMMEDIATELY
     * @uses self::VALUE_SETTLE_NEXT_DAY
     * @uses self::VALUE_SETTLE_ON_DELIVERY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SETTLE_IMMEDIATELY,
            self::VALUE_SETTLE_NEXT_DAY,
            self::VALUE_SETTLE_ON_DELIVERY,
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
