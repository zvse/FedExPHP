<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchLocationsReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:SearchLocationsReply
 * @subpackage Structs
 */
class SearchLocationsReply extends AbstractStructBase
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
     * The TotalResultsAvailable
     * Meta informations extracted from the WSDL
     * - documentation: Specifies total number of location results that are available.
     * - minOccurs: 0
     * @var int
     */
    public $TotalResultsAvailable;
    /**
     * The ResultsReturned
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the number of location results returned in this reply.
     * - minOccurs: 0
     * @var int
     */
    public $ResultsReturned;
    /**
     * The FormattedAddress
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the address formatted to have correct postal code per USPS standards.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Address
     */
    public $FormattedAddress;
    /**
     * The AddressToLocationRelationships
     * Meta informations extracted from the WSDL
     * - documentation: The details about the relationship between the address requested and the locations returned.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\AddressToLocationRelationshipDetail[]
     */
    public $AddressToLocationRelationships;
    /**
     * Constructor method for SearchLocationsReply
     * @uses SearchLocationsReply::setHighestSeverity()
     * @uses SearchLocationsReply::setNotifications()
     * @uses SearchLocationsReply::setVersion()
     * @uses SearchLocationsReply::setTransactionDetail()
     * @uses SearchLocationsReply::setTotalResultsAvailable()
     * @uses SearchLocationsReply::setResultsReturned()
     * @uses SearchLocationsReply::setFormattedAddress()
     * @uses SearchLocationsReply::setAddressToLocationRelationships()
     * @param string $highestSeverity
     * @param \CommerceFedEx\FedExPHP\Structs\Notification[] $notifications
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param int $totalResultsAvailable
     * @param int $resultsReturned
     * @param \CommerceFedEx\FedExPHP\Structs\Address $formattedAddress
     * @param \CommerceFedEx\FedExPHP\Structs\AddressToLocationRelationshipDetail[] $addressToLocationRelationships
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $totalResultsAvailable = null, $resultsReturned = null, \CommerceFedEx\FedExPHP\Structs\Address $formattedAddress = null, array $addressToLocationRelationships = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setTotalResultsAvailable($totalResultsAvailable)
            ->setResultsReturned($resultsReturned)
            ->setFormattedAddress($formattedAddress)
            ->setAddressToLocationRelationships($addressToLocationRelationships);
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
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationsReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationsReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $searchLocationsReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$searchLocationsReplyNotificationsItem instanceof \CommerceFedEx\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\Notification, "%s" given', is_object($searchLocationsReplyNotificationsItem) ? get_class($searchLocationsReplyNotificationsItem) : gettype($searchLocationsReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Notification $item
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationsReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationsReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationsReply
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get TotalResultsAvailable value
     * @return int|null
     */
    public function getTotalResultsAvailable()
    {
        return $this->TotalResultsAvailable;
    }
    /**
     * Set TotalResultsAvailable value
     * @param int $totalResultsAvailable
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationsReply
     */
    public function setTotalResultsAvailable($totalResultsAvailable = null)
    {
        // validation for constraint: int
        if (!is_null($totalResultsAvailable) && !is_numeric($totalResultsAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalResultsAvailable)), __LINE__);
        }
        $this->TotalResultsAvailable = $totalResultsAvailable;
        return $this;
    }
    /**
     * Get ResultsReturned value
     * @return int|null
     */
    public function getResultsReturned()
    {
        return $this->ResultsReturned;
    }
    /**
     * Set ResultsReturned value
     * @param int $resultsReturned
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationsReply
     */
    public function setResultsReturned($resultsReturned = null)
    {
        // validation for constraint: int
        if (!is_null($resultsReturned) && !is_numeric($resultsReturned)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($resultsReturned)), __LINE__);
        }
        $this->ResultsReturned = $resultsReturned;
        return $this;
    }
    /**
     * Get FormattedAddress value
     * @return \CommerceFedEx\FedExPHP\Structs\Address|null
     */
    public function getFormattedAddress()
    {
        return $this->FormattedAddress;
    }
    /**
     * Set FormattedAddress value
     * @param \CommerceFedEx\FedExPHP\Structs\Address $formattedAddress
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationsReply
     */
    public function setFormattedAddress(\CommerceFedEx\FedExPHP\Structs\Address $formattedAddress = null)
    {
        $this->FormattedAddress = $formattedAddress;
        return $this;
    }
    /**
     * Get AddressToLocationRelationships value
     * @return \CommerceFedEx\FedExPHP\Structs\AddressToLocationRelationshipDetail[]|null
     */
    public function getAddressToLocationRelationships()
    {
        return $this->AddressToLocationRelationships;
    }
    /**
     * Set AddressToLocationRelationships value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\AddressToLocationRelationshipDetail[] $addressToLocationRelationships
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationsReply
     */
    public function setAddressToLocationRelationships(array $addressToLocationRelationships = array())
    {
        foreach ($addressToLocationRelationships as $searchLocationsReplyAddressToLocationRelationshipsItem) {
            // validation for constraint: itemType
            if (!$searchLocationsReplyAddressToLocationRelationshipsItem instanceof \CommerceFedEx\FedExPHP\Structs\AddressToLocationRelationshipDetail) {
                throw new \InvalidArgumentException(sprintf('The AddressToLocationRelationships property can only contain items of \CommerceFedEx\FedExPHP\Structs\AddressToLocationRelationshipDetail, "%s" given', is_object($searchLocationsReplyAddressToLocationRelationshipsItem) ? get_class($searchLocationsReplyAddressToLocationRelationshipsItem) : gettype($searchLocationsReplyAddressToLocationRelationshipsItem)), __LINE__);
            }
        }
        $this->AddressToLocationRelationships = $addressToLocationRelationships;
        return $this;
    }
    /**
     * Add item to AddressToLocationRelationships value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\AddressToLocationRelationshipDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationsReply
     */
    public function addToAddressToLocationRelationships(\CommerceFedEx\FedExPHP\Structs\AddressToLocationRelationshipDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\AddressToLocationRelationshipDetail) {
            throw new \InvalidArgumentException(sprintf('The AddressToLocationRelationships property can only contain items of \CommerceFedEx\FedExPHP\Structs\AddressToLocationRelationshipDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddressToLocationRelationships[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\SearchLocationsReply
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
