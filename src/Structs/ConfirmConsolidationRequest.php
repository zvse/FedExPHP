<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConfirmConsolidationRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:ConfirmConsolidationRequest
 * @subpackage Structs
 */
class ConfirmConsolidationRequest extends AbstractStructBase
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
     * The AsynchronousProcessingOptions
     * Meta informations extracted from the WSDL
     * - documentation: This is used to specify processing options related to synchronous or asynchronous processing.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\AsynchronousProcessingOptionsRequested
     */
    public $AsynchronousProcessingOptions;
    /**
     * The ConsolidationKey
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the consolidation containing the open shipment which contains the desired package.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ConsolidationKey
     */
    public $ConsolidationKey;
    /**
     * The LabelSpecification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\LabelSpecification
     */
    public $LabelSpecification;
    /**
     * The ShippingDocumentSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Contains data used to create additional (non-label) shipping documents.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public $ShippingDocumentSpecification;
    /**
     * The ConsolidationDocumentSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Contains data used to create additional (non-label) consolidation documents.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification
     */
    public $ConsolidationDocumentSpecification;
    /**
     * The RateRequestTypes
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether and what kind of rates the customer wishes to have quoted on this shipment. The reply will also be constrained by other data on the shipment and customer.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RateRequestTypes;
    /**
     * The EdtRequestType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether the customer wishes to have Estimated Duties and Taxes provided with the rate quotation on this shipment. Only applies with shipments moving under international services.
     * - minOccurs: 0
     * @var string
     */
    public $EdtRequestType;
    /**
     * Constructor method for ConfirmConsolidationRequest
     * @uses ConfirmConsolidationRequest::setWebAuthenticationDetail()
     * @uses ConfirmConsolidationRequest::setClientDetail()
     * @uses ConfirmConsolidationRequest::setVersion()
     * @uses ConfirmConsolidationRequest::setTransactionDetail()
     * @uses ConfirmConsolidationRequest::setAsynchronousProcessingOptions()
     * @uses ConfirmConsolidationRequest::setConsolidationKey()
     * @uses ConfirmConsolidationRequest::setLabelSpecification()
     * @uses ConfirmConsolidationRequest::setShippingDocumentSpecification()
     * @uses ConfirmConsolidationRequest::setConsolidationDocumentSpecification()
     * @uses ConfirmConsolidationRequest::setRateRequestTypes()
     * @uses ConfirmConsolidationRequest::setEdtRequestType()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \CommerceFedEx\FedExPHP\Structs\AsynchronousProcessingOptionsRequested $asynchronousProcessingOptions
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidationKey $consolidationKey
     * @param \CommerceFedEx\FedExPHP\Structs\LabelSpecification $labelSpecification
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification $shippingDocumentSpecification
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification $consolidationDocumentSpecification
     * @param string[] $rateRequestTypes
     * @param string $edtRequestType
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, \CommerceFedEx\FedExPHP\Structs\AsynchronousProcessingOptionsRequested $asynchronousProcessingOptions = null, \CommerceFedEx\FedExPHP\Structs\ConsolidationKey $consolidationKey = null, \CommerceFedEx\FedExPHP\Structs\LabelSpecification $labelSpecification = null, \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification $shippingDocumentSpecification = null, \CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification $consolidationDocumentSpecification = null, array $rateRequestTypes = array(), $edtRequestType = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setAsynchronousProcessingOptions($asynchronousProcessingOptions)
            ->setConsolidationKey($consolidationKey)
            ->setLabelSpecification($labelSpecification)
            ->setShippingDocumentSpecification($shippingDocumentSpecification)
            ->setConsolidationDocumentSpecification($consolidationDocumentSpecification)
            ->setRateRequestTypes($rateRequestTypes)
            ->setEdtRequestType($edtRequestType);
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
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get AsynchronousProcessingOptions value
     * @return \CommerceFedEx\FedExPHP\Structs\AsynchronousProcessingOptionsRequested|null
     */
    public function getAsynchronousProcessingOptions()
    {
        return $this->AsynchronousProcessingOptions;
    }
    /**
     * Set AsynchronousProcessingOptions value
     * @param \CommerceFedEx\FedExPHP\Structs\AsynchronousProcessingOptionsRequested $asynchronousProcessingOptions
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationRequest
     */
    public function setAsynchronousProcessingOptions(\CommerceFedEx\FedExPHP\Structs\AsynchronousProcessingOptionsRequested $asynchronousProcessingOptions = null)
    {
        $this->AsynchronousProcessingOptions = $asynchronousProcessingOptions;
        return $this;
    }
    /**
     * Get ConsolidationKey value
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationKey|null
     */
    public function getConsolidationKey()
    {
        return $this->ConsolidationKey;
    }
    /**
     * Set ConsolidationKey value
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidationKey $consolidationKey
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationRequest
     */
    public function setConsolidationKey(\CommerceFedEx\FedExPHP\Structs\ConsolidationKey $consolidationKey = null)
    {
        $this->ConsolidationKey = $consolidationKey;
        return $this;
    }
    /**
     * Get LabelSpecification value
     * @return \CommerceFedEx\FedExPHP\Structs\LabelSpecification|null
     */
    public function getLabelSpecification()
    {
        return $this->LabelSpecification;
    }
    /**
     * Set LabelSpecification value
     * @param \CommerceFedEx\FedExPHP\Structs\LabelSpecification $labelSpecification
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationRequest
     */
    public function setLabelSpecification(\CommerceFedEx\FedExPHP\Structs\LabelSpecification $labelSpecification = null)
    {
        $this->LabelSpecification = $labelSpecification;
        return $this;
    }
    /**
     * Get ShippingDocumentSpecification value
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification|null
     */
    public function getShippingDocumentSpecification()
    {
        return $this->ShippingDocumentSpecification;
    }
    /**
     * Set ShippingDocumentSpecification value
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification $shippingDocumentSpecification
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationRequest
     */
    public function setShippingDocumentSpecification(\CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification $shippingDocumentSpecification = null)
    {
        $this->ShippingDocumentSpecification = $shippingDocumentSpecification;
        return $this;
    }
    /**
     * Get ConsolidationDocumentSpecification value
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification|null
     */
    public function getConsolidationDocumentSpecification()
    {
        return $this->ConsolidationDocumentSpecification;
    }
    /**
     * Set ConsolidationDocumentSpecification value
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification $consolidationDocumentSpecification
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationRequest
     */
    public function setConsolidationDocumentSpecification(\CommerceFedEx\FedExPHP\Structs\ConsolidationDocumentSpecification $consolidationDocumentSpecification = null)
    {
        $this->ConsolidationDocumentSpecification = $consolidationDocumentSpecification;
        return $this;
    }
    /**
     * Get RateRequestTypes value
     * @return string[]|null
     */
    public function getRateRequestTypes()
    {
        return $this->RateRequestTypes;
    }
    /**
     * Set RateRequestTypes value
     * @uses \CommerceFedEx\FedExPHP\Enums\RateRequestType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\RateRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $rateRequestTypes
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationRequest
     */
    public function setRateRequestTypes(array $rateRequestTypes = array())
    {
        $invalidValues = array();
        foreach ($rateRequestTypes as $confirmConsolidationRequestRateRequestTypesItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\RateRequestType::valueIsValid($confirmConsolidationRequestRateRequestTypesItem)) {
                $invalidValues[] = var_export($confirmConsolidationRequestRateRequestTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\RateRequestType::getValidValues())), __LINE__);
        }
        $this->RateRequestTypes = $rateRequestTypes;
        return $this;
    }
    /**
     * Add item to RateRequestTypes value
     * @uses \CommerceFedEx\FedExPHP\Enums\RateRequestType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\RateRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationRequest
     */
    public function addToRateRequestTypes($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\RateRequestType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\RateRequestType::getValidValues())), __LINE__);
        }
        $this->RateRequestTypes[] = $item;
        return $this;
    }
    /**
     * Get EdtRequestType value
     * @return string|null
     */
    public function getEdtRequestType()
    {
        return $this->EdtRequestType;
    }
    /**
     * Set EdtRequestType value
     * @uses \CommerceFedEx\FedExPHP\Enums\EdtRequestType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\EdtRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $edtRequestType
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationRequest
     */
    public function setEdtRequestType($edtRequestType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\EdtRequestType::valueIsValid($edtRequestType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $edtRequestType, implode(', ', \CommerceFedEx\FedExPHP\Enums\EdtRequestType::getValidValues())), __LINE__);
        }
        $this->EdtRequestType = $edtRequestType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationRequest
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
