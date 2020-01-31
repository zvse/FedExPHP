<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SmartPostCloseRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:SmartPostCloseRequest
 * @subpackage Structs
 */
class SmartPostCloseRequest extends AbstractStructBase
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
     * The HubId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HubId;
    /**
     * The CustomerManifestId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerManifestId;
    /**
     * The DestinationCountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationCountryCode;
    /**
     * The PickUpCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PickUpCarrier;
    /**
     * The ManifestReferenceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CloseManifestReferenceDetail
     */
    public $ManifestReferenceDetail;
    /**
     * Constructor method for SmartPostCloseRequest
     * @uses SmartPostCloseRequest::setWebAuthenticationDetail()
     * @uses SmartPostCloseRequest::setClientDetail()
     * @uses SmartPostCloseRequest::setVersion()
     * @uses SmartPostCloseRequest::setTransactionDetail()
     * @uses SmartPostCloseRequest::setHubId()
     * @uses SmartPostCloseRequest::setCustomerManifestId()
     * @uses SmartPostCloseRequest::setDestinationCountryCode()
     * @uses SmartPostCloseRequest::setPickUpCarrier()
     * @uses SmartPostCloseRequest::setManifestReferenceDetail()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $hubId
     * @param string $customerManifestId
     * @param string $destinationCountryCode
     * @param string $pickUpCarrier
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CloseManifestReferenceDetail $manifestReferenceDetail
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $hubId = null, $customerManifestId = null, $destinationCountryCode = null, $pickUpCarrier = null, \NicholasCreativeMedia\FedExPHP\Structs\CloseManifestReferenceDetail $manifestReferenceDetail = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setHubId($hubId)
            ->setCustomerManifestId($customerManifestId)
            ->setDestinationCountryCode($destinationCountryCode)
            ->setPickUpCarrier($pickUpCarrier)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SmartPostCloseRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SmartPostCloseRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SmartPostCloseRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SmartPostCloseRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get HubId value
     * @return string|null
     */
    public function getHubId()
    {
        return $this->HubId;
    }
    /**
     * Set HubId value
     * @param string $hubId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SmartPostCloseRequest
     */
    public function setHubId($hubId = null)
    {
        // validation for constraint: string
        if (!is_null($hubId) && !is_string($hubId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hubId)), __LINE__);
        }
        $this->HubId = $hubId;
        return $this;
    }
    /**
     * Get CustomerManifestId value
     * @return string|null
     */
    public function getCustomerManifestId()
    {
        return $this->CustomerManifestId;
    }
    /**
     * Set CustomerManifestId value
     * @param string $customerManifestId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SmartPostCloseRequest
     */
    public function setCustomerManifestId($customerManifestId = null)
    {
        // validation for constraint: string
        if (!is_null($customerManifestId) && !is_string($customerManifestId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerManifestId)), __LINE__);
        }
        $this->CustomerManifestId = $customerManifestId;
        return $this;
    }
    /**
     * Get DestinationCountryCode value
     * @return string|null
     */
    public function getDestinationCountryCode()
    {
        return $this->DestinationCountryCode;
    }
    /**
     * Set DestinationCountryCode value
     * @param string $destinationCountryCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SmartPostCloseRequest
     */
    public function setDestinationCountryCode($destinationCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($destinationCountryCode) && !is_string($destinationCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationCountryCode)), __LINE__);
        }
        $this->DestinationCountryCode = $destinationCountryCode;
        return $this;
    }
    /**
     * Get PickUpCarrier value
     * @return string|null
     */
    public function getPickUpCarrier()
    {
        return $this->PickUpCarrier;
    }
    /**
     * Set PickUpCarrier value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pickUpCarrier
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SmartPostCloseRequest
     */
    public function setPickUpCarrier($pickUpCarrier = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid($pickUpCarrier)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pickUpCarrier, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->PickUpCarrier = $pickUpCarrier;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SmartPostCloseRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SmartPostCloseRequest
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
