<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateConsolidationReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:CreateConsolidationReply
 * @subpackage Structs
 */
class CreateConsolidationReply extends AbstractStructBase
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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Notification[]
     */
    public $Notifications;
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
     * The ConsolidationKey
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationKey
     */
    public $ConsolidationKey;
    /**
     * The TrackingIds
     * Meta informations extracted from the WSDL
     * - documentation: Initially contains only Master Air Way Bill tracking ID.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingId[]
     */
    public $TrackingIds;
    /**
     * The EffectiveDistributionLocations
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation[]
     */
    public $EffectiveDistributionLocations;
    /**
     * Constructor method for CreateConsolidationReply
     * @uses CreateConsolidationReply::setHighestSeverity()
     * @uses CreateConsolidationReply::setNotifications()
     * @uses CreateConsolidationReply::setVersion()
     * @uses CreateConsolidationReply::setTransactionDetail()
     * @uses CreateConsolidationReply::setConsolidationKey()
     * @uses CreateConsolidationReply::setTrackingIds()
     * @uses CreateConsolidationReply::setEffectiveDistributionLocations()
     * @param string $highestSeverity
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $notifications
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationKey $consolidationKey
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId[] $trackingIds
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation[] $effectiveDistributionLocations
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationKey $consolidationKey = null, array $trackingIds = array(), array $effectiveDistributionLocations = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setConsolidationKey($consolidationKey)
            ->setTrackingIds($trackingIds)
            ->setEffectiveDistributionLocations($effectiveDistributionLocations);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationSeverityType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationSeverityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $highestSeverity
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationReply
     */
    public function setHighestSeverity($highestSeverity = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\NotificationSeverityType::valueIsValid($highestSeverity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $highestSeverity, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\NotificationSeverityType::getValidValues())), __LINE__);
        }
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    /**
     * Get Notifications value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $notifications
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $createConsolidationReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$createConsolidationReplyNotificationsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($createConsolidationReplyNotificationsItem) ? get_class($createConsolidationReplyNotificationsItem) : gettype($createConsolidationReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationReply
     */
    public function addToNotifications(\NicholasCreativeMedia\FedExPHP\Structs\Notification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
            throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Notifications[] = $item;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationReply
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ConsolidationKey value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationKey|null
     */
    public function getConsolidationKey()
    {
        return $this->ConsolidationKey;
    }
    /**
     * Set ConsolidationKey value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConsolidationKey $consolidationKey
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationReply
     */
    public function setConsolidationKey(\NicholasCreativeMedia\FedExPHP\Structs\ConsolidationKey $consolidationKey = null)
    {
        $this->ConsolidationKey = $consolidationKey;
        return $this;
    }
    /**
     * Get TrackingIds value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingId[]|null
     */
    public function getTrackingIds()
    {
        return $this->TrackingIds;
    }
    /**
     * Set TrackingIds value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId[] $trackingIds
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationReply
     */
    public function setTrackingIds(array $trackingIds = array())
    {
        foreach ($trackingIds as $createConsolidationReplyTrackingIdsItem) {
            // validation for constraint: itemType
            if (!$createConsolidationReplyTrackingIdsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackingId) {
                throw new \InvalidArgumentException(sprintf('The TrackingIds property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackingId, "%s" given', is_object($createConsolidationReplyTrackingIdsItem) ? get_class($createConsolidationReplyTrackingIdsItem) : gettype($createConsolidationReplyTrackingIdsItem)), __LINE__);
            }
        }
        $this->TrackingIds = $trackingIds;
        return $this;
    }
    /**
     * Add item to TrackingIds value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationReply
     */
    public function addToTrackingIds(\NicholasCreativeMedia\FedExPHP\Structs\TrackingId $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackingId) {
            throw new \InvalidArgumentException(sprintf('The TrackingIds property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackingId, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TrackingIds[] = $item;
        return $this;
    }
    /**
     * Get EffectiveDistributionLocations value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation[]|null
     */
    public function getEffectiveDistributionLocations()
    {
        return $this->EffectiveDistributionLocations;
    }
    /**
     * Set EffectiveDistributionLocations value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation[] $effectiveDistributionLocations
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationReply
     */
    public function setEffectiveDistributionLocations(array $effectiveDistributionLocations = array())
    {
        foreach ($effectiveDistributionLocations as $createConsolidationReplyEffectiveDistributionLocationsItem) {
            // validation for constraint: itemType
            if (!$createConsolidationReplyEffectiveDistributionLocationsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation) {
                throw new \InvalidArgumentException(sprintf('The EffectiveDistributionLocations property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation, "%s" given', is_object($createConsolidationReplyEffectiveDistributionLocationsItem) ? get_class($createConsolidationReplyEffectiveDistributionLocationsItem) : gettype($createConsolidationReplyEffectiveDistributionLocationsItem)), __LINE__);
            }
        }
        $this->EffectiveDistributionLocations = $effectiveDistributionLocations;
        return $this;
    }
    /**
     * Add item to EffectiveDistributionLocations value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationReply
     */
    public function addToEffectiveDistributionLocations(\NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation) {
            throw new \InvalidArgumentException(sprintf('The EffectiveDistributionLocations property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\RequestedDistributionLocation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EffectiveDistributionLocations[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationReply
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
