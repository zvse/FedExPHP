<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatedDeliveryDetail Structs
 * @subpackage Structs
 */
class RatedDeliveryDetail extends AbstractStructBase
{
    /**
     * The TotalPieces
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalPieces;
    /**
     * The TotalNetCharge
     * Meta informations extracted from the WSDL
     * - documentation: Total charges for this shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $TotalNetCharge;
    /**
     * The TotalSurcharges
     * Meta informations extracted from the WSDL
     * - documentation: Total surcharges for this shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $TotalSurcharges;
    /**
     * The Surcharges
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about surcharges.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Surcharge[]
     */
    public $Surcharges;
    /**
     * Constructor method for RatedDeliveryDetail
     * @uses RatedDeliveryDetail::setTotalPieces()
     * @uses RatedDeliveryDetail::setTotalNetCharge()
     * @uses RatedDeliveryDetail::setTotalSurcharges()
     * @uses RatedDeliveryDetail::setSurcharges()
     * @param int $totalPieces
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalNetCharge
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalSurcharges
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Surcharge[] $surcharges
     */
    public function __construct($totalPieces = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $totalNetCharge = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $totalSurcharges = null, array $surcharges = array())
    {
        $this
            ->setTotalPieces($totalPieces)
            ->setTotalNetCharge($totalNetCharge)
            ->setTotalSurcharges($totalSurcharges)
            ->setSurcharges($surcharges);
    }
    /**
     * Get TotalPieces value
     * @return int|null
     */
    public function getTotalPieces()
    {
        return $this->TotalPieces;
    }
    /**
     * Set TotalPieces value
     * @param int $totalPieces
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RatedDeliveryDetail
     */
    public function setTotalPieces($totalPieces = null)
    {
        // validation for constraint: int
        if (!is_null($totalPieces) && !is_numeric($totalPieces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalPieces)), __LINE__);
        }
        $this->TotalPieces = $totalPieces;
        return $this;
    }
    /**
     * Get TotalNetCharge value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getTotalNetCharge()
    {
        return $this->TotalNetCharge;
    }
    /**
     * Set TotalNetCharge value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalNetCharge
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RatedDeliveryDetail
     */
    public function setTotalNetCharge(\NicholasCreativeMedia\FedExPHP\Structs\Money $totalNetCharge = null)
    {
        $this->TotalNetCharge = $totalNetCharge;
        return $this;
    }
    /**
     * Get TotalSurcharges value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getTotalSurcharges()
    {
        return $this->TotalSurcharges;
    }
    /**
     * Set TotalSurcharges value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalSurcharges
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RatedDeliveryDetail
     */
    public function setTotalSurcharges(\NicholasCreativeMedia\FedExPHP\Structs\Money $totalSurcharges = null)
    {
        $this->TotalSurcharges = $totalSurcharges;
        return $this;
    }
    /**
     * Get Surcharges value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Surcharge[]|null
     */
    public function getSurcharges()
    {
        return $this->Surcharges;
    }
    /**
     * Set Surcharges value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Surcharge[] $surcharges
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RatedDeliveryDetail
     */
    public function setSurcharges(array $surcharges = array())
    {
        foreach ($surcharges as $ratedDeliveryDetailSurchargesItem) {
            // validation for constraint: itemType
            if (!$ratedDeliveryDetailSurchargesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Surcharge) {
                throw new \InvalidArgumentException(sprintf('The Surcharges property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Surcharge, "%s" given', is_object($ratedDeliveryDetailSurchargesItem) ? get_class($ratedDeliveryDetailSurchargesItem) : gettype($ratedDeliveryDetailSurchargesItem)), __LINE__);
            }
        }
        $this->Surcharges = $surcharges;
        return $this;
    }
    /**
     * Add item to Surcharges value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Surcharge $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RatedDeliveryDetail
     */
    public function addToSurcharges(\NicholasCreativeMedia\FedExPHP\Structs\Surcharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\Surcharge) {
            throw new \InvalidArgumentException(sprintf('The Surcharges property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Surcharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Surcharges[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RatedDeliveryDetail
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
