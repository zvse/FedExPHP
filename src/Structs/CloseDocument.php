<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseDocument Structs
 * @subpackage Structs
 */
class CloseDocument extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The ShippingCycle
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the shipping cycle covered by the content of this document.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCycle;
    /**
     * The ShippingDocumentDisposition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippingDocumentDisposition;
    /**
     * The AccessReference
     * Meta informations extracted from the WSDL
     * - documentation: The name under which a STORED or DEFERRED document is written.
     * - minOccurs: 0
     * @var string
     */
    public $AccessReference;
    /**
     * The Resolution
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the image resolution in DPI (dots per inch).
     * - minOccurs: 0
     * @var int
     */
    public $Resolution;
    /**
     * The CopiesToPrint
     * Meta informations extracted from the WSDL
     * - documentation: Can be zero for documents whose disposition implies that no content is included.
     * - minOccurs: 0
     * @var int
     */
    public $CopiesToPrint;
    /**
     * The Parts
     * Meta informations extracted from the WSDL
     * - documentation: One or more document parts which make up a single logical document, such as multiple pages of a single form.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShippingDocumentPart[]
     */
    public $Parts;
    /**
     * Constructor method for CloseDocument
     * @uses CloseDocument::setType()
     * @uses CloseDocument::setShippingCycle()
     * @uses CloseDocument::setShippingDocumentDisposition()
     * @uses CloseDocument::setAccessReference()
     * @uses CloseDocument::setResolution()
     * @uses CloseDocument::setCopiesToPrint()
     * @uses CloseDocument::setParts()
     * @param string $type
     * @param string $shippingCycle
     * @param string $shippingDocumentDisposition
     * @param string $accessReference
     * @param int $resolution
     * @param int $copiesToPrint
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocumentPart[] $parts
     */
    public function __construct($type = null, $shippingCycle = null, $shippingDocumentDisposition = null, $accessReference = null, $resolution = null, $copiesToPrint = null, array $parts = array())
    {
        $this
            ->setType($type)
            ->setShippingCycle($shippingCycle)
            ->setShippingDocumentDisposition($shippingDocumentDisposition)
            ->setAccessReference($accessReference)
            ->setResolution($resolution)
            ->setCopiesToPrint($copiesToPrint)
            ->setParts($parts);
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
     * @uses \CommerceFedEx\FedExPHP\Enums\CloseDocumentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CloseDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocument
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CloseDocumentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \CommerceFedEx\FedExPHP\Enums\CloseDocumentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ShippingCycle value
     * @return string|null
     */
    public function getShippingCycle()
    {
        return $this->ShippingCycle;
    }
    /**
     * Set ShippingCycle value
     * @param string $shippingCycle
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocument
     */
    public function setShippingCycle($shippingCycle = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCycle) && !is_string($shippingCycle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingCycle)), __LINE__);
        }
        $this->ShippingCycle = $shippingCycle;
        return $this;
    }
    /**
     * Get ShippingDocumentDisposition value
     * @return string|null
     */
    public function getShippingDocumentDisposition()
    {
        return $this->ShippingDocumentDisposition;
    }
    /**
     * Set ShippingDocumentDisposition value
     * @uses \CommerceFedEx\FedExPHP\Enums\ShippingDocumentDispositionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ShippingDocumentDispositionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingDocumentDisposition
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocument
     */
    public function setShippingDocumentDisposition($shippingDocumentDisposition = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ShippingDocumentDispositionType::valueIsValid($shippingDocumentDisposition)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shippingDocumentDisposition, implode(', ', \CommerceFedEx\FedExPHP\Enums\ShippingDocumentDispositionType::getValidValues())), __LINE__);
        }
        $this->ShippingDocumentDisposition = $shippingDocumentDisposition;
        return $this;
    }
    /**
     * Get AccessReference value
     * @return string|null
     */
    public function getAccessReference()
    {
        return $this->AccessReference;
    }
    /**
     * Set AccessReference value
     * @param string $accessReference
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocument
     */
    public function setAccessReference($accessReference = null)
    {
        // validation for constraint: string
        if (!is_null($accessReference) && !is_string($accessReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accessReference)), __LINE__);
        }
        $this->AccessReference = $accessReference;
        return $this;
    }
    /**
     * Get Resolution value
     * @return int|null
     */
    public function getResolution()
    {
        return $this->Resolution;
    }
    /**
     * Set Resolution value
     * @param int $resolution
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocument
     */
    public function setResolution($resolution = null)
    {
        // validation for constraint: int
        if (!is_null($resolution) && !is_numeric($resolution)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($resolution)), __LINE__);
        }
        $this->Resolution = $resolution;
        return $this;
    }
    /**
     * Get CopiesToPrint value
     * @return int|null
     */
    public function getCopiesToPrint()
    {
        return $this->CopiesToPrint;
    }
    /**
     * Set CopiesToPrint value
     * @param int $copiesToPrint
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocument
     */
    public function setCopiesToPrint($copiesToPrint = null)
    {
        // validation for constraint: int
        if (!is_null($copiesToPrint) && !is_numeric($copiesToPrint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($copiesToPrint)), __LINE__);
        }
        $this->CopiesToPrint = $copiesToPrint;
        return $this;
    }
    /**
     * Get Parts value
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentPart[]|null
     */
    public function getParts()
    {
        return $this->Parts;
    }
    /**
     * Set Parts value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocumentPart[] $parts
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocument
     */
    public function setParts(array $parts = array())
    {
        foreach ($parts as $closeDocumentPartsItem) {
            // validation for constraint: itemType
            if (!$closeDocumentPartsItem instanceof \CommerceFedEx\FedExPHP\Structs\ShippingDocumentPart) {
                throw new \InvalidArgumentException(sprintf('The Parts property can only contain items of \CommerceFedEx\FedExPHP\Structs\ShippingDocumentPart, "%s" given', is_object($closeDocumentPartsItem) ? get_class($closeDocumentPartsItem) : gettype($closeDocumentPartsItem)), __LINE__);
            }
        }
        $this->Parts = $parts;
        return $this;
    }
    /**
     * Add item to Parts value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocumentPart $item
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocument
     */
    public function addToParts(\CommerceFedEx\FedExPHP\Structs\ShippingDocumentPart $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\ShippingDocumentPart) {
            throw new \InvalidArgumentException(sprintf('The Parts property can only contain items of \CommerceFedEx\FedExPHP\Structs\ShippingDocumentPart, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Parts[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocument
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
