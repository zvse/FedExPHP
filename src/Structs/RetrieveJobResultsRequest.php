<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveJobResultsRequest Structs
 * Meta informations extracted from the WSDL
 * - documentation: This request object is used by the client to retrieve artifacts stored by the ASYNC service.
 * - type: ns:RetrieveJobResultsRequest
 * @subpackage Structs
 */
class RetrieveJobResultsRequest extends AbstractStructBase
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
     * The JobId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the job under which the desired artifacts are stored.
     * - minOccurs: 0
     * @var string
     */
    public $JobId;
    /**
     * The Filters
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the filters to be used for retrieving artifacts.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ArtifactRetrievalFilter[]
     */
    public $Filters;
    /**
     * Constructor method for RetrieveJobResultsRequest
     * @uses RetrieveJobResultsRequest::setWebAuthenticationDetail()
     * @uses RetrieveJobResultsRequest::setClientDetail()
     * @uses RetrieveJobResultsRequest::setVersion()
     * @uses RetrieveJobResultsRequest::setTransactionDetail()
     * @uses RetrieveJobResultsRequest::setJobId()
     * @uses RetrieveJobResultsRequest::setFilters()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $jobId
     * @param \CommerceFedEx\FedExPHP\Structs\ArtifactRetrievalFilter[] $filters
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $jobId = null, array $filters = array())
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setJobId($jobId)
            ->setFilters($filters);
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
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get JobId value
     * @return string|null
     */
    public function getJobId()
    {
        return $this->JobId;
    }
    /**
     * Set JobId value
     * @param string $jobId
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsRequest
     */
    public function setJobId($jobId = null)
    {
        // validation for constraint: string
        if (!is_null($jobId) && !is_string($jobId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($jobId)), __LINE__);
        }
        $this->JobId = $jobId;
        return $this;
    }
    /**
     * Get Filters value
     * @return \CommerceFedEx\FedExPHP\Structs\ArtifactRetrievalFilter[]|null
     */
    public function getFilters()
    {
        return $this->Filters;
    }
    /**
     * Set Filters value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ArtifactRetrievalFilter[] $filters
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsRequest
     */
    public function setFilters(array $filters = array())
    {
        foreach ($filters as $retrieveJobResultsRequestFiltersItem) {
            // validation for constraint: itemType
            if (!$retrieveJobResultsRequestFiltersItem instanceof \CommerceFedEx\FedExPHP\Structs\ArtifactRetrievalFilter) {
                throw new \InvalidArgumentException(sprintf('The Filters property can only contain items of \CommerceFedEx\FedExPHP\Structs\ArtifactRetrievalFilter, "%s" given', is_object($retrieveJobResultsRequestFiltersItem) ? get_class($retrieveJobResultsRequestFiltersItem) : gettype($retrieveJobResultsRequestFiltersItem)), __LINE__);
            }
        }
        $this->Filters = $filters;
        return $this;
    }
    /**
     * Add item to Filters value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ArtifactRetrievalFilter $item
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsRequest
     */
    public function addToFilters(\CommerceFedEx\FedExPHP\Structs\ArtifactRetrievalFilter $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\ArtifactRetrievalFilter) {
            throw new \InvalidArgumentException(sprintf('The Filters property can only contain items of \CommerceFedEx\FedExPHP\Structs\ArtifactRetrievalFilter, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Filters[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsRequest
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
