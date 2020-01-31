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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation
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
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $consolidationIndex
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation $requestedConsolidation
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $consolidationIndex = null, \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation $requestedConsolidation = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation|null
     */
    public function getRequestedConsolidation()
    {
        return $this->RequestedConsolidation;
    }
    /**
     * Set RequestedConsolidation value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation $requestedConsolidation
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationRequest
     */
    public function setRequestedConsolidation(\NicholasCreativeMedia\FedExPHP\Structs\RequestedConsolidation $requestedConsolidation = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationRequest
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
