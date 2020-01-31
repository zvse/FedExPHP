<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManifestDetail Structs
 * @subpackage Structs
 */
class ManifestDetail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat
     */
    public $Format;
    /**
     * Constructor method for ManifestDetail
     * @uses ManifestDetail::setFormat()
     * @param \CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat $format
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat $format = null)
    {
        $this
            ->setFormat($format);
    }
    /**
     * Get Format value
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @param \CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat $format
     * @return \CommerceFedEx\FedExPHP\Structs\ManifestDetail
     */
    public function setFormat(\CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ManifestDetail
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
