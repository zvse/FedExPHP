<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for NotificationContentType Enums
 * @subpackage Enumerations
 */
class NotificationContentType
{
    /**
     * Constant for value 'SCHEDULE_PICKUP_SUGGESTION'
     * @return string 'SCHEDULE_PICKUP_SUGGESTION'
     */
    const VALUE_SCHEDULE_PICKUP_SUGGESTION = 'SCHEDULE_PICKUP_SUGGESTION';
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
     * @uses self::VALUE_SCHEDULE_PICKUP_SUGGESTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SCHEDULE_PICKUP_SUGGESTION,
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
