<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for LabelSpecificationProcessingOptionType Enums
 * @subpackage Enumerations
 */
class LabelSpecificationProcessingOptionType
{
    /**
     * Constant for value 'INCLUDE_DOC_TAB_ON_ALL_LABELS'
     * @return string 'INCLUDE_DOC_TAB_ON_ALL_LABELS'
     */
    const VALUE_INCLUDE_DOC_TAB_ON_ALL_LABELS = 'INCLUDE_DOC_TAB_ON_ALL_LABELS';
    /**
     * Constant for value 'PRE_EACI_LABEL'
     * @return string 'PRE_EACI_LABEL'
     */
    const VALUE_PRE_EACI_LABEL = 'PRE_EACI_LABEL';
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
     * @uses self::VALUE_INCLUDE_DOC_TAB_ON_ALL_LABELS
     * @uses self::VALUE_PRE_EACI_LABEL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INCLUDE_DOC_TAB_ON_ALL_LABELS,
            self::VALUE_PRE_EACI_LABEL,
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
