<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListDangerousGoodsReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:ListDangerousGoodsReply
 * @subpackage Structs
 */
class ListDangerousGoodsReply extends AbstractStructBase
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
     * The Regulation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Regulation;
    /**
     * The Accessibility
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Accessibility;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Options;
    /**
     * The Details
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsDetail[]
     */
    public $Details;
    /**
     * Constructor method for ListDangerousGoodsReply
     * @uses ListDangerousGoodsReply::setHighestSeverity()
     * @uses ListDangerousGoodsReply::setNotifications()
     * @uses ListDangerousGoodsReply::setVersion()
     * @uses ListDangerousGoodsReply::setTransactionDetail()
     * @uses ListDangerousGoodsReply::setRegulation()
     * @uses ListDangerousGoodsReply::setAccessibility()
     * @uses ListDangerousGoodsReply::setOptions()
     * @uses ListDangerousGoodsReply::setDetails()
     * @param string $highestSeverity
     * @param \CommerceFedEx\FedExPHP\Structs\Notification[] $notifications
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $regulation
     * @param string $accessibility
     * @param string[] $options
     * @param \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsDetail[] $details
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $regulation = null, $accessibility = null, array $options = array(), array $details = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setRegulation($regulation)
            ->setAccessibility($accessibility)
            ->setOptions($options)
            ->setDetails($details);
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
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $listDangerousGoodsReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$listDangerousGoodsReplyNotificationsItem instanceof \CommerceFedEx\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\Notification, "%s" given', is_object($listDangerousGoodsReplyNotificationsItem) ? get_class($listDangerousGoodsReplyNotificationsItem) : gettype($listDangerousGoodsReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Notification $item
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsReply
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get Regulation value
     * @return string|null
     */
    public function getRegulation()
    {
        return $this->Regulation;
    }
    /**
     * Set Regulation value
     * @uses \CommerceFedEx\FedExPHP\Enums\HazardousCommodityRegulationType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\HazardousCommodityRegulationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $regulation
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsReply
     */
    public function setRegulation($regulation = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\HazardousCommodityRegulationType::valueIsValid($regulation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $regulation, implode(', ', \CommerceFedEx\FedExPHP\Enums\HazardousCommodityRegulationType::getValidValues())), __LINE__);
        }
        $this->Regulation = $regulation;
        return $this;
    }
    /**
     * Get Accessibility value
     * @return string|null
     */
    public function getAccessibility()
    {
        return $this->Accessibility;
    }
    /**
     * Set Accessibility value
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsAccessibilityType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsAccessibilityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accessibility
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsReply
     */
    public function setAccessibility($accessibility = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\DangerousGoodsAccessibilityType::valueIsValid($accessibility)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $accessibility, implode(', ', \CommerceFedEx\FedExPHP\Enums\DangerousGoodsAccessibilityType::getValidValues())), __LINE__);
        }
        $this->Accessibility = $accessibility;
        return $this;
    }
    /**
     * Get Options value
     * @return string[]|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @uses \CommerceFedEx\FedExPHP\Enums\HazardousCommodityOptionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\HazardousCommodityOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $options
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsReply
     */
    public function setOptions(array $options = array())
    {
        $invalidValues = array();
        foreach ($options as $listDangerousGoodsReplyOptionsItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\HazardousCommodityOptionType::valueIsValid($listDangerousGoodsReplyOptionsItem)) {
                $invalidValues[] = var_export($listDangerousGoodsReplyOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\HazardousCommodityOptionType::getValidValues())), __LINE__);
        }
        $this->Options = $options;
        return $this;
    }
    /**
     * Add item to Options value
     * @uses \CommerceFedEx\FedExPHP\Enums\HazardousCommodityOptionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\HazardousCommodityOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsReply
     */
    public function addToOptions($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\HazardousCommodityOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\HazardousCommodityOptionType::getValidValues())), __LINE__);
        }
        $this->Options[] = $item;
        return $this;
    }
    /**
     * Get Details value
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsDetail[]|null
     */
    public function getDetails()
    {
        return $this->Details;
    }
    /**
     * Set Details value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsDetail[] $details
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsReply
     */
    public function setDetails(array $details = array())
    {
        foreach ($details as $listDangerousGoodsReplyDetailsItem) {
            // validation for constraint: itemType
            if (!$listDangerousGoodsReplyDetailsItem instanceof \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsDetail) {
                throw new \InvalidArgumentException(sprintf('The Details property can only contain items of \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsDetail, "%s" given', is_object($listDangerousGoodsReplyDetailsItem) ? get_class($listDangerousGoodsReplyDetailsItem) : gettype($listDangerousGoodsReplyDetailsItem)), __LINE__);
            }
        }
        $this->Details = $details;
        return $this;
    }
    /**
     * Add item to Details value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsReply
     */
    public function addToDetails(\CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsDetail) {
            throw new \InvalidArgumentException(sprintf('The Details property can only contain items of \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Details[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ListDangerousGoodsReply
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
