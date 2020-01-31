<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $TotalCustomsValue;
    /**
     * The TotalInsuredValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $TotalInsuredValue;
    /**
     * The TotalFreightCharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $TotalFreightCharges;
    /**
     * The TotalInsuranceCharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $TotalInsuranceCharges;
    /**
     * The TotalTaxesOrMiscellaneousCharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $TotalTaxesOrMiscellaneousCharges;
    /**
     * The TotalHandlingCosts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $TotalHandlingCosts;
    /**
     * The TotalPackingCosts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $TotalPackingCosts;
    /**
     * The DryIceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentDryIceDetail
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
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $totalWeight
     * @param int $totalPackageCount
     * @param int $totalUniqueAddressCount
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalCustomsValue
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalInsuredValue
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalFreightCharges
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalInsuranceCharges
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalTaxesOrMiscellaneousCharges
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalHandlingCosts
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalPackingCosts
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentDryIceDetail $dryIceDetail
     * @param string $dangerousGoodsAccessibility
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\Weight $totalWeight = null, $totalPackageCount = null, $totalUniqueAddressCount = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $totalCustomsValue = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $totalInsuredValue = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $totalFreightCharges = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $totalInsuranceCharges = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $totalTaxesOrMiscellaneousCharges = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $totalHandlingCosts = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $totalPackingCosts = null, \NicholasCreativeMedia\FedExPHP\Structs\ShipmentDryIceDetail $dryIceDetail = null, $dangerousGoodsAccessibility = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }
    /**
     * Set TotalWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $totalWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setTotalWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $totalWeight = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getTotalCustomsValue()
    {
        return $this->TotalCustomsValue;
    }
    /**
     * Set TotalCustomsValue value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalCustomsValue
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setTotalCustomsValue(\NicholasCreativeMedia\FedExPHP\Structs\Money $totalCustomsValue = null)
    {
        $this->TotalCustomsValue = $totalCustomsValue;
        return $this;
    }
    /**
     * Get TotalInsuredValue value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getTotalInsuredValue()
    {
        return $this->TotalInsuredValue;
    }
    /**
     * Set TotalInsuredValue value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalInsuredValue
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setTotalInsuredValue(\NicholasCreativeMedia\FedExPHP\Structs\Money $totalInsuredValue = null)
    {
        $this->TotalInsuredValue = $totalInsuredValue;
        return $this;
    }
    /**
     * Get TotalFreightCharges value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getTotalFreightCharges()
    {
        return $this->TotalFreightCharges;
    }
    /**
     * Set TotalFreightCharges value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalFreightCharges
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setTotalFreightCharges(\NicholasCreativeMedia\FedExPHP\Structs\Money $totalFreightCharges = null)
    {
        $this->TotalFreightCharges = $totalFreightCharges;
        return $this;
    }
    /**
     * Get TotalInsuranceCharges value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getTotalInsuranceCharges()
    {
        return $this->TotalInsuranceCharges;
    }
    /**
     * Set TotalInsuranceCharges value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalInsuranceCharges
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setTotalInsuranceCharges(\NicholasCreativeMedia\FedExPHP\Structs\Money $totalInsuranceCharges = null)
    {
        $this->TotalInsuranceCharges = $totalInsuranceCharges;
        return $this;
    }
    /**
     * Get TotalTaxesOrMiscellaneousCharges value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getTotalTaxesOrMiscellaneousCharges()
    {
        return $this->TotalTaxesOrMiscellaneousCharges;
    }
    /**
     * Set TotalTaxesOrMiscellaneousCharges value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalTaxesOrMiscellaneousCharges
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setTotalTaxesOrMiscellaneousCharges(\NicholasCreativeMedia\FedExPHP\Structs\Money $totalTaxesOrMiscellaneousCharges = null)
    {
        $this->TotalTaxesOrMiscellaneousCharges = $totalTaxesOrMiscellaneousCharges;
        return $this;
    }
    /**
     * Get TotalHandlingCosts value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getTotalHandlingCosts()
    {
        return $this->TotalHandlingCosts;
    }
    /**
     * Set TotalHandlingCosts value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalHandlingCosts
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setTotalHandlingCosts(\NicholasCreativeMedia\FedExPHP\Structs\Money $totalHandlingCosts = null)
    {
        $this->TotalHandlingCosts = $totalHandlingCosts;
        return $this;
    }
    /**
     * Get TotalPackingCosts value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getTotalPackingCosts()
    {
        return $this->TotalPackingCosts;
    }
    /**
     * Set TotalPackingCosts value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalPackingCosts
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setTotalPackingCosts(\NicholasCreativeMedia\FedExPHP\Structs\Money $totalPackingCosts = null)
    {
        $this->TotalPackingCosts = $totalPackingCosts;
        return $this;
    }
    /**
     * Get DryIceDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentDryIceDetail|null
     */
    public function getDryIceDetail()
    {
        return $this->DryIceDetail;
    }
    /**
     * Set DryIceDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentDryIceDetail $dryIceDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setDryIceDetail(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentDryIceDetail $dryIceDetail = null)
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DangerousGoodsAccessibilityType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DangerousGoodsAccessibilityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dangerousGoodsAccessibility
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public function setDangerousGoodsAccessibility($dangerousGoodsAccessibility = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DangerousGoodsAccessibilityType::valueIsValid($dangerousGoodsAccessibility)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dangerousGoodsAccessibility, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DangerousGoodsAccessibilityType::getValidValues())), __LINE__);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail
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
