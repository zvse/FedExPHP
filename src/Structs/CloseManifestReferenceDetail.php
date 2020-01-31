<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseManifestReferenceDetail Structs
 * @subpackage Structs
 */
class CloseManifestReferenceDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: This identifies which customer reference field used as the manifest ID.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * Constructor method for CloseManifestReferenceDetail
     * @uses CloseManifestReferenceDetail::setType()
     * @uses CloseManifestReferenceDetail::setValue()
     * @param string $type
     * @param string $value
     */
    public function __construct($type = null, $value = null)
    {
        $this
            ->setType($type)
            ->setValue($value);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \CommerceFedEx\FedExPHP\Enums\CustomerReferenceType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CustomerReferenceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \CommerceFedEx\FedExPHP\Structs\CloseManifestReferenceDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CustomerReferenceType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \CommerceFedEx\FedExPHP\Enums\CustomerReferenceType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \CommerceFedEx\FedExPHP\Structs\CloseManifestReferenceDetail
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CloseManifestReferenceDetail
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
