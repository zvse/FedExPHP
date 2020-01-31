<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureReleaseDocumentDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the details needed to produce a door tag.
 * @subpackage Structs
 */
class SignatureReleaseDocumentDetail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - documentation: Common information controlling document production.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShippingDocumentFormat
     */
    public $Format;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * Constructor method for SignatureReleaseDocumentDetail
     * @uses SignatureReleaseDocumentDetail::setFormat()
     * @uses SignatureReleaseDocumentDetail::setId()
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocumentFormat $format
     * @param string $id
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\ShippingDocumentFormat $format = null, $id = null)
    {
        $this
            ->setFormat($format)
            ->setId($id);
    }
    /**
     * Get Format value
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentFormat|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocumentFormat $format
     * @return \CommerceFedEx\FedExPHP\Structs\SignatureReleaseDocumentDetail
     */
    public function setFormat(\CommerceFedEx\FedExPHP\Structs\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \CommerceFedEx\FedExPHP\Structs\SignatureReleaseDocumentDetail
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\SignatureReleaseDocumentDetail
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
