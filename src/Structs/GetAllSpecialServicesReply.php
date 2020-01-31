<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllSpecialServicesReply Structs
 * Meta informations extracted from the WSDL
 * - documentation: The response from PMIS requests for special services data.
 * - type: ns:GetAllSpecialServicesReply
 * @subpackage Structs
 */
class GetAllSpecialServicesReply extends AbstractStructBase
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
     * The ValidShipmentSpecialServices
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServiceDescription[]
     */
    public $ValidShipmentSpecialServices;
    /**
     * The ValidPackageSpecialServices
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription[]
     */
    public $ValidPackageSpecialServices;
    /**
     * Constructor method for GetAllSpecialServicesReply
     * @uses GetAllSpecialServicesReply::setHighestSeverity()
     * @uses GetAllSpecialServicesReply::setNotifications()
     * @uses GetAllSpecialServicesReply::setVersion()
     * @uses GetAllSpecialServicesReply::setTransactionDetail()
     * @uses GetAllSpecialServicesReply::setValidShipmentSpecialServices()
     * @uses GetAllSpecialServicesReply::setValidPackageSpecialServices()
     * @param string $highestSeverity
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $notifications
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServiceDescription[] $validShipmentSpecialServices
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription[] $validPackageSpecialServices
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, array $validShipmentSpecialServices = array(), array $validPackageSpecialServices = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setValidShipmentSpecialServices($validShipmentSpecialServices)
            ->setValidPackageSpecialServices($validPackageSpecialServices);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllSpecialServicesReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllSpecialServicesReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $getAllSpecialServicesReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$getAllSpecialServicesReplyNotificationsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($getAllSpecialServicesReplyNotificationsItem) ? get_class($getAllSpecialServicesReplyNotificationsItem) : gettype($getAllSpecialServicesReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllSpecialServicesReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllSpecialServicesReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllSpecialServicesReply
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ValidShipmentSpecialServices value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServiceDescription[]|null
     */
    public function getValidShipmentSpecialServices()
    {
        return $this->ValidShipmentSpecialServices;
    }
    /**
     * Set ValidShipmentSpecialServices value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServiceDescription[] $validShipmentSpecialServices
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllSpecialServicesReply
     */
    public function setValidShipmentSpecialServices(array $validShipmentSpecialServices = array())
    {
        foreach ($validShipmentSpecialServices as $getAllSpecialServicesReplyValidShipmentSpecialServicesItem) {
            // validation for constraint: itemType
            if (!$getAllSpecialServicesReplyValidShipmentSpecialServicesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServiceDescription) {
                throw new \InvalidArgumentException(sprintf('The ValidShipmentSpecialServices property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServiceDescription, "%s" given', is_object($getAllSpecialServicesReplyValidShipmentSpecialServicesItem) ? get_class($getAllSpecialServicesReplyValidShipmentSpecialServicesItem) : gettype($getAllSpecialServicesReplyValidShipmentSpecialServicesItem)), __LINE__);
            }
        }
        $this->ValidShipmentSpecialServices = $validShipmentSpecialServices;
        return $this;
    }
    /**
     * Add item to ValidShipmentSpecialServices value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServiceDescription $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllSpecialServicesReply
     */
    public function addToValidShipmentSpecialServices(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServiceDescription $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServiceDescription) {
            throw new \InvalidArgumentException(sprintf('The ValidShipmentSpecialServices property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServiceDescription, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ValidShipmentSpecialServices[] = $item;
        return $this;
    }
    /**
     * Get ValidPackageSpecialServices value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription[]|null
     */
    public function getValidPackageSpecialServices()
    {
        return $this->ValidPackageSpecialServices;
    }
    /**
     * Set ValidPackageSpecialServices value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription[] $validPackageSpecialServices
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllSpecialServicesReply
     */
    public function setValidPackageSpecialServices(array $validPackageSpecialServices = array())
    {
        foreach ($validPackageSpecialServices as $getAllSpecialServicesReplyValidPackageSpecialServicesItem) {
            // validation for constraint: itemType
            if (!$getAllSpecialServicesReplyValidPackageSpecialServicesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription) {
                throw new \InvalidArgumentException(sprintf('The ValidPackageSpecialServices property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription, "%s" given', is_object($getAllSpecialServicesReplyValidPackageSpecialServicesItem) ? get_class($getAllSpecialServicesReplyValidPackageSpecialServicesItem) : gettype($getAllSpecialServicesReplyValidPackageSpecialServicesItem)), __LINE__);
            }
        }
        $this->ValidPackageSpecialServices = $validPackageSpecialServices;
        return $this;
    }
    /**
     * Add item to ValidPackageSpecialServices value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllSpecialServicesReply
     */
    public function addToValidPackageSpecialServices(\NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription) {
            throw new \InvalidArgumentException(sprintf('The ValidPackageSpecialServices property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ValidPackageSpecialServices[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetAllSpecialServicesReply
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
