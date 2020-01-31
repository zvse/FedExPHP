<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrokerDetail Structs
 * @subpackage Structs
 */
class BrokerDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Broker
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Party
     */
    public $Broker;
    /**
     * The BrokerageProcessingChargesPayment
     * Meta informations extracted from the WSDL
     * - documentation: Specifies details about how the charges for the brokerage processing are paid for.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Payment
     */
    public $BrokerageProcessingChargesPayment;
    /**
     * Constructor method for BrokerDetail
     * @uses BrokerDetail::setType()
     * @uses BrokerDetail::setBroker()
     * @uses BrokerDetail::setBrokerageProcessingChargesPayment()
     * @param string $type
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $broker
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Payment $brokerageProcessingChargesPayment
     */
    public function __construct($type = null, \NicholasCreativeMedia\FedExPHP\Structs\Party $broker = null, \NicholasCreativeMedia\FedExPHP\Structs\Payment $brokerageProcessingChargesPayment = null)
    {
        $this
            ->setType($type)
            ->setBroker($broker)
            ->setBrokerageProcessingChargesPayment($brokerageProcessingChargesPayment);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\BrokerType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\BrokerType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Structs\BrokerDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\BrokerType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\BrokerType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Broker value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Party|null
     */
    public function getBroker()
    {
        return $this->Broker;
    }
    /**
     * Set Broker value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $broker
     * @return \NicholasCreativeMedia\FedExPHP\Structs\BrokerDetail
     */
    public function setBroker(\NicholasCreativeMedia\FedExPHP\Structs\Party $broker = null)
    {
        $this->Broker = $broker;
        return $this;
    }
    /**
     * Get BrokerageProcessingChargesPayment value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Payment|null
     */
    public function getBrokerageProcessingChargesPayment()
    {
        return $this->BrokerageProcessingChargesPayment;
    }
    /**
     * Set BrokerageProcessingChargesPayment value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Payment $brokerageProcessingChargesPayment
     * @return \NicholasCreativeMedia\FedExPHP\Structs\BrokerDetail
     */
    public function setBrokerageProcessingChargesPayment(\NicholasCreativeMedia\FedExPHP\Structs\Payment $brokerageProcessingChargesPayment = null)
    {
        $this->BrokerageProcessingChargesPayment = $brokerageProcessingChargesPayment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\BrokerDetail
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
