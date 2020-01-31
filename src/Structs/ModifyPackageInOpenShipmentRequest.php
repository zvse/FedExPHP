<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyPackageInOpenShipmentRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:ModifyPackageInOpenShipmentRequest
 * @subpackage Structs
 */
class ModifyPackageInOpenShipmentRequest extends AbstractStructBase
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
     * - documentation: Specifies the optional actions that can be performed during the modification of packages in Open Shipment
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Actions;
    /**
     * The TrackingId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the tracking id of the package that is to be modified in the open shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingId
     */
    public $TrackingId;
    /**
     * The RequestedPackageLineItem
     * Meta informations extracted from the WSDL
     * - documentation: Contains the data for the package that is to be modified in the open shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem
     */
    public $RequestedPackageLineItem;
    /**
     * Constructor method for ModifyPackageInOpenShipmentRequest
     * @uses ModifyPackageInOpenShipmentRequest::setWebAuthenticationDetail()
     * @uses ModifyPackageInOpenShipmentRequest::setClientDetail()
     * @uses ModifyPackageInOpenShipmentRequest::setVersion()
     * @uses ModifyPackageInOpenShipmentRequest::setTransactionDetail()
     * @uses ModifyPackageInOpenShipmentRequest::setIndex()
     * @uses ModifyPackageInOpenShipmentRequest::setActions()
     * @uses ModifyPackageInOpenShipmentRequest::setTrackingId()
     * @uses ModifyPackageInOpenShipmentRequest::setRequestedPackageLineItem()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $index
     * @param string[] $actions
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $trackingId
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem $requestedPackageLineItem
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $index = null, array $actions = array(), \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $trackingId = null, \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem $requestedPackageLineItem = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setIndex($index)
            ->setActions($actions)
            ->setTrackingId($trackingId)
            ->setRequestedPackageLineItem($requestedPackageLineItem);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyPackageInOpenShipmentRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyPackageInOpenShipmentRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyPackageInOpenShipmentRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyPackageInOpenShipmentRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyPackageInOpenShipmentRequest
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ModifyPackageInOpenShipmentActionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ModifyPackageInOpenShipmentActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $actions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyPackageInOpenShipmentRequest
     */
    public function setActions(array $actions = array())
    {
        $invalidValues = array();
        foreach ($actions as $modifyPackageInOpenShipmentRequestActionsItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\ModifyPackageInOpenShipmentActionType::valueIsValid($modifyPackageInOpenShipmentRequestActionsItem)) {
                $invalidValues[] = var_export($modifyPackageInOpenShipmentRequestActionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ModifyPackageInOpenShipmentActionType::getValidValues())), __LINE__);
        }
        $this->Actions = $actions;
        return $this;
    }
    /**
     * Add item to Actions value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ModifyPackageInOpenShipmentActionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ModifyPackageInOpenShipmentActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyPackageInOpenShipmentRequest
     */
    public function addToActions($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ModifyPackageInOpenShipmentActionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ModifyPackageInOpenShipmentActionType::getValidValues())), __LINE__);
        }
        $this->Actions[] = $item;
        return $this;
    }
    /**
     * Get TrackingId value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingId|null
     */
    public function getTrackingId()
    {
        return $this->TrackingId;
    }
    /**
     * Set TrackingId value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $trackingId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyPackageInOpenShipmentRequest
     */
    public function setTrackingId(\NicholasCreativeMedia\FedExPHP\Structs\TrackingId $trackingId = null)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    /**
     * Get RequestedPackageLineItem value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem|null
     */
    public function getRequestedPackageLineItem()
    {
        return $this->RequestedPackageLineItem;
    }
    /**
     * Set RequestedPackageLineItem value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem $requestedPackageLineItem
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyPackageInOpenShipmentRequest
     */
    public function setRequestedPackageLineItem(\NicholasCreativeMedia\FedExPHP\Structs\RequestedPackageLineItem $requestedPackageLineItem = null)
    {
        $this->RequestedPackageLineItem = $requestedPackageLineItem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyPackageInOpenShipmentRequest
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
