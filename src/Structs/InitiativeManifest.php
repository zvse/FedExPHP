<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InitiativeManifest Structs
 * Meta informations extracted from the WSDL
 * - documentation: Represents a transaction-specific set of initiative control data for all services.
 * @subpackage Structs
 */
class InitiativeManifest extends AbstractStructBase
{
    /**
     * The Content
     * Meta informations extracted from the WSDL
     * - documentation: Compressed data representing status of initiatives per domain and service.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Content;
    /**
     * Constructor method for InitiativeManifest
     * @uses InitiativeManifest::setContent()
     * @param string[] $content
     */
    public function __construct(array $content = array())
    {
        $this
            ->setContent($content);
    }
    /**
     * Get Content value
     * @return string[]|null
     */
    public function getContent()
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @throws \InvalidArgumentException
     * @param string[] $content
     * @return \CommerceFedEx\FedExPHP\Structs\InitiativeManifest
     */
    public function setContent(array $content = array())
    {
        foreach ($content as $initiativeManifestContentItem) {
            // validation for constraint: itemType
            if (!is_string($initiativeManifestContentItem)) {
                throw new \InvalidArgumentException(sprintf('The Content property can only contain items of string, "%s" given', is_object($initiativeManifestContentItem) ? get_class($initiativeManifestContentItem) : gettype($initiativeManifestContentItem)), __LINE__);
            }
        }
        $this->Content = $content;
        return $this;
    }
    /**
     * Add item to Content value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\InitiativeManifest
     */
    public function addToContent($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Content property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Content[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\InitiativeManifest
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
