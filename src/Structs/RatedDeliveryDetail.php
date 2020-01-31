<?php

namespace CommerceFedEx\FedExPHP\Structs;

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
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $TotalNetCharge;
    /**
     * The TotalSurcharges
     * Meta informations extracted from the WSDL
     * - documentation: Total surcharges for this shipment.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $TotalSurcharges;
    /**
     * The Surcharges
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about surcharges.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Surcharge[]
     */
    public $Surcharges;
    /**
     * Constructor method for RatedDeliveryDetail
     * @uses RatedDeliveryDetail::setTotalPieces()
     * @uses RatedDeliveryDetail::setTotalNetCharge()
     * @uses RatedDeliveryDetail::setTotalSurcharges()
     * @uses RatedDeliveryDetail::setSurcharges()
     * @param int $totalPieces
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalNetCharge
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalSurcharges
     * @param \CommerceFedEx\FedExPHP\Structs\Surcharge[] $surcharges
     */
    public function __construct($totalPieces = null, \CommerceFedEx\FedExPHP\Structs\Money $totalNetCharge = null, \CommerceFedEx\FedExPHP\Structs\Money $totalSurcharges = null, array $surcharges = array())
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
     * @return \CommerceFedEx\FedExPHP\Structs\RatedDeliveryDetail
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
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getTotalNetCharge()
    {
        return $this->TotalNetCharge;
    }
    /**
     * Set TotalNetCharge value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalNetCharge
     * @return \CommerceFedEx\FedExPHP\Structs\RatedDeliveryDetail
     */
    public function setTotalNetCharge(\CommerceFedEx\FedExPHP\Structs\Money $totalNetCharge = null)
    {
        $this->TotalNetCharge = $totalNetCharge;
        return $this;
    }
    /**
     * Get TotalSurcharges value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getTotalSurcharges()
    {
        return $this->TotalSurcharges;
    }
    /**
     * Set TotalSurcharges value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $totalSurcharges
     * @return \CommerceFedEx\FedExPHP\Structs\RatedDeliveryDetail
     */
    public function setTotalSurcharges(\CommerceFedEx\FedExPHP\Structs\Money $totalSurcharges = null)
    {
        $this->TotalSurcharges = $totalSurcharges;
        return $this;
    }
    /**
     * Get Surcharges value
     * @return \CommerceFedEx\FedExPHP\Structs\Surcharge[]|null
     */
    public function getSurcharges()
    {
        return $this->Surcharges;
    }
    /**
     * Set Surcharges value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Surcharge[] $surcharges
     * @return \CommerceFedEx\FedExPHP\Structs\RatedDeliveryDetail
     */
    public function setSurcharges(array $surcharges = array())
    {
        foreach ($surcharges as $ratedDeliveryDetailSurchargesItem) {
            // validation for constraint: itemType
            if (!$ratedDeliveryDetailSurchargesItem instanceof \CommerceFedEx\FedExPHP\Structs\Surcharge) {
                throw new \InvalidArgumentException(sprintf('The Surcharges property can only contain items of \CommerceFedEx\FedExPHP\Structs\Surcharge, "%s" given', is_object($ratedDeliveryDetailSurchargesItem) ? get_class($ratedDeliveryDetailSurchargesItem) : gettype($ratedDeliveryDetailSurchargesItem)), __LINE__);
            }
        }
        $this->Surcharges = $surcharges;
        return $this;
    }
    /**
     * Add item to Surcharges value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Surcharge $item
     * @return \CommerceFedEx\FedExPHP\Structs\RatedDeliveryDetail
     */
    public function addToSurcharges(\CommerceFedEx\FedExPHP\Structs\Surcharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\Surcharge) {
            throw new \InvalidArgumentException(sprintf('The Surcharges property can only contain items of \CommerceFedEx\FedExPHP\Structs\Surcharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \CommerceFedEx\FedExPHP\Structs\RatedDeliveryDetail
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
