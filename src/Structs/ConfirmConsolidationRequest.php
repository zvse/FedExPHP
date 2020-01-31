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
     * The AsynchronousProcessingOptions
     * Meta informations extracted from the WSDL
     * - documentation: This is used to specify processing options related to synchronous or asynchronous processing.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\AsynchronousProcessingOptionsRequested
     */
    public $AsynchronousProcessingOptions;
    /**
     * The ConsolidationKey
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the consolidation containing the open shipment which contains the desired package.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationKey
     */
    public $ConsolidationKey;
    /**
     * The LabelSpecification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification
     */
    public $LabelSpecification;
    /**
     * The ShippingDocumentSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Contains data used to create additional (non-label) shipping documents.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public $ShippingDocumentSpecification;
    /**
     * The ConsolidationDocumentSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Contains data used to create additional (non-label) consolidation documents.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification
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
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AsynchronousProcessingOptionsRequested $asynchronousProcessingOptions
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationKey $consolidationKey
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification $labelSpecification
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentSpecification $shippingDocumentSpecification
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification $consolidationDocumentSpecification
     * @param string[] $rateRequestTypes
     * @param string $edtRequestType
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\AsynchronousProcessingOptionsRequested $asynchronousProcessingOptions = null, \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationKey $consolidationKey = null, \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification $labelSpecification = null, \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentSpecification $shippingDocumentSpecification = null, \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification $consolidationDocumentSpecification = null, array $rateRequestTypes = array(), $edtRequestType = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConfirmConsolidationRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConfirmConsolidationRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConfirmConsolidationRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConfirmConsolidationRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get AsynchronousProcessingOptions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AsynchronousProcessingOptionsRequested|null
     */
    public function getAsynchronousProcessingOptions()
    {
        return $this->AsynchronousProcessingOptions;
    }
    /**
     * Set AsynchronousProcessingOptions value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AsynchronousProcessingOptionsRequested $asynchronousProcessingOptions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConfirmConsolidationRequest
     */
    public function setAsynchronousProcessingOptions(\NicholasCreativeMedia\FedExPHP\Structs\AsynchronousProcessingOptionsRequested $asynchronousProcessingOptions = null)
    {
        $this->AsynchronousProcessingOptions = $asynchronousProcessingOptions;
        return $this;
    }
    /**
     * Get ConsolidationKey value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationKey|null
     */
    public function getConsolidationKey()
    {
        return $this->ConsolidationKey;
    }
    /**
     * Set ConsolidationKey value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationKey $consolidationKey
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConfirmConsolidationRequest
     */
    public function setConsolidationKey(\NicholasCreativeMedia\FedExPHP\Structs\ConsolidationKey $consolidationKey = null)
    {
        $this->ConsolidationKey = $consolidationKey;
        return $this;
    }
    /**
     * Get LabelSpecification value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification|null
     */
    public function getLabelSpecification()
    {
        return $this->LabelSpecification;
    }
    /**
     * Set LabelSpecification value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification $labelSpecification
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConfirmConsolidationRequest
     */
    public function setLabelSpecification(\NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification $labelSpecification = null)
    {
        $this->LabelSpecification = $labelSpecification;
        return $this;
    }
    /**
     * Get ShippingDocumentSpecification value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentSpecification|null
     */
    public function getShippingDocumentSpecification()
    {
        return $this->ShippingDocumentSpecification;
    }
    /**
     * Set ShippingDocumentSpecification value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentSpecification $shippingDocumentSpecification
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConfirmConsolidationRequest
     */
    public function setShippingDocumentSpecification(\NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentSpecification $shippingDocumentSpecification = null)
    {
        $this->ShippingDocumentSpecification = $shippingDocumentSpecification;
        return $this;
    }
    /**
     * Get ConsolidationDocumentSpecification value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification|null
     */
    public function getConsolidationDocumentSpecification()
    {
        return $this->ConsolidationDocumentSpecification;
    }
    /**
     * Set ConsolidationDocumentSpecification value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification $consolidationDocumentSpecification
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConfirmConsolidationRequest
     */
    public function setConsolidationDocumentSpecification(\NicholasCreativeMedia\FedExPHP\Structs\ConsolidationDocumentSpecification $consolidationDocumentSpecification = null)
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RateRequestType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RateRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $rateRequestTypes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConfirmConsolidationRequest
     */
    public function setRateRequestTypes(array $rateRequestTypes = array())
    {
        $invalidValues = array();
        foreach ($rateRequestTypes as $confirmConsolidationRequestRateRequestTypesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\RateRequestType::valueIsValid($confirmConsolidationRequestRateRequestTypesItem)) {
                $invalidValues[] = var_export($confirmConsolidationRequestRateRequestTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\RateRequestType::getValidValues())), __LINE__);
        }
        $this->RateRequestTypes = $rateRequestTypes;
        return $this;
    }
    /**
     * Add item to RateRequestTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RateRequestType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RateRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConfirmConsolidationRequest
     */
    public function addToRateRequestTypes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\RateRequestType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\RateRequestType::getValidValues())), __LINE__);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\EdtRequestType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\EdtRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $edtRequestType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConfirmConsolidationRequest
     */
    public function setEdtRequestType($edtRequestType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\EdtRequestType::valueIsValid($edtRequestType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $edtRequestType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\EdtRequestType::getValidValues())), __LINE__);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConfirmConsolidationRequest
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
