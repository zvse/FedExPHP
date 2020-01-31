<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseWithDocumentsRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:CloseWithDocumentsRequest
 * @subpackage Structs
 */
class CloseWithDocumentsRequest extends AbstractStructBase
{
    /**
     * The WebAuthenticationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail
     */
    public $WebAuthenticationDetail;
    /**
     * The ClientDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
     */
    public $ClientDetail;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The ActionType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ActionType;
    /**
     * The ProcessingOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsProcessingOptionsRequested
     */
    public $ProcessingOptions;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * The ShippingCycle
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCycle;
    /**
     * The ReprintCloseDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReprintCloseDate;
    /**
     * The ManifestReferenceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CloseManifestReferenceDetail
     */
    public $ManifestReferenceDetail;
    /**
     * The SmartPostDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CloseSmartPostDetail
     */
    public $SmartPostDetail;
    /**
     * The CloseDocumentSpecification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CloseDocumentSpecification
     */
    public $CloseDocumentSpecification;
    /**
     * Constructor method for CloseWithDocumentsRequest
     * @uses CloseWithDocumentsRequest::setWebAuthenticationDetail()
     * @uses CloseWithDocumentsRequest::setClientDetail()
     * @uses CloseWithDocumentsRequest::setVersion()
     * @uses CloseWithDocumentsRequest::setTransactionDetail()
     * @uses CloseWithDocumentsRequest::setActionType()
     * @uses CloseWithDocumentsRequest::setProcessingOptions()
     * @uses CloseWithDocumentsRequest::setCarrierCode()
     * @uses CloseWithDocumentsRequest::setShippingCycle()
     * @uses CloseWithDocumentsRequest::setReprintCloseDate()
     * @uses CloseWithDocumentsRequest::setManifestReferenceDetail()
     * @uses CloseWithDocumentsRequest::setSmartPostDetail()
     * @uses CloseWithDocumentsRequest::setCloseDocumentSpecification()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $actionType
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsProcessingOptionsRequested $processingOptions
     * @param string $carrierCode
     * @param string $shippingCycle
     * @param string $reprintCloseDate
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CloseManifestReferenceDetail $manifestReferenceDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CloseSmartPostDetail $smartPostDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CloseDocumentSpecification $closeDocumentSpecification
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $actionType = null, \NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsProcessingOptionsRequested $processingOptions = null, $carrierCode = null, $shippingCycle = null, $reprintCloseDate = null, \NicholasCreativeMedia\FedExPHP\Structs\CloseManifestReferenceDetail $manifestReferenceDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\CloseSmartPostDetail $smartPostDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\CloseDocumentSpecification $closeDocumentSpecification = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setActionType($actionType)
            ->setProcessingOptions($processingOptions)
            ->setCarrierCode($carrierCode)
            ->setShippingCycle($shippingCycle)
            ->setReprintCloseDate($reprintCloseDate)
            ->setManifestReferenceDetail($manifestReferenceDetail)
            ->setSmartPostDetail($smartPostDetail)
            ->setCloseDocumentSpecification($closeDocumentSpecification);
    }
    /**
     * Get WebAuthenticationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsRequest
     */
    public function setWebAuthenticationDetail(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    /**
     * Get ClientDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsRequest
     */
    public function setClientDetail(\NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    /**
     * Get Version value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsRequest
     */
    public function setVersion(\NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ActionType value
     * @return string|null
     */
    public function getActionType()
    {
        return $this->ActionType;
    }
    /**
     * Set ActionType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CloseActionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CloseActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $actionType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsRequest
     */
    public function setActionType($actionType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CloseActionType::valueIsValid($actionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $actionType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CloseActionType::getValidValues())), __LINE__);
        }
        $this->ActionType = $actionType;
        return $this;
    }
    /**
     * Get ProcessingOptions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsProcessingOptionsRequested|null
     */
    public function getProcessingOptions()
    {
        return $this->ProcessingOptions;
    }
    /**
     * Set ProcessingOptions value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsProcessingOptionsRequested $processingOptions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsRequest
     */
    public function setProcessingOptions(\NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsProcessingOptionsRequested $processingOptions = null)
    {
        $this->ProcessingOptions = $processingOptions;
        return $this;
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrierCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsRequest
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierCode, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get ShippingCycle value
     * @return string|null
     */
    public function getShippingCycle()
    {
        return $this->ShippingCycle;
    }
    /**
     * Set ShippingCycle value
     * @param string $shippingCycle
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsRequest
     */
    public function setShippingCycle($shippingCycle = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCycle) && !is_string($shippingCycle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingCycle)), __LINE__);
        }
        $this->ShippingCycle = $shippingCycle;
        return $this;
    }
    /**
     * Get ReprintCloseDate value
     * @return string|null
     */
    public function getReprintCloseDate()
    {
        return $this->ReprintCloseDate;
    }
    /**
     * Set ReprintCloseDate value
     * @param string $reprintCloseDate
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsRequest
     */
    public function setReprintCloseDate($reprintCloseDate = null)
    {
        // validation for constraint: string
        if (!is_null($reprintCloseDate) && !is_string($reprintCloseDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reprintCloseDate)), __LINE__);
        }
        $this->ReprintCloseDate = $reprintCloseDate;
        return $this;
    }
    /**
     * Get ManifestReferenceDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseManifestReferenceDetail|null
     */
    public function getManifestReferenceDetail()
    {
        return $this->ManifestReferenceDetail;
    }
    /**
     * Set ManifestReferenceDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CloseManifestReferenceDetail $manifestReferenceDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsRequest
     */
    public function setManifestReferenceDetail(\NicholasCreativeMedia\FedExPHP\Structs\CloseManifestReferenceDetail $manifestReferenceDetail = null)
    {
        $this->ManifestReferenceDetail = $manifestReferenceDetail;
        return $this;
    }
    /**
     * Get SmartPostDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseSmartPostDetail|null
     */
    public function getSmartPostDetail()
    {
        return $this->SmartPostDetail;
    }
    /**
     * Set SmartPostDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CloseSmartPostDetail $smartPostDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsRequest
     */
    public function setSmartPostDetail(\NicholasCreativeMedia\FedExPHP\Structs\CloseSmartPostDetail $smartPostDetail = null)
    {
        $this->SmartPostDetail = $smartPostDetail;
        return $this;
    }
    /**
     * Get CloseDocumentSpecification value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseDocumentSpecification|null
     */
    public function getCloseDocumentSpecification()
    {
        return $this->CloseDocumentSpecification;
    }
    /**
     * Set CloseDocumentSpecification value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CloseDocumentSpecification $closeDocumentSpecification
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsRequest
     */
    public function setCloseDocumentSpecification(\NicholasCreativeMedia\FedExPHP\Structs\CloseDocumentSpecification $closeDocumentSpecification = null)
    {
        $this->CloseDocumentSpecification = $closeDocumentSpecification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseWithDocumentsRequest
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
