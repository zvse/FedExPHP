<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for ShipmentProcessingOptionType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identifies special or custom features to be applied to a shipment.
 * @subpackage Enumerations
 */
class ShipmentProcessingOptionType
{
    /**
     * Constant for value 'ALLOW_PREVIOUS_SHIP_DATE'
     * @return string 'ALLOW_PREVIOUS_SHIP_DATE'
     */
    const VALUE_ALLOW_PREVIOUS_SHIP_DATE = 'ALLOW_PREVIOUS_SHIP_DATE';
    /**
     * Constant for value 'BYPASS_CLEARANCE_PROHIBITS'
     * @return string 'BYPASS_CLEARANCE_PROHIBITS'
     */
    const VALUE_BYPASS_CLEARANCE_PROHIBITS = 'BYPASS_CLEARANCE_PROHIBITS';
    /**
     * Constant for value 'CONVENIENCE_MULTIPLE_PACKAGES'
     * @return string 'CONVENIENCE_MULTIPLE_PACKAGES'
     */
    const VALUE_CONVENIENCE_MULTIPLE_PACKAGES = 'CONVENIENCE_MULTIPLE_PACKAGES';
    /**
     * Constant for value 'CUSTOM_TRANSIT_TIME'
     * @return string 'CUSTOM_TRANSIT_TIME'
     */
    const VALUE_CUSTOM_TRANSIT_TIME = 'CUSTOM_TRANSIT_TIME';
    /**
     * Constant for value 'FUTURE_DAY_SHIPMENT'
     * @return string 'FUTURE_DAY_SHIPMENT'
     */
    const VALUE_FUTURE_DAY_SHIPMENT = 'FUTURE_DAY_SHIPMENT';
    /**
     * Constant for value 'IATA_CLASS_AND_AIRCRAFT_ONLY'
     * @return string 'IATA_CLASS_AND_AIRCRAFT_ONLY'
     */
    const VALUE_IATA_CLASS_AND_AIRCRAFT_ONLY = 'IATA_CLASS_AND_AIRCRAFT_ONLY';
    /**
     * Constant for value 'MANUAL_AIRBILL'
     * @return string 'MANUAL_AIRBILL'
     */
    const VALUE_MANUAL_AIRBILL = 'MANUAL_AIRBILL';
    /**
     * Constant for value 'NO_COMMITMENT_DATE_REQUESTED'
     * @return string 'NO_COMMITMENT_DATE_REQUESTED'
     */
    const VALUE_NO_COMMITMENT_DATE_REQUESTED = 'NO_COMMITMENT_DATE_REQUESTED';
    /**
     * Constant for value 'PACKAGE_LEVEL_COMMODITIES'
     * @return string 'PACKAGE_LEVEL_COMMODITIES'
     */
    const VALUE_PACKAGE_LEVEL_COMMODITIES = 'PACKAGE_LEVEL_COMMODITIES';
    /**
     * Constant for value 'PRE_EIG_PROCESSING'
     * @return string 'PRE_EIG_PROCESSING'
     */
    const VALUE_PRE_EIG_PROCESSING = 'PRE_EIG_PROCESSING';
    /**
     * Constant for value 'PRE_ETD_ENHANCEMENTS'
     * @return string 'PRE_ETD_ENHANCEMENTS'
     */
    const VALUE_PRE_ETD_ENHANCEMENTS = 'PRE_ETD_ENHANCEMENTS';
    /**
     * Constant for value 'PRE_FXF2020_HANDLING_UNIT_DETAILS'
     * @return string 'PRE_FXF2020_HANDLING_UNIT_DETAILS'
     */
    const VALUE_PRE_FXF_2020_HANDLING_UNIT_DETAILS = 'PRE_FXF2020_HANDLING_UNIT_DETAILS';
    /**
     * Constant for value 'PRE_GPR'
     * @return string 'PRE_GPR'
     */
    const VALUE_PRE_GPR = 'PRE_GPR';
    /**
     * Constant for value 'PRE_GRAPE2_SHIPMENT'
     * @return string 'PRE_GRAPE2_SHIPMENT'
     */
    const VALUE_PRE_GRAPE_2_SHIPMENT = 'PRE_GRAPE2_SHIPMENT';
    /**
     * Constant for value 'PRE_MULTIPLIER_PROCESSING'
     * @return string 'PRE_MULTIPLIER_PROCESSING'
     */
    const VALUE_PRE_MULTIPLIER_PROCESSING = 'PRE_MULTIPLIER_PROCESSING';
    /**
     * Constant for value 'REQUEST_LEGACY_SMARTPOST_LABEL'
     * @return string 'REQUEST_LEGACY_SMARTPOST_LABEL'
     */
    const VALUE_REQUEST_LEGACY_SMARTPOST_LABEL = 'REQUEST_LEGACY_SMARTPOST_LABEL';
    /**
     * Constant for value 'REQUIRE_PRE_EPIC_BARCODE'
     * @return string 'REQUIRE_PRE_EPIC_BARCODE'
     */
    const VALUE_REQUIRE_PRE_EPIC_BARCODE = 'REQUIRE_PRE_EPIC_BARCODE';
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
     * @uses self::VALUE_ALLOW_PREVIOUS_SHIP_DATE
     * @uses self::VALUE_BYPASS_CLEARANCE_PROHIBITS
     * @uses self::VALUE_CONVENIENCE_MULTIPLE_PACKAGES
     * @uses self::VALUE_CUSTOM_TRANSIT_TIME
     * @uses self::VALUE_FUTURE_DAY_SHIPMENT
     * @uses self::VALUE_IATA_CLASS_AND_AIRCRAFT_ONLY
     * @uses self::VALUE_MANUAL_AIRBILL
     * @uses self::VALUE_NO_COMMITMENT_DATE_REQUESTED
     * @uses self::VALUE_PACKAGE_LEVEL_COMMODITIES
     * @uses self::VALUE_PRE_EIG_PROCESSING
     * @uses self::VALUE_PRE_ETD_ENHANCEMENTS
     * @uses self::VALUE_PRE_FXF_2020_HANDLING_UNIT_DETAILS
     * @uses self::VALUE_PRE_GPR
     * @uses self::VALUE_PRE_GRAPE_2_SHIPMENT
     * @uses self::VALUE_PRE_MULTIPLIER_PROCESSING
     * @uses self::VALUE_REQUEST_LEGACY_SMARTPOST_LABEL
     * @uses self::VALUE_REQUIRE_PRE_EPIC_BARCODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALLOW_PREVIOUS_SHIP_DATE,
            self::VALUE_BYPASS_CLEARANCE_PROHIBITS,
            self::VALUE_CONVENIENCE_MULTIPLE_PACKAGES,
            self::VALUE_CUSTOM_TRANSIT_TIME,
            self::VALUE_FUTURE_DAY_SHIPMENT,
            self::VALUE_IATA_CLASS_AND_AIRCRAFT_ONLY,
            self::VALUE_MANUAL_AIRBILL,
            self::VALUE_NO_COMMITMENT_DATE_REQUESTED,
            self::VALUE_PACKAGE_LEVEL_COMMODITIES,
            self::VALUE_PRE_EIG_PROCESSING,
            self::VALUE_PRE_ETD_ENHANCEMENTS,
            self::VALUE_PRE_FXF_2020_HANDLING_UNIT_DETAILS,
            self::VALUE_PRE_GPR,
            self::VALUE_PRE_GRAPE_2_SHIPMENT,
            self::VALUE_PRE_MULTIPLIER_PROCESSING,
            self::VALUE_REQUEST_LEGACY_SMARTPOST_LABEL,
            self::VALUE_REQUIRE_PRE_EPIC_BARCODE,
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
