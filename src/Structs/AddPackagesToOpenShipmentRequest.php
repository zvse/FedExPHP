<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem[]
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
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $index
     * @param string[] $actions
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem[] $requestedPackageLineItems
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $index = null, array $actions = array(), array $requestedPackageLineItems = array())
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\AddPackagesToOpenShipmentActionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\AddPackagesToOpenShipmentActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $actions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
     */
    public function setActions(array $actions = array())
    {
        $invalidValues = array();
        foreach ($actions as $addPackagesToOpenShipmentRequestActionsItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\AddPackagesToOpenShipmentActionType::valueIsValid($addPackagesToOpenShipmentRequestActionsItem)) {
                $invalidValues[] = var_export($addPackagesToOpenShipmentRequestActionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\AddPackagesToOpenShipmentActionType::getValidValues())), __LINE__);
        }
        $this->Actions = $actions;
        return $this;
    }
    /**
     * Add item to Actions value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\AddPackagesToOpenShipmentActionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\AddPackagesToOpenShipmentActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
     */
    public function addToActions($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\AddPackagesToOpenShipmentActionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\AddPackagesToOpenShipmentActionType::getValidValues())), __LINE__);
        }
        $this->Actions[] = $item;
        return $this;
    }
    /**
     * Get RequestedPackageLineItems value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem[]|null
     */
    public function getRequestedPackageLineItems()
    {
        return $this->RequestedPackageLineItems;
    }
    /**
     * Set RequestedPackageLineItems value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem[] $requestedPackageLineItems
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems = array())
    {
        foreach ($requestedPackageLineItems as $addPackagesToOpenShipmentRequestRequestedPackageLineItemsItem) {
            // validation for constraint: itemType
            if (!$addPackagesToOpenShipmentRequestRequestedPackageLineItemsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem) {
                throw new \InvalidArgumentException(sprintf('The RequestedPackageLineItems property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem, "%s" given', is_object($addPackagesToOpenShipmentRequestRequestedPackageLineItemsItem) ? get_class($addPackagesToOpenShipmentRequestRequestedPackageLineItemsItem) : gettype($addPackagesToOpenShipmentRequestRequestedPackageLineItemsItem)), __LINE__);
            }
        }
        $this->RequestedPackageLineItems = $requestedPackageLineItems;
        return $this;
    }
    /**
     * Add item to RequestedPackageLineItems value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
     */
    public function addToRequestedPackageLineItems(\NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem) {
            throw new \InvalidArgumentException(sprintf('The RequestedPackageLineItems property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddPackagesToOpenShipmentRequest
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
