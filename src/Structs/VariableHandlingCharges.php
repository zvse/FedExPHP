<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariableHandlingCharges Structs
 * @subpackage Structs
 */
class VariableHandlingCharges extends AbstractStructBase
{
    /**
     * The VariableHandlingCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $VariableHandlingCharge;
    /**
     * The FixedVariableHandlingCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $FixedVariableHandlingCharge;
    /**
     * The PercentVariableHandlingCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $PercentVariableHandlingCharge;
    /**
     * The TotalCustomerCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $TotalCustomerCharge;
    /**
     * Constructor method for VariableHandlingCharges
     * @uses VariableHandlingCharges::setVariableHandlingCharge()
     * @uses VariableHandlingCharges::setFixedVariableHandlingCharge()
     * @uses VariableHandlingCharges::setPercentVariableHandlingCharge()
     * @uses VariableHandlingCharges::setTotalCustomerCharge()
     * @param \CommerceFedEx\FedExPHP\Structs\Money $variableHandlingCharge
     * @param \CommerceFedEx\FedExPHP\Structs\Money $fixedVariableHandlingCharge
     * @param \CommerceFedEx\FedExPHP\Structs\Money $percentVariableHandlingCharge
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalCustomerCharge
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\Money $variableHandlingCharge = null, \CommerceFedEx\FedExPHP\Structs\Money $fixedVariableHandlingCharge = null, \CommerceFedEx\FedExPHP\Structs\Money $percentVariableHandlingCharge = null, \CommerceFedEx\FedExPHP\Structs\Money $totalCustomerCharge = null)
    {
        $this
            ->setVariableHandlingCharge($variableHandlingCharge)
            ->setFixedVariableHandlingCharge($fixedVariableHandlingCharge)
            ->setPercentVariableHandlingCharge($percentVariableHandlingCharge)
            ->setTotalCustomerCharge($totalCustomerCharge);
    }
    /**
     * Get VariableHandlingCharge value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getVariableHandlingCharge()
    {
        return $this->VariableHandlingCharge;
    }
    /**
     * Set VariableHandlingCharge value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $variableHandlingCharge
     * @return \CommerceFedEx\FedExPHP\Structs\VariableHandlingCharges
     */
    public function setVariableHandlingCharge(\CommerceFedEx\FedExPHP\Structs\Money $variableHandlingCharge = null)
    {
        $this->VariableHandlingCharge = $variableHandlingCharge;
        return $this;
    }
    /**
     * Get FixedVariableHandlingCharge value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getFixedVariableHandlingCharge()
    {
        return $this->FixedVariableHandlingCharge;
    }
    /**
     * Set FixedVariableHandlingCharge value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $fixedVariableHandlingCharge
     * @return \CommerceFedEx\FedExPHP\Structs\VariableHandlingCharges
     */
    public function setFixedVariableHandlingCharge(\CommerceFedEx\FedExPHP\Structs\Money $fixedVariableHandlingCharge = null)
    {
        $this->FixedVariableHandlingCharge = $fixedVariableHandlingCharge;
        return $this;
    }
    /**
     * Get PercentVariableHandlingCharge value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getPercentVariableHandlingCharge()
    {
        return $this->PercentVariableHandlingCharge;
    }
    /**
     * Set PercentVariableHandlingCharge value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $percentVariableHandlingCharge
     * @return \CommerceFedEx\FedExPHP\Structs\VariableHandlingCharges
     */
    public function setPercentVariableHandlingCharge(\CommerceFedEx\FedExPHP\Structs\Money $percentVariableHandlingCharge = null)
    {
        $this->PercentVariableHandlingCharge = $percentVariableHandlingCharge;
        return $this;
    }
    /**
     * Get TotalCustomerCharge value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getTotalCustomerCharge()
    {
        return $this->TotalCustomerCharge;
    }
    /**
     * Set TotalCustomerCharge value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalCustomerCharge
     * @return \CommerceFedEx\FedExPHP\Structs\VariableHandlingCharges
     */
    public function setTotalCustomerCharge(\CommerceFedEx\FedExPHP\Structs\Money $totalCustomerCharge = null)
    {
        $this->TotalCustomerCharge = $totalCustomerCharge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\VariableHandlingCharges
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
