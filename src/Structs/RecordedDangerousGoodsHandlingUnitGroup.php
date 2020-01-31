<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecordedDangerousGoodsHandlingUnitGroup Structs
 * @subpackage Structs
 */
class RecordedDangerousGoodsHandlingUnitGroup extends AbstractStructBase
{
    /**
     * The UploadedHandlingUnitGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup
     */
    public $UploadedHandlingUnitGroup;
    /**
     * The HandlingUnitShippingDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail
     */
    public $HandlingUnitShippingDetail;
    /**
     * Constructor method for RecordedDangerousGoodsHandlingUnitGroup
     * @uses RecordedDangerousGoodsHandlingUnitGroup::setUploadedHandlingUnitGroup()
     * @uses RecordedDangerousGoodsHandlingUnitGroup::setHandlingUnitShippingDetail()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup $uploadedHandlingUnitGroup
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail $handlingUnitShippingDetail
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup $uploadedHandlingUnitGroup = null, \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail $handlingUnitShippingDetail = null)
    {
        $this
            ->setUploadedHandlingUnitGroup($uploadedHandlingUnitGroup)
            ->setHandlingUnitShippingDetail($handlingUnitShippingDetail);
    }
    /**
     * Get UploadedHandlingUnitGroup value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup|null
     */
    public function getUploadedHandlingUnitGroup()
    {
        return $this->UploadedHandlingUnitGroup;
    }
    /**
     * Set UploadedHandlingUnitGroup value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup $uploadedHandlingUnitGroup
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RecordedDangerousGoodsHandlingUnitGroup
     */
    public function setUploadedHandlingUnitGroup(\NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup $uploadedHandlingUnitGroup = null)
    {
        $this->UploadedHandlingUnitGroup = $uploadedHandlingUnitGroup;
        return $this;
    }
    /**
     * Get HandlingUnitShippingDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail|null
     */
    public function getHandlingUnitShippingDetail()
    {
        return $this->HandlingUnitShippingDetail;
    }
    /**
     * Set HandlingUnitShippingDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail $handlingUnitShippingDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RecordedDangerousGoodsHandlingUnitGroup
     */
    public function setHandlingUnitShippingDetail(\NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail $handlingUnitShippingDetail = null)
    {
        $this->HandlingUnitShippingDetail = $handlingUnitShippingDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RecordedDangerousGoodsHandlingUnitGroup
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
