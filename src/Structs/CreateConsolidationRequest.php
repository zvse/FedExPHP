<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateConsolidationRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:CreateConsolidationRequest
 * @subpackage Structs
 */
class CreateConsolidationRequest extends AbstractStructBase
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
     * The ConsolidationIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ConsolidationIndex;
    /**
     * The RequestedConsolidation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\RequestedConsolidation
     */
    public $RequestedConsolidation;
    /**
     * Constructor method for CreateConsolidationRequest
     * @uses CreateConsolidationRequest::setWebAuthenticationDetail()
     * @uses CreateConsolidationRequest::setClientDetail()
     * @uses CreateConsolidationRequest::setVersion()
     * @uses CreateConsolidationRequest::setTransactionDetail()
     * @uses CreateConsolidationRequest::setConsolidationIndex()
     * @uses CreateConsolidationRequest::setRequestedConsolidation()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $consolidationIndex
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedConsolidation $requestedConsolidation
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $consolidationIndex = null, \CommerceFedEx\FedExPHP\Structs\RequestedConsolidation $requestedConsolidation = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setConsolidationIndex($consolidationIndex)
            ->setRequestedConsolidation($requestedConsolidation);
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
     * @return \CommerceFedEx\FedExPHP\Structs\CreateConsolidationRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\CreateConsolidationRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\CreateConsolidationRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\CreateConsolidationRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ConsolidationIndex value
     * @return string|null
     */
    public function getConsolidationIndex()
    {
        return $this->ConsolidationIndex;
    }
    /**
     * Set ConsolidationIndex value
     * @param string $consolidationIndex
     * @return \CommerceFedEx\FedExPHP\Structs\CreateConsolidationRequest
     */
    public function setConsolidationIndex($consolidationIndex = null)
    {
        // validation for constraint: string
        if (!is_null($consolidationIndex) && !is_string($consolidationIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($consolidationIndex)), __LINE__);
        }
        $this->ConsolidationIndex = $consolidationIndex;
        return $this;
    }
    /**
     * Get RequestedConsolidation value
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedConsolidation|null
     */
    public function getRequestedConsolidation()
    {
        return $this->RequestedConsolidation;
    }
    /**
     * Set RequestedConsolidation value
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedConsolidation $requestedConsolidation
     * @return \CommerceFedEx\FedExPHP\Structs\CreateConsolidationRequest
     */
    public function setRequestedConsolidation(\CommerceFedEx\FedExPHP\Structs\RequestedConsolidation $requestedConsolidation = null)
    {
        $this->RequestedConsolidation = $requestedConsolidation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CreateConsolidationRequest
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
