<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseSmartPostDetail Structs
 * @subpackage Structs
 */
class CloseSmartPostDetail extends AbstractStructBase
{
    /**
     * The HubId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HubId;
    /**
     * The CustomerId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerId;
    /**
     * The CustomerManifestId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerManifestId;
    /**
     * The DestinationCountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationCountryCode;
    /**
     * The PickupCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PickupCarrier;
    /**
     * Constructor method for CloseSmartPostDetail
     * @uses CloseSmartPostDetail::setHubId()
     * @uses CloseSmartPostDetail::setCustomerId()
     * @uses CloseSmartPostDetail::setCustomerManifestId()
     * @uses CloseSmartPostDetail::setDestinationCountryCode()
     * @uses CloseSmartPostDetail::setPickupCarrier()
     * @param string $hubId
     * @param string $customerId
     * @param string $customerManifestId
     * @param string $destinationCountryCode
     * @param string $pickupCarrier
     */
    public function __construct($hubId = null, $customerId = null, $customerManifestId = null, $destinationCountryCode = null, $pickupCarrier = null)
    {
        $this
            ->setHubId($hubId)
            ->setCustomerId($customerId)
            ->setCustomerManifestId($customerManifestId)
            ->setDestinationCountryCode($destinationCountryCode)
            ->setPickupCarrier($pickupCarrier);
    }
    /**
     * Get HubId value
     * @return string|null
     */
    public function getHubId()
    {
        return $this->HubId;
    }
    /**
     * Set HubId value
     * @param string $hubId
     * @return \CommerceFedEx\FedExPHP\Structs\CloseSmartPostDetail
     */
    public function setHubId($hubId = null)
    {
        // validation for constraint: string
        if (!is_null($hubId) && !is_string($hubId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hubId)), __LINE__);
        }
        $this->HubId = $hubId;
        return $this;
    }
    /**
     * Get CustomerId value
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }
    /**
     * Set CustomerId value
     * @param string $customerId
     * @return \CommerceFedEx\FedExPHP\Structs\CloseSmartPostDetail
     */
    public function setCustomerId($customerId = null)
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerId)), __LINE__);
        }
        $this->CustomerId = $customerId;
        return $this;
    }
    /**
     * Get CustomerManifestId value
     * @return string|null
     */
    public function getCustomerManifestId()
    {
        return $this->CustomerManifestId;
    }
    /**
     * Set CustomerManifestId value
     * @param string $customerManifestId
     * @return \CommerceFedEx\FedExPHP\Structs\CloseSmartPostDetail
     */
    public function setCustomerManifestId($customerManifestId = null)
    {
        // validation for constraint: string
        if (!is_null($customerManifestId) && !is_string($customerManifestId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerManifestId)), __LINE__);
        }
        $this->CustomerManifestId = $customerManifestId;
        return $this;
    }
    /**
     * Get DestinationCountryCode value
     * @return string|null
     */
    public function getDestinationCountryCode()
    {
        return $this->DestinationCountryCode;
    }
    /**
     * Set DestinationCountryCode value
     * @param string $destinationCountryCode
     * @return \CommerceFedEx\FedExPHP\Structs\CloseSmartPostDetail
     */
    public function setDestinationCountryCode($destinationCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($destinationCountryCode) && !is_string($destinationCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationCountryCode)), __LINE__);
        }
        $this->DestinationCountryCode = $destinationCountryCode;
        return $this;
    }
    /**
     * Get PickupCarrier value
     * @return string|null
     */
    public function getPickupCarrier()
    {
        return $this->PickupCarrier;
    }
    /**
     * Set PickupCarrier value
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pickupCarrier
     * @return \CommerceFedEx\FedExPHP\Structs\CloseSmartPostDetail
     */
    public function setPickupCarrier($pickupCarrier = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid($pickupCarrier)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pickupCarrier, implode(', ', \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->PickupCarrier = $pickupCarrier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CloseSmartPostDetail
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
