<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DangerousGoodsInnerReceptacleDetail Structs
 * @subpackage Structs
 */
class DangerousGoodsInnerReceptacleDetail extends AbstractStructBase
{
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PreciseQuantity
     */
    public $Quantity;
    /**
     * Constructor method for DangerousGoodsInnerReceptacleDetail
     * @uses DangerousGoodsInnerReceptacleDetail::setQuantity()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PreciseQuantity $quantity
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\PreciseQuantity $quantity = null)
    {
        $this
            ->setQuantity($quantity);
    }
    /**
     * Get Quantity value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PreciseQuantity|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PreciseQuantity $quantity
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail
     */
    public function setQuantity(\NicholasCreativeMedia\FedExPHP\Structs\PreciseQuantity $quantity = null)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail
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
