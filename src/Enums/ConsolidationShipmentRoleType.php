<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for ConsolidationShipmentRoleType Enums
 * @subpackage Enumerations
 */
class ConsolidationShipmentRoleType
{
    /**
     * Constant for value 'CONSOLIDATION_DOCUMENTS_SHIPMENT'
     * @return string 'CONSOLIDATION_DOCUMENTS_SHIPMENT'
     */
    const VALUE_CONSOLIDATION_DOCUMENTS_SHIPMENT = 'CONSOLIDATION_DOCUMENTS_SHIPMENT';
    /**
     * Constant for value 'CRN_SHIPMENT'
     * @return string 'CRN_SHIPMENT'
     */
    const VALUE_CRN_SHIPMENT = 'CRN_SHIPMENT';
    /**
     * Constant for value 'MASTER_AIRWAYBILL_SHIPMENT'
     * @return string 'MASTER_AIRWAYBILL_SHIPMENT'
     */
    const VALUE_MASTER_AIRWAYBILL_SHIPMENT = 'MASTER_AIRWAYBILL_SHIPMENT';
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
     * @uses self::VALUE_CONSOLIDATION_DOCUMENTS_SHIPMENT
     * @uses self::VALUE_CRN_SHIPMENT
     * @uses self::VALUE_MASTER_AIRWAYBILL_SHIPMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONSOLIDATION_DOCUMENTS_SHIPMENT,
            self::VALUE_CRN_SHIPMENT,
            self::VALUE_MASTER_AIRWAYBILL_SHIPMENT,
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
