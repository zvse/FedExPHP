<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentFormat StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies characteristics of a shipping document to be produced.
 * @subpackage Structs
 */
class ShippingDocumentFormat extends AbstractStructBase
{
    /**
     * The Dispositions
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how to create, organize, and return the document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentDispositionDetail[]
     */
    public $Dispositions;
    /**
     * The TopOfPageOffset
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how far down the page to move the beginning of the image; allows for printing on letterhead and other pre-printed stock.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\LinearMeasure
     */
    public $TopOfPageOffset;
    /**
     * The ImageType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ImageType;
    /**
     * The StockType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StockType;
    /**
     * The ProvideInstructions
     * Meta informations extracted from the WSDL
     * - documentation: For those shipping document types which have both a "form" and "instructions" component (e.g. NAFTA Certificate of Origin and General Agency Agreement), this field indicates whether to provide the instructions.
     * - minOccurs: 0
     * @var bool
     */
    public $ProvideInstructions;
    /**
     * The OptionsRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\DocumentFormatOptionsRequested
     */
    public $OptionsRequested;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: Governs the language to be used for this individual document, independently from other content returned for the same shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Localization
     */
    public $Localization;
    /**
     * The CustomDocumentIdentifier
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the individual document specified by the client.
     * - minOccurs: 0
     * @var string
     */
    public $CustomDocumentIdentifier;
    /**
     * Constructor method for ShippingDocumentFormat
     * @uses ShippingDocumentFormat::setDispositions()
     * @uses ShippingDocumentFormat::setTopOfPageOffset()
     * @uses ShippingDocumentFormat::setImageType()
     * @uses ShippingDocumentFormat::setStockType()
     * @uses ShippingDocumentFormat::setProvideInstructions()
     * @uses ShippingDocumentFormat::setOptionsRequested()
     * @uses ShippingDocumentFormat::setLocalization()
     * @uses ShippingDocumentFormat::setCustomDocumentIdentifier()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentDispositionDetail[] $dispositions
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\LinearMeasure $topOfPageOffset
     * @param string $imageType
     * @param string $stockType
     * @param bool $provideInstructions
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\DocumentFormatOptionsRequested $optionsRequested
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Localization $localization
     * @param string $customDocumentIdentifier
     */
    public function __construct(array $dispositions = array(), \NicholasCreativeMedia\FedExPHP\Ship\StructType\LinearMeasure $topOfPageOffset = null, $imageType = null, $stockType = null, $provideInstructions = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\DocumentFormatOptionsRequested $optionsRequested = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Localization $localization = null, $customDocumentIdentifier = null)
    {
        $this
            ->setDispositions($dispositions)
            ->setTopOfPageOffset($topOfPageOffset)
            ->setImageType($imageType)
            ->setStockType($stockType)
            ->setProvideInstructions($provideInstructions)
            ->setOptionsRequested($optionsRequested)
            ->setLocalization($localization)
            ->setCustomDocumentIdentifier($customDocumentIdentifier);
    }
    /**
     * Get Dispositions value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentDispositionDetail[]|null
     */
    public function getDispositions()
    {
        return $this->Dispositions;
    }
    /**
     * Set Dispositions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentDispositionDetail[] $dispositions
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentFormat
     */
    public function setDispositions(array $dispositions = array())
    {
        foreach ($dispositions as $shippingDocumentFormatDispositionsItem) {
            // validation for constraint: itemType
            if (!$shippingDocumentFormatDispositionsItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentDispositionDetail) {
                throw new \InvalidArgumentException(sprintf('The Dispositions property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentDispositionDetail, "%s" given', is_object($shippingDocumentFormatDispositionsItem) ? get_class($shippingDocumentFormatDispositionsItem) : gettype($shippingDocumentFormatDispositionsItem)), __LINE__);
            }
        }
        $this->Dispositions = $dispositions;
        return $this;
    }
    /**
     * Add item to Dispositions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentDispositionDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentFormat
     */
    public function addToDispositions(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentDispositionDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentDispositionDetail) {
            throw new \InvalidArgumentException(sprintf('The Dispositions property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentDispositionDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Dispositions[] = $item;
        return $this;
    }
    /**
     * Get TopOfPageOffset value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\LinearMeasure|null
     */
    public function getTopOfPageOffset()
    {
        return $this->TopOfPageOffset;
    }
    /**
     * Set TopOfPageOffset value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\LinearMeasure $topOfPageOffset
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentFormat
     */
    public function setTopOfPageOffset(\NicholasCreativeMedia\FedExPHP\Ship\StructType\LinearMeasure $topOfPageOffset = null)
    {
        $this->TopOfPageOffset = $topOfPageOffset;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ShippingDocumentImageType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ShippingDocumentImageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $imageType
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentFormat
     */
    public function setImageType($imageType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\ShippingDocumentImageType::valueIsValid($imageType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $imageType, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ShippingDocumentImageType::getValidValues())), __LINE__);
        }
        $this->ImageType = $imageType;
        return $this;
    }
    /**
     * Get StockType value
     * @return string|null
     */
    public function getStockType()
    {
        return $this->StockType;
    }
    /**
     * Set StockType value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ShippingDocumentStockType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ShippingDocumentStockType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $stockType
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentFormat
     */
    public function setStockType($stockType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\ShippingDocumentStockType::valueIsValid($stockType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $stockType, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ShippingDocumentStockType::getValidValues())), __LINE__);
        }
        $this->StockType = $stockType;
        return $this;
    }
    /**
     * Get ProvideInstructions value
     * @return bool|null
     */
    public function getProvideInstructions()
    {
        return $this->ProvideInstructions;
    }
    /**
     * Set ProvideInstructions value
     * @param bool $provideInstructions
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentFormat
     */
    public function setProvideInstructions($provideInstructions = null)
    {
        $this->ProvideInstructions = $provideInstructions;
        return $this;
    }
    /**
     * Get OptionsRequested value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DocumentFormatOptionsRequested|null
     */
    public function getOptionsRequested()
    {
        return $this->OptionsRequested;
    }
    /**
     * Set OptionsRequested value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\DocumentFormatOptionsRequested $optionsRequested
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentFormat
     */
    public function setOptionsRequested(\NicholasCreativeMedia\FedExPHP\Ship\StructType\DocumentFormatOptionsRequested $optionsRequested = null)
    {
        $this->OptionsRequested = $optionsRequested;
        return $this;
    }
    /**
     * Get Localization value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Localization|null
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    /**
     * Set Localization value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Localization $localization
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentFormat
     */
    public function setLocalization(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Localization $localization = null)
    {
        $this->Localization = $localization;
        return $this;
    }
    /**
     * Get CustomDocumentIdentifier value
     * @return string|null
     */
    public function getCustomDocumentIdentifier()
    {
        return $this->CustomDocumentIdentifier;
    }
    /**
     * Set CustomDocumentIdentifier value
     * @param string $customDocumentIdentifier
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentFormat
     */
    public function setCustomDocumentIdentifier($customDocumentIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($customDocumentIdentifier) && !is_string($customDocumentIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customDocumentIdentifier)), __LINE__);
        }
        $this->CustomDocumentIdentifier = $customDocumentIdentifier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentFormat
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