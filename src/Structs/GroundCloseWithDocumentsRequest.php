<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroundCloseWithDocumentsRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:GroundCloseWithDocumentsRequest
 * @subpackage Structs
 */
class GroundCloseWithDocumentsRequest extends AbstractStructBase
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
     * The CloseDate
     * Meta informations extracted from the WSDL
     * - documentation: Cutoff date for closing and reports.
     * - minOccurs: 0
     * @var string
     */
    public $CloseDate;
    /**
     * The CloseDocumentSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Specifies characteristics of document(s) to be returned for this request.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CloseDocumentSpecification
     */
    public $CloseDocumentSpecification;
    /**
     * Constructor method for GroundCloseWithDocumentsRequest
     * @uses GroundCloseWithDocumentsRequest::setWebAuthenticationDetail()
     * @uses GroundCloseWithDocumentsRequest::setClientDetail()
     * @uses GroundCloseWithDocumentsRequest::setVersion()
     * @uses GroundCloseWithDocumentsRequest::setTransactionDetail()
     * @uses GroundCloseWithDocumentsRequest::setCloseDate()
     * @uses GroundCloseWithDocumentsRequest::setCloseDocumentSpecification()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $closeDate
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CloseDocumentSpecification $closeDocumentSpecification
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $closeDate = null, \NicholasCreativeMedia\FedExPHP\Structs\CloseDocumentSpecification $closeDocumentSpecification = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setCloseDate($closeDate)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseWithDocumentsRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseWithDocumentsRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseWithDocumentsRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseWithDocumentsRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get CloseDate value
     * @return string|null
     */
    public function getCloseDate()
    {
        return $this->CloseDate;
    }
    /**
     * Set CloseDate value
     * @param string $closeDate
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseWithDocumentsRequest
     */
    public function setCloseDate($closeDate = null)
    {
        // validation for constraint: string
        if (!is_null($closeDate) && !is_string($closeDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($closeDate)), __LINE__);
        }
        $this->CloseDate = $closeDate;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseWithDocumentsRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseWithDocumentsRequest
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
