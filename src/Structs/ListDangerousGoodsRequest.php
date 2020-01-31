<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListDangerousGoodsRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:ListDangerousGoodsRequest
 * @subpackage Structs
 */
class ListDangerousGoodsRequest extends AbstractStructBase
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
     * The Origin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Address
     */
    public $Origin;
    /**
     * The Destination
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Address
     */
    public $Destination;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceType;
    /**
     * The ShipDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShipDate;
    /**
     * The TrackingNumber
     * Meta informations extracted from the WSDL
     * - documentation: This field identifies a specific instance of an uploaded dangerous goods handling unit.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumber;
    /**
     * Constructor method for ListDangerousGoodsRequest
     * @uses ListDangerousGoodsRequest::setWebAuthenticationDetail()
     * @uses ListDangerousGoodsRequest::setClientDetail()
     * @uses ListDangerousGoodsRequest::setVersion()
     * @uses ListDangerousGoodsRequest::setTransactionDetail()
     * @uses ListDangerousGoodsRequest::setOrigin()
     * @uses ListDangerousGoodsRequest::setDestination()
     * @uses ListDangerousGoodsRequest::setCarrierCode()
     * @uses ListDangerousGoodsRequest::setServiceType()
     * @uses ListDangerousGoodsRequest::setShipDate()
     * @uses ListDangerousGoodsRequest::setTrackingNumber()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \CommerceFedEx\FedExPHP\Structs\Address $origin
     * @param \CommerceFedEx\FedExPHP\Structs\Address $destination
     * @param string $carrierCode
     * @param string $serviceType
     * @param string $shipDate
     * @param string $trackingNumber
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, \CommerceFedEx\FedExPHP\Structs\Address $origin = null, \CommerceFedEx\FedExPHP\Structs\Address $destination = null, $carrierCode = null, $serviceType = null, $shipDate = null, $trackingNumber = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setCarrierCode($carrierCode)
            ->setServiceType($serviceType)
            ->setShipDate($shipDate)
            ->setTrackingNumber($trackingNumber);
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
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get Origin value
     * @return \CommerceFedEx\FedExPHP\Structs\Address|null
     */
    public function getOrigin()
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param \CommerceFedEx\FedExPHP\Structs\Address $origin
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsRequest
     */
    public function setOrigin(\CommerceFedEx\FedExPHP\Structs\Address $origin = null)
    {
        $this->Origin = $origin;
        return $this;
    }
    /**
     * Get Destination value
     * @return \CommerceFedEx\FedExPHP\Structs\Address|null
     */
    public function getDestination()
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param \CommerceFedEx\FedExPHP\Structs\Address $destination
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsRequest
     */
    public function setDestination(\CommerceFedEx\FedExPHP\Structs\Address $destination = null)
    {
        $this->Destination = $destination;
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
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrierCode
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsRequest
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierCode, implode(', ', \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @uses \CommerceFedEx\FedExPHP\Enums\ServiceType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $serviceType
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsRequest
     */
    public function setServiceType($serviceType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ServiceType::valueIsValid($serviceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $serviceType, implode(', ', \CommerceFedEx\FedExPHP\Enums\ServiceType::getValidValues())), __LINE__);
        }
        $this->ServiceType = $serviceType;
        return $this;
    }
    /**
     * Get ShipDate value
     * @return string|null
     */
    public function getShipDate()
    {
        return $this->ShipDate;
    }
    /**
     * Set ShipDate value
     * @param string $shipDate
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsRequest
     */
    public function setShipDate($shipDate = null)
    {
        // validation for constraint: string
        if (!is_null($shipDate) && !is_string($shipDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipDate)), __LINE__);
        }
        $this->ShipDate = $shipDate;
        return $this;
    }
    /**
     * Get TrackingNumber value
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    /**
     * Set TrackingNumber value
     * @param string $trackingNumber
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsRequest
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($trackingNumber) && !is_string($trackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingNumber)), __LINE__);
        }
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsRequest
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
