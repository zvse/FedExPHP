<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackingNumberUnit Structs
 * Meta informations extracted from the WSDL
 * - documentation: Each instance of this class groups together TrackingId instances that pertain to the same entity (e.g. package).
 * @subpackage Structs
 */
class TrackingNumberUnit extends AbstractStructBase
{
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SequenceNumber;
    /**
     * The TrackingIds
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TrackingId[]
     */
    public $TrackingIds;
    /**
     * Constructor method for TrackingNumberUnit
     * @uses TrackingNumberUnit::setSequenceNumber()
     * @uses TrackingNumberUnit::setTrackingIds()
     * @param int $sequenceNumber
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId[] $trackingIds
     */
    public function __construct($sequenceNumber = null, array $trackingIds = array())
    {
        $this
            ->setSequenceNumber($sequenceNumber)
            ->setTrackingIds($trackingIds);
    }
    /**
     * Get SequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param int $sequenceNumber
     * @return \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !is_numeric($sequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNumber)), __LINE__);
        }
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get TrackingIds value
     * @return \CommerceFedEx\FedExPHP\Structs\TrackingId[]|null
     */
    public function getTrackingIds()
    {
        return $this->TrackingIds;
    }
    /**
     * Set TrackingIds value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId[] $trackingIds
     * @return \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit
     */
    public function setTrackingIds(array $trackingIds = array())
    {
        foreach ($trackingIds as $trackingNumberUnitTrackingIdsItem) {
            // validation for constraint: itemType
            if (!$trackingNumberUnitTrackingIdsItem instanceof \CommerceFedEx\FedExPHP\Structs\TrackingId) {
                throw new \InvalidArgumentException(sprintf('The TrackingIds property can only contain items of \CommerceFedEx\FedExPHP\Structs\TrackingId, "%s" given', is_object($trackingNumberUnitTrackingIdsItem) ? get_class($trackingNumberUnitTrackingIdsItem) : gettype($trackingNumberUnitTrackingIdsItem)), __LINE__);
            }
        }
        $this->TrackingIds = $trackingIds;
        return $this;
    }
    /**
     * Add item to TrackingIds value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId $item
     * @return \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit
     */
    public function addToTrackingIds(\CommerceFedEx\FedExPHP\Structs\TrackingId $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\TrackingId) {
            throw new \InvalidArgumentException(sprintf('The TrackingIds property can only contain items of \CommerceFedEx\FedExPHP\Structs\TrackingId, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TrackingIds[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit
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
