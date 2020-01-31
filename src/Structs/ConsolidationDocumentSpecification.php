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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CondensedCrnReportDetail
     */
    public $CondensedCrnReportDetail;
    /**
     * The ConsolidatedCommercialInvoiceDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the consolidated commercial invoice document.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommercialInvoiceDetail
     */
    public $ConsolidatedCommercialInvoiceDetail;
    /**
     * The CustomDocumentDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the consolidation-level custom documents.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CustomConsolidationDocumentDetail[]
     */
    public $CustomDocumentDetails;
    /**
     * The ConsolidatedCustomsLinehaulReportDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationCustomsLinehaulReportDetail
     */
    public $ConsolidatedCustomsLinehaulReportDetail;
    /**
     * The ConsolidatedPartyReportDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedPartyReportDetail
     */
    public $ConsolidatedPartyReportDetail;
    /**
     * The ConsolidatedSoldToSummaryReportDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedSoldToSummaryReportDetail
     */
    public $ConsolidatedSoldToSummaryReportDetail;
    /**
     * The CustomsPackingListDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the consolidation-level customs packing list.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CustomsPackingListDetail
     */
    public $CustomsPackingListDetail;
    /**
     * The CrnReportDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the Child Reference Number document.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CrnReportDetail
     */
    public $CrnReportDetail;
    /**
     * The CommoditiesByTrackingNumberDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CommoditiesByTrackingNumberReportDetail
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
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CondensedCrnReportDetail $condensedCrnReportDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommercialInvoiceDetail $consolidatedCommercialInvoiceDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomConsolidationDocumentDetail[] $customDocumentDetails
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationCustomsLinehaulReportDetail $consolidatedCustomsLinehaulReportDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedPartyReportDetail $consolidatedPartyReportDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedSoldToSummaryReportDetail $consolidatedSoldToSummaryReportDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomsPackingListDetail $customsPackingListDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CrnReportDetail $crnReportDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CommoditiesByTrackingNumberReportDetail $commoditiesByTrackingNumberDetail
     */
    public function __construct(array $consolidationDocumentTypes = array(), \NicholasCreativeMedia\FedExPHP\Structs\CondensedCrnReportDetail $condensedCrnReportDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommercialInvoiceDetail $consolidatedCommercialInvoiceDetail = null, array $customDocumentDetails = array(), \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationCustomsLinehaulReportDetail $consolidatedCustomsLinehaulReportDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedPartyReportDetail $consolidatedPartyReportDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedSoldToSummaryReportDetail $consolidatedSoldToSummaryReportDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\CustomsPackingListDetail $customsPackingListDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\CrnReportDetail $crnReportDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\CommoditiesByTrackingNumberReportDetail $commoditiesByTrackingNumberDetail = null)
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RequestedConsolidationDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RequestedConsolidationDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $consolidationDocumentTypes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setConsolidationDocumentTypes(array $consolidationDocumentTypes = array())
    {
        $invalidValues = array();
        foreach ($consolidationDocumentTypes as $consolidationDocumentSpecificationConsolidationDocumentTypesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\RequestedConsolidationDocumentType::valueIsValid($consolidationDocumentSpecificationConsolidationDocumentTypesItem)) {
                $invalidValues[] = var_export($consolidationDocumentSpecificationConsolidationDocumentTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\RequestedConsolidationDocumentType::getValidValues())), __LINE__);
        }
        $this->ConsolidationDocumentTypes = $consolidationDocumentTypes;
        return $this;
    }
    /**
     * Add item to ConsolidationDocumentTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RequestedConsolidationDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RequestedConsolidationDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function addToConsolidationDocumentTypes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\RequestedConsolidationDocumentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\RequestedConsolidationDocumentType::getValidValues())), __LINE__);
        }
        $this->ConsolidationDocumentTypes[] = $item;
        return $this;
    }
    /**
     * Get CondensedCrnReportDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CondensedCrnReportDetail|null
     */
    public function getCondensedCrnReportDetail()
    {
        return $this->CondensedCrnReportDetail;
    }
    /**
     * Set CondensedCrnReportDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CondensedCrnReportDetail $condensedCrnReportDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setCondensedCrnReportDetail(\NicholasCreativeMedia\FedExPHP\Structs\CondensedCrnReportDetail $condensedCrnReportDetail = null)
    {
        $this->CondensedCrnReportDetail = $condensedCrnReportDetail;
        return $this;
    }
    /**
     * Get ConsolidatedCommercialInvoiceDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommercialInvoiceDetail|null
     */
    public function getConsolidatedCommercialInvoiceDetail()
    {
        return $this->ConsolidatedCommercialInvoiceDetail;
    }
    /**
     * Set ConsolidatedCommercialInvoiceDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommercialInvoiceDetail $consolidatedCommercialInvoiceDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setConsolidatedCommercialInvoiceDetail(\NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedCommercialInvoiceDetail $consolidatedCommercialInvoiceDetail = null)
    {
        $this->ConsolidatedCommercialInvoiceDetail = $consolidatedCommercialInvoiceDetail;
        return $this;
    }
    /**
     * Get CustomDocumentDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomConsolidationDocumentDetail[]|null
     */
    public function getCustomDocumentDetails()
    {
        return $this->CustomDocumentDetails;
    }
    /**
     * Set CustomDocumentDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomConsolidationDocumentDetail[] $customDocumentDetails
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setCustomDocumentDetails(array $customDocumentDetails = array())
    {
        foreach ($customDocumentDetails as $consolidationDocumentSpecificationCustomDocumentDetailsItem) {
            // validation for constraint: itemType
            if (!$consolidationDocumentSpecificationCustomDocumentDetailsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\CustomConsolidationDocumentDetail) {
                throw new \InvalidArgumentException(sprintf('The CustomDocumentDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CustomConsolidationDocumentDetail, "%s" given', is_object($consolidationDocumentSpecificationCustomDocumentDetailsItem) ? get_class($consolidationDocumentSpecificationCustomDocumentDetailsItem) : gettype($consolidationDocumentSpecificationCustomDocumentDetailsItem)), __LINE__);
            }
        }
        $this->CustomDocumentDetails = $customDocumentDetails;
        return $this;
    }
    /**
     * Add item to CustomDocumentDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomConsolidationDocumentDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function addToCustomDocumentDetails(\NicholasCreativeMedia\FedExPHP\Structs\CustomConsolidationDocumentDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\CustomConsolidationDocumentDetail) {
            throw new \InvalidArgumentException(sprintf('The CustomDocumentDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CustomConsolidationDocumentDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomDocumentDetails[] = $item;
        return $this;
    }
    /**
     * Get ConsolidatedCustomsLinehaulReportDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationCustomsLinehaulReportDetail|null
     */
    public function getConsolidatedCustomsLinehaulReportDetail()
    {
        return $this->ConsolidatedCustomsLinehaulReportDetail;
    }
    /**
     * Set ConsolidatedCustomsLinehaulReportDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationCustomsLinehaulReportDetail $consolidatedCustomsLinehaulReportDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setConsolidatedCustomsLinehaulReportDetail(\NicholasCreativeMedia\FedExPHP\Structs\ConsolidationCustomsLinehaulReportDetail $consolidatedCustomsLinehaulReportDetail = null)
    {
        $this->ConsolidatedCustomsLinehaulReportDetail = $consolidatedCustomsLinehaulReportDetail;
        return $this;
    }
    /**
     * Get ConsolidatedPartyReportDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedPartyReportDetail|null
     */
    public function getConsolidatedPartyReportDetail()
    {
        return $this->ConsolidatedPartyReportDetail;
    }
    /**
     * Set ConsolidatedPartyReportDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedPartyReportDetail $consolidatedPartyReportDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setConsolidatedPartyReportDetail(\NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedPartyReportDetail $consolidatedPartyReportDetail = null)
    {
        $this->ConsolidatedPartyReportDetail = $consolidatedPartyReportDetail;
        return $this;
    }
    /**
     * Get ConsolidatedSoldToSummaryReportDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedSoldToSummaryReportDetail|null
     */
    public function getConsolidatedSoldToSummaryReportDetail()
    {
        return $this->ConsolidatedSoldToSummaryReportDetail;
    }
    /**
     * Set ConsolidatedSoldToSummaryReportDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedSoldToSummaryReportDetail $consolidatedSoldToSummaryReportDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setConsolidatedSoldToSummaryReportDetail(\NicholasCreativeMedia\FedExPHP\Structs\ConsolidatedSoldToSummaryReportDetail $consolidatedSoldToSummaryReportDetail = null)
    {
        $this->ConsolidatedSoldToSummaryReportDetail = $consolidatedSoldToSummaryReportDetail;
        return $this;
    }
    /**
     * Get CustomsPackingListDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomsPackingListDetail|null
     */
    public function getCustomsPackingListDetail()
    {
        return $this->CustomsPackingListDetail;
    }
    /**
     * Set CustomsPackingListDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomsPackingListDetail $customsPackingListDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setCustomsPackingListDetail(\NicholasCreativeMedia\FedExPHP\Structs\CustomsPackingListDetail $customsPackingListDetail = null)
    {
        $this->CustomsPackingListDetail = $customsPackingListDetail;
        return $this;
    }
    /**
     * Get CrnReportDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CrnReportDetail|null
     */
    public function getCrnReportDetail()
    {
        return $this->CrnReportDetail;
    }
    /**
     * Set CrnReportDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CrnReportDetail $crnReportDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setCrnReportDetail(\NicholasCreativeMedia\FedExPHP\Structs\CrnReportDetail $crnReportDetail = null)
    {
        $this->CrnReportDetail = $crnReportDetail;
        return $this;
    }
    /**
     * Get CommoditiesByTrackingNumberDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommoditiesByTrackingNumberReportDetail|null
     */
    public function getCommoditiesByTrackingNumberDetail()
    {
        return $this->CommoditiesByTrackingNumberDetail;
    }
    /**
     * Set CommoditiesByTrackingNumberDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CommoditiesByTrackingNumberReportDetail $commoditiesByTrackingNumberDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public function setCommoditiesByTrackingNumberDetail(\NicholasCreativeMedia\FedExPHP\Structs\CommoditiesByTrackingNumberReportDetail $commoditiesByTrackingNumberDetail = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification
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
