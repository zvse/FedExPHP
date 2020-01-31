<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCardTransactionDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: This class represents data tied to the use of a credit card in a specific transaction.
 * @subpackage Structs
 */
class CreditCardTransactionDetail extends AbstractStructBase
{
    /**
     * The AuthorizationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AuthorizationId;
    /**
     * The AuthorizationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AuthorizationType;
    /**
     * The SettlementScheduleType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SettlementScheduleType;
    /**
     * The FraudDetectionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CreditFraudDetectionDetail
     */
    public $FraudDetectionDetail;
    /**
     * The PayorAuthenticationCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies a secure code used for payor authentication in the credit card transaction.
     * - minOccurs: 0
     * @var string
     */
    public $PayorAuthenticationCode;
    /**
     * The AttributesDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies details about the credit card transaction that drive decisions about credit card processing.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CreditCardTransactionAttributesDetail
     */
    public $AttributesDetail;
    /**
     * Constructor method for CreditCardTransactionDetail
     * @uses CreditCardTransactionDetail::setAuthorizationId()
     * @uses CreditCardTransactionDetail::setAuthorizationType()
     * @uses CreditCardTransactionDetail::setSettlementScheduleType()
     * @uses CreditCardTransactionDetail::setFraudDetectionDetail()
     * @uses CreditCardTransactionDetail::setPayorAuthenticationCode()
     * @uses CreditCardTransactionDetail::setAttributesDetail()
     * @param string $authorizationId
     * @param string $authorizationType
     * @param string $settlementScheduleType
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CreditFraudDetectionDetail $fraudDetectionDetail
     * @param string $payorAuthenticationCode
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CreditCardTransactionAttributesDetail $attributesDetail
     */
    public function __construct($authorizationId = null, $authorizationType = null, $settlementScheduleType = null, \NicholasCreativeMedia\FedExPHP\Structs\CreditFraudDetectionDetail $fraudDetectionDetail = null, $payorAuthenticationCode = null, \NicholasCreativeMedia\FedExPHP\Structs\CreditCardTransactionAttributesDetail $attributesDetail = null)
    {
        $this
            ->setAuthorizationId($authorizationId)
            ->setAuthorizationType($authorizationType)
            ->setSettlementScheduleType($settlementScheduleType)
            ->setFraudDetectionDetail($fraudDetectionDetail)
            ->setPayorAuthenticationCode($payorAuthenticationCode)
            ->setAttributesDetail($attributesDetail);
    }
    /**
     * Get AuthorizationId value
     * @return string|null
     */
    public function getAuthorizationId()
    {
        return $this->AuthorizationId;
    }
    /**
     * Set AuthorizationId value
     * @param string $authorizationId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreditCardTransactionDetail
     */
    public function setAuthorizationId($authorizationId = null)
    {
        // validation for constraint: string
        if (!is_null($authorizationId) && !is_string($authorizationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorizationId)), __LINE__);
        }
        $this->AuthorizationId = $authorizationId;
        return $this;
    }
    /**
     * Get AuthorizationType value
     * @return string|null
     */
    public function getAuthorizationType()
    {
        return $this->AuthorizationType;
    }
    /**
     * Set AuthorizationType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CreditCardAuthorizationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CreditCardAuthorizationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $authorizationType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreditCardTransactionDetail
     */
    public function setAuthorizationType($authorizationType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CreditCardAuthorizationType::valueIsValid($authorizationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $authorizationType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CreditCardAuthorizationType::getValidValues())), __LINE__);
        }
        $this->AuthorizationType = $authorizationType;
        return $this;
    }
    /**
     * Get SettlementScheduleType value
     * @return string|null
     */
    public function getSettlementScheduleType()
    {
        return $this->SettlementScheduleType;
    }
    /**
     * Set SettlementScheduleType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CreditCardSettlementScheduleType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CreditCardSettlementScheduleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $settlementScheduleType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreditCardTransactionDetail
     */
    public function setSettlementScheduleType($settlementScheduleType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CreditCardSettlementScheduleType::valueIsValid($settlementScheduleType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $settlementScheduleType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CreditCardSettlementScheduleType::getValidValues())), __LINE__);
        }
        $this->SettlementScheduleType = $settlementScheduleType;
        return $this;
    }
    /**
     * Get FraudDetectionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreditFraudDetectionDetail|null
     */
    public function getFraudDetectionDetail()
    {
        return $this->FraudDetectionDetail;
    }
    /**
     * Set FraudDetectionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CreditFraudDetectionDetail $fraudDetectionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreditCardTransactionDetail
     */
    public function setFraudDetectionDetail(\NicholasCreativeMedia\FedExPHP\Structs\CreditFraudDetectionDetail $fraudDetectionDetail = null)
    {
        $this->FraudDetectionDetail = $fraudDetectionDetail;
        return $this;
    }
    /**
     * Get PayorAuthenticationCode value
     * @return string|null
     */
    public function getPayorAuthenticationCode()
    {
        return $this->PayorAuthenticationCode;
    }
    /**
     * Set PayorAuthenticationCode value
     * @param string $payorAuthenticationCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreditCardTransactionDetail
     */
    public function setPayorAuthenticationCode($payorAuthenticationCode = null)
    {
        // validation for constraint: string
        if (!is_null($payorAuthenticationCode) && !is_string($payorAuthenticationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payorAuthenticationCode)), __LINE__);
        }
        $this->PayorAuthenticationCode = $payorAuthenticationCode;
        return $this;
    }
    /**
     * Get AttributesDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreditCardTransactionAttributesDetail|null
     */
    public function getAttributesDetail()
    {
        return $this->AttributesDetail;
    }
    /**
     * Set AttributesDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CreditCardTransactionAttributesDetail $attributesDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreditCardTransactionDetail
     */
    public function setAttributesDetail(\NicholasCreativeMedia\FedExPHP\Structs\CreditCardTransactionAttributesDetail $attributesDetail = null)
    {
        $this->AttributesDetail = $attributesDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreditCardTransactionDetail
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
