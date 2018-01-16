<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodReturnPackageDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the information associated with a package that has COD special service in a ground shipment.
 * @subpackage Structs
 */
class CodReturnPackageDetail extends AbstractStructBase
{
    /**
     * The CollectionAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $CollectionAmount;
    /**
     * The AdjustmentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AdjustmentType;
    /**
     * The Electronic
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Electronic;
    /**
     * The Barcodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\PackageBarcodes
     */
    public $Barcodes;
    /**
     * The Label
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShippingDocument
     */
    public $Label;
    /**
     * Constructor method for CodReturnPackageDetail
     * @uses CodReturnPackageDetail::setCollectionAmount()
     * @uses CodReturnPackageDetail::setAdjustmentType()
     * @uses CodReturnPackageDetail::setElectronic()
     * @uses CodReturnPackageDetail::setBarcodes()
     * @uses CodReturnPackageDetail::setLabel()
     * @param \CommerceFedEx\FedExPHP\Structs\Money $collectionAmount
     * @param string $adjustmentType
     * @param bool $electronic
     * @param \CommerceFedEx\FedExPHP\Structs\PackageBarcodes $barcodes
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocument $label
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\Money $collectionAmount = null, $adjustmentType = null, $electronic = null, \CommerceFedEx\FedExPHP\Structs\PackageBarcodes $barcodes = null, \CommerceFedEx\FedExPHP\Structs\ShippingDocument $label = null)
    {
        $this
            ->setCollectionAmount($collectionAmount)
            ->setAdjustmentType($adjustmentType)
            ->setElectronic($electronic)
            ->setBarcodes($barcodes)
            ->setLabel($label);
    }
    /**
     * Get CollectionAmount value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getCollectionAmount()
    {
        return $this->CollectionAmount;
    }
    /**
     * Set CollectionAmount value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $collectionAmount
     * @return \CommerceFedEx\FedExPHP\Structs\CodReturnPackageDetail
     */
    public function setCollectionAmount(\CommerceFedEx\FedExPHP\Structs\Money $collectionAmount = null)
    {
        $this->CollectionAmount = $collectionAmount;
        return $this;
    }
    /**
     * Get AdjustmentType value
     * @return string|null
     */
    public function getAdjustmentType()
    {
        return $this->AdjustmentType;
    }
    /**
     * Set AdjustmentType value
     * @uses \CommerceFedEx\FedExPHP\Enums\CodAdjustmentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CodAdjustmentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $adjustmentType
     * @return \CommerceFedEx\FedExPHP\Structs\CodReturnPackageDetail
     */
    public function setAdjustmentType($adjustmentType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CodAdjustmentType::valueIsValid($adjustmentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $adjustmentType, implode(', ', \CommerceFedEx\FedExPHP\Enums\CodAdjustmentType::getValidValues())), __LINE__);
        }
        $this->AdjustmentType = $adjustmentType;
        return $this;
    }
    /**
     * Get Electronic value
     * @return bool|null
     */
    public function getElectronic()
    {
        return $this->Electronic;
    }
    /**
     * Set Electronic value
     * @param bool $electronic
     * @return \CommerceFedEx\FedExPHP\Structs\CodReturnPackageDetail
     */
    public function setElectronic($electronic = null)
    {
        $this->Electronic = $electronic;
        return $this;
    }
    /**
     * Get Barcodes value
     * @return \CommerceFedEx\FedExPHP\Structs\PackageBarcodes|null
     */
    public function getBarcodes()
    {
        return $this->Barcodes;
    }
    /**
     * Set Barcodes value
     * @param \CommerceFedEx\FedExPHP\Structs\PackageBarcodes $barcodes
     * @return \CommerceFedEx\FedExPHP\Structs\CodReturnPackageDetail
     */
    public function setBarcodes(\CommerceFedEx\FedExPHP\Structs\PackageBarcodes $barcodes = null)
    {
        $this->Barcodes = $barcodes;
        return $this;
    }
    /**
     * Get Label value
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocument|null
     */
    public function getLabel()
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocument $label
     * @return \CommerceFedEx\FedExPHP\Structs\CodReturnPackageDetail
     */
    public function setLabel(\CommerceFedEx\FedExPHP\Structs\ShippingDocument $label = null)
    {
        $this->Label = $label;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CodReturnPackageDetail
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
