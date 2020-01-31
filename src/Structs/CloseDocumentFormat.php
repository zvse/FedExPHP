<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseDocumentFormat Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies characteristics of a close document to be produced.
 * @subpackage Structs
 */
class CloseDocumentFormat extends AbstractStructBase
{
    /**
     * The Dispositions
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how to create, organize, and return the document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShippingDocumentDispositionDetail[]
     */
    public $Dispositions;
    /**
     * The TopOfPageOffset
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how far down the page to move the beginning of the image; allows for printing on letterhead and other pre-printed stock.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\LinearMeasure
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
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: Governs the language to be used for this individual document, independently from other content returned for the same shipment.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Localization
     */
    public $Localization;
    /**
     * Constructor method for CloseDocumentFormat
     * @uses CloseDocumentFormat::setDispositions()
     * @uses CloseDocumentFormat::setTopOfPageOffset()
     * @uses CloseDocumentFormat::setImageType()
     * @uses CloseDocumentFormat::setStockType()
     * @uses CloseDocumentFormat::setProvideInstructions()
     * @uses CloseDocumentFormat::setLocalization()
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocumentDispositionDetail[] $dispositions
     * @param \CommerceFedEx\FedExPHP\Structs\LinearMeasure $topOfPageOffset
     * @param string $imageType
     * @param string $stockType
     * @param bool $provideInstructions
     * @param \CommerceFedEx\FedExPHP\Structs\Localization $localization
     */
    public function __construct(array $dispositions = array(), \CommerceFedEx\FedExPHP\Structs\LinearMeasure $topOfPageOffset = null, $imageType = null, $stockType = null, $provideInstructions = null, \CommerceFedEx\FedExPHP\Structs\Localization $localization = null)
    {
        $this
            ->setDispositions($dispositions)
            ->setTopOfPageOffset($topOfPageOffset)
            ->setImageType($imageType)
            ->setStockType($stockType)
            ->setProvideInstructions($provideInstructions)
            ->setLocalization($localization);
    }
    /**
     * Get Dispositions value
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentDispositionDetail[]|null
     */
    public function getDispositions()
    {
        return $this->Dispositions;
    }
    /**
     * Set Dispositions value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocumentDispositionDetail[] $dispositions
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat
     */
    public function setDispositions(array $dispositions = array())
    {
        foreach ($dispositions as $closeDocumentFormatDispositionsItem) {
            // validation for constraint: itemType
            if (!$closeDocumentFormatDispositionsItem instanceof \CommerceFedEx\FedExPHP\Structs\ShippingDocumentDispositionDetail) {
                throw new \InvalidArgumentException(sprintf('The Dispositions property can only contain items of \CommerceFedEx\FedExPHP\Structs\ShippingDocumentDispositionDetail, "%s" given', is_object($closeDocumentFormatDispositionsItem) ? get_class($closeDocumentFormatDispositionsItem) : gettype($closeDocumentFormatDispositionsItem)), __LINE__);
            }
        }
        $this->Dispositions = $dispositions;
        return $this;
    }
    /**
     * Add item to Dispositions value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocumentDispositionDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat
     */
    public function addToDispositions(\CommerceFedEx\FedExPHP\Structs\ShippingDocumentDispositionDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\ShippingDocumentDispositionDetail) {
            throw new \InvalidArgumentException(sprintf('The Dispositions property can only contain items of \CommerceFedEx\FedExPHP\Structs\ShippingDocumentDispositionDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Dispositions[] = $item;
        return $this;
    }
    /**
     * Get TopOfPageOffset value
     * @return \CommerceFedEx\FedExPHP\Structs\LinearMeasure|null
     */
    public function getTopOfPageOffset()
    {
        return $this->TopOfPageOffset;
    }
    /**
     * Set TopOfPageOffset value
     * @param \CommerceFedEx\FedExPHP\Structs\LinearMeasure $topOfPageOffset
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat
     */
    public function setTopOfPageOffset(\CommerceFedEx\FedExPHP\Structs\LinearMeasure $topOfPageOffset = null)
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
     * @uses \CommerceFedEx\FedExPHP\Enums\ShippingDocumentImageType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ShippingDocumentImageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $imageType
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat
     */
    public function setImageType($imageType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ShippingDocumentImageType::valueIsValid($imageType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $imageType, implode(', ', \CommerceFedEx\FedExPHP\Enums\ShippingDocumentImageType::getValidValues())), __LINE__);
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
     * @uses \CommerceFedEx\FedExPHP\Enums\ShippingDocumentStockType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ShippingDocumentStockType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $stockType
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat
     */
    public function setStockType($stockType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ShippingDocumentStockType::valueIsValid($stockType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $stockType, implode(', ', \CommerceFedEx\FedExPHP\Enums\ShippingDocumentStockType::getValidValues())), __LINE__);
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
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat
     */
    public function setProvideInstructions($provideInstructions = null)
    {
        $this->ProvideInstructions = $provideInstructions;
        return $this;
    }
    /**
     * Get Localization value
     * @return \CommerceFedEx\FedExPHP\Structs\Localization|null
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    /**
     * Set Localization value
     * @param \CommerceFedEx\FedExPHP\Structs\Localization $localization
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat
     */
    public function setLocalization(\CommerceFedEx\FedExPHP\Structs\Localization $localization = null)
    {
        $this->Localization = $localization;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat
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
