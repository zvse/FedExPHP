<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsolidationDataSource Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the way in which aggregated data in a consolidation are to be determined.
 * @subpackage Structs
 */
class ConsolidationDataSource extends AbstractStructBase
{
    /**
     * The Field
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the field being specified.
     * - minOccurs: 0
     * @var string
     */
    public $Field;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - documentation: Identifies how the content of the field should be determined.
     * - minOccurs: 0
     * @var string
     */
    public $Source;
    /**
     * Constructor method for ConsolidationDataSource
     * @uses ConsolidationDataSource::setField()
     * @uses ConsolidationDataSource::setSource()
     * @param string $field
     * @param string $source
     */
    public function __construct($field = null, $source = null)
    {
        $this
            ->setField($field)
            ->setSource($source);
    }
    /**
     * Get Field value
     * @return string|null
     */
    public function getField()
    {
        return $this->Field;
    }
    /**
     * Set Field value
     * @uses \CommerceFedEx\FedExPHP\Enums\ConsolidationDataType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ConsolidationDataType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $field
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationDataSource
     */
    public function setField($field = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ConsolidationDataType::valueIsValid($field)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $field, implode(', ', \CommerceFedEx\FedExPHP\Enums\ConsolidationDataType::getValidValues())), __LINE__);
        }
        $this->Field = $field;
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @uses \CommerceFedEx\FedExPHP\Enums\ConsolidationDataSourceType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ConsolidationDataSourceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $source
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationDataSource
     */
    public function setSource($source = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ConsolidationDataSourceType::valueIsValid($source)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $source, implode(', ', \CommerceFedEx\FedExPHP\Enums\ConsolidationDataSourceType::getValidValues())), __LINE__);
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationDataSource
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
