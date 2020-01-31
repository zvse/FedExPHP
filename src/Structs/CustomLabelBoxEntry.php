<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomLabelBoxEntry Structs
 * Meta informations extracted from the WSDL
 * - documentation: Solid (filled) rectangular area on label.
 * @subpackage Structs
 */
class CustomLabelBoxEntry extends AbstractStructBase
{
    /**
     * The TopLeftCorner
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\CustomLabelPosition
     */
    public $TopLeftCorner;
    /**
     * The BottomRightCorner
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\CustomLabelPosition
     */
    public $BottomRightCorner;
    /**
     * Constructor method for CustomLabelBoxEntry
     * @uses CustomLabelBoxEntry::setTopLeftCorner()
     * @uses CustomLabelBoxEntry::setBottomRightCorner()
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelPosition $topLeftCorner
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelPosition $bottomRightCorner
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\CustomLabelPosition $topLeftCorner = null, \CommerceFedEx\FedExPHP\Structs\CustomLabelPosition $bottomRightCorner = null)
    {
        $this
            ->setTopLeftCorner($topLeftCorner)
            ->setBottomRightCorner($bottomRightCorner);
    }
    /**
     * Get TopLeftCorner value
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelPosition
     */
    public function getTopLeftCorner()
    {
        return $this->TopLeftCorner;
    }
    /**
     * Set TopLeftCorner value
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelPosition $topLeftCorner
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelBoxEntry
     */
    public function setTopLeftCorner(\CommerceFedEx\FedExPHP\Structs\CustomLabelPosition $topLeftCorner = null)
    {
        $this->TopLeftCorner = $topLeftCorner;
        return $this;
    }
    /**
     * Get BottomRightCorner value
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelPosition
     */
    public function getBottomRightCorner()
    {
        return $this->BottomRightCorner;
    }
    /**
     * Set BottomRightCorner value
     * @param \CommerceFedEx\FedExPHP\Structs\CustomLabelPosition $bottomRightCorner
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelBoxEntry
     */
    public function setBottomRightCorner(\CommerceFedEx\FedExPHP\Structs\CustomLabelPosition $bottomRightCorner = null)
    {
        $this->BottomRightCorner = $bottomRightCorner;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CustomLabelBoxEntry
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
