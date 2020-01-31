<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for NotificationEventType Enums
 * @subpackage Enumerations
 */
class NotificationEventType
{
    /**
     * Constant for value 'ON_DELIVERY'
     * @return string 'ON_DELIVERY'
     */
    const VALUE_ON_DELIVERY = 'ON_DELIVERY';
    /**
     * Constant for value 'ON_ESTIMATED_DELIVERY'
     * @return string 'ON_ESTIMATED_DELIVERY'
     */
    const VALUE_ON_ESTIMATED_DELIVERY = 'ON_ESTIMATED_DELIVERY';
    /**
     * Constant for value 'ON_EXCEPTION'
     * @return string 'ON_EXCEPTION'
     */
    const VALUE_ON_EXCEPTION = 'ON_EXCEPTION';
    /**
     * Constant for value 'ON_PICKUP_DRIVER_ARRIVED'
     * @return string 'ON_PICKUP_DRIVER_ARRIVED'
     */
    const VALUE_ON_PICKUP_DRIVER_ARRIVED = 'ON_PICKUP_DRIVER_ARRIVED';
    /**
     * Constant for value 'ON_PICKUP_DRIVER_ASSIGNED'
     * @return string 'ON_PICKUP_DRIVER_ASSIGNED'
     */
    const VALUE_ON_PICKUP_DRIVER_ASSIGNED = 'ON_PICKUP_DRIVER_ASSIGNED';
    /**
     * Constant for value 'ON_PICKUP_DRIVER_DEPARTED'
     * @return string 'ON_PICKUP_DRIVER_DEPARTED'
     */
    const VALUE_ON_PICKUP_DRIVER_DEPARTED = 'ON_PICKUP_DRIVER_DEPARTED';
    /**
     * Constant for value 'ON_PICKUP_DRIVER_EN_ROUTE'
     * @return string 'ON_PICKUP_DRIVER_EN_ROUTE'
     */
    const VALUE_ON_PICKUP_DRIVER_EN_ROUTE = 'ON_PICKUP_DRIVER_EN_ROUTE';
    /**
     * Constant for value 'ON_SHIPMENT'
     * @return string 'ON_SHIPMENT'
     */
    const VALUE_ON_SHIPMENT = 'ON_SHIPMENT';
    /**
     * Constant for value 'ON_TENDER'
     * @return string 'ON_TENDER'
     */
    const VALUE_ON_TENDER = 'ON_TENDER';
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
     * @uses self::VALUE_ON_DELIVERY
     * @uses self::VALUE_ON_ESTIMATED_DELIVERY
     * @uses self::VALUE_ON_EXCEPTION
     * @uses self::VALUE_ON_PICKUP_DRIVER_ARRIVED
     * @uses self::VALUE_ON_PICKUP_DRIVER_ASSIGNED
     * @uses self::VALUE_ON_PICKUP_DRIVER_DEPARTED
     * @uses self::VALUE_ON_PICKUP_DRIVER_EN_ROUTE
     * @uses self::VALUE_ON_SHIPMENT
     * @uses self::VALUE_ON_TENDER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ON_DELIVERY,
            self::VALUE_ON_ESTIMATED_DELIVERY,
            self::VALUE_ON_EXCEPTION,
            self::VALUE_ON_PICKUP_DRIVER_ARRIVED,
            self::VALUE_ON_PICKUP_DRIVER_ASSIGNED,
            self::VALUE_ON_PICKUP_DRIVER_DEPARTED,
            self::VALUE_ON_PICKUP_DRIVER_EN_ROUTE,
            self::VALUE_ON_SHIPMENT,
            self::VALUE_ON_TENDER,
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
