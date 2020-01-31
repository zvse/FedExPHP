<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryOnInvoiceAcceptanceDetail Structs
 * @subpackage Structs
 */
class DeliveryOnInvoiceAcceptanceDetail extends AbstractStructBase
{
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Party
     */
    public $Recipient;
    /**
     * The TrackingId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the tracking id for the return, if preassigned.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TrackingId
     */
    public $TrackingId;
    /**
     * Constructor method for DeliveryOnInvoiceAcceptanceDetail
     * @uses DeliveryOnInvoiceAcceptanceDetail::setRecipient()
     * @uses DeliveryOnInvoiceAcceptanceDetail::setTrackingId()
     * @param \CommerceFedEx\FedExPHP\Structs\Party $recipient
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId $trackingId
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\Party $recipient = null, \CommerceFedEx\FedExPHP\Structs\TrackingId $trackingId = null)
    {
        $this
            ->setRecipient($recipient)
            ->setTrackingId($trackingId);
    }
    /**
     * Get Recipient value
     * @return \CommerceFedEx\FedExPHP\Structs\Party|null
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \CommerceFedEx\FedExPHP\Structs\Party $recipient
     * @return \CommerceFedEx\FedExPHP\Structs\DeliveryOnInvoiceAcceptanceDetail
     */
    public function setRecipient(\CommerceFedEx\FedExPHP\Structs\Party $recipient = null)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    /**
     * Get TrackingId value
     * @return \CommerceFedEx\FedExPHP\Structs\TrackingId|null
     */
    public function getTrackingId()
    {
        return $this->TrackingId;
    }
    /**
     * Set TrackingId value
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId $trackingId
     * @return \CommerceFedEx\FedExPHP\Structs\DeliveryOnInvoiceAcceptanceDetail
     */
    public function setTrackingId(\CommerceFedEx\FedExPHP\Structs\TrackingId $trackingId = null)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\DeliveryOnInvoiceAcceptanceDetail
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
