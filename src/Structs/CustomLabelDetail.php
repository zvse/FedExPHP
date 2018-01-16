<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomLabelDetail Structs
 * @subpackage Structs
 */
class CustomLabelDetail extends AbstractStructBase
{
    /**
     * The CoordinateUnits
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CoordinateUnits;
    /**
     * The TextEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CustomLabelTextEntry[]
     */
    public $TextEntries;
    /**
     * The GraphicEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CustomLabelGraphicEntry[]
     */
    public $GraphicEntries;
    /**
     * The BoxEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CustomLabelBoxEntry[]
     */
    public $BoxEntries;
    /**
     * The TextBoxEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CustomLabelTextBoxEntry[]
     */
    public $TextBoxEntries;
    /**
     * The BarcodeEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CustomLabelBarcodeEntry[]
     */
    public $BarcodeEntries;
    /**
     * Constructor method for CustomLabelDetail
     * @uses CustomLabelDetail::setCoordinateUnits()
     * @uses CustomLabelDetail::setTextEntries()
     * @uses CustomLabelDetail::setGraphicEntries()
     * @uses CustomLabelDetail::setBoxEntries()
     * @uses CustomLabelDetail::setTextBoxEntries()
     * @uses CustomLabelDetail::setBarcodeEntries()
     * @param string $coordinateUnits
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelTextEntry[] $textEntries
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelGraphicEntry[] $graphicEntries
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelBoxEntry[] $boxEntries
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelTextBoxEntry[] $textBoxEntries
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelBarcodeEntry[] $barcodeEntries
     */
    public function __construct($coordinateUnits = null, array $textEntries = array(), array $graphicEntries = array(), array $boxEntries = array(), array $textBoxEntries = array(), array $barcodeEntries = array())
    {
        $this
            ->setCoordinateUnits($coordinateUnits)
            ->setTextEntries($textEntries)
            ->setGraphicEntries($graphicEntries)
            ->setBoxEntries($boxEntries)
            ->setTextBoxEntries($textBoxEntries)
            ->setBarcodeEntries($barcodeEntries);
    }
    /**
     * Get CoordinateUnits value
     * @return string|null
     */
    public function getCoordinateUnits()
    {
        return $this->CoordinateUnits;
    }
    /**
     * Set CoordinateUnits value
     * @uses \CommerceFedEx\FedExPHP\Enums\CustomLabelCoordinateUnits::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CustomLabelCoordinateUnits::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $coordinateUnits
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelDetail
     */
    public function setCoordinateUnits($coordinateUnits = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CustomLabelCoordinateUnits::valueIsValid($coordinateUnits)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $coordinateUnits, implode(', ', \CommerceFedEx\FedExPHP\Enums\CustomLabelCoordinateUnits::getValidValues())), __LINE__);
        }
        $this->CoordinateUnits = $coordinateUnits;
        return $this;
    }
    /**
     * Get TextEntries value
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelTextEntry[]|null
     */
    public function getTextEntries()
    {
        return $this->TextEntries;
    }
    /**
     * Set TextEntries value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelTextEntry[] $textEntries
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelDetail
     */
    public function setTextEntries(array $textEntries = array())
    {
        foreach ($textEntries as $customLabelDetailTextEntriesItem) {
            // validation for constraint: itemType
            if (!$customLabelDetailTextEntriesItem instanceof \CommerceFedEx\FedExPHP\Structs\CustomLabelTextEntry) {
                throw new \InvalidArgumentException(sprintf('The TextEntries property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomLabelTextEntry, "%s" given', is_object($customLabelDetailTextEntriesItem) ? get_class($customLabelDetailTextEntriesItem) : gettype($customLabelDetailTextEntriesItem)), __LINE__);
            }
        }
        $this->TextEntries = $textEntries;
        return $this;
    }
    /**
     * Add item to TextEntries value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelTextEntry $item
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelDetail
     */
    public function addToTextEntries(\CommerceFedEx\FedExPHP\Structs\CustomLabelTextEntry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\CustomLabelTextEntry) {
            throw new \InvalidArgumentException(sprintf('The TextEntries property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomLabelTextEntry, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TextEntries[] = $item;
        return $this;
    }
    /**
     * Get GraphicEntries value
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelGraphicEntry[]|null
     */
    public function getGraphicEntries()
    {
        return $this->GraphicEntries;
    }
    /**
     * Set GraphicEntries value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelGraphicEntry[] $graphicEntries
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelDetail
     */
    public function setGraphicEntries(array $graphicEntries = array())
    {
        foreach ($graphicEntries as $customLabelDetailGraphicEntriesItem) {
            // validation for constraint: itemType
            if (!$customLabelDetailGraphicEntriesItem instanceof \CommerceFedEx\FedExPHP\Structs\CustomLabelGraphicEntry) {
                throw new \InvalidArgumentException(sprintf('The GraphicEntries property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomLabelGraphicEntry, "%s" given', is_object($customLabelDetailGraphicEntriesItem) ? get_class($customLabelDetailGraphicEntriesItem) : gettype($customLabelDetailGraphicEntriesItem)), __LINE__);
            }
        }
        $this->GraphicEntries = $graphicEntries;
        return $this;
    }
    /**
     * Add item to GraphicEntries value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelGraphicEntry $item
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelDetail
     */
    public function addToGraphicEntries(\CommerceFedEx\FedExPHP\Structs\CustomLabelGraphicEntry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\CustomLabelGraphicEntry) {
            throw new \InvalidArgumentException(sprintf('The GraphicEntries property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomLabelGraphicEntry, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GraphicEntries[] = $item;
        return $this;
    }
    /**
     * Get BoxEntries value
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelBoxEntry[]|null
     */
    public function getBoxEntries()
    {
        return $this->BoxEntries;
    }
    /**
     * Set BoxEntries value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelBoxEntry[] $boxEntries
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelDetail
     */
    public function setBoxEntries(array $boxEntries = array())
    {
        foreach ($boxEntries as $customLabelDetailBoxEntriesItem) {
            // validation for constraint: itemType
            if (!$customLabelDetailBoxEntriesItem instanceof \CommerceFedEx\FedExPHP\Structs\CustomLabelBoxEntry) {
                throw new \InvalidArgumentException(sprintf('The BoxEntries property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomLabelBoxEntry, "%s" given', is_object($customLabelDetailBoxEntriesItem) ? get_class($customLabelDetailBoxEntriesItem) : gettype($customLabelDetailBoxEntriesItem)), __LINE__);
            }
        }
        $this->BoxEntries = $boxEntries;
        return $this;
    }
    /**
     * Add item to BoxEntries value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelBoxEntry $item
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelDetail
     */
    public function addToBoxEntries(\CommerceFedEx\FedExPHP\Structs\CustomLabelBoxEntry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\CustomLabelBoxEntry) {
            throw new \InvalidArgumentException(sprintf('The BoxEntries property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomLabelBoxEntry, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BoxEntries[] = $item;
        return $this;
    }
    /**
     * Get TextBoxEntries value
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelTextBoxEntry[]|null
     */
    public function getTextBoxEntries()
    {
        return $this->TextBoxEntries;
    }
    /**
     * Set TextBoxEntries value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelTextBoxEntry[] $textBoxEntries
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelDetail
     */
    public function setTextBoxEntries(array $textBoxEntries = array())
    {
        foreach ($textBoxEntries as $customLabelDetailTextBoxEntriesItem) {
            // validation for constraint: itemType
            if (!$customLabelDetailTextBoxEntriesItem instanceof \CommerceFedEx\FedExPHP\Structs\CustomLabelTextBoxEntry) {
                throw new \InvalidArgumentException(sprintf('The TextBoxEntries property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomLabelTextBoxEntry, "%s" given', is_object($customLabelDetailTextBoxEntriesItem) ? get_class($customLabelDetailTextBoxEntriesItem) : gettype($customLabelDetailTextBoxEntriesItem)), __LINE__);
            }
        }
        $this->TextBoxEntries = $textBoxEntries;
        return $this;
    }
    /**
     * Add item to TextBoxEntries value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelTextBoxEntry $item
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelDetail
     */
    public function addToTextBoxEntries(\CommerceFedEx\FedExPHP\Structs\CustomLabelTextBoxEntry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\CustomLabelTextBoxEntry) {
            throw new \InvalidArgumentException(sprintf('The TextBoxEntries property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomLabelTextBoxEntry, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TextBoxEntries[] = $item;
        return $this;
    }
    /**
     * Get BarcodeEntries value
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelBarcodeEntry[]|null
     */
    public function getBarcodeEntries()
    {
        return $this->BarcodeEntries;
    }
    /**
     * Set BarcodeEntries value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelBarcodeEntry[] $barcodeEntries
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelDetail
     */
    public function setBarcodeEntries(array $barcodeEntries = array())
    {
        foreach ($barcodeEntries as $customLabelDetailBarcodeEntriesItem) {
            // validation for constraint: itemType
            if (!$customLabelDetailBarcodeEntriesItem instanceof \CommerceFedEx\FedExPHP\Structs\CustomLabelBarcodeEntry) {
                throw new \InvalidArgumentException(sprintf('The BarcodeEntries property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomLabelBarcodeEntry, "%s" given', is_object($customLabelDetailBarcodeEntriesItem) ? get_class($customLabelDetailBarcodeEntriesItem) : gettype($customLabelDetailBarcodeEntriesItem)), __LINE__);
            }
        }
        $this->BarcodeEntries = $barcodeEntries;
        return $this;
    }
    /**
     * Add item to BarcodeEntries value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelBarcodeEntry $item
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelDetail
     */
    public function addToBarcodeEntries(\CommerceFedEx\FedExPHP\Structs\CustomLabelBarcodeEntry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\CustomLabelBarcodeEntry) {
            throw new \InvalidArgumentException(sprintf('The BarcodeEntries property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomLabelBarcodeEntry, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BarcodeEntries[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelDetail
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
