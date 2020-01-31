<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddPackagesToOpenShipmentRequest Structs
 * Meta informations extracted from the WSDL
 * - documentation: This request adds one or more packages to an existing open shipment.
 * - type: ns:AddPackagesToOpenShipmentRequest
 * @subpackage Structs
 */
class AddPackagesToOpenShipmentRequest extends AbstractStructBase
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
     * - documentation: Specifies the optional actions to be performed during the addition of packages to this open shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Actions;
    /**
     * The RequestedPackageLineItems
     * Meta informations extracted from the WSDL
     * - documentation: One or more package-attribute descriptions, each of which describes an individual package in the shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem[]
     */
    public $RequestedPackageLineItems;
    /**
     * Constructor method for AddPackagesToOpenShipmentRequest
     * @uses AddPackagesToOpenShipmentRequest::setWebAuthenticationDetail()
     * @uses AddPackagesToOpenShipmentRequest::setClientDetail()
     * @uses AddPackagesToOpenShipmentRequest::setVersion()
     * @uses AddPackagesToOpenShipmentRequest::setTransactionDetail()
     * @uses AddPackagesToOpenShipmentRequest::setIndex()
     * @uses AddPackagesToOpenShipmentRequest::setActions()
     * @uses AddPackagesToOpenShipmentRequest::setRequestedPackageLineItems()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $index
     * @param string[] $actions
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem[] $requestedPackageLineItems
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $index = null, array $actions = array(), array $requestedPackageLineItems = array())
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setIndex($index)
            ->setActions($actions)
            ->setRequestedPackageLineItems($requestedPackageLineItems);
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
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
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
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
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
     * @uses \CommerceFedEx\FedExPHP\Enums\AddPackagesToOpenShipmentActionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\AddPackagesToOpenShipmentActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $actions
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
     */
    public function setActions(array $actions = array())
    {
        $invalidValues = array();
        foreach ($actions as $addPackagesToOpenShipmentRequestActionsItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\AddPackagesToOpenShipmentActionType::valueIsValid($addPackagesToOpenShipmentRequestActionsItem)) {
                $invalidValues[] = var_export($addPackagesToOpenShipmentRequestActionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\AddPackagesToOpenShipmentActionType::getValidValues())), __LINE__);
        }
        $this->Actions = $actions;
        return $this;
    }
    /**
     * Add item to Actions value
     * @uses \CommerceFedEx\FedExPHP\Enums\AddPackagesToOpenShipmentActionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\AddPackagesToOpenShipmentActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
     */
    public function addToActions($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\AddPackagesToOpenShipmentActionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\AddPackagesToOpenShipmentActionType::getValidValues())), __LINE__);
        }
        $this->Actions[] = $item;
        return $this;
    }
    /**
     * Get RequestedPackageLineItems value
     * @return \CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem[]|null
     */
    public function getRequestedPackageLineItems()
    {
        return $this->RequestedPackageLineItems;
    }
    /**
     * Set RequestedPackageLineItems value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem[] $requestedPackageLineItems
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems = array())
    {
        foreach ($requestedPackageLineItems as $addPackagesToOpenShipmentRequestRequestedPackageLineItemsItem) {
            // validation for constraint: itemType
            if (!$addPackagesToOpenShipmentRequestRequestedPackageLineItemsItem instanceof \CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem) {
                throw new \InvalidArgumentException(sprintf('The RequestedPackageLineItems property can only contain items of \CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem, "%s" given', is_object($addPackagesToOpenShipmentRequestRequestedPackageLineItemsItem) ? get_class($addPackagesToOpenShipmentRequestRequestedPackageLineItemsItem) : gettype($addPackagesToOpenShipmentRequestRequestedPackageLineItemsItem)), __LINE__);
            }
        }
        $this->RequestedPackageLineItems = $requestedPackageLineItems;
        return $this;
    }
    /**
     * Add item to RequestedPackageLineItems value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem $item
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
     */
    public function addToRequestedPackageLineItems(\CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem) {
            throw new \InvalidArgumentException(sprintf('The RequestedPackageLineItems property can only contain items of \CommerceFedEx\FedExPHP\Structs\RequestedPackageLineItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RequestedPackageLineItems[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
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
