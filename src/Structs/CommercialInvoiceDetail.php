<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommercialInvoiceDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
 * @subpackage Structs
 */
class CommercialInvoiceDetail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShippingDocumentFormat
     */
    public $Format;
    /**
     * The CustomerImageUsages
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the usage and identification of a customer supplied image to be used on this document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage[]
     */
    public $CustomerImageUsages;
    /**
     * Constructor method for CommercialInvoiceDetail
     * @uses CommercialInvoiceDetail::setFormat()
     * @uses CommercialInvoiceDetail::setCustomerImageUsages()
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocumentFormat $format
     * @param \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage[] $customerImageUsages
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\ShippingDocumentFormat $format = null, array $customerImageUsages = array())
    {
        $this
            ->setFormat($format)
            ->setCustomerImageUsages($customerImageUsages);
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
     * @return \CommerceFedEx\FedExPHP\Structs\CommercialInvoiceDetail
     */
    public function setFormat(\CommerceFedEx\FedExPHP\Structs\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get CustomerImageUsages value
     * @return \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage[]|null
     */
    public function getCustomerImageUsages()
    {
        return $this->CustomerImageUsages;
    }
    /**
     * Set CustomerImageUsages value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage[] $customerImageUsages
     * @return \CommerceFedEx\FedExPHP\Structs\CommercialInvoiceDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages = array())
    {
        foreach ($customerImageUsages as $commercialInvoiceDetailCustomerImageUsagesItem) {
            // validation for constraint: itemType
            if (!$commercialInvoiceDetailCustomerImageUsagesItem instanceof \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage) {
                throw new \InvalidArgumentException(sprintf('The CustomerImageUsages property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage, "%s" given', is_object($commercialInvoiceDetailCustomerImageUsagesItem) ? get_class($commercialInvoiceDetailCustomerImageUsagesItem) : gettype($commercialInvoiceDetailCustomerImageUsagesItem)), __LINE__);
            }
        }
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    /**
     * Add item to CustomerImageUsages value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage $item
     * @return \CommerceFedEx\FedExPHP\Structs\CommercialInvoiceDetail
     */
    public function addToCustomerImageUsages(\CommerceFedEx\FedExPHP\Structs\CustomerImageUsage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage) {
            throw new \InvalidArgumentException(sprintf('The CustomerImageUsages property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomerImageUsages[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CommercialInvoiceDetail
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
