<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomsPackingListDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: The instructions indicating how to print the customs packing list document.
 * @subpackage Structs
 */
class CustomsPackingListDetail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat
     */
    public $Format;
    /**
     * The CustomerImageUsages
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the usage and identification of a customer supplied image to be used on this document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage[]
     */
    public $CustomerImageUsages;
    /**
     * The SignatureName
     * Meta informations extracted from the WSDL
     * - documentation: Name of the person signing the document.
     * - minOccurs: 0
     * @var string
     */
    public $SignatureName;
    /**
     * Constructor method for CustomsPackingListDetail
     * @uses CustomsPackingListDetail::setFormat()
     * @uses CustomsPackingListDetail::setCustomerImageUsages()
     * @uses CustomsPackingListDetail::setSignatureName()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat $format
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage[] $customerImageUsages
     * @param string $signatureName
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat $format = null, array $customerImageUsages = array(), $signatureName = null)
    {
        $this
            ->setFormat($format)
            ->setCustomerImageUsages($customerImageUsages)
            ->setSignatureName($signatureName);
    }
    /**
     * Get Format value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat $format
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomsPackingListDetail
     */
    public function setFormat(\NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get CustomerImageUsages value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage[]|null
     */
    public function getCustomerImageUsages()
    {
        return $this->CustomerImageUsages;
    }
    /**
     * Set CustomerImageUsages value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage[] $customerImageUsages
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomsPackingListDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages = array())
    {
        foreach ($customerImageUsages as $customsPackingListDetailCustomerImageUsagesItem) {
            // validation for constraint: itemType
            if (!$customsPackingListDetailCustomerImageUsagesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage) {
                throw new \InvalidArgumentException(sprintf('The CustomerImageUsages property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage, "%s" given', is_object($customsPackingListDetailCustomerImageUsagesItem) ? get_class($customsPackingListDetailCustomerImageUsagesItem) : gettype($customsPackingListDetailCustomerImageUsagesItem)), __LINE__);
            }
        }
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    /**
     * Add item to CustomerImageUsages value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomsPackingListDetail
     */
    public function addToCustomerImageUsages(\NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage) {
            throw new \InvalidArgumentException(sprintf('The CustomerImageUsages property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomerImageUsages[] = $item;
        return $this;
    }
    /**
     * Get SignatureName value
     * @return string|null
     */
    public function getSignatureName()
    {
        return $this->SignatureName;
    }
    /**
     * Set SignatureName value
     * @param string $signatureName
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomsPackingListDetail
     */
    public function setSignatureName($signatureName = null)
    {
        // validation for constraint: string
        if (!is_null($signatureName) && !is_string($signatureName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($signatureName)), __LINE__);
        }
        $this->SignatureName = $signatureName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomsPackingListDetail
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
