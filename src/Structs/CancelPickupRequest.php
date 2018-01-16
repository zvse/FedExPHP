<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelPickupRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:CancelPickupRequest
 * @subpackage Structs
 */
class CancelPickupRequest extends AbstractStructBase
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
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * The PickupConfirmationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PickupConfirmationNumber;
    /**
     * The ScheduledDate
     * Meta informations extracted from the WSDL
     * - documentation: The local date which the pickup was originally scheduled to be picked up on. The date provided is the local to the client of the request. The date specification does not include any time zone designators.
     * - minOccurs: 0
     * @var string
     */
    public $ScheduledDate;
    /**
     * The EndDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EndDate;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The Remarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Remarks;
    /**
     * The ShippingChargesPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Payment
     */
    public $ShippingChargesPayment;
    /**
     * The Reason
     * Meta informations extracted from the WSDL
     * - documentation: The reason for canceling the pickup request.
     * - minOccurs: 0
     * @var string
     */
    public $Reason;
    /**
     * The ContactName
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the name of the person that requested pickup cancellation.
     * - minOccurs: 0
     * @var string
     */
    public $ContactName;
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the phone number of the person that requested pickup cancellation.
     * - minOccurs: 0
     * @var string
     */
    public $PhoneNumber;
    /**
     * The PhoneExtension
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the phone extension of the person that requested pickup cancellation.
     * - minOccurs: 0
     * @var string
     */
    public $PhoneExtension;
    /**
     * Constructor method for CancelPickupRequest
     * @uses CancelPickupRequest::setWebAuthenticationDetail()
     * @uses CancelPickupRequest::setClientDetail()
     * @uses CancelPickupRequest::setVersion()
     * @uses CancelPickupRequest::setTransactionDetail()
     * @uses CancelPickupRequest::setCarrierCode()
     * @uses CancelPickupRequest::setPickupConfirmationNumber()
     * @uses CancelPickupRequest::setScheduledDate()
     * @uses CancelPickupRequest::setEndDate()
     * @uses CancelPickupRequest::setLocation()
     * @uses CancelPickupRequest::setRemarks()
     * @uses CancelPickupRequest::setShippingChargesPayment()
     * @uses CancelPickupRequest::setReason()
     * @uses CancelPickupRequest::setContactName()
     * @uses CancelPickupRequest::setPhoneNumber()
     * @uses CancelPickupRequest::setPhoneExtension()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $carrierCode
     * @param string $pickupConfirmationNumber
     * @param string $scheduledDate
     * @param string $endDate
     * @param string $location
     * @param string $remarks
     * @param \CommerceFedEx\FedExPHP\Structs\Payment $shippingChargesPayment
     * @param string $reason
     * @param string $contactName
     * @param string $phoneNumber
     * @param string $phoneExtension
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $carrierCode = null, $pickupConfirmationNumber = null, $scheduledDate = null, $endDate = null, $location = null, $remarks = null, \CommerceFedEx\FedExPHP\Structs\Payment $shippingChargesPayment = null, $reason = null, $contactName = null, $phoneNumber = null, $phoneExtension = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setCarrierCode($carrierCode)
            ->setPickupConfirmationNumber($pickupConfirmationNumber)
            ->setScheduledDate($scheduledDate)
            ->setEndDate($endDate)
            ->setLocation($location)
            ->setRemarks($remarks)
            ->setShippingChargesPayment($shippingChargesPayment)
            ->setReason($reason)
            ->setContactName($contactName)
            ->setPhoneNumber($phoneNumber)
            ->setPhoneExtension($phoneExtension);
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
     * @return \CommerceFedEx\FedExPHP\Structs\CancelPickupRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\CancelPickupRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\CancelPickupRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\CancelPickupRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrierCode
     * @return \CommerceFedEx\FedExPHP\Structs\CancelPickupRequest
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierCode, implode(', ', \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get PickupConfirmationNumber value
     * @return string|null
     */
    public function getPickupConfirmationNumber()
    {
        return $this->PickupConfirmationNumber;
    }
    /**
     * Set PickupConfirmationNumber value
     * @param string $pickupConfirmationNumber
     * @return \CommerceFedEx\FedExPHP\Structs\CancelPickupRequest
     */
    public function setPickupConfirmationNumber($pickupConfirmationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($pickupConfirmationNumber) && !is_string($pickupConfirmationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupConfirmationNumber)), __LINE__);
        }
        $this->PickupConfirmationNumber = $pickupConfirmationNumber;
        return $this;
    }
    /**
     * Get ScheduledDate value
     * @return string|null
     */
    public function getScheduledDate()
    {
        return $this->ScheduledDate;
    }
    /**
     * Set ScheduledDate value
     * @param string $scheduledDate
     * @return \CommerceFedEx\FedExPHP\Structs\CancelPickupRequest
     */
    public function setScheduledDate($scheduledDate = null)
    {
        // validation for constraint: string
        if (!is_null($scheduledDate) && !is_string($scheduledDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scheduledDate)), __LINE__);
        }
        $this->ScheduledDate = $scheduledDate;
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \CommerceFedEx\FedExPHP\Structs\CancelPickupRequest
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \CommerceFedEx\FedExPHP\Structs\CancelPickupRequest
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location)), __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Get Remarks value
     * @return string|null
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }
    /**
     * Set Remarks value
     * @param string $remarks
     * @return \CommerceFedEx\FedExPHP\Structs\CancelPickupRequest
     */
    public function setRemarks($remarks = null)
    {
        // validation for constraint: string
        if (!is_null($remarks) && !is_string($remarks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remarks)), __LINE__);
        }
        $this->Remarks = $remarks;
        return $this;
    }
    /**
     * Get ShippingChargesPayment value
     * @return \CommerceFedEx\FedExPHP\Structs\Payment|null
     */
    public function getShippingChargesPayment()
    {
        return $this->ShippingChargesPayment;
    }
    /**
     * Set ShippingChargesPayment value
     * @param \CommerceFedEx\FedExPHP\Structs\Payment $shippingChargesPayment
     * @return \CommerceFedEx\FedExPHP\Structs\CancelPickupRequest
     */
    public function setShippingChargesPayment(\CommerceFedEx\FedExPHP\Structs\Payment $shippingChargesPayment = null)
    {
        $this->ShippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    /**
     * Get Reason value
     * @return string|null
     */
    public function getReason()
    {
        return $this->Reason;
    }
    /**
     * Set Reason value
     * @param string $reason
     * @return \CommerceFedEx\FedExPHP\Structs\CancelPickupRequest
     */
    public function setReason($reason = null)
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reason)), __LINE__);
        }
        $this->Reason = $reason;
        return $this;
    }
    /**
     * Get ContactName value
     * @return string|null
     */
    public function getContactName()
    {
        return $this->ContactName;
    }
    /**
     * Set ContactName value
     * @param string $contactName
     * @return \CommerceFedEx\FedExPHP\Structs\CancelPickupRequest
     */
    public function setContactName($contactName = null)
    {
        // validation for constraint: string
        if (!is_null($contactName) && !is_string($contactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactName)), __LINE__);
        }
        $this->ContactName = $contactName;
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param string $phoneNumber
     * @return \CommerceFedEx\FedExPHP\Structs\CancelPickupRequest
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Get PhoneExtension value
     * @return string|null
     */
    public function getPhoneExtension()
    {
        return $this->PhoneExtension;
    }
    /**
     * Set PhoneExtension value
     * @param string $phoneExtension
     * @return \CommerceFedEx\FedExPHP\Structs\CancelPickupRequest
     */
    public function setPhoneExtension($phoneExtension = null)
    {
        // validation for constraint: string
        if (!is_null($phoneExtension) && !is_string($phoneExtension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneExtension)), __LINE__);
        }
        $this->PhoneExtension = $phoneExtension;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CancelPickupRequest
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
