<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RedirectToHoldAtLocationRequestDetail Structs
 * @subpackage Structs
 */
class RedirectToHoldAtLocationRequestDetail extends AbstractStructBase
{
    /**
     * The HoldingLocationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HoldingLocationId;
    /**
     * The HoldingLocationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $HoldingLocationNumber;
    /**
     * The HoldingLocationContactAndAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ContactAndAddress
     */
    public $HoldingLocationContactAndAddress;
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Comments;
    /**
     * Constructor method for RedirectToHoldAtLocationRequestDetail
     * @uses RedirectToHoldAtLocationRequestDetail::setHoldingLocationId()
     * @uses RedirectToHoldAtLocationRequestDetail::setHoldingLocationNumber()
     * @uses RedirectToHoldAtLocationRequestDetail::setHoldingLocationContactAndAddress()
     * @uses RedirectToHoldAtLocationRequestDetail::setComments()
     * @param string $holdingLocationId
     * @param int $holdingLocationNumber
     * @param \CommerceFedEx\FedExPHP\Structs\ContactAndAddress $holdingLocationContactAndAddress
     * @param string $comments
     */
    public function __construct($holdingLocationId = null, $holdingLocationNumber = null, \CommerceFedEx\FedExPHP\Structs\ContactAndAddress $holdingLocationContactAndAddress = null, $comments = null)
    {
        $this
            ->setHoldingLocationId($holdingLocationId)
            ->setHoldingLocationNumber($holdingLocationNumber)
            ->setHoldingLocationContactAndAddress($holdingLocationContactAndAddress)
            ->setComments($comments);
    }
    /**
     * Get HoldingLocationId value
     * @return string|null
     */
    public function getHoldingLocationId()
    {
        return $this->HoldingLocationId;
    }
    /**
     * Set HoldingLocationId value
     * @param string $holdingLocationId
     * @return \CommerceFedEx\FedExPHP\Structs\RedirectToHoldAtLocationRequestDetail
     */
    public function setHoldingLocationId($holdingLocationId = null)
    {
        // validation for constraint: string
        if (!is_null($holdingLocationId) && !is_string($holdingLocationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($holdingLocationId)), __LINE__);
        }
        $this->HoldingLocationId = $holdingLocationId;
        return $this;
    }
    /**
     * Get HoldingLocationNumber value
     * @return int|null
     */
    public function getHoldingLocationNumber()
    {
        return $this->HoldingLocationNumber;
    }
    /**
     * Set HoldingLocationNumber value
     * @param int $holdingLocationNumber
     * @return \CommerceFedEx\FedExPHP\Structs\RedirectToHoldAtLocationRequestDetail
     */
    public function setHoldingLocationNumber($holdingLocationNumber = null)
    {
        // validation for constraint: int
        if (!is_null($holdingLocationNumber) && !is_numeric($holdingLocationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($holdingLocationNumber)), __LINE__);
        }
        $this->HoldingLocationNumber = $holdingLocationNumber;
        return $this;
    }
    /**
     * Get HoldingLocationContactAndAddress value
     * @return \CommerceFedEx\FedExPHP\Structs\ContactAndAddress|null
     */
    public function getHoldingLocationContactAndAddress()
    {
        return $this->HoldingLocationContactAndAddress;
    }
    /**
     * Set HoldingLocationContactAndAddress value
     * @param \CommerceFedEx\FedExPHP\Structs\ContactAndAddress $holdingLocationContactAndAddress
     * @return \CommerceFedEx\FedExPHP\Structs\RedirectToHoldAtLocationRequestDetail
     */
    public function setHoldingLocationContactAndAddress(\CommerceFedEx\FedExPHP\Structs\ContactAndAddress $holdingLocationContactAndAddress = null)
    {
        $this->HoldingLocationContactAndAddress = $holdingLocationContactAndAddress;
        return $this;
    }
    /**
     * Get Comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param string $comments
     * @return \CommerceFedEx\FedExPHP\Structs\RedirectToHoldAtLocationRequestDetail
     */
    public function setComments($comments = null)
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comments)), __LINE__);
        }
        $this->Comments = $comments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\RedirectToHoldAtLocationRequestDetail
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
