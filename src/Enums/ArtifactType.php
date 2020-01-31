<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for ArtifactType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the type of artifact created.
 * @subpackage Enumerations
 */
class ArtifactType
{
    /**
     * Constant for value 'AUXILIARY_LABEL'
     * @return string 'AUXILIARY_LABEL'
     */
    const VALUE_AUXILIARY_LABEL = 'AUXILIARY_LABEL';
    /**
     * Constant for value 'CERTIFICATE_OF_ORIGIN'
     * @return string 'CERTIFICATE_OF_ORIGIN'
     */
    const VALUE_CERTIFICATE_OF_ORIGIN = 'CERTIFICATE_OF_ORIGIN';
    /**
     * Constant for value 'COD_RETURN_LABEL'
     * @return string 'COD_RETURN_LABEL'
     */
    const VALUE_COD_RETURN_LABEL = 'COD_RETURN_LABEL';
    /**
     * Constant for value 'COMMERCIAL_INVOICE'
     * @return string 'COMMERCIAL_INVOICE'
     */
    const VALUE_COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
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
     * Constant for value 'CUSTOM_PACKAGE_DOCUMENT'
     * @return string 'CUSTOM_PACKAGE_DOCUMENT'
     */
    const VALUE_CUSTOM_PACKAGE_DOCUMENT = 'CUSTOM_PACKAGE_DOCUMENT';
    /**
     * Constant for value 'CUSTOM_SHIPMENT_DOCUMENT'
     * @return string 'CUSTOM_SHIPMENT_DOCUMENT'
     */
    const VALUE_CUSTOM_SHIPMENT_DOCUMENT = 'CUSTOM_SHIPMENT_DOCUMENT';
    /**
     * Constant for value 'DANGEROUS_GOODS_SHIPPERS_DECLARATION'
     * @return string 'DANGEROUS_GOODS_SHIPPERS_DECLARATION'
     */
    const VALUE_DANGEROUS_GOODS_SHIPPERS_DECLARATION = 'DANGEROUS_GOODS_SHIPPERS_DECLARATION';
    /**
     * Constant for value 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL'
     * @return string 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL'
     */
    const VALUE_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL = 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL';
    /**
     * Constant for value 'FREIGHT_ADDRESS_LABEL'
     * @return string 'FREIGHT_ADDRESS_LABEL'
     */
    const VALUE_FREIGHT_ADDRESS_LABEL = 'FREIGHT_ADDRESS_LABEL';
    /**
     * Constant for value 'GENERAL_AGENCY_AGREEMENT'
     * @return string 'GENERAL_AGENCY_AGREEMENT'
     */
    const VALUE_GENERAL_AGENCY_AGREEMENT = 'GENERAL_AGENCY_AGREEMENT';
    /**
     * Constant for value 'LOW_CUSTOMS_VALUE_EXCEPTION_PARTY_REPORT'
     * @return string 'LOW_CUSTOMS_VALUE_EXCEPTION_PARTY_REPORT'
     */
    const VALUE_LOW_CUSTOMS_VALUE_EXCEPTION_PARTY_REPORT = 'LOW_CUSTOMS_VALUE_EXCEPTION_PARTY_REPORT';
    /**
     * Constant for value 'NAFTA_CERTIFICATE_OF_ORIGIN'
     * @return string 'NAFTA_CERTIFICATE_OF_ORIGIN'
     */
    const VALUE_NAFTA_CERTIFICATE_OF_ORIGIN = 'NAFTA_CERTIFICATE_OF_ORIGIN';
    /**
     * Constant for value 'OP_900'
     * @return string 'OP_900'
     */
    const VALUE_OP_900 = 'OP_900';
    /**
     * Constant for value 'OUTBOUND_LABEL'
     * @return string 'OUTBOUND_LABEL'
     */
    const VALUE_OUTBOUND_LABEL = 'OUTBOUND_LABEL';
    /**
     * Constant for value 'PRO_FORMA_INVOICE'
     * @return string 'PRO_FORMA_INVOICE'
     */
    const VALUE_PRO_FORMA_INVOICE = 'PRO_FORMA_INVOICE';
    /**
     * Constant for value 'RETURN_INSTRUCTIONS'
     * @return string 'RETURN_INSTRUCTIONS'
     */
    const VALUE_RETURN_INSTRUCTIONS = 'RETURN_INSTRUCTIONS';
    /**
     * Constant for value 'SERVICE_REPLY'
     * @return string 'SERVICE_REPLY'
     */
    const VALUE_SERVICE_REPLY = 'SERVICE_REPLY';
    /**
     * Constant for value 'SERVICE_REQUEST'
     * @return string 'SERVICE_REQUEST'
     */
    const VALUE_SERVICE_REQUEST = 'SERVICE_REQUEST';
    /**
     * Constant for value 'STANDARD_BROKER_CLEARANCE_PARTY_REPORT'
     * @return string 'STANDARD_BROKER_CLEARANCE_PARTY_REPORT'
     */
    const VALUE_STANDARD_BROKER_CLEARANCE_PARTY_REPORT = 'STANDARD_BROKER_CLEARANCE_PARTY_REPORT';
    /**
     * Constant for value 'TERMS_AND_CONDITIONS'
     * @return string 'TERMS_AND_CONDITIONS'
     */
    const VALUE_TERMS_AND_CONDITIONS = 'TERMS_AND_CONDITIONS';
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
     * @uses self::VALUE_AUXILIARY_LABEL
     * @uses self::VALUE_CERTIFICATE_OF_ORIGIN
     * @uses self::VALUE_COD_RETURN_LABEL
     * @uses self::VALUE_COMMERCIAL_INVOICE
     * @uses self::VALUE_COMMODITIES_BY_TRACKING_NUMBER_REPORT
     * @uses self::VALUE_CONDENSED_CRN_REPORT
     * @uses self::VALUE_CONSOLIDATED_COMMERCIAL_INVOICE
     * @uses self::VALUE_CONSOLIDATED_CUSTOMS_LINEHAUL_REPORT
     * @uses self::VALUE_CONSOLIDATED_SOLD_TO_SUMMARY_REPORT
     * @uses self::VALUE_CRN_REPORT
     * @uses self::VALUE_CUSTOMS_PACKING_LIST
     * @uses self::VALUE_CUSTOM_CONSOLIDATION_DOCUMENT
     * @uses self::VALUE_CUSTOM_PACKAGE_DOCUMENT
     * @uses self::VALUE_CUSTOM_SHIPMENT_DOCUMENT
     * @uses self::VALUE_DANGEROUS_GOODS_SHIPPERS_DECLARATION
     * @uses self::VALUE_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL
     * @uses self::VALUE_FREIGHT_ADDRESS_LABEL
     * @uses self::VALUE_GENERAL_AGENCY_AGREEMENT
     * @uses self::VALUE_LOW_CUSTOMS_VALUE_EXCEPTION_PARTY_REPORT
     * @uses self::VALUE_NAFTA_CERTIFICATE_OF_ORIGIN
     * @uses self::VALUE_OP_900
     * @uses self::VALUE_OUTBOUND_LABEL
     * @uses self::VALUE_PRO_FORMA_INVOICE
     * @uses self::VALUE_RETURN_INSTRUCTIONS
     * @uses self::VALUE_SERVICE_REPLY
     * @uses self::VALUE_SERVICE_REQUEST
     * @uses self::VALUE_STANDARD_BROKER_CLEARANCE_PARTY_REPORT
     * @uses self::VALUE_TERMS_AND_CONDITIONS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AUXILIARY_LABEL,
            self::VALUE_CERTIFICATE_OF_ORIGIN,
            self::VALUE_COD_RETURN_LABEL,
            self::VALUE_COMMERCIAL_INVOICE,
            self::VALUE_COMMODITIES_BY_TRACKING_NUMBER_REPORT,
            self::VALUE_CONDENSED_CRN_REPORT,
            self::VALUE_CONSOLIDATED_COMMERCIAL_INVOICE,
            self::VALUE_CONSOLIDATED_CUSTOMS_LINEHAUL_REPORT,
            self::VALUE_CONSOLIDATED_SOLD_TO_SUMMARY_REPORT,
            self::VALUE_CRN_REPORT,
            self::VALUE_CUSTOMS_PACKING_LIST,
            self::VALUE_CUSTOM_CONSOLIDATION_DOCUMENT,
            self::VALUE_CUSTOM_PACKAGE_DOCUMENT,
            self::VALUE_CUSTOM_SHIPMENT_DOCUMENT,
            self::VALUE_DANGEROUS_GOODS_SHIPPERS_DECLARATION,
            self::VALUE_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL,
            self::VALUE_FREIGHT_ADDRESS_LABEL,
            self::VALUE_GENERAL_AGENCY_AGREEMENT,
            self::VALUE_LOW_CUSTOMS_VALUE_EXCEPTION_PARTY_REPORT,
            self::VALUE_NAFTA_CERTIFICATE_OF_ORIGIN,
            self::VALUE_OP_900,
            self::VALUE_OUTBOUND_LABEL,
            self::VALUE_PRO_FORMA_INVOICE,
            self::VALUE_RETURN_INSTRUCTIONS,
            self::VALUE_SERVICE_REPLY,
            self::VALUE_SERVICE_REQUEST,
            self::VALUE_STANDARD_BROKER_CLEARANCE_PARTY_REPORT,
            self::VALUE_TERMS_AND_CONDITIONS,
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
