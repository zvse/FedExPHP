<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EtdDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Electronic Trade document references used with the ETD special service.
 * @subpackage Structs
 */
class EtdDetail extends AbstractStructBase
{
    /**
     * The Confirmation
     * Meta informations extracted from the WSDL
     * - documentation: Specifies client's intent for whether all documents must be confirmed before shipment processing.
     * - minOccurs: 0
     * @var string
     */
    public $Confirmation;
    /**
     * The Attributes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Attributes;
    /**
     * The RequestedDocumentCopies
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the types of shipping documents produced for the shipper by FedEx (see ShippingDocumentSpecification) which should be copied back to the shipper in the shipment result data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RequestedDocumentCopies;
    /**
     * The Documents
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentDetail[]
     */
    public $Documents;
    /**
     * The DocumentReferences
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentReferenceDetail[]
     */
    public $DocumentReferences;
    /**
     * Constructor method for EtdDetail
     * @uses EtdDetail::setConfirmation()
     * @uses EtdDetail::setAttributes()
     * @uses EtdDetail::setRequestedDocumentCopies()
     * @uses EtdDetail::setDocuments()
     * @uses EtdDetail::setDocumentReferences()
     * @param string $confirmation
     * @param string[] $attributes
     * @param string[] $requestedDocumentCopies
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentDetail[] $documents
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentReferenceDetail[] $documentReferences
     */
    public function __construct($confirmation = null, array $attributes = array(), array $requestedDocumentCopies = array(), array $documents = array(), array $documentReferences = array())
    {
        $this
            ->setConfirmation($confirmation)
            ->setAttributes($attributes)
            ->setRequestedDocumentCopies($requestedDocumentCopies)
            ->setDocuments($documents)
            ->setDocumentReferences($documentReferences);
    }
    /**
     * Get Confirmation value
     * @return string|null
     */
    public function getConfirmation()
    {
        return $this->Confirmation;
    }
    /**
     * Set Confirmation value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\EtdConfirmationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\EtdConfirmationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $confirmation
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EtdDetail
     */
    public function setConfirmation($confirmation = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\EtdConfirmationType::valueIsValid($confirmation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $confirmation, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\EtdConfirmationType::getValidValues())), __LINE__);
        }
        $this->Confirmation = $confirmation;
        return $this;
    }
    /**
     * Get Attributes value
     * @return string[]|null
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\EtdAttributeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\EtdAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $attributes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EtdDetail
     */
    public function setAttributes(array $attributes = array())
    {
        $invalidValues = array();
        foreach ($attributes as $etdDetailAttributesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\EtdAttributeType::valueIsValid($etdDetailAttributesItem)) {
                $invalidValues[] = var_export($etdDetailAttributesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\EtdAttributeType::getValidValues())), __LINE__);
        }
        $this->Attributes = $attributes;
        return $this;
    }
    /**
     * Add item to Attributes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\EtdAttributeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\EtdAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EtdDetail
     */
    public function addToAttributes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\EtdAttributeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\EtdAttributeType::getValidValues())), __LINE__);
        }
        $this->Attributes[] = $item;
        return $this;
    }
    /**
     * Get RequestedDocumentCopies value
     * @return string[]|null
     */
    public function getRequestedDocumentCopies()
    {
        return $this->RequestedDocumentCopies;
    }
    /**
     * Set RequestedDocumentCopies value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RequestedShippingDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RequestedShippingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $requestedDocumentCopies
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EtdDetail
     */
    public function setRequestedDocumentCopies(array $requestedDocumentCopies = array())
    {
        $invalidValues = array();
        foreach ($requestedDocumentCopies as $etdDetailRequestedDocumentCopiesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\RequestedShippingDocumentType::valueIsValid($etdDetailRequestedDocumentCopiesItem)) {
                $invalidValues[] = var_export($etdDetailRequestedDocumentCopiesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\RequestedShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->RequestedDocumentCopies = $requestedDocumentCopies;
        return $this;
    }
    /**
     * Add item to RequestedDocumentCopies value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RequestedShippingDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RequestedShippingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EtdDetail
     */
    public function addToRequestedDocumentCopies($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\RequestedShippingDocumentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\RequestedShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->RequestedDocumentCopies[] = $item;
        return $this;
    }
    /**
     * Get Documents value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentDetail[]|null
     */
    public function getDocuments()
    {
        return $this->Documents;
    }
    /**
     * Set Documents value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentDetail[] $documents
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EtdDetail
     */
    public function setDocuments(array $documents = array())
    {
        foreach ($documents as $etdDetailDocumentsItem) {
            // validation for constraint: itemType
            if (!$etdDetailDocumentsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentDetail) {
                throw new \InvalidArgumentException(sprintf('The Documents property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentDetail, "%s" given', is_object($etdDetailDocumentsItem) ? get_class($etdDetailDocumentsItem) : gettype($etdDetailDocumentsItem)), __LINE__);
            }
        }
        $this->Documents = $documents;
        return $this;
    }
    /**
     * Add item to Documents value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EtdDetail
     */
    public function addToDocuments(\NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentDetail) {
            throw new \InvalidArgumentException(sprintf('The Documents property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Documents[] = $item;
        return $this;
    }
    /**
     * Get DocumentReferences value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentReferenceDetail[]|null
     */
    public function getDocumentReferences()
    {
        return $this->DocumentReferences;
    }
    /**
     * Set DocumentReferences value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentReferenceDetail[] $documentReferences
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EtdDetail
     */
    public function setDocumentReferences(array $documentReferences = array())
    {
        foreach ($documentReferences as $etdDetailDocumentReferencesItem) {
            // validation for constraint: itemType
            if (!$etdDetailDocumentReferencesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentReferenceDetail) {
                throw new \InvalidArgumentException(sprintf('The DocumentReferences property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentReferenceDetail, "%s" given', is_object($etdDetailDocumentReferencesItem) ? get_class($etdDetailDocumentReferencesItem) : gettype($etdDetailDocumentReferencesItem)), __LINE__);
            }
        }
        $this->DocumentReferences = $documentReferences;
        return $this;
    }
    /**
     * Add item to DocumentReferences value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentReferenceDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EtdDetail
     */
    public function addToDocumentReferences(\NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentReferenceDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentReferenceDetail) {
            throw new \InvalidArgumentException(sprintf('The DocumentReferences property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentReferenceDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EtdDetail
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
