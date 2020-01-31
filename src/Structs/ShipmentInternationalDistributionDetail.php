<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentInternationalDistributionDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the attributes of a shipment related to its role in an international distribution (consolidation).
 * @subpackage Structs
 */
class ShipmentInternationalDistributionDetail extends AbstractStructBase
{
    /**
     * The ClearanceFacilityLocId
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the FedEx facility at which customs clearance will be performed.
     * - minOccurs: 0
     * @var string
     */
    public $ClearanceFacilityLocId;
    /**
     * The ClearanceType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of clearance performed at the clearance facility.
     * - minOccurs: 0
     * @var string
     */
    public $ClearanceType;
    /**
     * The SummaryDetail
     * Meta informations extracted from the WSDL
     * - documentation: Provides summary totals across all CRNs in a distribution.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail
     */
    public $SummaryDetail;
    /**
     * The SplitPaymentSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how charges relating to different aspects of a shipment are to be paid.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentSpecification
     */
    public $SplitPaymentSpecification;
    /**
     * Constructor method for ShipmentInternationalDistributionDetail
     * @uses ShipmentInternationalDistributionDetail::setClearanceFacilityLocId()
     * @uses ShipmentInternationalDistributionDetail::setClearanceType()
     * @uses ShipmentInternationalDistributionDetail::setSummaryDetail()
     * @uses ShipmentInternationalDistributionDetail::setSplitPaymentSpecification()
     * @param string $clearanceFacilityLocId
     * @param string $clearanceType
     * @param \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail $summaryDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentSpecification $splitPaymentSpecification
     */
    public function __construct($clearanceFacilityLocId = null, $clearanceType = null, \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail $summaryDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentSpecification $splitPaymentSpecification = null)
    {
        $this
            ->setClearanceFacilityLocId($clearanceFacilityLocId)
            ->setClearanceType($clearanceType)
            ->setSummaryDetail($summaryDetail)
            ->setSplitPaymentSpecification($splitPaymentSpecification);
    }
    /**
     * Get ClearanceFacilityLocId value
     * @return string|null
     */
    public function getClearanceFacilityLocId()
    {
        return $this->ClearanceFacilityLocId;
    }
    /**
     * Set ClearanceFacilityLocId value
     * @param string $clearanceFacilityLocId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentInternationalDistributionDetail
     */
    public function setClearanceFacilityLocId($clearanceFacilityLocId = null)
    {
        // validation for constraint: string
        if (!is_null($clearanceFacilityLocId) && !is_string($clearanceFacilityLocId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clearanceFacilityLocId)), __LINE__);
        }
        $this->ClearanceFacilityLocId = $clearanceFacilityLocId;
        return $this;
    }
    /**
     * Get ClearanceType value
     * @return string|null
     */
    public function getClearanceType()
    {
        return $this->ClearanceType;
    }
    /**
     * Set ClearanceType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DistributionClearanceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DistributionClearanceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $clearanceType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentInternationalDistributionDetail
     */
    public function setClearanceType($clearanceType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DistributionClearanceType::valueIsValid($clearanceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $clearanceType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DistributionClearanceType::getValidValues())), __LINE__);
        }
        $this->ClearanceType = $clearanceType;
        return $this;
    }
    /**
     * Get SummaryDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail|null
     */
    public function getSummaryDetail()
    {
        return $this->SummaryDetail;
    }
    /**
     * Set SummaryDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail $summaryDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentInternationalDistributionDetail
     */
    public function setSummaryDetail(\NicholasCreativeMedia\FedExPHP\Structs\InternationalDistributionSummaryDetail $summaryDetail = null)
    {
        $this->SummaryDetail = $summaryDetail;
        return $this;
    }
    /**
     * Get SplitPaymentSpecification value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentSpecification|null
     */
    public function getSplitPaymentSpecification()
    {
        return $this->SplitPaymentSpecification;
    }
    /**
     * Set SplitPaymentSpecification value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentSpecification $splitPaymentSpecification
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentInternationalDistributionDetail
     */
    public function setSplitPaymentSpecification(\NicholasCreativeMedia\FedExPHP\Structs\SplitPaymentSpecification $splitPaymentSpecification = null)
    {
        $this->SplitPaymentSpecification = $splitPaymentSpecification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentInternationalDistributionDetail
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
