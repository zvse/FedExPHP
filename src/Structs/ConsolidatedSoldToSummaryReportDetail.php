<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsolidatedSoldToSummaryReportDetail Structs
 * @subpackage Structs
 */
class ConsolidatedSoldToSummaryReportDetail extends AbstractStructBase
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage[]
     */
    public $CustomerImageUsages;
    /**
     * The SignatureName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SignatureName;
    /**
     * Constructor method for ConsolidatedSoldToSummaryReportDetail
     * @uses ConsolidatedSoldToSummaryReportDetail::setFormat()
     * @uses ConsolidatedSoldToSummaryReportDetail::setCustomerImageUsages()
     * @uses ConsolidatedSoldToSummaryReportDetail::setSignatureName()
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocumentFormat $format
     * @param \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage[] $customerImageUsages
     * @param string $signatureName
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\ShippingDocumentFormat $format = null, array $customerImageUsages = array(), $signatureName = null)
    {
        $this
            ->setFormat($format)
            ->setCustomerImageUsages($customerImageUsages)
            ->setSignatureName($signatureName);
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
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidatedSoldToSummaryReportDetail
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
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidatedSoldToSummaryReportDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages = array())
    {
        foreach ($customerImageUsages as $consolidatedSoldToSummaryReportDetailCustomerImageUsagesItem) {
            // validation for constraint: itemType
            if (!$consolidatedSoldToSummaryReportDetailCustomerImageUsagesItem instanceof \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage) {
                throw new \InvalidArgumentException(sprintf('The CustomerImageUsages property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage, "%s" given', is_object($consolidatedSoldToSummaryReportDetailCustomerImageUsagesItem) ? get_class($consolidatedSoldToSummaryReportDetailCustomerImageUsagesItem) : gettype($consolidatedSoldToSummaryReportDetailCustomerImageUsagesItem)), __LINE__);
            }
        }
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    /**
     * Add item to CustomerImageUsages value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage $item
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidatedSoldToSummaryReportDetail
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
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidatedSoldToSummaryReportDetail
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
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidatedSoldToSummaryReportDetail
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
