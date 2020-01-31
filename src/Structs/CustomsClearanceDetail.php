<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomsClearanceDetail Structs
 * @subpackage Structs
 */
class CustomsClearanceDetail extends AbstractStructBase
{
    /**
     * The Brokers
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\BrokerDetail[]
     */
    public $Brokers;
    /**
     * The ClearanceBrokerage
     * Meta informations extracted from the WSDL
     * - documentation: Interacts both with properties of the shipment and contractual relationship with the shipper.
     * - minOccurs: 0
     * @var string
     */
    public $ClearanceBrokerage;
    /**
     * The CustomsOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CustomsOptionDetail
     */
    public $CustomsOptions;
    /**
     * The ImporterOfRecord
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Party
     */
    public $ImporterOfRecord;
    /**
     * The RecipientCustomsId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how the recipient is identified for customs purposes; the requirements on this information vary with destination country.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\RecipientCustomsId
     */
    public $RecipientCustomsId;
    /**
     * The DutiesPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Payment
     */
    public $DutiesPayment;
    /**
     * The DocumentContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentContent;
    /**
     * The CustomsValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $CustomsValue;
    /**
     * The FreightOnValue
     * Meta informations extracted from the WSDL
     * - documentation: Identifies responsibilities with respect to loss, damage, etc.
     * - minOccurs: 0
     * @var string
     */
    public $FreightOnValue;
    /**
     * The InsuranceCharges
     * Meta informations extracted from the WSDL
     * - documentation: Documents amount paid to third party for coverage of shipment content.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $InsuranceCharges;
    /**
     * The PartiesToTransactionAreRelated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $PartiesToTransactionAreRelated;
    /**
     * The CommercialInvoice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CommercialInvoice
     */
    public $CommercialInvoice;
    /**
     * The Commodities
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Commodity[]
     */
    public $Commodities;
    /**
     * The ExportDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ExportDetail
     */
    public $ExportDetail;
    /**
     * The RegulatoryControls
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RegulatoryControls;
    /**
     * The DeclarationStatementDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CustomsDeclarationStatementDetail
     */
    public $DeclarationStatementDetail;
    /**
     * Constructor method for CustomsClearanceDetail
     * @uses CustomsClearanceDetail::setBrokers()
     * @uses CustomsClearanceDetail::setClearanceBrokerage()
     * @uses CustomsClearanceDetail::setCustomsOptions()
     * @uses CustomsClearanceDetail::setImporterOfRecord()
     * @uses CustomsClearanceDetail::setRecipientCustomsId()
     * @uses CustomsClearanceDetail::setDutiesPayment()
     * @uses CustomsClearanceDetail::setDocumentContent()
     * @uses CustomsClearanceDetail::setCustomsValue()
     * @uses CustomsClearanceDetail::setFreightOnValue()
     * @uses CustomsClearanceDetail::setInsuranceCharges()
     * @uses CustomsClearanceDetail::setPartiesToTransactionAreRelated()
     * @uses CustomsClearanceDetail::setCommercialInvoice()
     * @uses CustomsClearanceDetail::setCommodities()
     * @uses CustomsClearanceDetail::setExportDetail()
     * @uses CustomsClearanceDetail::setRegulatoryControls()
     * @uses CustomsClearanceDetail::setDeclarationStatementDetail()
     * @param \CommerceFedEx\FedExPHP\Structs\BrokerDetail[] $brokers
     * @param string $clearanceBrokerage
     * @param \CommerceFedEx\FedExPHP\Structs\CustomsOptionDetail $customsOptions
     * @param \CommerceFedEx\FedExPHP\Structs\Party $importerOfRecord
     * @param \CommerceFedEx\FedExPHP\Structs\RecipientCustomsId $recipientCustomsId
     * @param \CommerceFedEx\FedExPHP\Structs\Payment $dutiesPayment
     * @param string $documentContent
     * @param \CommerceFedEx\FedExPHP\Structs\Money $customsValue
     * @param string $freightOnValue
     * @param \CommerceFedEx\FedExPHP\Structs\Money $insuranceCharges
     * @param bool $partiesToTransactionAreRelated
     * @param \CommerceFedEx\FedExPHP\Structs\CommercialInvoice $commercialInvoice
     * @param \CommerceFedEx\FedExPHP\Structs\Commodity[] $commodities
     * @param \CommerceFedEx\FedExPHP\Structs\ExportDetail $exportDetail
     * @param string[] $regulatoryControls
     * @param \CommerceFedEx\FedExPHP\Structs\CustomsDeclarationStatementDetail $declarationStatementDetail
     */
    public function __construct(array $brokers = array(), $clearanceBrokerage = null, \CommerceFedEx\FedExPHP\Structs\CustomsOptionDetail $customsOptions = null, \CommerceFedEx\FedExPHP\Structs\Party $importerOfRecord = null, \CommerceFedEx\FedExPHP\Structs\RecipientCustomsId $recipientCustomsId = null, \CommerceFedEx\FedExPHP\Structs\Payment $dutiesPayment = null, $documentContent = null, \CommerceFedEx\FedExPHP\Structs\Money $customsValue = null, $freightOnValue = null, \CommerceFedEx\FedExPHP\Structs\Money $insuranceCharges = null, $partiesToTransactionAreRelated = null, \CommerceFedEx\FedExPHP\Structs\CommercialInvoice $commercialInvoice = null, array $commodities = array(), \CommerceFedEx\FedExPHP\Structs\ExportDetail $exportDetail = null, array $regulatoryControls = array(), \CommerceFedEx\FedExPHP\Structs\CustomsDeclarationStatementDetail $declarationStatementDetail = null)
    {
        $this
            ->setBrokers($brokers)
            ->setClearanceBrokerage($clearanceBrokerage)
            ->setCustomsOptions($customsOptions)
            ->setImporterOfRecord($importerOfRecord)
            ->setRecipientCustomsId($recipientCustomsId)
            ->setDutiesPayment($dutiesPayment)
            ->setDocumentContent($documentContent)
            ->setCustomsValue($customsValue)
            ->setFreightOnValue($freightOnValue)
            ->setInsuranceCharges($insuranceCharges)
            ->setPartiesToTransactionAreRelated($partiesToTransactionAreRelated)
            ->setCommercialInvoice($commercialInvoice)
            ->setCommodities($commodities)
            ->setExportDetail($exportDetail)
            ->setRegulatoryControls($regulatoryControls)
            ->setDeclarationStatementDetail($declarationStatementDetail);
    }
    /**
     * Get Brokers value
     * @return \CommerceFedEx\FedExPHP\Structs\BrokerDetail[]|null
     */
    public function getBrokers()
    {
        return $this->Brokers;
    }
    /**
     * Set Brokers value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\BrokerDetail[] $brokers
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function setBrokers(array $brokers = array())
    {
        foreach ($brokers as $customsClearanceDetailBrokersItem) {
            // validation for constraint: itemType
            if (!$customsClearanceDetailBrokersItem instanceof \CommerceFedEx\FedExPHP\Structs\BrokerDetail) {
                throw new \InvalidArgumentException(sprintf('The Brokers property can only contain items of \CommerceFedEx\FedExPHP\Structs\BrokerDetail, "%s" given', is_object($customsClearanceDetailBrokersItem) ? get_class($customsClearanceDetailBrokersItem) : gettype($customsClearanceDetailBrokersItem)), __LINE__);
            }
        }
        $this->Brokers = $brokers;
        return $this;
    }
    /**
     * Add item to Brokers value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\BrokerDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function addToBrokers(\CommerceFedEx\FedExPHP\Structs\BrokerDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\BrokerDetail) {
            throw new \InvalidArgumentException(sprintf('The Brokers property can only contain items of \CommerceFedEx\FedExPHP\Structs\BrokerDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Brokers[] = $item;
        return $this;
    }
    /**
     * Get ClearanceBrokerage value
     * @return string|null
     */
    public function getClearanceBrokerage()
    {
        return $this->ClearanceBrokerage;
    }
    /**
     * Set ClearanceBrokerage value
     * @uses \CommerceFedEx\FedExPHP\Enums\ClearanceBrokerageType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ClearanceBrokerageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $clearanceBrokerage
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function setClearanceBrokerage($clearanceBrokerage = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ClearanceBrokerageType::valueIsValid($clearanceBrokerage)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $clearanceBrokerage, implode(', ', \CommerceFedEx\FedExPHP\Enums\ClearanceBrokerageType::getValidValues())), __LINE__);
        }
        $this->ClearanceBrokerage = $clearanceBrokerage;
        return $this;
    }
    /**
     * Get CustomsOptions value
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsOptionDetail|null
     */
    public function getCustomsOptions()
    {
        return $this->CustomsOptions;
    }
    /**
     * Set CustomsOptions value
     * @param \CommerceFedEx\FedExPHP\Structs\CustomsOptionDetail $customsOptions
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function setCustomsOptions(\CommerceFedEx\FedExPHP\Structs\CustomsOptionDetail $customsOptions = null)
    {
        $this->CustomsOptions = $customsOptions;
        return $this;
    }
    /**
     * Get ImporterOfRecord value
     * @return \CommerceFedEx\FedExPHP\Structs\Party|null
     */
    public function getImporterOfRecord()
    {
        return $this->ImporterOfRecord;
    }
    /**
     * Set ImporterOfRecord value
     * @param \CommerceFedEx\FedExPHP\Structs\Party $importerOfRecord
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function setImporterOfRecord(\CommerceFedEx\FedExPHP\Structs\Party $importerOfRecord = null)
    {
        $this->ImporterOfRecord = $importerOfRecord;
        return $this;
    }
    /**
     * Get RecipientCustomsId value
     * @return \CommerceFedEx\FedExPHP\Structs\RecipientCustomsId|null
     */
    public function getRecipientCustomsId()
    {
        return $this->RecipientCustomsId;
    }
    /**
     * Set RecipientCustomsId value
     * @param \CommerceFedEx\FedExPHP\Structs\RecipientCustomsId $recipientCustomsId
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function setRecipientCustomsId(\CommerceFedEx\FedExPHP\Structs\RecipientCustomsId $recipientCustomsId = null)
    {
        $this->RecipientCustomsId = $recipientCustomsId;
        return $this;
    }
    /**
     * Get DutiesPayment value
     * @return \CommerceFedEx\FedExPHP\Structs\Payment|null
     */
    public function getDutiesPayment()
    {
        return $this->DutiesPayment;
    }
    /**
     * Set DutiesPayment value
     * @param \CommerceFedEx\FedExPHP\Structs\Payment $dutiesPayment
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function setDutiesPayment(\CommerceFedEx\FedExPHP\Structs\Payment $dutiesPayment = null)
    {
        $this->DutiesPayment = $dutiesPayment;
        return $this;
    }
    /**
     * Get DocumentContent value
     * @return string|null
     */
    public function getDocumentContent()
    {
        return $this->DocumentContent;
    }
    /**
     * Set DocumentContent value
     * @uses \CommerceFedEx\FedExPHP\Enums\InternationalDocumentContentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\InternationalDocumentContentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $documentContent
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function setDocumentContent($documentContent = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\InternationalDocumentContentType::valueIsValid($documentContent)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $documentContent, implode(', ', \CommerceFedEx\FedExPHP\Enums\InternationalDocumentContentType::getValidValues())), __LINE__);
        }
        $this->DocumentContent = $documentContent;
        return $this;
    }
    /**
     * Get CustomsValue value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getCustomsValue()
    {
        return $this->CustomsValue;
    }
    /**
     * Set CustomsValue value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $customsValue
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function setCustomsValue(\CommerceFedEx\FedExPHP\Structs\Money $customsValue = null)
    {
        $this->CustomsValue = $customsValue;
        return $this;
    }
    /**
     * Get FreightOnValue value
     * @return string|null
     */
    public function getFreightOnValue()
    {
        return $this->FreightOnValue;
    }
    /**
     * Set FreightOnValue value
     * @uses \CommerceFedEx\FedExPHP\Enums\FreightOnValueType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\FreightOnValueType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $freightOnValue
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function setFreightOnValue($freightOnValue = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\FreightOnValueType::valueIsValid($freightOnValue)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $freightOnValue, implode(', ', \CommerceFedEx\FedExPHP\Enums\FreightOnValueType::getValidValues())), __LINE__);
        }
        $this->FreightOnValue = $freightOnValue;
        return $this;
    }
    /**
     * Get InsuranceCharges value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getInsuranceCharges()
    {
        return $this->InsuranceCharges;
    }
    /**
     * Set InsuranceCharges value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $insuranceCharges
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function setInsuranceCharges(\CommerceFedEx\FedExPHP\Structs\Money $insuranceCharges = null)
    {
        $this->InsuranceCharges = $insuranceCharges;
        return $this;
    }
    /**
     * Get PartiesToTransactionAreRelated value
     * @return bool|null
     */
    public function getPartiesToTransactionAreRelated()
    {
        return $this->PartiesToTransactionAreRelated;
    }
    /**
     * Set PartiesToTransactionAreRelated value
     * @param bool $partiesToTransactionAreRelated
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function setPartiesToTransactionAreRelated($partiesToTransactionAreRelated = null)
    {
        $this->PartiesToTransactionAreRelated = $partiesToTransactionAreRelated;
        return $this;
    }
    /**
     * Get CommercialInvoice value
     * @return \CommerceFedEx\FedExPHP\Structs\CommercialInvoice|null
     */
    public function getCommercialInvoice()
    {
        return $this->CommercialInvoice;
    }
    /**
     * Set CommercialInvoice value
     * @param \CommerceFedEx\FedExPHP\Structs\CommercialInvoice $commercialInvoice
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function setCommercialInvoice(\CommerceFedEx\FedExPHP\Structs\CommercialInvoice $commercialInvoice = null)
    {
        $this->CommercialInvoice = $commercialInvoice;
        return $this;
    }
    /**
     * Get Commodities value
     * @return \CommerceFedEx\FedExPHP\Structs\Commodity[]|null
     */
    public function getCommodities()
    {
        return $this->Commodities;
    }
    /**
     * Set Commodities value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Commodity[] $commodities
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function setCommodities(array $commodities = array())
    {
        foreach ($commodities as $customsClearanceDetailCommoditiesItem) {
            // validation for constraint: itemType
            if (!$customsClearanceDetailCommoditiesItem instanceof \CommerceFedEx\FedExPHP\Structs\Commodity) {
                throw new \InvalidArgumentException(sprintf('The Commodities property can only contain items of \CommerceFedEx\FedExPHP\Structs\Commodity, "%s" given', is_object($customsClearanceDetailCommoditiesItem) ? get_class($customsClearanceDetailCommoditiesItem) : gettype($customsClearanceDetailCommoditiesItem)), __LINE__);
            }
        }
        $this->Commodities = $commodities;
        return $this;
    }
    /**
     * Add item to Commodities value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Commodity $item
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function addToCommodities(\CommerceFedEx\FedExPHP\Structs\Commodity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\Commodity) {
            throw new \InvalidArgumentException(sprintf('The Commodities property can only contain items of \CommerceFedEx\FedExPHP\Structs\Commodity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Commodities[] = $item;
        return $this;
    }
    /**
     * Get ExportDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ExportDetail|null
     */
    public function getExportDetail()
    {
        return $this->ExportDetail;
    }
    /**
     * Set ExportDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ExportDetail $exportDetail
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function setExportDetail(\CommerceFedEx\FedExPHP\Structs\ExportDetail $exportDetail = null)
    {
        $this->ExportDetail = $exportDetail;
        return $this;
    }
    /**
     * Get RegulatoryControls value
     * @return string[]|null
     */
    public function getRegulatoryControls()
    {
        return $this->RegulatoryControls;
    }
    /**
     * Set RegulatoryControls value
     * @uses \CommerceFedEx\FedExPHP\Enums\RegulatoryControlType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\RegulatoryControlType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $regulatoryControls
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function setRegulatoryControls(array $regulatoryControls = array())
    {
        $invalidValues = array();
        foreach ($regulatoryControls as $customsClearanceDetailRegulatoryControlsItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\RegulatoryControlType::valueIsValid($customsClearanceDetailRegulatoryControlsItem)) {
                $invalidValues[] = var_export($customsClearanceDetailRegulatoryControlsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\RegulatoryControlType::getValidValues())), __LINE__);
        }
        $this->RegulatoryControls = $regulatoryControls;
        return $this;
    }
    /**
     * Add item to RegulatoryControls value
     * @uses \CommerceFedEx\FedExPHP\Enums\RegulatoryControlType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\RegulatoryControlType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function addToRegulatoryControls($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\RegulatoryControlType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\RegulatoryControlType::getValidValues())), __LINE__);
        }
        $this->RegulatoryControls[] = $item;
        return $this;
    }
    /**
     * Get DeclarationStatementDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsDeclarationStatementDetail|null
     */
    public function getDeclarationStatementDetail()
    {
        return $this->DeclarationStatementDetail;
    }
    /**
     * Set DeclarationStatementDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\CustomsDeclarationStatementDetail $declarationStatementDetail
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
     */
    public function setDeclarationStatementDetail(\CommerceFedEx\FedExPHP\Structs\CustomsDeclarationStatementDetail $declarationStatementDetail = null)
    {
        $this->DeclarationStatementDetail = $declarationStatementDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CustomsClearanceDetail
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
