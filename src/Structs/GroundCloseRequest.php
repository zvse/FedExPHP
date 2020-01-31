<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroundCloseRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:GroundCloseRequest
 * @subpackage Structs
 */
class GroundCloseRequest extends AbstractStructBase
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
     * The CloseGrouping
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CloseGrouping;
    /**
     * The TimeUpToWhichShipmentsAreToBeClosed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TimeUpToWhichShipmentsAreToBeClosed;
    /**
     * The ManifestReferenceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CloseManifestReferenceDetail
     */
    public $ManifestReferenceDetail;
    /**
     * Constructor method for GroundCloseRequest
     * @uses GroundCloseRequest::setWebAuthenticationDetail()
     * @uses GroundCloseRequest::setClientDetail()
     * @uses GroundCloseRequest::setVersion()
     * @uses GroundCloseRequest::setTransactionDetail()
     * @uses GroundCloseRequest::setCloseGrouping()
     * @uses GroundCloseRequest::setTimeUpToWhichShipmentsAreToBeClosed()
     * @uses GroundCloseRequest::setManifestReferenceDetail()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $closeGrouping
     * @param string $timeUpToWhichShipmentsAreToBeClosed
     * @param \CommerceFedEx\FedExPHP\Structs\CloseManifestReferenceDetail $manifestReferenceDetail
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $closeGrouping = null, $timeUpToWhichShipmentsAreToBeClosed = null, \CommerceFedEx\FedExPHP\Structs\CloseManifestReferenceDetail $manifestReferenceDetail = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setCloseGrouping($closeGrouping)
            ->setTimeUpToWhichShipmentsAreToBeClosed($timeUpToWhichShipmentsAreToBeClosed)
            ->setManifestReferenceDetail($manifestReferenceDetail);
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
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get CloseGrouping value
     * @return string|null
     */
    public function getCloseGrouping()
    {
        return $this->CloseGrouping;
    }
    /**
     * Set CloseGrouping value
     * @uses \CommerceFedEx\FedExPHP\Enums\CloseGroupingType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CloseGroupingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $closeGrouping
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseRequest
     */
    public function setCloseGrouping($closeGrouping = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CloseGroupingType::valueIsValid($closeGrouping)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $closeGrouping, implode(', ', \CommerceFedEx\FedExPHP\Enums\CloseGroupingType::getValidValues())), __LINE__);
        }
        $this->CloseGrouping = $closeGrouping;
        return $this;
    }
    /**
     * Get TimeUpToWhichShipmentsAreToBeClosed value
     * @return string|null
     */
    public function getTimeUpToWhichShipmentsAreToBeClosed()
    {
        return $this->TimeUpToWhichShipmentsAreToBeClosed;
    }
    /**
     * Set TimeUpToWhichShipmentsAreToBeClosed value
     * @param string $timeUpToWhichShipmentsAreToBeClosed
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseRequest
     */
    public function setTimeUpToWhichShipmentsAreToBeClosed($timeUpToWhichShipmentsAreToBeClosed = null)
    {
        // validation for constraint: string
        if (!is_null($timeUpToWhichShipmentsAreToBeClosed) && !is_string($timeUpToWhichShipmentsAreToBeClosed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeUpToWhichShipmentsAreToBeClosed)), __LINE__);
        }
        $this->TimeUpToWhichShipmentsAreToBeClosed = $timeUpToWhichShipmentsAreToBeClosed;
        return $this;
    }
    /**
     * Get ManifestReferenceDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\CloseManifestReferenceDetail|null
     */
    public function getManifestReferenceDetail()
    {
        return $this->ManifestReferenceDetail;
    }
    /**
     * Set ManifestReferenceDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\CloseManifestReferenceDetail $manifestReferenceDetail
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseRequest
     */
    public function setManifestReferenceDetail(\CommerceFedEx\FedExPHP\Structs\CloseManifestReferenceDetail $manifestReferenceDetail = null)
    {
        $this->ManifestReferenceDetail = $manifestReferenceDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseRequest
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
