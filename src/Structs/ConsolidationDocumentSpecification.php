<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsolidationDocumentSpecification Structs
 * Meta informations extracted from the WSDL
 * - documentation: Contains all data required for (non-label) documents to be produced in conjunction with a specific international distribution consolidation.
 * @subpackage Structs
 */
class ConsolidationDocumentSpecification extends AbstractStructBase
{
    /**
     * The ConsolidationDocumentTypes
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the types of international distribution documents requested by the shipper.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ConsolidationDocumentTypes;
    /**
     * The CondensedCrnReportDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the short form of the Child Reference Number document.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CondensedCrnReportDetail
     */
    public $CondensedCrnReportDetail;
    /**
     * The ConsolidatedCommercialInvoiceDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the consolidated commercial invoice document.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ConsolidatedCommercialInvoiceDetail
     */
    public $ConsolidatedCommercialInvoiceDetail;
    /**
     * The CustomDocumentDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the consolidation-level custom documents.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CustomConsolidationDocumentDetail[]
     */
    public $CustomDocumentDetails;
    /**
     * The ConsolidatedCustomsLinehaulReportDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ConsolidationCustomsLinehaulReportDetail
     */
    public $ConsolidatedCustomsLinehaulReportDetail;
    /**
     * The ConsolidatedPartyReportDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ConsolidatedPartyReportDetail
     */
    public $ConsolidatedPartyReportDetail;
    /**
     * The ConsolidatedSoldToSummaryReportDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ConsolidatedSoldToSummaryReportDetail
     */
    public $ConsolidatedSoldToSummaryReportDetail;
    /**
     * The CustomsPackingListDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the consolidation-level customs packing list.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CustomsPackingListDetail
     */
    public $CustomsPackingListDetail;
    /**
     * The CrnReportDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the Child Reference Number document.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CrnReportDetail
     */
    public $CrnReportDetail;
    /**
     * The CommoditiesByTrackingNumberDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CommoditiesByTrackingNumberReportDetail
     */
    public $CommoditiesByTrackingNumberDetail;
    /**
     * Constructor method for ConsolidationDocumentSpecification
     * @uses ConsolidationDocumentSpecification::setConsolidationDocumentTypes()
     * @uses ConsolidationDocumentSpecification::setCondensedCrnReportDetail()
     * @uses ConsolidationDocumentSpecification::setConsolidatedCommercialInvoiceDetail()
     * @uses ConsolidationDocumentSpecification::setCustomDocumentDetails()
     * @uses ConsolidationDocumentSpecification::setConsolidatedCustomsLinehaulReportDetail()
     * @uses ConsolidationDocumentSpecification::setConsolidatedPartyReportDetail()
     * @uses ConsolidationDocumentSpecification::setConsolidatedSoldToSummaryReportDetail()
     * @uses ConsolidationDocumentSpecification::setCustomsPackingListDetail()
     * @uses ConsolidationDocumentSpecification::setCrnReportDetail()
     * @uses ConsolidationDocumentSpecification::setCommoditiesByTrackingNumberDetail()
     * @param string[] $consolidationDocumentTypes
     * @param \CommerceFedEx\FedExPHP\Structs\CondensedCrnReportDetail $condensedCrnReportDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidatedCommercialInvoiceDetail $consolidatedCommercialInvoiceDetail
     * @param \CommerceFedEx\FedExPHP\Structs\CustomConsolidationDocumentDetail[] $customDocumentDetails
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidationCustomsLinehaulReportDetail $consolidatedCustomsLinehaulReportDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidatedPartyReportDetail $consolidatedPartyReportDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidatedSoldToSummaryReportDetail $consolidatedSoldToSummaryReportDetail
     * @param \CommerceFedEx\FedExPHP\Structs\CustomsPackingListDetail $customsPackingListDetail
     * @param \CommerceFedEx\FedExPHP\Structs\CrnReportDetail $crnReportDetail
     * @param \CommerceFedEx\FedExPHP\Structs\CommoditiesByTrackingNumberReportDetail $commoditiesByTrackingNumberDetail
     */
    public function __construct(array $consolidationDocumentTypes = array(), \CommerceFedEx\FedExPHP\Structs\CondensedCrnReportDetail $condensedCrnReportDetail = null, \CommerceFedEx\FedExPHP\Structs\ConsolidatedCommercialInvoiceDetail $consolidatedCommercialInvoiceDetail = null, array $customDocumentDetails = array(), \CommerceFedEx\FedExPHP\Structs\ConsolidationCustomsLinehaulReportDetail $consolidatedCustomsLinehaulReportDetail = null, \CommerceFedEx\FedExPHP\Structs\ConsolidatedPartyReportDetail $consolidatedPartyReportDetail = null, \CommerceFedEx\FedExPHP\Structs\ConsolidatedSoldToSummaryReportDetail $consolidatedSoldToSummaryReportDetail = null, \CommerceFedEx\FedExPHP\Structs\CustomsPackingListDetail $customsPackingListDetail = null, \CommerceFedEx\FedExPHP\Structs\CrnReportDetail $crnReportDetail = null, \CommerceFedEx\FedExPHP\Structs\CommoditiesByTrackingNumberReportDetail $commoditiesByTrackingNumberDetail = null)
    {
        $this
            ->setConsolidationDocumentTypes($consolidationDocumentTypes)
            ->setCondensedCrnReportDetail($condensedCrnReportDetail)
            ->setConsolidatedCommercialInvoiceDetail($consolidatedCommercialInvoiceDetail)
            ->setCustomDocumentDetails($customDocumentDetails)
            ->setConsolidatedCustomsLinehaulReportDetail($consolidatedCustomsLinehaulReportDetail)
            ->setConsolidatedPartyReportDetail($consolidatedPartyReportDetail)
            ->setConsolidatedSoldToSummaryReportDetail($consolidatedSoldToSummaryReportDetail)
            ->setCustomsPackingListDetail($customsPackingListDetail)
            ->setCrnReportDetail($crnReportDetail)
            ->setCommoditiesByTrackingNumberDetail($commoditiesByTrackingNumberDetail);
    }
    /**
     * Get ConsolidationDocumentTypes value
     * @return string[]|null
     */
    public function getConsolidationDocumentTypes()
    {
        return $this->ConsolidationDocumentTypes;
    }
    /**
     * Set ConsolidationDocumentTypes value
     * @uses \CommerceFedEx\FedExPHP\Enums\RequestedConsolidationDocumentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\RequestedConsolidationDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $consolidationDocumentTypes
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setConsolidationDocumentTypes(array $consolidationDocumentTypes = array())
    {
        $invalidValues = array();
        foreach ($consolidationDocumentTypes as $consolidationDocumentSpecificationConsolidationDocumentTypesItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\RequestedConsolidationDocumentType::valueIsValid($consolidationDocumentSpecificationConsolidationDocumentTypesItem)) {
                $invalidValues[] = var_export($consolidationDocumentSpecificationConsolidationDocumentTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\RequestedConsolidationDocumentType::getValidValues())), __LINE__);
        }
        $this->ConsolidationDocumentTypes = $consolidationDocumentTypes;
        return $this;
    }
    /**
     * Add item to ConsolidationDocumentTypes value
     * @uses \CommerceFedEx\FedExPHP\Enums\RequestedConsolidationDocumentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\RequestedConsolidationDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function addToConsolidationDocumentTypes($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\RequestedConsolidationDocumentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\RequestedConsolidationDocumentType::getValidValues())), __LINE__);
        }
        $this->ConsolidationDocumentTypes[] = $item;
        return $this;
    }
    /**
     * Get CondensedCrnReportDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\CondensedCrnReportDetail|null
     */
    public function getCondensedCrnReportDetail()
    {
        return $this->CondensedCrnReportDetail;
    }
    /**
     * Set CondensedCrnReportDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\CondensedCrnReportDetail $condensedCrnReportDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setCondensedCrnReportDetail(\CommerceFedEx\FedExPHP\Structs\CondensedCrnReportDetail $condensedCrnReportDetail = null)
    {
        $this->CondensedCrnReportDetail = $condensedCrnReportDetail;
        return $this;
    }
    /**
     * Get ConsolidatedCommercialInvoiceDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidatedCommercialInvoiceDetail|null
     */
    public function getConsolidatedCommercialInvoiceDetail()
    {
        return $this->ConsolidatedCommercialInvoiceDetail;
    }
    /**
     * Set ConsolidatedCommercialInvoiceDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidatedCommercialInvoiceDetail $consolidatedCommercialInvoiceDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setConsolidatedCommercialInvoiceDetail(\CommerceFedEx\FedExPHP\Structs\ConsolidatedCommercialInvoiceDetail $consolidatedCommercialInvoiceDetail = null)
    {
        $this->ConsolidatedCommercialInvoiceDetail = $consolidatedCommercialInvoiceDetail;
        return $this;
    }
    /**
     * Get CustomDocumentDetails value
     * @return \CommerceFedEx\FedExPHP\Structs\CustomConsolidationDocumentDetail[]|null
     */
    public function getCustomDocumentDetails()
    {
        return $this->CustomDocumentDetails;
    }
    /**
     * Set CustomDocumentDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomConsolidationDocumentDetail[] $customDocumentDetails
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setCustomDocumentDetails(array $customDocumentDetails = array())
    {
        foreach ($customDocumentDetails as $consolidationDocumentSpecificationCustomDocumentDetailsItem) {
            // validation for constraint: itemType
            if (!$consolidationDocumentSpecificationCustomDocumentDetailsItem instanceof \CommerceFedEx\FedExPHP\Structs\CustomConsolidationDocumentDetail) {
                throw new \InvalidArgumentException(sprintf('The CustomDocumentDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomConsolidationDocumentDetail, "%s" given', is_object($consolidationDocumentSpecificationCustomDocumentDetailsItem) ? get_class($consolidationDocumentSpecificationCustomDocumentDetailsItem) : gettype($consolidationDocumentSpecificationCustomDocumentDetailsItem)), __LINE__);
            }
        }
        $this->CustomDocumentDetails = $customDocumentDetails;
        return $this;
    }
    /**
     * Add item to CustomDocumentDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomConsolidationDocumentDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function addToCustomDocumentDetails(\CommerceFedEx\FedExPHP\Structs\CustomConsolidationDocumentDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\CustomConsolidationDocumentDetail) {
            throw new \InvalidArgumentException(sprintf('The CustomDocumentDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomConsolidationDocumentDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomDocumentDetails[] = $item;
        return $this;
    }
    /**
     * Get ConsolidatedCustomsLinehaulReportDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationCustomsLinehaulReportDetail|null
     */
    public function getConsolidatedCustomsLinehaulReportDetail()
    {
        return $this->ConsolidatedCustomsLinehaulReportDetail;
    }
    /**
     * Set ConsolidatedCustomsLinehaulReportDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidationCustomsLinehaulReportDetail $consolidatedCustomsLinehaulReportDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setConsolidatedCustomsLinehaulReportDetail(\CommerceFedEx\FedExPHP\Structs\ConsolidationCustomsLinehaulReportDetail $consolidatedCustomsLinehaulReportDetail = null)
    {
        $this->ConsolidatedCustomsLinehaulReportDetail = $consolidatedCustomsLinehaulReportDetail;
        return $this;
    }
    /**
     * Get ConsolidatedPartyReportDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidatedPartyReportDetail|null
     */
    public function getConsolidatedPartyReportDetail()
    {
        return $this->ConsolidatedPartyReportDetail;
    }
    /**
     * Set ConsolidatedPartyReportDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidatedPartyReportDetail $consolidatedPartyReportDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setConsolidatedPartyReportDetail(\CommerceFedEx\FedExPHP\Structs\ConsolidatedPartyReportDetail $consolidatedPartyReportDetail = null)
    {
        $this->ConsolidatedPartyReportDetail = $consolidatedPartyReportDetail;
        return $this;
    }
    /**
     * Get ConsolidatedSoldToSummaryReportDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidatedSoldToSummaryReportDetail|null
     */
    public function getConsolidatedSoldToSummaryReportDetail()
    {
        return $this->ConsolidatedSoldToSummaryReportDetail;
    }
    /**
     * Set ConsolidatedSoldToSummaryReportDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidatedSoldToSummaryReportDetail $consolidatedSoldToSummaryReportDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setConsolidatedSoldToSummaryReportDetail(\CommerceFedEx\FedExPHP\Structs\ConsolidatedSoldToSummaryReportDetail $consolidatedSoldToSummaryReportDetail = null)
    {
        $this->ConsolidatedSoldToSummaryReportDetail = $consolidatedSoldToSummaryReportDetail;
        return $this;
    }
    /**
     * Get CustomsPackingListDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsPackingListDetail|null
     */
    public function getCustomsPackingListDetail()
    {
        return $this->CustomsPackingListDetail;
    }
    /**
     * Set CustomsPackingListDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\CustomsPackingListDetail $customsPackingListDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setCustomsPackingListDetail(\CommerceFedEx\FedExPHP\Structs\CustomsPackingListDetail $customsPackingListDetail = null)
    {
        $this->CustomsPackingListDetail = $customsPackingListDetail;
        return $this;
    }
    /**
     * Get CrnReportDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\CrnReportDetail|null
     */
    public function getCrnReportDetail()
    {
        return $this->CrnReportDetail;
    }
    /**
     * Set CrnReportDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\CrnReportDetail $crnReportDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setCrnReportDetail(\CommerceFedEx\FedExPHP\Structs\CrnReportDetail $crnReportDetail = null)
    {
        $this->CrnReportDetail = $crnReportDetail;
        return $this;
    }
    /**
     * Get CommoditiesByTrackingNumberDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\CommoditiesByTrackingNumberReportDetail|null
     */
    public function getCommoditiesByTrackingNumberDetail()
    {
        return $this->CommoditiesByTrackingNumberDetail;
    }
    /**
     * Set CommoditiesByTrackingNumberDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\CommoditiesByTrackingNumberReportDetail $commoditiesByTrackingNumberDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setCommoditiesByTrackingNumberDetail(\CommerceFedEx\FedExPHP\Structs\CommoditiesByTrackingNumberReportDetail $commoditiesByTrackingNumberDetail = null)
    {
        $this->CommoditiesByTrackingNumberDetail = $commoditiesByTrackingNumberDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification
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
