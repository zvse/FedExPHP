<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for ReturnedConsolidationDocumentType Enums
 * @subpackage Enumerations
 */
class ReturnedConsolidationDocumentType
{
    /**
     * Constant for value 'COMMODITIES_BY_TRACKING_NUMBER_REPORT'
     * @return string 'COMMODITIES_BY_TRACKING_NUMBER_REPORT'
     */
    const VALUE_COMMODITIES_BY_TRACKING_NUMBER_REPORT = 'COMMODITIES_BY_TRACKING_NUMBER_REPORT';
    /**
     * Constant for value 'CONDENSED_CRN_REPORT'
     * @return string 'CONDENSED_CRN_REPORT'
     */
    const VALUE_CONDENSED_CRN_REPORT = 'CONDENSED_CRN_REPORT';
    /**
     * Constant for value 'CONSOLIDATED_COMMERCIAL_INVOICE'
     * @return string 'CONSOLIDATED_COMMERCIAL_INVOICE'
     */
    const VALUE_CONSOLIDATED_COMMERCIAL_INVOICE = 'CONSOLIDATED_COMMERCIAL_INVOICE';
    /**
     * Constant for value 'CONSOLIDATED_CUSTOMS_LINEHAUL_REPORT'
     * @return string 'CONSOLIDATED_CUSTOMS_LINEHAUL_REPORT'
     */
    const VALUE_CONSOLIDATED_CUSTOMS_LINEHAUL_REPORT = 'CONSOLIDATED_CUSTOMS_LINEHAUL_REPORT';
    /**
     * Constant for value 'CONSOLIDATED_SOLD_TO_SUMMARY_REPORT'
     * @return string 'CONSOLIDATED_SOLD_TO_SUMMARY_REPORT'
     */
    const VALUE_CONSOLIDATED_SOLD_TO_SUMMARY_REPORT = 'CONSOLIDATED_SOLD_TO_SUMMARY_REPORT';
    /**
     * Constant for value 'CRN_REPORT'
     * @return string 'CRN_REPORT'
     */
    const VALUE_CRN_REPORT = 'CRN_REPORT';
    /**
     * Constant for value 'CUSTOMS_PACKING_LIST'
     * @return string 'CUSTOMS_PACKING_LIST'
     */
    const VALUE_CUSTOMS_PACKING_LIST = 'CUSTOMS_PACKING_LIST';
    /**
     * Constant for value 'CUSTOM_CONSOLIDATION_DOCUMENT'
     * @return string 'CUSTOM_CONSOLIDATION_DOCUMENT'
     */
    const VALUE_CUSTOM_CONSOLIDATION_DOCUMENT = 'CUSTOM_CONSOLIDATION_DOCUMENT';
    /**
     * Constant for value 'LOW_CUSTOMS_VALUE_EXCEPTION_PARTY_REPORT'
     * @return string 'LOW_CUSTOMS_VALUE_EXCEPTION_PARTY_REPORT'
     */
    const VALUE_LOW_CUSTOMS_VALUE_EXCEPTION_PARTY_REPORT = 'LOW_CUSTOMS_VALUE_EXCEPTION_PARTY_REPORT';
    /**
     * Constant for value 'STANDARD_BROKER_CLEARANCE_PARTY_REPORT'
     * @return string 'STANDARD_BROKER_CLEARANCE_PARTY_REPORT'
     */
    const VALUE_STANDARD_BROKER_CLEARANCE_PARTY_REPORT = 'STANDARD_BROKER_CLEARANCE_PARTY_REPORT';
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
     * @uses self::VALUE_COMMODITIES_BY_TRACKING_NUMBER_REPORT
     * @uses self::VALUE_CONDENSED_CRN_REPORT
     * @uses self::VALUE_CONSOLIDATED_COMMERCIAL_INVOICE
     * @uses self::VALUE_CONSOLIDATED_CUSTOMS_LINEHAUL_REPORT
     * @uses self::VALUE_CONSOLIDATED_SOLD_TO_SUMMARY_REPORT
     * @uses self::VALUE_CRN_REPORT
     * @uses self::VALUE_CUSTOMS_PACKING_LIST
     * @uses self::VALUE_CUSTOM_CONSOLIDATION_DOCUMENT
     * @uses self::VALUE_LOW_CUSTOMS_VALUE_EXCEPTION_PARTY_REPORT
     * @uses self::VALUE_STANDARD_BROKER_CLEARANCE_PARTY_REPORT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COMMODITIES_BY_TRACKING_NUMBER_REPORT,
            self::VALUE_CONDENSED_CRN_REPORT,
            self::VALUE_CONSOLIDATED_COMMERCIAL_INVOICE,
            self::VALUE_CONSOLIDATED_CUSTOMS_LINEHAUL_REPORT,
            self::VALUE_CONSOLIDATED_SOLD_TO_SUMMARY_REPORT,
            self::VALUE_CRN_REPORT,
            self::VALUE_CUSTOMS_PACKING_LIST,
            self::VALUE_CUSTOM_CONSOLIDATION_DOCUMENT,
            self::VALUE_LOW_CUSTOMS_VALUE_EXCEPTION_PARTY_REPORT,
            self::VALUE_STANDARD_BROKER_CLEARANCE_PARTY_REPORT,
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
