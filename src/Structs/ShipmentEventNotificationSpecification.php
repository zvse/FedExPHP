<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentEventNotificationSpecification Structs
 * @subpackage Structs
 */
class ShipmentEventNotificationSpecification extends AbstractStructBase
{
    /**
     * The Role
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Role;
    /**
     * The Events
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Events;
    /**
     * The NotificationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\NotificationDetail
     */
    public $NotificationDetail;
    /**
     * The FormatSpecification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShipmentNotificationFormatSpecification
     */
    public $FormatSpecification;
    /**
     * Constructor method for ShipmentEventNotificationSpecification
     * @uses ShipmentEventNotificationSpecification::setRole()
     * @uses ShipmentEventNotificationSpecification::setEvents()
     * @uses ShipmentEventNotificationSpecification::setNotificationDetail()
     * @uses ShipmentEventNotificationSpecification::setFormatSpecification()
     * @param string $role
     * @param string[] $events
     * @param \CommerceFedEx\FedExPHP\Structs\NotificationDetail $notificationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentNotificationFormatSpecification $formatSpecification
     */
    public function __construct($role = null, array $events = array(), \CommerceFedEx\FedExPHP\Structs\NotificationDetail $notificationDetail = null, \CommerceFedEx\FedExPHP\Structs\ShipmentNotificationFormatSpecification $formatSpecification = null)
    {
        $this
            ->setRole($role)
            ->setEvents($events)
            ->setNotificationDetail($notificationDetail)
            ->setFormatSpecification($formatSpecification);
    }
    /**
     * Get Role value
     * @return string|null
     */
    public function getRole()
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @uses \CommerceFedEx\FedExPHP\Enums\ShipmentNotificationRoleType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ShipmentNotificationRoleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $role
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentEventNotificationSpecification
     */
    public function setRole($role = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ShipmentNotificationRoleType::valueIsValid($role)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $role, implode(', ', \CommerceFedEx\FedExPHP\Enums\ShipmentNotificationRoleType::getValidValues())), __LINE__);
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Get Events value
     * @return string[]|null
     */
    public function getEvents()
    {
        return $this->Events;
    }
    /**
     * Set Events value
     * @uses \CommerceFedEx\FedExPHP\Enums\NotificationEventType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\NotificationEventType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $events
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentEventNotificationSpecification
     */
    public function setEvents(array $events = array())
    {
        $invalidValues = array();
        foreach ($events as $shipmentEventNotificationSpecificationEventsItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\NotificationEventType::valueIsValid($shipmentEventNotificationSpecificationEventsItem)) {
                $invalidValues[] = var_export($shipmentEventNotificationSpecificationEventsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\NotificationEventType::getValidValues())), __LINE__);
        }
        $this->Events = $events;
        return $this;
    }
    /**
     * Add item to Events value
     * @uses \CommerceFedEx\FedExPHP\Enums\NotificationEventType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\NotificationEventType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentEventNotificationSpecification
     */
    public function addToEvents($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\NotificationEventType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\NotificationEventType::getValidValues())), __LINE__);
        }
        $this->Events[] = $item;
        return $this;
    }
    /**
     * Get NotificationDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\NotificationDetail|null
     */
    public function getNotificationDetail()
    {
        return $this->NotificationDetail;
    }
    /**
     * Set NotificationDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\NotificationDetail $notificationDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentEventNotificationSpecification
     */
    public function setNotificationDetail(\CommerceFedEx\FedExPHP\Structs\NotificationDetail $notificationDetail = null)
    {
        $this->NotificationDetail = $notificationDetail;
        return $this;
    }
    /**
     * Get FormatSpecification value
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentNotificationFormatSpecification|null
     */
    public function getFormatSpecification()
    {
        return $this->FormatSpecification;
    }
    /**
     * Set FormatSpecification value
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentNotificationFormatSpecification $formatSpecification
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentEventNotificationSpecification
     */
    public function setFormatSpecification(\CommerceFedEx\FedExPHP\Structs\ShipmentNotificationFormatSpecification $formatSpecification = null)
    {
        $this->FormatSpecification = $formatSpecification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentEventNotificationSpecification
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
