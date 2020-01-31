<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RerouteDeliveryDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the details about rerouting a shipment for delivery.
 * @subpackage Structs
 */
class RerouteDeliveryDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the reroute option.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The TransitTime
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the commit time for a FedEx Ground shipment that is being rerouted.
     * - minOccurs: 0
     * @var string
     */
    public $TransitTime;
    /**
     * The CommitmentDate
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the commit date for a FedEx Express shipment that is being rereouted.
     * - minOccurs: 0
     * @var string
     */
    public $CommitmentDate;
    /**
     * The CommitmentTime
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the commit time in local time of the destination for a FedEx Express shipment that is being rerouted.
     * - minOccurs: 0
     * @var string
     */
    public $CommitmentTime;
    /**
     * Constructor method for RerouteDeliveryDetail
     * @uses RerouteDeliveryDetail::setType()
     * @uses RerouteDeliveryDetail::setTransitTime()
     * @uses RerouteDeliveryDetail::setCommitmentDate()
     * @uses RerouteDeliveryDetail::setCommitmentTime()
     * @param string $type
     * @param string $transitTime
     * @param string $commitmentDate
     * @param string $commitmentTime
     */
    public function __construct($type = null, $transitTime = null, $commitmentDate = null, $commitmentTime = null)
    {
        $this
            ->setType($type)
            ->setTransitTime($transitTime)
            ->setCommitmentDate($commitmentDate)
            ->setCommitmentTime($commitmentTime);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \CommerceFedEx\FedExPHP\Enums\RerouteDeliveryType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\RerouteDeliveryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \CommerceFedEx\FedExPHP\Structs\RerouteDeliveryDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\RerouteDeliveryType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \CommerceFedEx\FedExPHP\Enums\RerouteDeliveryType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get TransitTime value
     * @return string|null
     */
    public function getTransitTime()
    {
        return $this->TransitTime;
    }
    /**
     * Set TransitTime value
     * @uses \CommerceFedEx\FedExPHP\Enums\TransitTimeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\TransitTimeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transitTime
     * @return \CommerceFedEx\FedExPHP\Structs\RerouteDeliveryDetail
     */
    public function setTransitTime($transitTime = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\TransitTimeType::valueIsValid($transitTime)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $transitTime, implode(', ', \CommerceFedEx\FedExPHP\Enums\TransitTimeType::getValidValues())), __LINE__);
        }
        $this->TransitTime = $transitTime;
        return $this;
    }
    /**
     * Get CommitmentDate value
     * @return string|null
     */
    public function getCommitmentDate()
    {
        return $this->CommitmentDate;
    }
    /**
     * Set CommitmentDate value
     * @param string $commitmentDate
     * @return \CommerceFedEx\FedExPHP\Structs\RerouteDeliveryDetail
     */
    public function setCommitmentDate($commitmentDate = null)
    {
        // validation for constraint: string
        if (!is_null($commitmentDate) && !is_string($commitmentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commitmentDate)), __LINE__);
        }
        $this->CommitmentDate = $commitmentDate;
        return $this;
    }
    /**
     * Get CommitmentTime value
     * @return string|null
     */
    public function getCommitmentTime()
    {
        return $this->CommitmentTime;
    }
    /**
     * Set CommitmentTime value
     * @param string $commitmentTime
     * @return \CommerceFedEx\FedExPHP\Structs\RerouteDeliveryDetail
     */
    public function setCommitmentTime($commitmentTime = null)
    {
        // validation for constraint: string
        if (!is_null($commitmentTime) && !is_string($commitmentTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commitmentTime)), __LINE__);
        }
        $this->CommitmentTime = $commitmentTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\RerouteDeliveryDetail
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
