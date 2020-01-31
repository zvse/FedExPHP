<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllServicesAndPackagingRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:GetAllServicesAndPackagingRequest
 * @subpackage Structs
 */
class GetAllServicesAndPackagingRequest extends AbstractStructBase
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
     * The VariableOptions
     * Meta informations extracted from the WSDL
     * - documentation: Contains zero or more service options whose combinations are to be considered when replying with available services.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $VariableOptions;
    /**
     * The OriginRoutingCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginRoutingCode;
    /**
     * The DestinationRoutingCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationRoutingCode;
    /**
     * The FormId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FormId;
    /**
     * The CarrierCodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CarrierCodes;
    /**
     * The RequestedShipment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment
     */
    public $RequestedShipment;
    /**
     * Constructor method for GetAllServicesAndPackagingRequest
     * @uses GetAllServicesAndPackagingRequest::setWebAuthenticationDetail()
     * @uses GetAllServicesAndPackagingRequest::setClientDetail()
     * @uses GetAllServicesAndPackagingRequest::setVersion()
     * @uses GetAllServicesAndPackagingRequest::setTransactionDetail()
     * @uses GetAllServicesAndPackagingRequest::setVariableOptions()
     * @uses GetAllServicesAndPackagingRequest::setOriginRoutingCode()
     * @uses GetAllServicesAndPackagingRequest::setDestinationRoutingCode()
     * @uses GetAllServicesAndPackagingRequest::setFormId()
     * @uses GetAllServicesAndPackagingRequest::setCarrierCodes()
     * @uses GetAllServicesAndPackagingRequest::setRequestedShipment()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string[] $variableOptions
     * @param string $originRoutingCode
     * @param string $destinationRoutingCode
     * @param string $formId
     * @param string[] $carrierCodes
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment $requestedShipment
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, array $variableOptions = array(), $originRoutingCode = null, $destinationRoutingCode = null, $formId = null, array $carrierCodes = array(), \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment $requestedShipment = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setVariableOptions($variableOptions)
            ->setOriginRoutingCode($originRoutingCode)
            ->setDestinationRoutingCode($destinationRoutingCode)
            ->setFormId($formId)
            ->setCarrierCodes($carrierCodes)
            ->setRequestedShipment($requestedShipment);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllServicesAndPackagingRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllServicesAndPackagingRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllServicesAndPackagingRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllServicesAndPackagingRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get VariableOptions value
     * @return string[]|null
     */
    public function getVariableOptions()
    {
        return $this->VariableOptions;
    }
    /**
     * Set VariableOptions value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $variableOptions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllServicesAndPackagingRequest
     */
    public function setVariableOptions(array $variableOptions = array())
    {
        $invalidValues = array();
        foreach ($variableOptions as $getAllServicesAndPackagingRequestVariableOptionsItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::valueIsValid($getAllServicesAndPackagingRequestVariableOptionsItem)) {
                $invalidValues[] = var_export($getAllServicesAndPackagingRequestVariableOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::getValidValues())), __LINE__);
        }
        $this->VariableOptions = $variableOptions;
        return $this;
    }
    /**
     * Add item to VariableOptions value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllServicesAndPackagingRequest
     */
    public function addToVariableOptions($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::getValidValues())), __LINE__);
        }
        $this->VariableOptions[] = $item;
        return $this;
    }
    /**
     * Get OriginRoutingCode value
     * @return string|null
     */
    public function getOriginRoutingCode()
    {
        return $this->OriginRoutingCode;
    }
    /**
     * Set OriginRoutingCode value
     * @param string $originRoutingCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllServicesAndPackagingRequest
     */
    public function setOriginRoutingCode($originRoutingCode = null)
    {
        // validation for constraint: string
        if (!is_null($originRoutingCode) && !is_string($originRoutingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originRoutingCode)), __LINE__);
        }
        $this->OriginRoutingCode = $originRoutingCode;
        return $this;
    }
    /**
     * Get DestinationRoutingCode value
     * @return string|null
     */
    public function getDestinationRoutingCode()
    {
        return $this->DestinationRoutingCode;
    }
    /**
     * Set DestinationRoutingCode value
     * @param string $destinationRoutingCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllServicesAndPackagingRequest
     */
    public function setDestinationRoutingCode($destinationRoutingCode = null)
    {
        // validation for constraint: string
        if (!is_null($destinationRoutingCode) && !is_string($destinationRoutingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationRoutingCode)), __LINE__);
        }
        $this->DestinationRoutingCode = $destinationRoutingCode;
        return $this;
    }
    /**
     * Get FormId value
     * @return string|null
     */
    public function getFormId()
    {
        return $this->FormId;
    }
    /**
     * Set FormId value
     * @param string $formId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllServicesAndPackagingRequest
     */
    public function setFormId($formId = null)
    {
        // validation for constraint: string
        if (!is_null($formId) && !is_string($formId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formId)), __LINE__);
        }
        $this->FormId = $formId;
        return $this;
    }
    /**
     * Get CarrierCodes value
     * @return string[]|null
     */
    public function getCarrierCodes()
    {
        return $this->CarrierCodes;
    }
    /**
     * Set CarrierCodes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $carrierCodes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllServicesAndPackagingRequest
     */
    public function setCarrierCodes(array $carrierCodes = array())
    {
        $invalidValues = array();
        foreach ($carrierCodes as $getAllServicesAndPackagingRequestCarrierCodesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid($getAllServicesAndPackagingRequestCarrierCodesItem)) {
                $invalidValues[] = var_export($getAllServicesAndPackagingRequestCarrierCodesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCodes = $carrierCodes;
        return $this;
    }
    /**
     * Add item to CarrierCodes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllServicesAndPackagingRequest
     */
    public function addToCarrierCodes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCodes[] = $item;
        return $this;
    }
    /**
     * Get RequestedShipment value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment|null
     */
    public function getRequestedShipment()
    {
        return $this->RequestedShipment;
    }
    /**
     * Set RequestedShipment value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment $requestedShipment
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllServicesAndPackagingRequest
     */
    public function setRequestedShipment(\NicholasCreativeMedia\FedExPHP\Structs\RequestedShipment $requestedShipment = null)
    {
        $this->RequestedShipment = $requestedShipment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllServicesAndPackagingRequest
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
