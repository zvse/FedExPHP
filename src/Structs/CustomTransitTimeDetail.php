<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomTransitTimeDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies custom transit time to be applied to the shipment.
 * @subpackage Structs
 */
class CustomTransitTimeDetail extends AbstractStructBase
{
    /**
     * The Key
     * Meta informations extracted from the WSDL
     * - documentation: Identifies options to be applied.
     * - minOccurs: 0
     * @var string
     */
    public $Key;
    /**
     * Constructor method for CustomTransitTimeDetail
     * @uses CustomTransitTimeDetail::setKey()
     * @param string $key
     */
    public function __construct($key = null)
    {
        $this
            ->setKey($key);
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey()
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomTransitTimeDetail
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($key)), __LINE__);
        }
        $this->Key = $key;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomTransitTimeDetail
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
