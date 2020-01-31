<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadImageDetail Structs
 * @subpackage Structs
 */
class UploadImageDetail extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The Image
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Image;
    /**
     * Constructor method for UploadImageDetail
     * @uses UploadImageDetail::setId()
     * @uses UploadImageDetail::setImage()
     * @param string $id
     * @param string $image
     */
    public function __construct($id = null, $image = null)
    {
        $this
            ->setId($id)
            ->setImage($image);
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
     * @uses \CommerceFedEx\FedExPHP\Enums\ImageId::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ImageId::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $id
     * @return \CommerceFedEx\FedExPHP\Structs\UploadImageDetail
     */
    public function setId($id = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ImageId::valueIsValid($id)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $id, implode(', ', \CommerceFedEx\FedExPHP\Enums\ImageId::getValidValues())), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Image value
     * @return string|null
     */
    public function getImage()
    {
        return $this->Image;
    }
    /**
     * Set Image value
     * @param string $image
     * @return \CommerceFedEx\FedExPHP\Structs\UploadImageDetail
     */
    public function setImage($image = null)
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($image)), __LINE__);
        }
        $this->Image = $image;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\UploadImageDetail
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
