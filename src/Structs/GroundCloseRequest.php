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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CloseManifestReferenceDetail
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
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $closeGrouping
     * @param string $timeUpToWhichShipmentsAreToBeClosed
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CloseManifestReferenceDetail $manifestReferenceDetail
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $closeGrouping = null, $timeUpToWhichShipmentsAreToBeClosed = null, \NicholasCreativeMedia\FedExPHP\Structs\CloseManifestReferenceDetail $manifestReferenceDetail = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CloseGroupingType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CloseGroupingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $closeGrouping
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseRequest
     */
    public function setCloseGrouping($closeGrouping = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CloseGroupingType::valueIsValid($closeGrouping)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $closeGrouping, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CloseGroupingType::getValidValues())), __LINE__);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseManifestReferenceDetail|null
     */
    public function getManifestReferenceDetail()
    {
        return $this->ManifestReferenceDetail;
    }
    /**
     * Set ManifestReferenceDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CloseManifestReferenceDetail $manifestReferenceDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseRequest
     */
    public function setManifestReferenceDetail(\NicholasCreativeMedia\FedExPHP\Structs\CloseManifestReferenceDetail $manifestReferenceDetail = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseRequest
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
