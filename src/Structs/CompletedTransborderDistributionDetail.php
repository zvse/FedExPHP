<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedTransborderDistributionDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Result data for a transborder distribution shipment.
 * @subpackage Structs
 */
class CompletedTransborderDistributionDetail extends AbstractStructBase
{
    /**
     * The DeconsolidationLocationPostalCode
     * Meta informations extracted from the WSDL
     * - documentation: Postal code of the destination country entry point; this is the location at which the constituent shipments are tendered into the destination country network.
     * - minOccurs: 0
     * @var string
     */
    public $DeconsolidationLocationPostalCode;
    /**
     * Constructor method for CompletedTransborderDistributionDetail
     * @uses CompletedTransborderDistributionDetail::setDeconsolidationLocationPostalCode()
     * @param string $deconsolidationLocationPostalCode
     */
    public function __construct($deconsolidationLocationPostalCode = null)
    {
        $this
            ->setDeconsolidationLocationPostalCode($deconsolidationLocationPostalCode);
    }
    /**
     * Get DeconsolidationLocationPostalCode value
     * @return string|null
     */
    public function getDeconsolidationLocationPostalCode()
    {
        return $this->DeconsolidationLocationPostalCode;
    }
    /**
     * Set DeconsolidationLocationPostalCode value
     * @param string $deconsolidationLocationPostalCode
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedTransborderDistributionDetail
     */
    public function setDeconsolidationLocationPostalCode($deconsolidationLocationPostalCode = null)
    {
        // validation for constraint: string
        if (!is_null($deconsolidationLocationPostalCode) && !is_string($deconsolidationLocationPostalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deconsolidationLocationPostalCode)), __LINE__);
        }
        $this->DeconsolidationLocationPostalCode = $deconsolidationLocationPostalCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedTransborderDistributionDetail
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
