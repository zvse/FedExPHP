<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryRequestDetail Structs
 * @subpackage Structs
 */
class DeliveryRequestDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the delivery type of delivery option.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The RedirectToHoldAtLocationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\RedirectToHoldAtLocationRequestDetail
     */
    public $RedirectToHoldAtLocationDetail;
    /**
     * Constructor method for DeliveryRequestDetail
     * @uses DeliveryRequestDetail::setType()
     * @uses DeliveryRequestDetail::setRedirectToHoldAtLocationDetail()
     * @param string $type
     * @param \CommerceFedEx\FedExPHP\Structs\RedirectToHoldAtLocationRequestDetail $redirectToHoldAtLocationDetail
     */
    public function __construct($type = null, \CommerceFedEx\FedExPHP\Structs\RedirectToHoldAtLocationRequestDetail $redirectToHoldAtLocationDetail = null)
    {
        $this
            ->setType($type)
            ->setRedirectToHoldAtLocationDetail($redirectToHoldAtLocationDetail);
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
     * @uses \CommerceFedEx\FedExPHP\Enums\DeliveryOptionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\DeliveryOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \CommerceFedEx\FedExPHP\Structs\DeliveryRequestDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\DeliveryOptionType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \CommerceFedEx\FedExPHP\Enums\DeliveryOptionType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get RedirectToHoldAtLocationDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\RedirectToHoldAtLocationRequestDetail|null
     */
    public function getRedirectToHoldAtLocationDetail()
    {
        return $this->RedirectToHoldAtLocationDetail;
    }
    /**
     * Set RedirectToHoldAtLocationDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\RedirectToHoldAtLocationRequestDetail $redirectToHoldAtLocationDetail
     * @return \CommerceFedEx\FedExPHP\Structs\DeliveryRequestDetail
     */
    public function setRedirectToHoldAtLocationDetail(\CommerceFedEx\FedExPHP\Structs\RedirectToHoldAtLocationRequestDetail $redirectToHoldAtLocationDetail = null)
    {
        $this->RedirectToHoldAtLocationDetail = $redirectToHoldAtLocationDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\DeliveryRequestDetail
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
