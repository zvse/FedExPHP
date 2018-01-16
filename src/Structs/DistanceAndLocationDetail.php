<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DistanceAndLocationDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the location details and other information relevant to the location that is derived from the inputs provided in the request.
 * @subpackage Structs
 */
class DistanceAndLocationDetail extends AbstractStructBase
{
    /**
     * The Distance
     * Meta informations extracted from the WSDL
     * - documentation: Distance between an address of a geographic location and an address of a FedEx location.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Distance
     */
    public $Distance;
    /**
     * The ReservationAvailabilityDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ReservationAvailabilityDetail
     */
    public $ReservationAvailabilityDetail;
    /**
     * The SupportedRedirectToHoldServices
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SupportedRedirectToHoldServices;
    /**
     * The LocationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Details about a FedEx location such as services offered, working hours and pick and drop off times.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\LocationDetail
     */
    public $LocationDetail;
    /**
     * Constructor method for DistanceAndLocationDetail
     * @uses DistanceAndLocationDetail::setDistance()
     * @uses DistanceAndLocationDetail::setReservationAvailabilityDetail()
     * @uses DistanceAndLocationDetail::setSupportedRedirectToHoldServices()
     * @uses DistanceAndLocationDetail::setLocationDetail()
     * @param \CommerceFedEx\FedExPHP\Structs\Distance $distance
     * @param \CommerceFedEx\FedExPHP\Structs\ReservationAvailabilityDetail $reservationAvailabilityDetail
     * @param string[] $supportedRedirectToHoldServices
     * @param \CommerceFedEx\FedExPHP\Structs\LocationDetail $locationDetail
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\Distance $distance = null, \CommerceFedEx\FedExPHP\Structs\ReservationAvailabilityDetail $reservationAvailabilityDetail = null, array $supportedRedirectToHoldServices = array(), \CommerceFedEx\FedExPHP\Structs\LocationDetail $locationDetail = null)
    {
        $this
            ->setDistance($distance)
            ->setReservationAvailabilityDetail($reservationAvailabilityDetail)
            ->setSupportedRedirectToHoldServices($supportedRedirectToHoldServices)
            ->setLocationDetail($locationDetail);
    }
    /**
     * Get Distance value
     * @return \CommerceFedEx\FedExPHP\Structs\Distance|null
     */
    public function getDistance()
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param \CommerceFedEx\FedExPHP\Structs\Distance $distance
     * @return \CommerceFedEx\FedExPHP\Structs\DistanceAndLocationDetail
     */
    public function setDistance(\CommerceFedEx\FedExPHP\Structs\Distance $distance = null)
    {
        $this->Distance = $distance;
        return $this;
    }
    /**
     * Get ReservationAvailabilityDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ReservationAvailabilityDetail|null
     */
    public function getReservationAvailabilityDetail()
    {
        return $this->ReservationAvailabilityDetail;
    }
    /**
     * Set ReservationAvailabilityDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ReservationAvailabilityDetail $reservationAvailabilityDetail
     * @return \CommerceFedEx\FedExPHP\Structs\DistanceAndLocationDetail
     */
    public function setReservationAvailabilityDetail(\CommerceFedEx\FedExPHP\Structs\ReservationAvailabilityDetail $reservationAvailabilityDetail = null)
    {
        $this->ReservationAvailabilityDetail = $reservationAvailabilityDetail;
        return $this;
    }
    /**
     * Get SupportedRedirectToHoldServices value
     * @return string[]|null
     */
    public function getSupportedRedirectToHoldServices()
    {
        return $this->SupportedRedirectToHoldServices;
    }
    /**
     * Set SupportedRedirectToHoldServices value
     * @uses \CommerceFedEx\FedExPHP\Enums\SupportedRedirectToHoldServiceType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\SupportedRedirectToHoldServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $supportedRedirectToHoldServices
     * @return \CommerceFedEx\FedExPHP\Structs\DistanceAndLocationDetail
     */
    public function setSupportedRedirectToHoldServices(array $supportedRedirectToHoldServices = array())
    {
        $invalidValues = array();
        foreach ($supportedRedirectToHoldServices as $distanceAndLocationDetailSupportedRedirectToHoldServicesItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\SupportedRedirectToHoldServiceType::valueIsValid($distanceAndLocationDetailSupportedRedirectToHoldServicesItem)) {
                $invalidValues[] = var_export($distanceAndLocationDetailSupportedRedirectToHoldServicesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\SupportedRedirectToHoldServiceType::getValidValues())), __LINE__);
        }
        $this->SupportedRedirectToHoldServices = $supportedRedirectToHoldServices;
        return $this;
    }
    /**
     * Add item to SupportedRedirectToHoldServices value
     * @uses \CommerceFedEx\FedExPHP\Enums\SupportedRedirectToHoldServiceType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\SupportedRedirectToHoldServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\DistanceAndLocationDetail
     */
    public function addToSupportedRedirectToHoldServices($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\SupportedRedirectToHoldServiceType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\SupportedRedirectToHoldServiceType::getValidValues())), __LINE__);
        }
        $this->SupportedRedirectToHoldServices[] = $item;
        return $this;
    }
    /**
     * Get LocationDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\LocationDetail|null
     */
    public function getLocationDetail()
    {
        return $this->LocationDetail;
    }
    /**
     * Set LocationDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\LocationDetail $locationDetail
     * @return \CommerceFedEx\FedExPHP\Structs\DistanceAndLocationDetail
     */
    public function setLocationDetail(\CommerceFedEx\FedExPHP\Structs\LocationDetail $locationDetail = null)
    {
        $this->LocationDetail = $locationDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\DistanceAndLocationDetail
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
