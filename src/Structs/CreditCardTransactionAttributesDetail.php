<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCardTransactionAttributesDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies details about the credit card transaction that drive decisions about credit card processing.
 * @subpackage Structs
 */
class CreditCardTransactionAttributesDetail extends AbstractStructBase
{
    /**
     * The Types
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Types;
    /**
     * Constructor method for CreditCardTransactionAttributesDetail
     * @uses CreditCardTransactionAttributesDetail::setTypes()
     * @param string[] $types
     */
    public function __construct(array $types = array())
    {
        $this
            ->setTypes($types);
    }
    /**
     * Get Types value
     * @return string[]|null
     */
    public function getTypes()
    {
        return $this->Types;
    }
    /**
     * Set Types value
     * @uses \CommerceFedEx\FedExPHP\Enums\CreditCardTransactionAttributeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CreditCardTransactionAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $types
     * @return \CommerceFedEx\FedExPHP\Structs\CreditCardTransactionAttributesDetail
     */
    public function setTypes(array $types = array())
    {
        $invalidValues = array();
        foreach ($types as $creditCardTransactionAttributesDetailTypesItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\CreditCardTransactionAttributeType::valueIsValid($creditCardTransactionAttributesDetailTypesItem)) {
                $invalidValues[] = var_export($creditCardTransactionAttributesDetailTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\CreditCardTransactionAttributeType::getValidValues())), __LINE__);
        }
        $this->Types = $types;
        return $this;
    }
    /**
     * Add item to Types value
     * @uses \CommerceFedEx\FedExPHP\Enums\CreditCardTransactionAttributeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CreditCardTransactionAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\CreditCardTransactionAttributesDetail
     */
    public function addToTypes($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CreditCardTransactionAttributeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\CreditCardTransactionAttributeType::getValidValues())), __LINE__);
        }
        $this->Types[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CreditCardTransactionAttributesDetail
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
