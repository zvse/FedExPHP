<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackingDocument Structs
 * @subpackage Structs
 */
class TrackingDocument extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Localizations
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Localization[]
     */
    public $Localizations;
    /**
     * The ImageType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ImageType;
    /**
     * The Resolution
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Resolution;
    /**
     * The Parts
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DocumentPart[]
     */
    public $Parts;
    /**
     * Constructor method for TrackingDocument
     * @uses TrackingDocument::setType()
     * @uses TrackingDocument::setLocalizations()
     * @uses TrackingDocument::setImageType()
     * @uses TrackingDocument::setResolution()
     * @uses TrackingDocument::setParts()
     * @param string $type
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Localization[] $localizations
     * @param string $imageType
     * @param int $resolution
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DocumentPart[] $parts
     */
    public function __construct($type = null, array $localizations = array(), $imageType = null, $resolution = null, array $parts = array())
    {
        $this
            ->setType($type)
            ->setLocalizations($localizations)
            ->setImageType($imageType)
            ->setResolution($resolution)
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocument
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Localizations value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Localization[]|null
     */
    public function getLocalizations()
    {
        return $this->Localizations;
    }
    /**
     * Set Localizations value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Localization[] $localizations
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocument
     */
    public function setLocalizations(array $localizations = array())
    {
        foreach ($localizations as $trackingDocumentLocalizationsItem) {
            // validation for constraint: itemType
            if (!$trackingDocumentLocalizationsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Localization) {
                throw new \InvalidArgumentException(sprintf('The Localizations property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Localization, "%s" given', is_object($trackingDocumentLocalizationsItem) ? get_class($trackingDocumentLocalizationsItem) : gettype($trackingDocumentLocalizationsItem)), __LINE__);
            }
        }
        $this->Localizations = $localizations;
        return $this;
    }
    /**
     * Add item to Localizations value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Localization $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocument
     */
    public function addToLocalizations(\NicholasCreativeMedia\FedExPHP\Structs\Localization $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\Localization) {
            throw new \InvalidArgumentException(sprintf('The Localizations property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Localization, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Localizations[] = $item;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentImageType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentImageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $imageType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocument
     */
    public function setImageType($imageType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentImageType::valueIsValid($imageType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $imageType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentImageType::getValidValues())), __LINE__);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocument
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
     * Get Parts value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DocumentPart[]|null
     */
    public function getParts()
    {
        return $this->Parts;
    }
    /**
     * Set Parts value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DocumentPart[] $parts
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocument
     */
    public function setParts(array $parts = array())
    {
        foreach ($parts as $trackingDocumentPartsItem) {
            // validation for constraint: itemType
            if (!$trackingDocumentPartsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\DocumentPart) {
                throw new \InvalidArgumentException(sprintf('The Parts property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\DocumentPart, "%s" given', is_object($trackingDocumentPartsItem) ? get_class($trackingDocumentPartsItem) : gettype($trackingDocumentPartsItem)), __LINE__);
            }
        }
        $this->Parts = $parts;
        return $this;
    }
    /**
     * Add item to Parts value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DocumentPart $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocument
     */
    public function addToParts(\NicholasCreativeMedia\FedExPHP\Structs\DocumentPart $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\DocumentPart) {
            throw new \InvalidArgumentException(sprintf('The Parts property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\DocumentPart, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocument
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
