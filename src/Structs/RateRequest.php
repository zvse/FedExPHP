<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:RateRequest
 * @subpackage Structs
 */
class RateRequest extends AbstractStructBase
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
     * The ReturnTransitAndCommit
     * Meta informations extracted from the WSDL
     * - documentation: Allows the caller to specify that the transit time and commit data are to be returned in the reply.
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnTransitAndCommit;
    /**
     * The CarrierCodes
     * Meta informations extracted from the WSDL
     * - documentation: Candidate carriers for rate-shopping use case. This field is only considered if requestedShipment/serviceType is omitted.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CarrierCodes;
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
     * The ConsolidationKey
     * Meta informations extracted from the WSDL
     * - documentation: If provided, identifies the consolidation to which this open shipment should be added after successful creation.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ConsolidationKey
     */
    public $ConsolidationKey;
    /**
     * The RequestedShipment
     * Meta informations extracted from the WSDL
     * - documentation: The shipment for which a rate quote (or rate-shopping comparison) is desired.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public $RequestedShipment;
    /**
     * Constructor method for RateRequest
     * @uses RateRequest::setWebAuthenticationDetail()
     * @uses RateRequest::setClientDetail()
     * @uses RateRequest::setVersion()
     * @uses RateRequest::setTransactionDetail()
     * @uses RateRequest::setReturnTransitAndCommit()
     * @uses RateRequest::setCarrierCodes()
     * @uses RateRequest::setVariableOptions()
     * @uses RateRequest::setConsolidationKey()
     * @uses RateRequest::setRequestedShipment()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param bool $returnTransitAndCommit
     * @param string[] $carrierCodes
     * @param string[] $variableOptions
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidationKey $consolidationKey
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedShipment $requestedShipment
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $returnTransitAndCommit = null, array $carrierCodes = array(), array $variableOptions = array(), \CommerceFedEx\FedExPHP\Structs\ConsolidationKey $consolidationKey = null, \CommerceFedEx\FedExPHP\Structs\RequestedShipment $requestedShipment = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setReturnTransitAndCommit($returnTransitAndCommit)
            ->setCarrierCodes($carrierCodes)
            ->setVariableOptions($variableOptions)
            ->setConsolidationKey($consolidationKey)
            ->setRequestedShipment($requestedShipment);
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
     * @return \CommerceFedEx\FedExPHP\Structs\RateRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\RateRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\RateRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\RateRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ReturnTransitAndCommit value
     * @return bool|null
     */
    public function getReturnTransitAndCommit()
    {
        return $this->ReturnTransitAndCommit;
    }
    /**
     * Set ReturnTransitAndCommit value
     * @param bool $returnTransitAndCommit
     * @return \CommerceFedEx\FedExPHP\Structs\RateRequest
     */
    public function setReturnTransitAndCommit($returnTransitAndCommit = null)
    {
        $this->ReturnTransitAndCommit = $returnTransitAndCommit;
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
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $carrierCodes
     * @return \CommerceFedEx\FedExPHP\Structs\RateRequest
     */
    public function setCarrierCodes(array $carrierCodes = array())
    {
        $invalidValues = array();
        foreach ($carrierCodes as $rateRequestCarrierCodesItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid($rateRequestCarrierCodesItem)) {
                $invalidValues[] = var_export($rateRequestCarrierCodesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCodes = $carrierCodes;
        return $this;
    }
    /**
     * Add item to CarrierCodes value
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\RateRequest
     */
    public function addToCarrierCodes($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCodes[] = $item;
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
     * @uses \CommerceFedEx\FedExPHP\Enums\ServiceOptionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ServiceOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $variableOptions
     * @return \CommerceFedEx\FedExPHP\Structs\RateRequest
     */
    public function setVariableOptions(array $variableOptions = array())
    {
        $invalidValues = array();
        foreach ($variableOptions as $rateRequestVariableOptionsItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\ServiceOptionType::valueIsValid($rateRequestVariableOptionsItem)) {
                $invalidValues[] = var_export($rateRequestVariableOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\ServiceOptionType::getValidValues())), __LINE__);
        }
        $this->VariableOptions = $variableOptions;
        return $this;
    }
    /**
     * Add item to VariableOptions value
     * @uses \CommerceFedEx\FedExPHP\Enums\ServiceOptionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ServiceOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\RateRequest
     */
    public function addToVariableOptions($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ServiceOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\ServiceOptionType::getValidValues())), __LINE__);
        }
        $this->VariableOptions[] = $item;
        return $this;
    }
    /**
     * Get ConsolidationKey value
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationKey|null
     */
    public function getConsolidationKey()
    {
        return $this->ConsolidationKey;
    }
    /**
     * Set ConsolidationKey value
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidationKey $consolidationKey
     * @return \CommerceFedEx\FedExPHP\Structs\RateRequest
     */
    public function setConsolidationKey(\CommerceFedEx\FedExPHP\Structs\ConsolidationKey $consolidationKey = null)
    {
        $this->ConsolidationKey = $consolidationKey;
        return $this;
    }
    /**
     * Get RequestedShipment value
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedShipment|null
     */
    public function getRequestedShipment()
    {
        return $this->RequestedShipment;
    }
    /**
     * Set RequestedShipment value
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedShipment $requestedShipment
     * @return \CommerceFedEx\FedExPHP\Structs\RateRequest
     */
    public function setRequestedShipment(\CommerceFedEx\FedExPHP\Structs\RequestedShipment $requestedShipment = null)
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
     * @return \CommerceFedEx\FedExPHP\Structs\RateRequest
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
