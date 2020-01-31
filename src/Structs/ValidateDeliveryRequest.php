<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateDeliveryRequest Structs
 * Meta informations extracted from the WSDL
 * - documentation: Request parameter of IFSS method to validate a delivery option.
 * - type: ns:ValidateDeliveryRequest
 * @subpackage Structs
 */
class ValidateDeliveryRequest extends AbstractStructBase
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
     * The UserDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\UserDetail
     */
    public $UserDetail;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TransactionDetail
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
     * @var \CommerceFedEx\FedExPHP\Structs\UniqueTrackingNumber
     */
    public $UniqueTrackingNumber;
    /**
     * The RecipientContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Contact
     */
    public $RecipientContact;
    /**
     * The DestinationAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Address
     */
    public $DestinationAddress;
    /**
     * The DeliveryRequestDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\DeliveryRequestDetail
     */
    public $DeliveryRequestDetail;
    /**
     * Constructor method for ValidateDeliveryRequest
     * @uses ValidateDeliveryRequest::setWebAuthenticationDetail()
     * @uses ValidateDeliveryRequest::setClientDetail()
     * @uses ValidateDeliveryRequest::setVersion()
     * @uses ValidateDeliveryRequest::setUserDetail()
     * @uses ValidateDeliveryRequest::setTransactionDetail()
     * @uses ValidateDeliveryRequest::setApplicationId()
     * @uses ValidateDeliveryRequest::setActionRequested()
     * @uses ValidateDeliveryRequest::setUniqueTrackingNumber()
     * @uses ValidateDeliveryRequest::setRecipientContact()
     * @uses ValidateDeliveryRequest::setDestinationAddress()
     * @uses ValidateDeliveryRequest::setDeliveryRequestDetail()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\UserDetail $userDetail
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $applicationId
     * @param string $actionRequested
     * @param \CommerceFedEx\FedExPHP\Structs\UniqueTrackingNumber $uniqueTrackingNumber
     * @param \CommerceFedEx\FedExPHP\Structs\Contact $recipientContact
     * @param \CommerceFedEx\FedExPHP\Structs\Address $destinationAddress
     * @param \CommerceFedEx\FedExPHP\Structs\DeliveryRequestDetail $deliveryRequestDetail
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\UserDetail $userDetail = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $applicationId = null, $actionRequested = null, \CommerceFedEx\FedExPHP\Structs\UniqueTrackingNumber $uniqueTrackingNumber = null, \CommerceFedEx\FedExPHP\Structs\Contact $recipientContact = null, \CommerceFedEx\FedExPHP\Structs\Address $destinationAddress = null, \CommerceFedEx\FedExPHP\Structs\DeliveryRequestDetail $deliveryRequestDetail = null)
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
     * @return \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDeliveryRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDeliveryRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDeliveryRequest
     */
    public function setVersion(\CommerceFedEx\FedExPHP\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get UserDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\UserDetail|null
     */
    public function getUserDetail()
    {
        return $this->UserDetail;
    }
    /**
     * Set UserDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\UserDetail $userDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDeliveryRequest
     */
    public function setUserDetail(\CommerceFedEx\FedExPHP\Structs\UserDetail $userDetail = null)
    {
        $this->UserDetail = $userDetail;
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
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDeliveryRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
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
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDeliveryRequest
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
     * @uses \CommerceFedEx\FedExPHP\Enums\DeliveryActionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\DeliveryActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $actionRequested
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDeliveryRequest
     */
    public function setActionRequested($actionRequested = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\DeliveryActionType::valueIsValid($actionRequested)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $actionRequested, implode(', ', \CommerceFedEx\FedExPHP\Enums\DeliveryActionType::getValidValues())), __LINE__);
        }
        $this->ActionRequested = $actionRequested;
        return $this;
    }
    /**
     * Get UniqueTrackingNumber value
     * @return \CommerceFedEx\FedExPHP\Structs\UniqueTrackingNumber|null
     */
    public function getUniqueTrackingNumber()
    {
        return $this->UniqueTrackingNumber;
    }
    /**
     * Set UniqueTrackingNumber value
     * @param \CommerceFedEx\FedExPHP\Structs\UniqueTrackingNumber $uniqueTrackingNumber
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDeliveryRequest
     */
    public function setUniqueTrackingNumber(\CommerceFedEx\FedExPHP\Structs\UniqueTrackingNumber $uniqueTrackingNumber = null)
    {
        $this->UniqueTrackingNumber = $uniqueTrackingNumber;
        return $this;
    }
    /**
     * Get RecipientContact value
     * @return \CommerceFedEx\FedExPHP\Structs\Contact|null
     */
    public function getRecipientContact()
    {
        return $this->RecipientContact;
    }
    /**
     * Set RecipientContact value
     * @param \CommerceFedEx\FedExPHP\Structs\Contact $recipientContact
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDeliveryRequest
     */
    public function setRecipientContact(\CommerceFedEx\FedExPHP\Structs\Contact $recipientContact = null)
    {
        $this->RecipientContact = $recipientContact;
        return $this;
    }
    /**
     * Get DestinationAddress value
     * @return \CommerceFedEx\FedExPHP\Structs\Address|null
     */
    public function getDestinationAddress()
    {
        return $this->DestinationAddress;
    }
    /**
     * Set DestinationAddress value
     * @param \CommerceFedEx\FedExPHP\Structs\Address $destinationAddress
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDeliveryRequest
     */
    public function setDestinationAddress(\CommerceFedEx\FedExPHP\Structs\Address $destinationAddress = null)
    {
        $this->DestinationAddress = $destinationAddress;
        return $this;
    }
    /**
     * Get DeliveryRequestDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\DeliveryRequestDetail|null
     */
    public function getDeliveryRequestDetail()
    {
        return $this->DeliveryRequestDetail;
    }
    /**
     * Set DeliveryRequestDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\DeliveryRequestDetail $deliveryRequestDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDeliveryRequest
     */
    public function setDeliveryRequestDetail(\CommerceFedEx\FedExPHP\Structs\DeliveryRequestDetail $deliveryRequestDetail = null)
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
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDeliveryRequest
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
