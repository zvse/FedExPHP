<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnShipmentDetail Structs
 * @subpackage Structs
 */
class ReturnShipmentDetail extends AbstractStructBase
{
    /**
     * The ReturnType
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $ReturnType;
    /**
     * The Rma
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Rma
     */
    public $Rma;
    /**
     * The ReturnEMailDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ReturnEMailDetail
     */
    public $ReturnEMailDetail;
    /**
     * The ReturnAssociation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ReturnAssociationDetail
     */
    public $ReturnAssociation;
    /**
     * Constructor method for ReturnShipmentDetail
     * @uses ReturnShipmentDetail::setReturnType()
     * @uses ReturnShipmentDetail::setRma()
     * @uses ReturnShipmentDetail::setReturnEMailDetail()
     * @uses ReturnShipmentDetail::setReturnAssociation()
     * @param string $returnType
     * @param \CommerceFedEx\FedExPHP\Structs\Rma $rma
     * @param \CommerceFedEx\FedExPHP\Structs\ReturnEMailDetail $returnEMailDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ReturnAssociationDetail $returnAssociation
     */
    public function __construct($returnType = null, \CommerceFedEx\FedExPHP\Structs\Rma $rma = null, \CommerceFedEx\FedExPHP\Structs\ReturnEMailDetail $returnEMailDetail = null, \CommerceFedEx\FedExPHP\Structs\ReturnAssociationDetail $returnAssociation = null)
    {
        $this
            ->setReturnType($returnType)
            ->setRma($rma)
            ->setReturnEMailDetail($returnEMailDetail)
            ->setReturnAssociation($returnAssociation);
    }
    /**
     * Get ReturnType value
     * @return string
     */
    public function getReturnType()
    {
        return $this->ReturnType;
    }
    /**
     * Set ReturnType value
     * @uses \CommerceFedEx\FedExPHP\Enums\ReturnType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ReturnType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $returnType
     * @return \CommerceFedEx\FedExPHP\Structs\ReturnShipmentDetail
     */
    public function setReturnType($returnType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ReturnType::valueIsValid($returnType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $returnType, implode(', ', \CommerceFedEx\FedExPHP\Enums\ReturnType::getValidValues())), __LINE__);
        }
        $this->ReturnType = $returnType;
        return $this;
    }
    /**
     * Get Rma value
     * @return \CommerceFedEx\FedExPHP\Structs\Rma|null
     */
    public function getRma()
    {
        return $this->Rma;
    }
    /**
     * Set Rma value
     * @param \CommerceFedEx\FedExPHP\Structs\Rma $rma
     * @return \CommerceFedEx\FedExPHP\Structs\ReturnShipmentDetail
     */
    public function setRma(\CommerceFedEx\FedExPHP\Structs\Rma $rma = null)
    {
        $this->Rma = $rma;
        return $this;
    }
    /**
     * Get ReturnEMailDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ReturnEMailDetail|null
     */
    public function getReturnEMailDetail()
    {
        return $this->ReturnEMailDetail;
    }
    /**
     * Set ReturnEMailDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ReturnEMailDetail $returnEMailDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ReturnShipmentDetail
     */
    public function setReturnEMailDetail(\CommerceFedEx\FedExPHP\Structs\ReturnEMailDetail $returnEMailDetail = null)
    {
        $this->ReturnEMailDetail = $returnEMailDetail;
        return $this;
    }
    /**
     * Get ReturnAssociation value
     * @return \CommerceFedEx\FedExPHP\Structs\ReturnAssociationDetail|null
     */
    public function getReturnAssociation()
    {
        return $this->ReturnAssociation;
    }
    /**
     * Set ReturnAssociation value
     * @param \CommerceFedEx\FedExPHP\Structs\ReturnAssociationDetail $returnAssociation
     * @return \CommerceFedEx\FedExPHP\Structs\ReturnShipmentDetail
     */
    public function setReturnAssociation(\CommerceFedEx\FedExPHP\Structs\ReturnAssociationDetail $returnAssociation = null)
    {
        $this->ReturnAssociation = $returnAssociation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ReturnShipmentDetail
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
