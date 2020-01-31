<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferingIdentifierDetail Structs
 * @subpackage Structs
 */
class OfferingIdentifierDetail extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for this offering.
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Specifies values like PRIORITY_OVERNIGHT, FEDEX_ENVELOPE, PRIORITY_ALERT, and other values typically used to identify various offerings in transactions.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the two character code used for operationalization of this offering.
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * Constructor method for OfferingIdentifierDetail
     * @uses OfferingIdentifierDetail::setId()
     * @uses OfferingIdentifierDetail::setType()
     * @uses OfferingIdentifierDetail::setCode()
     * @param string $id
     * @param string $type
     * @param string $code
     */
    public function __construct($id = null, $type = null, $code = null)
    {
        $this
            ->setId($id)
            ->setType($type)
            ->setCode($code);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \CommerceFedEx\FedExPHP\Structs\OfferingIdentifierDetail
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
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
     * @param string $type
     * @return \CommerceFedEx\FedExPHP\Structs\OfferingIdentifierDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \CommerceFedEx\FedExPHP\Structs\OfferingIdentifierDetail
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\OfferingIdentifierDetail
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
