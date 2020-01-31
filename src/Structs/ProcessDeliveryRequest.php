<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessDeliveryRequest Structs
 * Meta informations extracted from the WSDL
 * - documentation: Request parameter of IFSS method to process a specific delivery option.
 * - type: ns:ProcessDeliveryRequest
 * @subpackage Structs
 */
class ProcessDeliveryRequest extends AbstractStructBase
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
     * The UserDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\UserDetail
     */
    public $UserDetail;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The ApplicationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ApplicationId;
    /**
     * The ActionRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ActionRequested;
    /**
     * The UniqueTrackingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\UniqueTrackingNumber
     */
    public $UniqueTrackingNumber;
    /**
     * The RecipientContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Contact
     */
    public $RecipientContact;
    /**
     * The DestinationAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $DestinationAddress;
    /**
     * The DeliveryRequestDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DeliveryRequestDetail
     */
    public $DeliveryRequestDetail;
    /**
     * Constructor method for ProcessDeliveryRequest
     * @uses ProcessDeliveryRequest::setWebAuthenticationDetail()
     * @uses ProcessDeliveryRequest::setClientDetail()
     * @uses ProcessDeliveryRequest::setVersion()
     * @uses ProcessDeliveryRequest::setUserDetail()
     * @uses ProcessDeliveryRequest::setTransactionDetail()
     * @uses ProcessDeliveryRequest::setApplicationId()
     * @uses ProcessDeliveryRequest::setActionRequested()
     * @uses ProcessDeliveryRequest::setUniqueTrackingNumber()
     * @uses ProcessDeliveryRequest::setRecipientContact()
     * @uses ProcessDeliveryRequest::setDestinationAddress()
     * @uses ProcessDeliveryRequest::setDeliveryRequestDetail()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UserDetail $userDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $applicationId
     * @param string $actionRequested
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UniqueTrackingNumber $uniqueTrackingNumber
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Contact $recipientContact
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $destinationAddress
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeliveryRequestDetail $deliveryRequestDetail
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\UserDetail $userDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $applicationId = null, $actionRequested = null, \NicholasCreativeMedia\FedExPHP\Structs\UniqueTrackingNumber $uniqueTrackingNumber = null, \NicholasCreativeMedia\FedExPHP\Structs\Contact $recipientContact = null, \NicholasCreativeMedia\FedExPHP\Structs\Address $destinationAddress = null, \NicholasCreativeMedia\FedExPHP\Structs\DeliveryRequestDetail $deliveryRequestDetail = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setUserDetail($userDetail)
            ->setTransactionDetail($transactionDetail)
            ->setApplicationId($applicationId)
            ->setActionRequested($actionRequested)
            ->setUniqueTrackingNumber($uniqueTrackingNumber)
            ->setRecipientContact($recipientContact)
            ->setDestinationAddress($destinationAddress)
            ->setDeliveryRequestDetail($deliveryRequestDetail);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProcessDeliveryRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProcessDeliveryRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProcessDeliveryRequest
     */
    public function setVersion(\NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get UserDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UserDetail|null
     */
    public function getUserDetail()
    {
        return $this->UserDetail;
    }
    /**
     * Set UserDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UserDetail $userDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProcessDeliveryRequest
     */
    public function setUserDetail(\NicholasCreativeMedia\FedExPHP\Structs\UserDetail $userDetail = null)
    {
        $this->UserDetail = $userDetail;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProcessDeliveryRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ApplicationId value
     * @return string|null
     */
    public function getApplicationId()
    {
        return $this->ApplicationId;
    }
    /**
     * Set ApplicationId value
     * @param string $applicationId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProcessDeliveryRequest
     */
    public function setApplicationId($applicationId = null)
    {
        // validation for constraint: string
        if (!is_null($applicationId) && !is_string($applicationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($applicationId)), __LINE__);
        }
        $this->ApplicationId = $applicationId;
        return $this;
    }
    /**
     * Get ActionRequested value
     * @return string|null
     */
    public function getActionRequested()
    {
        return $this->ActionRequested;
    }
    /**
     * Set ActionRequested value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DeliveryActionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DeliveryActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $actionRequested
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProcessDeliveryRequest
     */
    public function setActionRequested($actionRequested = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DeliveryActionType::valueIsValid($actionRequested)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $actionRequested, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DeliveryActionType::getValidValues())), __LINE__);
        }
        $this->ActionRequested = $actionRequested;
        return $this;
    }
    /**
     * Get UniqueTrackingNumber value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UniqueTrackingNumber|null
     */
    public function getUniqueTrackingNumber()
    {
        return $this->UniqueTrackingNumber;
    }
    /**
     * Set UniqueTrackingNumber value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UniqueTrackingNumber $uniqueTrackingNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProcessDeliveryRequest
     */
    public function setUniqueTrackingNumber(\NicholasCreativeMedia\FedExPHP\Structs\UniqueTrackingNumber $uniqueTrackingNumber = null)
    {
        $this->UniqueTrackingNumber = $uniqueTrackingNumber;
        return $this;
    }
    /**
     * Get RecipientContact value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Contact|null
     */
    public function getRecipientContact()
    {
        return $this->RecipientContact;
    }
    /**
     * Set RecipientContact value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Contact $recipientContact
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProcessDeliveryRequest
     */
    public function setRecipientContact(\NicholasCreativeMedia\FedExPHP\Structs\Contact $recipientContact = null)
    {
        $this->RecipientContact = $recipientContact;
        return $this;
    }
    /**
     * Get DestinationAddress value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address|null
     */
    public function getDestinationAddress()
    {
        return $this->DestinationAddress;
    }
    /**
     * Set DestinationAddress value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $destinationAddress
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProcessDeliveryRequest
     */
    public function setDestinationAddress(\NicholasCreativeMedia\FedExPHP\Structs\Address $destinationAddress = null)
    {
        $this->DestinationAddress = $destinationAddress;
        return $this;
    }
    /**
     * Get DeliveryRequestDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeliveryRequestDetail|null
     */
    public function getDeliveryRequestDetail()
    {
        return $this->DeliveryRequestDetail;
    }
    /**
     * Set DeliveryRequestDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeliveryRequestDetail $deliveryRequestDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProcessDeliveryRequest
     */
    public function setDeliveryRequestDetail(\NicholasCreativeMedia\FedExPHP\Structs\DeliveryRequestDetail $deliveryRequestDetail = null)
    {
        $this->DeliveryRequestDetail = $deliveryRequestDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProcessDeliveryRequest
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
