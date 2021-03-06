<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecordedDangerousGoodsShipmentDetail Structs
 * @subpackage Structs
 */
class RecordedDangerousGoodsShipmentDetail extends AbstractStructBase
{
    /**
     * The UploadedShipmentDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail
     */
    public $UploadedShipmentDetail;
    /**
     * The CompletedShipmentDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail
     */
    public $CompletedShipmentDetail;
    /**
     * Constructor method for RecordedDangerousGoodsShipmentDetail
     * @uses RecordedDangerousGoodsShipmentDetail::setUploadedShipmentDetail()
     * @uses RecordedDangerousGoodsShipmentDetail::setCompletedShipmentDetail()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail $uploadedShipmentDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail $completedShipmentDetail
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail $uploadedShipmentDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail $completedShipmentDetail = null)
    {
        $this
            ->setUploadedShipmentDetail($uploadedShipmentDetail)
            ->setCompletedShipmentDetail($completedShipmentDetail);
    }
    /**
     * Get UploadedShipmentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail|null
     */
    public function getUploadedShipmentDetail()
    {
        return $this->UploadedShipmentDetail;
    }
    /**
     * Set UploadedShipmentDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail $uploadedShipmentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RecordedDangerousGoodsShipmentDetail
     */
    public function setUploadedShipmentDetail(\NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail $uploadedShipmentDetail = null)
    {
        $this->UploadedShipmentDetail = $uploadedShipmentDetail;
        return $this;
    }
    /**
     * Get CompletedShipmentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail|null
     */
    public function getCompletedShipmentDetail()
    {
        return $this->CompletedShipmentDetail;
    }
    /**
     * Set CompletedShipmentDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail $completedShipmentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RecordedDangerousGoodsShipmentDetail
     */
    public function setCompletedShipmentDetail(\NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail $completedShipmentDetail = null)
    {
        $this->CompletedShipmentDetail = $completedShipmentDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RecordedDangerousGoodsShipmentDetail
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
