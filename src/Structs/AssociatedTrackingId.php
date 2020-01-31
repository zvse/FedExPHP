<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssociatedTrackingId Structs
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a relationship from one tracked entity to another.
 * @subpackage Structs
 */
class AssociatedTrackingId extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the relationship/reason for the other tracking ID.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The TrackingId
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the other entity.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingId
     */
    public $TrackingId;
    /**
     * Constructor method for AssociatedTrackingId
     * @uses AssociatedTrackingId::setType()
     * @uses AssociatedTrackingId::setTrackingId()
     * @param string $type
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $trackingId
     */
    public function __construct($type = null, \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $trackingId = null)
    {
        $this
            ->setType($type)
            ->setTrackingId($trackingId);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\AssociatedTrackingIdType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\AssociatedTrackingIdType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AssociatedTrackingId
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\AssociatedTrackingIdType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\AssociatedTrackingIdType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get TrackingId value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingId|null
     */
    public function getTrackingId()
    {
        return $this->TrackingId;
    }
    /**
     * Set TrackingId value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $trackingId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AssociatedTrackingId
     */
    public function setTrackingId(\NicholasCreativeMedia\FedExPHP\Structs\TrackingId $trackingId = null)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AssociatedTrackingId
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
