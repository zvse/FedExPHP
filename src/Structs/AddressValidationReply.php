<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressValidationReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:AddressValidationReply
 * @subpackage Structs
 */
class AddressValidationReply extends AbstractStructBase
{
    /**
     * The HighestSeverity
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $HighestSeverity;
    /**
     * The Notifications
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\Notification[]
     */
    public $Notifications;
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
     * The ReplyTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReplyTimestamp;
    /**
     * The AddressResults
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\AddressValidationResult[]
     */
    public $AddressResults;
    /**
     * Constructor method for AddressValidationReply
     * @uses AddressValidationReply::setHighestSeverity()
     * @uses AddressValidationReply::setNotifications()
     * @uses AddressValidationReply::setVersion()
     * @uses AddressValidationReply::setTransactionDetail()
     * @uses AddressValidationReply::setReplyTimestamp()
     * @uses AddressValidationReply::setAddressResults()
     * @param string $highestSeverity
     * @param \CommerceFedEx\FedExPHP\Structs\Notification[] $notifications
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $replyTimestamp
     * @param \CommerceFedEx\FedExPHP\Structs\AddressValidationResult[] $addressResults
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $replyTimestamp = null, array $addressResults = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setReplyTimestamp($replyTimestamp)
            ->setAddressResults($addressResults);
    }
    /**
     * Get HighestSeverity value
     * @return string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    /**
     * Set HighestSeverity value
     * @uses \CommerceFedEx\FedExPHP\Enums\NotificationSeverityType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\NotificationSeverityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $highestSeverity
     * @return \CommerceFedEx\FedExPHP\Structs\AddressValidationReply
     */
    public function setHighestSeverity($highestSeverity = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\NotificationSeverityType::valueIsValid($highestSeverity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $highestSeverity, implode(', ', \CommerceFedEx\FedExPHP\Enums\NotificationSeverityType::getValidValues())), __LINE__);
        }
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    /**
     * Get Notifications value
     * @return \CommerceFedEx\FedExPHP\Structs\Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Notification[] $notifications
     * @return \CommerceFedEx\FedExPHP\Structs\AddressValidationReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $addressValidationReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$addressValidationReplyNotificationsItem instanceof \CommerceFedEx\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\Notification, "%s" given', is_object($addressValidationReplyNotificationsItem) ? get_class($addressValidationReplyNotificationsItem) : gettype($addressValidationReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Notification $item
     * @return \CommerceFedEx\FedExPHP\Structs\AddressValidationReply
     */
    public function addToNotifications(\CommerceFedEx\FedExPHP\Structs\Notification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\Notification) {
            throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\Notification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Notifications[] = $item;
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
     * @return \CommerceFedEx\FedExPHP\Structs\AddressValidationReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\AddressValidationReply
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ReplyTimestamp value
     * @return string|null
     */
    public function getReplyTimestamp()
    {
        return $this->ReplyTimestamp;
    }
    /**
     * Set ReplyTimestamp value
     * @param string $replyTimestamp
     * @return \CommerceFedEx\FedExPHP\Structs\AddressValidationReply
     */
    public function setReplyTimestamp($replyTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($replyTimestamp) && !is_string($replyTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($replyTimestamp)), __LINE__);
        }
        $this->ReplyTimestamp = $replyTimestamp;
        return $this;
    }
    /**
     * Get AddressResults value
     * @return \CommerceFedEx\FedExPHP\Structs\AddressValidationResult[]|null
     */
    public function getAddressResults()
    {
        return $this->AddressResults;
    }
    /**
     * Set AddressResults value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\AddressValidationResult[] $addressResults
     * @return \CommerceFedEx\FedExPHP\Structs\AddressValidationReply
     */
    public function setAddressResults(array $addressResults = array())
    {
        foreach ($addressResults as $addressValidationReplyAddressResultsItem) {
            // validation for constraint: itemType
            if (!$addressValidationReplyAddressResultsItem instanceof \CommerceFedEx\FedExPHP\Structs\AddressValidationResult) {
                throw new \InvalidArgumentException(sprintf('The AddressResults property can only contain items of \CommerceFedEx\FedExPHP\Structs\AddressValidationResult, "%s" given', is_object($addressValidationReplyAddressResultsItem) ? get_class($addressValidationReplyAddressResultsItem) : gettype($addressValidationReplyAddressResultsItem)), __LINE__);
            }
        }
        $this->AddressResults = $addressResults;
        return $this;
    }
    /**
     * Add item to AddressResults value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\AddressValidationResult $item
     * @return \CommerceFedEx\FedExPHP\Structs\AddressValidationReply
     */
    public function addToAddressResults(\CommerceFedEx\FedExPHP\Structs\AddressValidationResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\AddressValidationResult) {
            throw new \InvalidArgumentException(sprintf('The AddressResults property can only contain items of \CommerceFedEx\FedExPHP\Structs\AddressValidationResult, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddressResults[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\AddressValidationReply
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
