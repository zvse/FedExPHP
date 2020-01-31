<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Message Structs
 * @subpackage Structs
 */
class Message extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The LocalizedText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LocalizedText;
    /**
     * The Parameters
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\MessageParameter[]
     */
    public $Parameters;
    /**
     * Constructor method for Message
     * @uses Message::setCode()
     * @uses Message::setText()
     * @uses Message::setLocalizedText()
     * @uses Message::setParameters()
     * @param string $code
     * @param string $text
     * @param string $localizedText
     * @param \CommerceFedEx\FedExPHP\Structs\MessageParameter[] $parameters
     */
    public function __construct($code = null, $text = null, $localizedText = null, array $parameters = array())
    {
        $this
            ->setCode($code)
            ->setText($text)
            ->setLocalizedText($localizedText)
            ->setParameters($parameters);
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
     * @return \CommerceFedEx\FedExPHP\Structs\Message
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
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \CommerceFedEx\FedExPHP\Structs\Message
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Get LocalizedText value
     * @return string|null
     */
    public function getLocalizedText()
    {
        return $this->LocalizedText;
    }
    /**
     * Set LocalizedText value
     * @param string $localizedText
     * @return \CommerceFedEx\FedExPHP\Structs\Message
     */
    public function setLocalizedText($localizedText = null)
    {
        // validation for constraint: string
        if (!is_null($localizedText) && !is_string($localizedText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($localizedText)), __LINE__);
        }
        $this->LocalizedText = $localizedText;
        return $this;
    }
    /**
     * Get Parameters value
     * @return \CommerceFedEx\FedExPHP\Structs\MessageParameter[]|null
     */
    public function getParameters()
    {
        return $this->Parameters;
    }
    /**
     * Set Parameters value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\MessageParameter[] $parameters
     * @return \CommerceFedEx\FedExPHP\Structs\Message
     */
    public function setParameters(array $parameters = array())
    {
        foreach ($parameters as $messageParametersItem) {
            // validation for constraint: itemType
            if (!$messageParametersItem instanceof \CommerceFedEx\FedExPHP\Structs\MessageParameter) {
                throw new \InvalidArgumentException(sprintf('The Parameters property can only contain items of \CommerceFedEx\FedExPHP\Structs\MessageParameter, "%s" given', is_object($messageParametersItem) ? get_class($messageParametersItem) : gettype($messageParametersItem)), __LINE__);
            }
        }
        $this->Parameters = $parameters;
        return $this;
    }
    /**
     * Add item to Parameters value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\MessageParameter $item
     * @return \CommerceFedEx\FedExPHP\Structs\Message
     */
    public function addToParameters(\CommerceFedEx\FedExPHP\Structs\MessageParameter $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\MessageParameter) {
            throw new \InvalidArgumentException(sprintf('The Parameters property can only contain items of \CommerceFedEx\FedExPHP\Structs\MessageParameter, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Parameters[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\Message
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
