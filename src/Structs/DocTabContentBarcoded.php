<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocTabContentBarcoded Structs
 * @subpackage Structs
 */
class DocTabContentBarcoded extends AbstractStructBase
{
    /**
     * The Symbology
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Symbology;
    /**
     * The Specification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DocTabZoneSpecification
     */
    public $Specification;
    /**
     * Constructor method for DocTabContentBarcoded
     * @uses DocTabContentBarcoded::setSymbology()
     * @uses DocTabContentBarcoded::setSpecification()
     * @param string $symbology
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DocTabZoneSpecification $specification
     */
    public function __construct($symbology = null, \NicholasCreativeMedia\FedExPHP\Structs\DocTabZoneSpecification $specification = null)
    {
        $this
            ->setSymbology($symbology)
            ->setSpecification($specification);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\BarcodeSymbologyType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\BarcodeSymbologyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $symbology
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DocTabContentBarcoded
     */
    public function setSymbology($symbology = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\BarcodeSymbologyType::valueIsValid($symbology)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $symbology, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\BarcodeSymbologyType::getValidValues())), __LINE__);
        }
        $this->Symbology = $symbology;
        return $this;
    }
    /**
     * Get Specification value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DocTabZoneSpecification|null
     */
    public function getSpecification()
    {
        return $this->Specification;
    }
    /**
     * Set Specification value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DocTabZoneSpecification $specification
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DocTabContentBarcoded
     */
    public function setSpecification(\NicholasCreativeMedia\FedExPHP\Structs\DocTabZoneSpecification $specification = null)
    {
        $this->Specification = $specification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DocTabContentBarcoded
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
