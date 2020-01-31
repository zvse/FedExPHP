<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditFraudDetectionDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: This class is a rename of the previous VerifyCreditFraudDetail; the name change reflects the fact that it is no longer tied to a "verify" usage.
 * @subpackage Structs
 */
class CreditFraudDetectionDetail extends AbstractStructBase
{
    /**
     * The IpAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IpAddress;
    /**
     * The ClientCookiesEnabled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ClientCookiesEnabled;
    /**
     * The DevicePrint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DevicePrint;
    /**
     * Constructor method for CreditFraudDetectionDetail
     * @uses CreditFraudDetectionDetail::setIpAddress()
     * @uses CreditFraudDetectionDetail::setClientCookiesEnabled()
     * @uses CreditFraudDetectionDetail::setDevicePrint()
     * @param string $ipAddress
     * @param bool $clientCookiesEnabled
     * @param string $devicePrint
     */
    public function __construct($ipAddress = null, $clientCookiesEnabled = null, $devicePrint = null)
    {
        $this
            ->setIpAddress($ipAddress)
            ->setClientCookiesEnabled($clientCookiesEnabled)
            ->setDevicePrint($devicePrint);
    }
    /**
     * Get IpAddress value
     * @return string|null
     */
    public function getIpAddress()
    {
        return $this->IpAddress;
    }
    /**
     * Set IpAddress value
     * @param string $ipAddress
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreditFraudDetectionDetail
     */
    public function setIpAddress($ipAddress = null)
    {
        // validation for constraint: string
        if (!is_null($ipAddress) && !is_string($ipAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ipAddress)), __LINE__);
        }
        $this->IpAddress = $ipAddress;
        return $this;
    }
    /**
     * Get ClientCookiesEnabled value
     * @return bool|null
     */
    public function getClientCookiesEnabled()
    {
        return $this->ClientCookiesEnabled;
    }
    /**
     * Set ClientCookiesEnabled value
     * @param bool $clientCookiesEnabled
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreditFraudDetectionDetail
     */
    public function setClientCookiesEnabled($clientCookiesEnabled = null)
    {
        $this->ClientCookiesEnabled = $clientCookiesEnabled;
        return $this;
    }
    /**
     * Get DevicePrint value
     * @return string|null
     */
    public function getDevicePrint()
    {
        return $this->DevicePrint;
    }
    /**
     * Set DevicePrint value
     * @param string $devicePrint
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreditFraudDetectionDetail
     */
    public function setDevicePrint($devicePrint = null)
    {
        // validation for constraint: string
        if (!is_null($devicePrint) && !is_string($devicePrint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($devicePrint)), __LINE__);
        }
        $this->DevicePrint = $devicePrint;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreditFraudDetectionDetail
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
