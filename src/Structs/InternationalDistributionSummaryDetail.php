<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalDistributionSummaryDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Totals accumulated during the processing of CRNs into the consolidation.
 * @subpackage Structs
 */
class InternationalDistributionSummaryDetail extends AbstractStructBase
{
    /**
     * The TotalWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Weight
     */
    public $TotalWeight;
    /**
     * The TotalPackageCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalPackageCount;
    /**
     * The TotalUniqueAddressCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalUniqueAddressCount;
    /**
     * The TotalCustomsValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $TotalCustomsValue;
    /**
     * The TotalInsuredValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $TotalInsuredValue;
    /**
     * The TotalFreightCharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $TotalFreightCharges;
    /**
     * The TotalInsuranceCharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $TotalInsuranceCharges;
    /**
     * The TotalTaxesOrMiscellaneousCharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $TotalTaxesOrMiscellaneousCharges;
    /**
     * The TotalHandlingCosts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $TotalHandlingCosts;
    /**
     * The TotalPackingCosts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $TotalPackingCosts;
    /**
     * The DryIceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail
     */
    public $DryIceDetail;
    /**
     * The DangerousGoodsAccessibility
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DangerousGoodsAccessibility;
    /**
     * Constructor method for InternationalDistributionSummaryDetail
     * @uses InternationalDistributionSummaryDetail::setTotalWeight()
     * @uses InternationalDistributionSummaryDetail::setTotalPackageCount()
     * @uses InternationalDistributionSummaryDetail::setTotalUniqueAddressCount()
     * @uses InternationalDistributionSummaryDetail::setTotalCustomsValue()
     * @uses InternationalDistributionSummaryDetail::setTotalInsuredValue()
     * @uses InternationalDistributionSummaryDetail::setTotalFreightCharges()
     * @uses InternationalDistributionSummaryDetail::setTotalInsuranceCharges()
     * @uses InternationalDistributionSummaryDetail::setTotalTaxesOrMiscellaneousCharges()
     * @uses InternationalDistributionSummaryDetail::setTotalHandlingCosts()
     * @uses InternationalDistributionSummaryDetail::setTotalPackingCosts()
     * @uses InternationalDistributionSummaryDetail::setDryIceDetail()
     * @uses InternationalDistributionSummaryDetail::setDangerousGoodsAccessibility()
     * @param \CommerceFedEx\FedExPHP\Structs\Weight $totalWeight
     * @param int $totalPackageCount
     * @param int $totalUniqueAddressCount
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalCustomsValue
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalInsuredValue
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalFreightCharges
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalInsuranceCharges
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalTaxesOrMiscellaneousCharges
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalHandlingCosts
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalPackingCosts
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail $dryIceDetail
     * @param string $dangerousGoodsAccessibility
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\Weight $totalWeight = null, $totalPackageCount = null, $totalUniqueAddressCount = null, \CommerceFedEx\FedExPHP\Structs\Money $totalCustomsValue = null, \CommerceFedEx\FedExPHP\Structs\Money $totalInsuredValue = null, \CommerceFedEx\FedExPHP\Structs\Money $totalFreightCharges = null, \CommerceFedEx\FedExPHP\Structs\Money $totalInsuranceCharges = null, \CommerceFedEx\FedExPHP\Structs\Money $totalTaxesOrMiscellaneousCharges = null, \CommerceFedEx\FedExPHP\Structs\Money $totalHandlingCosts = null, \CommerceFedEx\FedExPHP\Structs\Money $totalPackingCosts = null, \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail $dryIceDetail = null, $dangerousGoodsAccessibility = null)
    {
        $this
            ->setTotalWeight($totalWeight)
            ->setTotalPackageCount($totalPackageCount)
            ->setTotalUniqueAddressCount($totalUniqueAddressCount)
            ->setTotalCustomsValue($totalCustomsValue)
            ->setTotalInsuredValue($totalInsuredValue)
            ->setTotalFreightCharges($totalFreightCharges)
            ->setTotalInsuranceCharges($totalInsuranceCharges)
            ->setTotalTaxesOrMiscellaneousCharges($totalTaxesOrMiscellaneousCharges)
            ->setTotalHandlingCosts($totalHandlingCosts)
            ->setTotalPackingCosts($totalPackingCosts)
            ->setDryIceDetail($dryIceDetail)
            ->setDangerousGoodsAccessibility($dangerousGoodsAccessibility);
    }
    /**
     * Get TotalWeight value
     * @return \CommerceFedEx\FedExPHP\Structs\Weight|null
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }
    /**
     * Set TotalWeight value
     * @param \CommerceFedEx\FedExPHP\Structs\Weight $totalWeight
     * @return \CommerceFedEx\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setTotalWeight(\CommerceFedEx\FedExPHP\Structs\Weight $totalWeight = null)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    /**
     * Get TotalPackageCount value
     * @return int|null
     */
    public function getTotalPackageCount()
    {
        return $this->TotalPackageCount;
    }
    /**
     * Set TotalPackageCount value
     * @param int $totalPackageCount
     * @return \CommerceFedEx\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setTotalPackageCount($totalPackageCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalPackageCount) && !is_numeric($totalPackageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalPackageCount)), __LINE__);
        }
        $this->TotalPackageCount = $totalPackageCount;
        return $this;
    }
    /**
     * Get TotalUniqueAddressCount value
     * @return int|null
     */
    public function getTotalUniqueAddressCount()
    {
        return $this->TotalUniqueAddressCount;
    }
    /**
     * Set TotalUniqueAddressCount value
     * @param int $totalUniqueAddressCount
     * @return \CommerceFedEx\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setTotalUniqueAddressCount($totalUniqueAddressCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalUniqueAddressCount) && !is_numeric($totalUniqueAddressCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalUniqueAddressCount)), __LINE__);
        }
        $this->TotalUniqueAddressCount = $totalUniqueAddressCount;
        return $this;
    }
    /**
     * Get TotalCustomsValue value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getTotalCustomsValue()
    {
        return $this->TotalCustomsValue;
    }
    /**
     * Set TotalCustomsValue value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalCustomsValue
     * @return \CommerceFedEx\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setTotalCustomsValue(\CommerceFedEx\FedExPHP\Structs\Money $totalCustomsValue = null)
    {
        $this->TotalCustomsValue = $totalCustomsValue;
        return $this;
    }
    /**
     * Get TotalInsuredValue value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getTotalInsuredValue()
    {
        return $this->TotalInsuredValue;
    }
    /**
     * Set TotalInsuredValue value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalInsuredValue
     * @return \CommerceFedEx\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setTotalInsuredValue(\CommerceFedEx\FedExPHP\Structs\Money $totalInsuredValue = null)
    {
        $this->TotalInsuredValue = $totalInsuredValue;
        return $this;
    }
    /**
     * Get TotalFreightCharges value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getTotalFreightCharges()
    {
        return $this->TotalFreightCharges;
    }
    /**
     * Set TotalFreightCharges value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalFreightCharges
     * @return \CommerceFedEx\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setTotalFreightCharges(\CommerceFedEx\FedExPHP\Structs\Money $totalFreightCharges = null)
    {
        $this->TotalFreightCharges = $totalFreightCharges;
        return $this;
    }
    /**
     * Get TotalInsuranceCharges value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getTotalInsuranceCharges()
    {
        return $this->TotalInsuranceCharges;
    }
    /**
     * Set TotalInsuranceCharges value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalInsuranceCharges
     * @return \CommerceFedEx\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setTotalInsuranceCharges(\CommerceFedEx\FedExPHP\Structs\Money $totalInsuranceCharges = null)
    {
        $this->TotalInsuranceCharges = $totalInsuranceCharges;
        return $this;
    }
    /**
     * Get TotalTaxesOrMiscellaneousCharges value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getTotalTaxesOrMiscellaneousCharges()
    {
        return $this->TotalTaxesOrMiscellaneousCharges;
    }
    /**
     * Set TotalTaxesOrMiscellaneousCharges value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalTaxesOrMiscellaneousCharges
     * @return \CommerceFedEx\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setTotalTaxesOrMiscellaneousCharges(\CommerceFedEx\FedExPHP\Structs\Money $totalTaxesOrMiscellaneousCharges = null)
    {
        $this->TotalTaxesOrMiscellaneousCharges = $totalTaxesOrMiscellaneousCharges;
        return $this;
    }
    /**
     * Get TotalHandlingCosts value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getTotalHandlingCosts()
    {
        return $this->TotalHandlingCosts;
    }
    /**
     * Set TotalHandlingCosts value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalHandlingCosts
     * @return \CommerceFedEx\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setTotalHandlingCosts(\CommerceFedEx\FedExPHP\Structs\Money $totalHandlingCosts = null)
    {
        $this->TotalHandlingCosts = $totalHandlingCosts;
        return $this;
    }
    /**
     * Get TotalPackingCosts value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getTotalPackingCosts()
    {
        return $this->TotalPackingCosts;
    }
    /**
     * Set TotalPackingCosts value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalPackingCosts
     * @return \CommerceFedEx\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setTotalPackingCosts(\CommerceFedEx\FedExPHP\Structs\Money $totalPackingCosts = null)
    {
        $this->TotalPackingCosts = $totalPackingCosts;
        return $this;
    }
    /**
     * Get DryIceDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail|null
     */
    public function getDryIceDetail()
    {
        return $this->DryIceDetail;
    }
    /**
     * Set DryIceDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail $dryIceDetail
     * @return \CommerceFedEx\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setDryIceDetail(\CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail $dryIceDetail = null)
    {
        $this->DryIceDetail = $dryIceDetail;
        return $this;
    }
    /**
     * Get DangerousGoodsAccessibility value
     * @return string|null
     */
    public function getDangerousGoodsAccessibility()
    {
        return $this->DangerousGoodsAccessibility;
    }
    /**
     * Set DangerousGoodsAccessibility value
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsAccessibilityType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsAccessibilityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dangerousGoodsAccessibility
     * @return \CommerceFedEx\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setDangerousGoodsAccessibility($dangerousGoodsAccessibility = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\DangerousGoodsAccessibilityType::valueIsValid($dangerousGoodsAccessibility)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dangerousGoodsAccessibility, implode(', ', \CommerceFedEx\FedExPHP\Enums\DangerousGoodsAccessibilityType::getValidValues())), __LINE__);
        }
        $this->DangerousGoodsAccessibility = $dangerousGoodsAccessibility;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\InternationalDistributionSummaryDetail
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
