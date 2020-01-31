<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsolidationDocument Structs
 * @subpackage Structs
 */
class ConsolidationDocument extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of business document in this instance.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
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
     * The ImageType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the image type of the consoldiation document.
     * - minOccurs: 0
     * @var string
     */
    public $ImageType;
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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentPart[]
     */
    public $Parts;
    /**
     * Constructor method for ConsolidationDocument
     * @uses ConsolidationDocument::setType()
     * @uses ConsolidationDocument::setShippingDocumentDisposition()
     * @uses ConsolidationDocument::setAccessReference()
     * @uses ConsolidationDocument::setImageType()
     * @uses ConsolidationDocument::setResolution()
     * @uses ConsolidationDocument::setCopiesToPrint()
     * @uses ConsolidationDocument::setParts()
     * @param string $type
     * @param string $shippingDocumentDisposition
     * @param string $accessReference
     * @param string $imageType
     * @param int $resolution
     * @param int $copiesToPrint
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentPart[] $parts
     */
    public function __construct($type = null, $shippingDocumentDisposition = null, $accessReference = null, $imageType = null, $resolution = null, $copiesToPrint = null, array $parts = array())
    {
        $this
            ->setType($type)
            ->setShippingDocumentDisposition($shippingDocumentDisposition)
            ->setAccessReference($accessReference)
            ->setImageType($imageType)
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ReturnedConsolidationDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ReturnedConsolidationDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocument
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ReturnedConsolidationDocumentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ReturnedConsolidationDocumentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentDispositionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentDispositionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingDocumentDisposition
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocument
     */
    public function setShippingDocumentDisposition($shippingDocumentDisposition = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentDispositionType::valueIsValid($shippingDocumentDisposition)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shippingDocumentDisposition, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentDispositionType::getValidValues())), __LINE__);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocument
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
     * Get ImageType value
     * @return string|null
     */
    public function getImageType()
    {
        return $this->ImageType;
    }
    /**
     * Set ImageType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentImageType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentImageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $imageType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocument
     */
    public function setImageType($imageType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentImageType::valueIsValid($imageType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $imageType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentImageType::getValidValues())), __LINE__);
        }
        $this->ImageType = $imageType;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocument
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocument
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentPart[]|null
     */
    public function getParts()
    {
        return $this->Parts;
    }
    /**
     * Set Parts value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentPart[] $parts
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocument
     */
    public function setParts(array $parts = array())
    {
        foreach ($parts as $consolidationDocumentPartsItem) {
            // validation for constraint: itemType
            if (!$consolidationDocumentPartsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentPart) {
                throw new \InvalidArgumentException(sprintf('The Parts property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentPart, "%s" given', is_object($consolidationDocumentPartsItem) ? get_class($consolidationDocumentPartsItem) : gettype($consolidationDocumentPartsItem)), __LINE__);
            }
        }
        $this->Parts = $parts;
        return $this;
    }
    /**
     * Add item to Parts value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentPart $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocument
     */
    public function addToParts(\NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentPart $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentPart) {
            throw new \InvalidArgumentException(sprintf('The Parts property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentPart, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocument
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
