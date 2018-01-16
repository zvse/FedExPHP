<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LatestDropOffDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the latest time by which a package can be dropped off at a FedEx location.
 * @subpackage Structs
 */
class LatestDropOffDetail extends AbstractStructBase
{
    /**
     * The DayOfWeek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DayOfWeek;
    /**
     * The Time
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Time;
    /**
     * The Overlays
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about the overlay to the last drop off time for a carrier at a FedEx location.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\LatestDropoffOverlayDetail[]
     */
    public $Overlays;
    /**
     * Constructor method for LatestDropOffDetail
     * @uses LatestDropOffDetail::setDayOfWeek()
     * @uses LatestDropOffDetail::setTime()
     * @uses LatestDropOffDetail::setOverlays()
     * @param string $dayOfWeek
     * @param string $time
     * @param \CommerceFedEx\FedExPHP\Structs\LatestDropoffOverlayDetail[] $overlays
     */
    public function __construct($dayOfWeek = null, $time = null, array $overlays = array())
    {
        $this
            ->setDayOfWeek($dayOfWeek)
            ->setTime($time)
            ->setOverlays($overlays);
    }
    /**
     * Get DayOfWeek value
     * @return string|null
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    /**
     * Set DayOfWeek value
     * @uses \CommerceFedEx\FedExPHP\Enums\DayOfWeekType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\DayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dayOfWeek
     * @return \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail
     */
    public function setDayOfWeek($dayOfWeek = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\DayOfWeekType::valueIsValid($dayOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dayOfWeek, implode(', ', \CommerceFedEx\FedExPHP\Enums\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Get Time value
     * @return string|null
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $time
     * @return \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail
     */
    public function setTime($time = null)
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($time)), __LINE__);
        }
        $this->Time = $time;
        return $this;
    }
    /**
     * Get Overlays value
     * @return \CommerceFedEx\FedExPHP\Structs\LatestDropoffOverlayDetail[]|null
     */
    public function getOverlays()
    {
        return $this->Overlays;
    }
    /**
     * Set Overlays value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\LatestDropoffOverlayDetail[] $overlays
     * @return \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail
     */
    public function setOverlays(array $overlays = array())
    {
        foreach ($overlays as $latestDropOffDetailOverlaysItem) {
            // validation for constraint: itemType
            if (!$latestDropOffDetailOverlaysItem instanceof \CommerceFedEx\FedExPHP\Structs\LatestDropoffOverlayDetail) {
                throw new \InvalidArgumentException(sprintf('The Overlays property can only contain items of \CommerceFedEx\FedExPHP\Structs\LatestDropoffOverlayDetail, "%s" given', is_object($latestDropOffDetailOverlaysItem) ? get_class($latestDropOffDetailOverlaysItem) : gettype($latestDropOffDetailOverlaysItem)), __LINE__);
            }
        }
        $this->Overlays = $overlays;
        return $this;
    }
    /**
     * Add item to Overlays value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\LatestDropoffOverlayDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail
     */
    public function addToOverlays(\CommerceFedEx\FedExPHP\Structs\LatestDropoffOverlayDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\LatestDropoffOverlayDetail) {
            throw new \InvalidArgumentException(sprintf('The Overlays property can only contain items of \CommerceFedEx\FedExPHP\Structs\LatestDropoffOverlayDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Overlays[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\LatestDropOffDetail
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
