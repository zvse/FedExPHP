<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for AssociatedTrackingIdType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies a relationship between two tracking IDs (the role of the "other" tracking ID relative to "this" tracking ID).
 * @subpackage Enumerations
 */
class AssociatedTrackingIdType
{
    /**
     * Constant for value 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN'
     * @return string 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN'
     */
    const VALUE_COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN = 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN';
    /**
     * Constant for value 'COD_RETURN'
     * @return string 'COD_RETURN'
     */
    const VALUE_COD_RETURN = 'COD_RETURN';
    /**
     * Constant for value 'CONSOLIDATION_DOCUMENTS'
     * @return string 'CONSOLIDATION_DOCUMENTS'
     */
    const VALUE_CONSOLIDATION_DOCUMENTS = 'CONSOLIDATION_DOCUMENTS';
    /**
     * Constant for value 'CONSOLIDATION_MASTER'
     * @return string 'CONSOLIDATION_MASTER'
     */
    const VALUE_CONSOLIDATION_MASTER = 'CONSOLIDATION_MASTER';
    /**
     * Constant for value 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN'
     * @return string 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN'
     */
    const VALUE_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN = 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN';
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
     * @uses self::VALUE_COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN
     * @uses self::VALUE_COD_RETURN
     * @uses self::VALUE_CONSOLIDATION_DOCUMENTS
     * @uses self::VALUE_CONSOLIDATION_MASTER
     * @uses self::VALUE_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN,
            self::VALUE_COD_RETURN,
            self::VALUE_CONSOLIDATION_DOCUMENTS,
            self::VALUE_CONSOLIDATION_MASTER,
            self::VALUE_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN,
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
