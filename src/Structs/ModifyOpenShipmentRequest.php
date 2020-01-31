<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyOpenShipmentRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:ModifyOpenShipmentRequest
 * @subpackage Structs
 */
class ModifyOpenShipmentRequest extends AbstractStructBase
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
     * The AsynchronousProcessingOptions
     * Meta informations extracted from the WSDL
     * - documentation: This is used to specify processing options related to synchronous or asynchronous processing.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\AsynchronousProcessingOptionsRequested
     */
    public $AsynchronousProcessingOptions;
    /**
     * The Index
     * Meta informations extracted from the WSDL
     * - documentation: Customer-assigned identifier for this shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provided).
     * - minOccurs: 0
     * @var string
     */
    public $Index;
    /**
     * The Actions
     * Meta informations extracted from the WSDL
     * - documentation: Specifies optional actions to be performed during the processing of this open shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Actions;
    /**
     * The RequestedShipment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\RequestedShipment
     */
    public $RequestedShipment;
    /**
     * Constructor method for ModifyOpenShipmentRequest
     * @uses ModifyOpenShipmentRequest::setWebAuthenticationDetail()
     * @uses ModifyOpenShipmentRequest::setClientDetail()
     * @uses ModifyOpenShipmentRequest::setVersion()
     * @uses ModifyOpenShipmentRequest::setTransactionDetail()
     * @uses ModifyOpenShipmentRequest::setAsynchronousProcessingOptions()
     * @uses ModifyOpenShipmentRequest::setIndex()
     * @uses ModifyOpenShipmentRequest::setActions()
     * @uses ModifyOpenShipmentRequest::setRequestedShipment()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \CommerceFedEx\FedExPHP\Structs\AsynchronousProcessingOptionsRequested $asynchronousProcessingOptions
     * @param string $index
     * @param string[] $actions
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedShipment $requestedShipment
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, \CommerceFedEx\FedExPHP\Structs\AsynchronousProcessingOptionsRequested $asynchronousProcessingOptions = null, $index = null, array $actions = array(), \CommerceFedEx\FedExPHP\Structs\RequestedShipment $requestedShipment = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setAsynchronousProcessingOptions($asynchronousProcessingOptions)
            ->setIndex($index)
            ->setActions($actions)
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
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyOpenShipmentRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyOpenShipmentRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyOpenShipmentRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyOpenShipmentRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get AsynchronousProcessingOptions value
     * @return \CommerceFedEx\FedExPHP\Structs\AsynchronousProcessingOptionsRequested|null
     */
    public function getAsynchronousProcessingOptions()
    {
        return $this->AsynchronousProcessingOptions;
    }
    /**
     * Set AsynchronousProcessingOptions value
     * @param \CommerceFedEx\FedExPHP\Structs\AsynchronousProcessingOptionsRequested $asynchronousProcessingOptions
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyOpenShipmentRequest
     */
    public function setAsynchronousProcessingOptions(\CommerceFedEx\FedExPHP\Structs\AsynchronousProcessingOptionsRequested $asynchronousProcessingOptions = null)
    {
        $this->AsynchronousProcessingOptions = $asynchronousProcessingOptions;
        return $this;
    }
    /**
     * Get Index value
     * @return string|null
     */
    public function getIndex()
    {
        return $this->Index;
    }
    /**
     * Set Index value
     * @param string $index
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyOpenShipmentRequest
     */
    public function setIndex($index = null)
    {
        // validation for constraint: string
        if (!is_null($index) && !is_string($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($index)), __LINE__);
        }
        $this->Index = $index;
        return $this;
    }
    /**
     * Get Actions value
     * @return string[]|null
     */
    public function getActions()
    {
        return $this->Actions;
    }
    /**
     * Set Actions value
     * @uses \CommerceFedEx\FedExPHP\Enums\CreateOpenShipmentActionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CreateOpenShipmentActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $actions
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyOpenShipmentRequest
     */
    public function setActions(array $actions = array())
    {
        $invalidValues = array();
        foreach ($actions as $modifyOpenShipmentRequestActionsItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\CreateOpenShipmentActionType::valueIsValid($modifyOpenShipmentRequestActionsItem)) {
                $invalidValues[] = var_export($modifyOpenShipmentRequestActionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\CreateOpenShipmentActionType::getValidValues())), __LINE__);
        }
        $this->Actions = $actions;
        return $this;
    }
    /**
     * Add item to Actions value
     * @uses \CommerceFedEx\FedExPHP\Enums\CreateOpenShipmentActionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CreateOpenShipmentActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyOpenShipmentRequest
     */
    public function addToActions($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CreateOpenShipmentActionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\CreateOpenShipmentActionType::getValidValues())), __LINE__);
        }
        $this->Actions[] = $item;
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
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyOpenShipmentRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyOpenShipmentRequest
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
