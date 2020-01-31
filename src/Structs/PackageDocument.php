<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageDocument Structs
 * @subpackage Structs
 */
class PackageDocument extends AbstractStructBase
{
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: The sequence number of the package to which the following shipping documents apply.
     * - minOccurs: 0
     * @var int
     */
    public $SequenceNumber;
    /**
     * The ShippingDocuments
     * Meta informations extracted from the WSDL
     * - documentation: All shipping documents, including labels and barcodes, that apply to the indicated package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShippingDocument[]
     */
    public $ShippingDocuments;
    /**
     * Constructor method for PackageDocument
     * @uses PackageDocument::setSequenceNumber()
     * @uses PackageDocument::setShippingDocuments()
     * @param int $sequenceNumber
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocument[] $shippingDocuments
     */
    public function __construct($sequenceNumber = null, array $shippingDocuments = array())
    {
        $this
            ->setSequenceNumber($sequenceNumber)
            ->setShippingDocuments($shippingDocuments);
    }
    /**
     * Get SequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param int $sequenceNumber
     * @return \CommerceFedEx\FedExPHP\Structs\PackageDocument
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !is_numeric($sequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNumber)), __LINE__);
        }
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get ShippingDocuments value
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocument[]|null
     */
    public function getShippingDocuments()
    {
        return $this->ShippingDocuments;
    }
    /**
     * Set ShippingDocuments value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocument[] $shippingDocuments
     * @return \CommerceFedEx\FedExPHP\Structs\PackageDocument
     */
    public function setShippingDocuments(array $shippingDocuments = array())
    {
        foreach ($shippingDocuments as $packageDocumentShippingDocumentsItem) {
            // validation for constraint: itemType
            if (!$packageDocumentShippingDocumentsItem instanceof \CommerceFedEx\FedExPHP\Structs\ShippingDocument) {
                throw new \InvalidArgumentException(sprintf('The ShippingDocuments property can only contain items of \CommerceFedEx\FedExPHP\Structs\ShippingDocument, "%s" given', is_object($packageDocumentShippingDocumentsItem) ? get_class($packageDocumentShippingDocumentsItem) : gettype($packageDocumentShippingDocumentsItem)), __LINE__);
            }
        }
        $this->ShippingDocuments = $shippingDocuments;
        return $this;
    }
    /**
     * Add item to ShippingDocuments value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocument $item
     * @return \CommerceFedEx\FedExPHP\Structs\PackageDocument
     */
    public function addToShippingDocuments(\CommerceFedEx\FedExPHP\Structs\ShippingDocument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\ShippingDocument) {
            throw new \InvalidArgumentException(sprintf('The ShippingDocuments property can only contain items of \CommerceFedEx\FedExPHP\Structs\ShippingDocument, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShippingDocuments[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\PackageDocument
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
