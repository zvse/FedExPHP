<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PendingShipmentDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: This information describes the kind of pending shipment being requested.
 * @subpackage Structs
 */
class PendingShipmentDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $Type;
    /**
     * The ExpirationDate
     * Meta informations extracted from the WSDL
     * - documentation: Date after which the pending shipment will no longer be available for completion.
     * - minOccurs: 0
     * @var string
     */
    public $ExpirationDate;
    /**
     * The EmailLabelDetail
     * Meta informations extracted from the WSDL
     * - documentation: Only used with type of EMAIL.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\EMailLabelDetail
     */
    public $EmailLabelDetail;
    /**
     * The ProcessingOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\PendingShipmentProcessingOptionsRequested
     */
    public $ProcessingOptions;
    /**
     * The RecommendedDocumentSpecification
     * Meta informations extracted from the WSDL
     * - documentation: These are documents that are recommended to be included with the shipment.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\RecommendedDocumentSpecification
     */
    public $RecommendedDocumentSpecification;
    /**
     * The DocumentReferences
     * Meta informations extracted from the WSDL
     * - documentation: Upload document details provided by the initator of the shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail[]
     */
    public $DocumentReferences;
    /**
     * Constructor method for PendingShipmentDetail
     * @uses PendingShipmentDetail::setType()
     * @uses PendingShipmentDetail::setExpirationDate()
     * @uses PendingShipmentDetail::setEmailLabelDetail()
     * @uses PendingShipmentDetail::setProcessingOptions()
     * @uses PendingShipmentDetail::setRecommendedDocumentSpecification()
     * @uses PendingShipmentDetail::setDocumentReferences()
     * @param string $type
     * @param string $expirationDate
     * @param \CommerceFedEx\FedExPHP\Structs\EMailLabelDetail $emailLabelDetail
     * @param \CommerceFedEx\FedExPHP\Structs\PendingShipmentProcessingOptionsRequested $processingOptions
     * @param \CommerceFedEx\FedExPHP\Structs\RecommendedDocumentSpecification $recommendedDocumentSpecification
     * @param \CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail[] $documentReferences
     */
    public function __construct($type = null, $expirationDate = null, \CommerceFedEx\FedExPHP\Structs\EMailLabelDetail $emailLabelDetail = null, \CommerceFedEx\FedExPHP\Structs\PendingShipmentProcessingOptionsRequested $processingOptions = null, \CommerceFedEx\FedExPHP\Structs\RecommendedDocumentSpecification $recommendedDocumentSpecification = null, array $documentReferences = array())
    {
        $this
            ->setType($type)
            ->setExpirationDate($expirationDate)
            ->setEmailLabelDetail($emailLabelDetail)
            ->setProcessingOptions($processingOptions)
            ->setRecommendedDocumentSpecification($recommendedDocumentSpecification)
            ->setDocumentReferences($documentReferences);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \CommerceFedEx\FedExPHP\Enums\PendingShipmentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\PendingShipmentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \CommerceFedEx\FedExPHP\Structs\PendingShipmentDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\PendingShipmentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \CommerceFedEx\FedExPHP\Enums\PendingShipmentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \CommerceFedEx\FedExPHP\Structs\PendingShipmentDetail
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    /**
     * Get EmailLabelDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\EMailLabelDetail|null
     */
    public function getEmailLabelDetail()
    {
        return $this->EmailLabelDetail;
    }
    /**
     * Set EmailLabelDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\EMailLabelDetail $emailLabelDetail
     * @return \CommerceFedEx\FedExPHP\Structs\PendingShipmentDetail
     */
    public function setEmailLabelDetail(\CommerceFedEx\FedExPHP\Structs\EMailLabelDetail $emailLabelDetail = null)
    {
        $this->EmailLabelDetail = $emailLabelDetail;
        return $this;
    }
    /**
     * Get ProcessingOptions value
     * @return \CommerceFedEx\FedExPHP\Structs\PendingShipmentProcessingOptionsRequested|null
     */
    public function getProcessingOptions()
    {
        return $this->ProcessingOptions;
    }
    /**
     * Set ProcessingOptions value
     * @param \CommerceFedEx\FedExPHP\Structs\PendingShipmentProcessingOptionsRequested $processingOptions
     * @return \CommerceFedEx\FedExPHP\Structs\PendingShipmentDetail
     */
    public function setProcessingOptions(\CommerceFedEx\FedExPHP\Structs\PendingShipmentProcessingOptionsRequested $processingOptions = null)
    {
        $this->ProcessingOptions = $processingOptions;
        return $this;
    }
    /**
     * Get RecommendedDocumentSpecification value
     * @return \CommerceFedEx\FedExPHP\Structs\RecommendedDocumentSpecification|null
     */
    public function getRecommendedDocumentSpecification()
    {
        return $this->RecommendedDocumentSpecification;
    }
    /**
     * Set RecommendedDocumentSpecification value
     * @param \CommerceFedEx\FedExPHP\Structs\RecommendedDocumentSpecification $recommendedDocumentSpecification
     * @return \CommerceFedEx\FedExPHP\Structs\PendingShipmentDetail
     */
    public function setRecommendedDocumentSpecification(\CommerceFedEx\FedExPHP\Structs\RecommendedDocumentSpecification $recommendedDocumentSpecification = null)
    {
        $this->RecommendedDocumentSpecification = $recommendedDocumentSpecification;
        return $this;
    }
    /**
     * Get DocumentReferences value
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail[]|null
     */
    public function getDocumentReferences()
    {
        return $this->DocumentReferences;
    }
    /**
     * Set DocumentReferences value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail[] $documentReferences
     * @return \CommerceFedEx\FedExPHP\Structs\PendingShipmentDetail
     */
    public function setDocumentReferences(array $documentReferences = array())
    {
        foreach ($documentReferences as $pendingShipmentDetailDocumentReferencesItem) {
            // validation for constraint: itemType
            if (!$pendingShipmentDetailDocumentReferencesItem instanceof \CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail) {
                throw new \InvalidArgumentException(sprintf('The DocumentReferences property can only contain items of \CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail, "%s" given', is_object($pendingShipmentDetailDocumentReferencesItem) ? get_class($pendingShipmentDetailDocumentReferencesItem) : gettype($pendingShipmentDetailDocumentReferencesItem)), __LINE__);
            }
        }
        $this->DocumentReferences = $documentReferences;
        return $this;
    }
    /**
     * Add item to DocumentReferences value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\PendingShipmentDetail
     */
    public function addToDocumentReferences(\CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail) {
            throw new \InvalidArgumentException(sprintf('The DocumentReferences property can only contain items of \CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DocumentReferences[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\PendingShipmentDetail
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
