<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocTabContentBarcoded Structs
 * @subpackage Structs
 */
class DocTabContentBarcoded extends AbstractStructBase
{
    /**
     * The Specification
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\DocTabZoneSpecification
     */
    public $Specification;
    /**
     * The Symbology
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Symbology;
    /**
     * Constructor method for DocTabContentBarcoded
     * @uses DocTabContentBarcoded::setSpecification()
     * @uses DocTabContentBarcoded::setSymbology()
     * @param \CommerceFedEx\FedExPHP\Structs\DocTabZoneSpecification $specification
     * @param string $symbology
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\DocTabZoneSpecification $specification = null, $symbology = null)
    {
        $this
            ->setSpecification($specification)
            ->setSymbology($symbology);
    }
    /**
     * Get Specification value
     * @return \CommerceFedEx\FedExPHP\Structs\DocTabZoneSpecification
     */
    public function getSpecification()
    {
        return $this->Specification;
    }
    /**
     * Set Specification value
     * @param \CommerceFedEx\FedExPHP\Structs\DocTabZoneSpecification $specification
     * @return \CommerceFedEx\FedExPHP\Structs\DocTabContentBarcoded
     */
    public function setSpecification(\CommerceFedEx\FedExPHP\Structs\DocTabZoneSpecification $specification = null)
    {
        $this->Specification = $specification;
        return $this;
    }
    /**
     * Get Symbology value
     * @return string|null
     */
    public function getSymbology()
    {
        return $this->Symbology;
    }
    /**
     * Set Symbology value
     * @uses \CommerceFedEx\FedExPHP\Enums\BarcodeSymbologyType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\BarcodeSymbologyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $symbology
     * @return \CommerceFedEx\FedExPHP\Structs\DocTabContentBarcoded
     */
    public function setSymbology($symbology = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\BarcodeSymbologyType::valueIsValid($symbology)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $symbology, implode(', ', \CommerceFedEx\FedExPHP\Enums\BarcodeSymbologyType::getValidValues())), __LINE__);
        }
        $this->Symbology = $symbology;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\DocTabContentBarcoded
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
