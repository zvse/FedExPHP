<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadDocumentsProcessingOptionsRequested Structs
 * @subpackage Structs
 */
class UploadDocumentsProcessingOptionsRequested extends AbstractStructBase
{
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Options;
    /**
     * The PostShipmentUploadDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\PostShipmentUploadDetail
     */
    public $PostShipmentUploadDetail;
    /**
     * Constructor method for UploadDocumentsProcessingOptionsRequested
     * @uses UploadDocumentsProcessingOptionsRequested::setOptions()
     * @uses UploadDocumentsProcessingOptionsRequested::setPostShipmentUploadDetail()
     * @param string[] $options
     * @param \CommerceFedEx\FedExPHP\Structs\PostShipmentUploadDetail $postShipmentUploadDetail
     */
    public function __construct(array $options = array(), \CommerceFedEx\FedExPHP\Structs\PostShipmentUploadDetail $postShipmentUploadDetail = null)
    {
        $this
            ->setOptions($options)
            ->setPostShipmentUploadDetail($postShipmentUploadDetail);
    }
    /**
     * Get Options value
     * @return string[]|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadDocumentsProcessingOptionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadDocumentsProcessingOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $options
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentsProcessingOptionsRequested
     */
    public function setOptions(array $options = array())
    {
        $invalidValues = array();
        foreach ($options as $uploadDocumentsProcessingOptionsRequestedOptionsItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\UploadDocumentsProcessingOptionType::valueIsValid($uploadDocumentsProcessingOptionsRequestedOptionsItem)) {
                $invalidValues[] = var_export($uploadDocumentsProcessingOptionsRequestedOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\UploadDocumentsProcessingOptionType::getValidValues())), __LINE__);
        }
        $this->Options = $options;
        return $this;
    }
    /**
     * Add item to Options value
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadDocumentsProcessingOptionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadDocumentsProcessingOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentsProcessingOptionsRequested
     */
    public function addToOptions($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\UploadDocumentsProcessingOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\UploadDocumentsProcessingOptionType::getValidValues())), __LINE__);
        }
        $this->Options[] = $item;
        return $this;
    }
    /**
     * Get PostShipmentUploadDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\PostShipmentUploadDetail|null
     */
    public function getPostShipmentUploadDetail()
    {
        return $this->PostShipmentUploadDetail;
    }
    /**
     * Set PostShipmentUploadDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\PostShipmentUploadDetail $postShipmentUploadDetail
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentsProcessingOptionsRequested
     */
    public function setPostShipmentUploadDetail(\CommerceFedEx\FedExPHP\Structs\PostShipmentUploadDetail $postShipmentUploadDetail = null)
    {
        $this->PostShipmentUploadDetail = $postShipmentUploadDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentsProcessingOptionsRequested
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
