<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlcoholDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies details for a package containing alcohol
 * @subpackage Structs
 */
class AlcoholDetail extends AbstractStructBase
{
    /**
     * The RecipientType
     * Meta informations extracted from the WSDL
     * - documentation: The license type that the recipient of the alcohol package.
     * - minOccurs: 0
     * @var string
     */
    public $RecipientType;
    /**
     * The ShipperAgreementType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies what type of entity the shipper of the alcohol shipment is registered as, for example, fulfillment house, retailer or a winery.
     * - minOccurs: 0
     * @var string
     */
    public $ShipperAgreementType;
    /**
     * Constructor method for AlcoholDetail
     * @uses AlcoholDetail::setRecipientType()
     * @uses AlcoholDetail::setShipperAgreementType()
     * @param string $recipientType
     * @param string $shipperAgreementType
     */
    public function __construct($recipientType = null, $shipperAgreementType = null)
    {
        $this
            ->setRecipientType($recipientType)
            ->setShipperAgreementType($shipperAgreementType);
    }
    /**
     * Get RecipientType value
     * @return string|null
     */
    public function getRecipientType()
    {
        return $this->RecipientType;
    }
    /**
     * Set RecipientType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\AlcoholRecipientType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\AlcoholRecipientType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $recipientType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AlcoholDetail
     */
    public function setRecipientType($recipientType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\AlcoholRecipientType::valueIsValid($recipientType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $recipientType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\AlcoholRecipientType::getValidValues())), __LINE__);
        }
        $this->RecipientType = $recipientType;
        return $this;
    }
    /**
     * Get ShipperAgreementType value
     * @return string|null
     */
    public function getShipperAgreementType()
    {
        return $this->ShipperAgreementType;
    }
    /**
     * Set ShipperAgreementType value
     * @param string $shipperAgreementType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AlcoholDetail
     */
    public function setShipperAgreementType($shipperAgreementType = null)
    {
        // validation for constraint: string
        if (!is_null($shipperAgreementType) && !is_string($shipperAgreementType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipperAgreementType)), __LINE__);
        }
        $this->ShipperAgreementType = $shipperAgreementType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AlcoholDetail
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
