<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadDocumentStatusDetail Structs
 * @subpackage Structs
 */
class UploadDocumentStatusDetail extends AbstractStructBase
{
    /**
     * The LineNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LineNumber;
    /**
     * The CustomerReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerReference;
    /**
     * The DocumentProducer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentProducer;
    /**
     * The DocumentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentType;
    /**
     * The FileName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FileName;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The StatusInfo
     * Meta informations extracted from the WSDL
     * - documentation: Distinct value for reason status was assigned.
     * - minOccurs: 0
     * @var string
     */
    public $StatusInfo;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - documentation: Human-readable explanation of document status.
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The DocumentId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentId;
    /**
     * The DocumentIdProducer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentIdProducer;
    /**
     * Constructor method for UploadDocumentStatusDetail
     * @uses UploadDocumentStatusDetail::setLineNumber()
     * @uses UploadDocumentStatusDetail::setCustomerReference()
     * @uses UploadDocumentStatusDetail::setDocumentProducer()
     * @uses UploadDocumentStatusDetail::setDocumentType()
     * @uses UploadDocumentStatusDetail::setFileName()
     * @uses UploadDocumentStatusDetail::setStatus()
     * @uses UploadDocumentStatusDetail::setStatusInfo()
     * @uses UploadDocumentStatusDetail::setMessage()
     * @uses UploadDocumentStatusDetail::setDocumentId()
     * @uses UploadDocumentStatusDetail::setDocumentIdProducer()
     * @param int $lineNumber
     * @param string $customerReference
     * @param string $documentProducer
     * @param string $documentType
     * @param string $fileName
     * @param string $status
     * @param string $statusInfo
     * @param string $message
     * @param string $documentId
     * @param string $documentIdProducer
     */
    public function __construct($lineNumber = null, $customerReference = null, $documentProducer = null, $documentType = null, $fileName = null, $status = null, $statusInfo = null, $message = null, $documentId = null, $documentIdProducer = null)
    {
        $this
            ->setLineNumber($lineNumber)
            ->setCustomerReference($customerReference)
            ->setDocumentProducer($documentProducer)
            ->setDocumentType($documentType)
            ->setFileName($fileName)
            ->setStatus($status)
            ->setStatusInfo($statusInfo)
            ->setMessage($message)
            ->setDocumentId($documentId)
            ->setDocumentIdProducer($documentIdProducer);
    }
    /**
     * Get LineNumber value
     * @return int|null
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }
    /**
     * Set LineNumber value
     * @param int $lineNumber
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentStatusDetail
     */
    public function setLineNumber($lineNumber = null)
    {
        // validation for constraint: int
        if (!is_null($lineNumber) && !is_numeric($lineNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lineNumber)), __LINE__);
        }
        $this->LineNumber = $lineNumber;
        return $this;
    }
    /**
     * Get CustomerReference value
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->CustomerReference;
    }
    /**
     * Set CustomerReference value
     * @param string $customerReference
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentStatusDetail
     */
    public function setCustomerReference($customerReference = null)
    {
        // validation for constraint: string
        if (!is_null($customerReference) && !is_string($customerReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerReference)), __LINE__);
        }
        $this->CustomerReference = $customerReference;
        return $this;
    }
    /**
     * Get DocumentProducer value
     * @return string|null
     */
    public function getDocumentProducer()
    {
        return $this->DocumentProducer;
    }
    /**
     * Set DocumentProducer value
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadDocumentProducerType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadDocumentProducerType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $documentProducer
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentStatusDetail
     */
    public function setDocumentProducer($documentProducer = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\UploadDocumentProducerType::valueIsValid($documentProducer)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $documentProducer, implode(', ', \CommerceFedEx\FedExPHP\Enums\UploadDocumentProducerType::getValidValues())), __LINE__);
        }
        $this->DocumentProducer = $documentProducer;
        return $this;
    }
    /**
     * Get DocumentType value
     * @return string|null
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }
    /**
     * Set DocumentType value
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadDocumentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $documentType
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentStatusDetail
     */
    public function setDocumentType($documentType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\UploadDocumentType::valueIsValid($documentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $documentType, implode(', ', \CommerceFedEx\FedExPHP\Enums\UploadDocumentType::getValidValues())), __LINE__);
        }
        $this->DocumentType = $documentType;
        return $this;
    }
    /**
     * Get FileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentStatusDetail
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileName)), __LINE__);
        }
        $this->FileName = $fileName;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadDocumentStatusType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadDocumentStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentStatusDetail
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\UploadDocumentStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \CommerceFedEx\FedExPHP\Enums\UploadDocumentStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get StatusInfo value
     * @return string|null
     */
    public function getStatusInfo()
    {
        return $this->StatusInfo;
    }
    /**
     * Set StatusInfo value
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadDocumentStatusInfoType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadDocumentStatusInfoType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $statusInfo
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentStatusDetail
     */
    public function setStatusInfo($statusInfo = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\UploadDocumentStatusInfoType::valueIsValid($statusInfo)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $statusInfo, implode(', ', \CommerceFedEx\FedExPHP\Enums\UploadDocumentStatusInfoType::getValidValues())), __LINE__);
        }
        $this->StatusInfo = $statusInfo;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentStatusDetail
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Get DocumentId value
     * @return string|null
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }
    /**
     * Set DocumentId value
     * @param string $documentId
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentStatusDetail
     */
    public function setDocumentId($documentId = null)
    {
        // validation for constraint: string
        if (!is_null($documentId) && !is_string($documentId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentId)), __LINE__);
        }
        $this->DocumentId = $documentId;
        return $this;
    }
    /**
     * Get DocumentIdProducer value
     * @return string|null
     */
    public function getDocumentIdProducer()
    {
        return $this->DocumentIdProducer;
    }
    /**
     * Set DocumentIdProducer value
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadDocumentIdProducer::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadDocumentIdProducer::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $documentIdProducer
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentStatusDetail
     */
    public function setDocumentIdProducer($documentIdProducer = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\UploadDocumentIdProducer::valueIsValid($documentIdProducer)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $documentIdProducer, implode(', ', \CommerceFedEx\FedExPHP\Enums\UploadDocumentIdProducer::getValidValues())), __LINE__);
        }
        $this->DocumentIdProducer = $documentIdProducer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentStatusDetail
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
