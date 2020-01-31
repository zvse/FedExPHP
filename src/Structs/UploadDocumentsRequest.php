<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadDocumentsRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:UploadDocumentsRequest
 * @subpackage Structs
 */
class UploadDocumentsRequest extends AbstractStructBase
{
    /**
     * The WebAuthenticationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail
     */
    public $WebAuthenticationDetail;
    /**
     * The ClientDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\ClientDetail
     */
    public $ClientDetail;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The ProcessingOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\UploadDocumentsProcessingOptionsRequested
     */
    public $ProcessingOptions;
    /**
     * The OriginCountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginCountryCode;
    /**
     * The DestinationCountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationCountryCode;
    /**
     * The Usage
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the intent or the usage of the documents being uploaded. This provides details about how the documents are relevant to the current transaction.
     * - minOccurs: 0
     * @var string
     */
    public $Usage;
    /**
     * The Documents
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\UploadDocumentDetail[]
     */
    public $Documents;
    /**
     * Constructor method for UploadDocumentsRequest
     * @uses UploadDocumentsRequest::setWebAuthenticationDetail()
     * @uses UploadDocumentsRequest::setClientDetail()
     * @uses UploadDocumentsRequest::setVersion()
     * @uses UploadDocumentsRequest::setTransactionDetail()
     * @uses UploadDocumentsRequest::setProcessingOptions()
     * @uses UploadDocumentsRequest::setOriginCountryCode()
     * @uses UploadDocumentsRequest::setDestinationCountryCode()
     * @uses UploadDocumentsRequest::setUsage()
     * @uses UploadDocumentsRequest::setDocuments()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \CommerceFedEx\FedExPHP\Structs\UploadDocumentsProcessingOptionsRequested $processingOptions
     * @param string $originCountryCode
     * @param string $destinationCountryCode
     * @param string $usage
     * @param \CommerceFedEx\FedExPHP\Structs\UploadDocumentDetail[] $documents
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, \CommerceFedEx\FedExPHP\Structs\UploadDocumentsProcessingOptionsRequested $processingOptions = null, $originCountryCode = null, $destinationCountryCode = null, $usage = null, array $documents = array())
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setProcessingOptions($processingOptions)
            ->setOriginCountryCode($originCountryCode)
            ->setDestinationCountryCode($destinationCountryCode)
            ->setUsage($usage)
            ->setDocuments($documents);
    }
    /**
     * Get WebAuthenticationDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentsRequest
     */
    public function setWebAuthenticationDetail(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    /**
     * Get ClientDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentsRequest
     */
    public function setClientDetail(\CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    /**
     * Get Version value
     * @return \CommerceFedEx\FedExPHP\Structs\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentsRequest
     */
    public function setVersion(\CommerceFedEx\FedExPHP\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentsRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ProcessingOptions value
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentsProcessingOptionsRequested|null
     */
    public function getProcessingOptions()
    {
        return $this->ProcessingOptions;
    }
    /**
     * Set ProcessingOptions value
     * @param \CommerceFedEx\FedExPHP\Structs\UploadDocumentsProcessingOptionsRequested $processingOptions
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentsRequest
     */
    public function setProcessingOptions(\CommerceFedEx\FedExPHP\Structs\UploadDocumentsProcessingOptionsRequested $processingOptions = null)
    {
        $this->ProcessingOptions = $processingOptions;
        return $this;
    }
    /**
     * Get OriginCountryCode value
     * @return string|null
     */
    public function getOriginCountryCode()
    {
        return $this->OriginCountryCode;
    }
    /**
     * Set OriginCountryCode value
     * @param string $originCountryCode
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentsRequest
     */
    public function setOriginCountryCode($originCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($originCountryCode) && !is_string($originCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originCountryCode)), __LINE__);
        }
        $this->OriginCountryCode = $originCountryCode;
        return $this;
    }
    /**
     * Get DestinationCountryCode value
     * @return string|null
     */
    public function getDestinationCountryCode()
    {
        return $this->DestinationCountryCode;
    }
    /**
     * Set DestinationCountryCode value
     * @param string $destinationCountryCode
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentsRequest
     */
    public function setDestinationCountryCode($destinationCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($destinationCountryCode) && !is_string($destinationCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationCountryCode)), __LINE__);
        }
        $this->DestinationCountryCode = $destinationCountryCode;
        return $this;
    }
    /**
     * Get Usage value
     * @return string|null
     */
    public function getUsage()
    {
        return $this->Usage;
    }
    /**
     * Set Usage value
     * @uses \CommerceFedEx\FedExPHP\Enums\DocumentUsageType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\DocumentUsageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $usage
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentsRequest
     */
    public function setUsage($usage = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\DocumentUsageType::valueIsValid($usage)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $usage, implode(', ', \CommerceFedEx\FedExPHP\Enums\DocumentUsageType::getValidValues())), __LINE__);
        }
        $this->Usage = $usage;
        return $this;
    }
    /**
     * Get Documents value
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentDetail[]|null
     */
    public function getDocuments()
    {
        return $this->Documents;
    }
    /**
     * Set Documents value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\UploadDocumentDetail[] $documents
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentsRequest
     */
    public function setDocuments(array $documents = array())
    {
        foreach ($documents as $uploadDocumentsRequestDocumentsItem) {
            // validation for constraint: itemType
            if (!$uploadDocumentsRequestDocumentsItem instanceof \CommerceFedEx\FedExPHP\Structs\UploadDocumentDetail) {
                throw new \InvalidArgumentException(sprintf('The Documents property can only contain items of \CommerceFedEx\FedExPHP\Structs\UploadDocumentDetail, "%s" given', is_object($uploadDocumentsRequestDocumentsItem) ? get_class($uploadDocumentsRequestDocumentsItem) : gettype($uploadDocumentsRequestDocumentsItem)), __LINE__);
            }
        }
        $this->Documents = $documents;
        return $this;
    }
    /**
     * Add item to Documents value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\UploadDocumentDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentsRequest
     */
    public function addToDocuments(\CommerceFedEx\FedExPHP\Structs\UploadDocumentDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\UploadDocumentDetail) {
            throw new \InvalidArgumentException(sprintf('The Documents property can only contain items of \CommerceFedEx\FedExPHP\Structs\UploadDocumentDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Documents[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentsRequest
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
