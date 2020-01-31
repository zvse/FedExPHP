<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for LocationAttributesType Enums
 * @subpackage Enumerations
 */
class LocationAttributesType
{
    /**
     * Constant for value 'ACCEPTS_CASH'
     * @return string 'ACCEPTS_CASH'
     */
    const VALUE_ACCEPTS_CASH = 'ACCEPTS_CASH';
    /**
     * Constant for value 'ALREADY_OPEN'
     * @return string 'ALREADY_OPEN'
     */
    const VALUE_ALREADY_OPEN = 'ALREADY_OPEN';
    /**
     * Constant for value 'CLEARANCE_SERVICES'
     * @return string 'CLEARANCE_SERVICES'
     */
    const VALUE_CLEARANCE_SERVICES = 'CLEARANCE_SERVICES';
    /**
     * Constant for value 'COPY_AND_PRINT_SERVICES'
     * @return string 'COPY_AND_PRINT_SERVICES'
     */
    const VALUE_COPY_AND_PRINT_SERVICES = 'COPY_AND_PRINT_SERVICES';
    /**
     * Constant for value 'DANGEROUS_GOODS_SERVICES'
     * @return string 'DANGEROUS_GOODS_SERVICES'
     */
    const VALUE_DANGEROUS_GOODS_SERVICES = 'DANGEROUS_GOODS_SERVICES';
    /**
     * Constant for value 'DIRECT_MAIL_SERVICES'
     * @return string 'DIRECT_MAIL_SERVICES'
     */
    const VALUE_DIRECT_MAIL_SERVICES = 'DIRECT_MAIL_SERVICES';
    /**
     * Constant for value 'DOMESTIC_SHIPPING_SERVICES'
     * @return string 'DOMESTIC_SHIPPING_SERVICES'
     */
    const VALUE_DOMESTIC_SHIPPING_SERVICES = 'DOMESTIC_SHIPPING_SERVICES';
    /**
     * Constant for value 'DROP_BOX'
     * @return string 'DROP_BOX'
     */
    const VALUE_DROP_BOX = 'DROP_BOX';
    /**
     * Constant for value 'INTERNATIONAL_SHIPPING_SERVICES'
     * @return string 'INTERNATIONAL_SHIPPING_SERVICES'
     */
    const VALUE_INTERNATIONAL_SHIPPING_SERVICES = 'INTERNATIONAL_SHIPPING_SERVICES';
    /**
     * Constant for value 'LOCATION_IS_IN_AIRPORT'
     * @return string 'LOCATION_IS_IN_AIRPORT'
     */
    const VALUE_LOCATION_IS_IN_AIRPORT = 'LOCATION_IS_IN_AIRPORT';
    /**
     * Constant for value 'NOTARY_SERVICES'
     * @return string 'NOTARY_SERVICES'
     */
    const VALUE_NOTARY_SERVICES = 'NOTARY_SERVICES';
    /**
     * Constant for value 'OBSERVES_DAY_LIGHT_SAVING_TIMES'
     * @return string 'OBSERVES_DAY_LIGHT_SAVING_TIMES'
     */
    const VALUE_OBSERVES_DAY_LIGHT_SAVING_TIMES = 'OBSERVES_DAY_LIGHT_SAVING_TIMES';
    /**
     * Constant for value 'OPEN_TWENTY_FOUR_HOURS'
     * @return string 'OPEN_TWENTY_FOUR_HOURS'
     */
    const VALUE_OPEN_TWENTY_FOUR_HOURS = 'OPEN_TWENTY_FOUR_HOURS';
    /**
     * Constant for value 'PACKAGING_SUPPLIES'
     * @return string 'PACKAGING_SUPPLIES'
     */
    const VALUE_PACKAGING_SUPPLIES = 'PACKAGING_SUPPLIES';
    /**
     * Constant for value 'PACK_AND_SHIP'
     * @return string 'PACK_AND_SHIP'
     */
    const VALUE_PACK_AND_SHIP = 'PACK_AND_SHIP';
    /**
     * Constant for value 'PASSPORT_PHOTO_SERVICES'
     * @return string 'PASSPORT_PHOTO_SERVICES'
     */
    const VALUE_PASSPORT_PHOTO_SERVICES = 'PASSPORT_PHOTO_SERVICES';
    /**
     * Constant for value 'RETURNS_SERVICES'
     * @return string 'RETURNS_SERVICES'
     */
    const VALUE_RETURNS_SERVICES = 'RETURNS_SERVICES';
    /**
     * Constant for value 'SIGNS_AND_BANNERS_SERVICE'
     * @return string 'SIGNS_AND_BANNERS_SERVICE'
     */
    const VALUE_SIGNS_AND_BANNERS_SERVICE = 'SIGNS_AND_BANNERS_SERVICE';
    /**
     * Constant for value 'SONY_PICTURE_STATION'
     * @return string 'SONY_PICTURE_STATION'
     */
    const VALUE_SONY_PICTURE_STATION = 'SONY_PICTURE_STATION';
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
     * @uses self::VALUE_ACCEPTS_CASH
     * @uses self::VALUE_ALREADY_OPEN
     * @uses self::VALUE_CLEARANCE_SERVICES
     * @uses self::VALUE_COPY_AND_PRINT_SERVICES
     * @uses self::VALUE_DANGEROUS_GOODS_SERVICES
     * @uses self::VALUE_DIRECT_MAIL_SERVICES
     * @uses self::VALUE_DOMESTIC_SHIPPING_SERVICES
     * @uses self::VALUE_DROP_BOX
     * @uses self::VALUE_INTERNATIONAL_SHIPPING_SERVICES
     * @uses self::VALUE_LOCATION_IS_IN_AIRPORT
     * @uses self::VALUE_NOTARY_SERVICES
     * @uses self::VALUE_OBSERVES_DAY_LIGHT_SAVING_TIMES
     * @uses self::VALUE_OPEN_TWENTY_FOUR_HOURS
     * @uses self::VALUE_PACKAGING_SUPPLIES
     * @uses self::VALUE_PACK_AND_SHIP
     * @uses self::VALUE_PASSPORT_PHOTO_SERVICES
     * @uses self::VALUE_RETURNS_SERVICES
     * @uses self::VALUE_SIGNS_AND_BANNERS_SERVICE
     * @uses self::VALUE_SONY_PICTURE_STATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACCEPTS_CASH,
            self::VALUE_ALREADY_OPEN,
            self::VALUE_CLEARANCE_SERVICES,
            self::VALUE_COPY_AND_PRINT_SERVICES,
            self::VALUE_DANGEROUS_GOODS_SERVICES,
            self::VALUE_DIRECT_MAIL_SERVICES,
            self::VALUE_DOMESTIC_SHIPPING_SERVICES,
            self::VALUE_DROP_BOX,
            self::VALUE_INTERNATIONAL_SHIPPING_SERVICES,
            self::VALUE_LOCATION_IS_IN_AIRPORT,
            self::VALUE_NOTARY_SERVICES,
            self::VALUE_OBSERVES_DAY_LIGHT_SAVING_TIMES,
            self::VALUE_OPEN_TWENTY_FOUR_HOURS,
            self::VALUE_PACKAGING_SUPPLIES,
            self::VALUE_PACK_AND_SHIP,
            self::VALUE_PASSPORT_PHOTO_SERVICES,
            self::VALUE_RETURNS_SERVICES,
            self::VALUE_SIGNS_AND_BANNERS_SERVICE,
            self::VALUE_SONY_PICTURE_STATION,
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
