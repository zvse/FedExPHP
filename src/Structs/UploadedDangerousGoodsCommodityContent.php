<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadedDangerousGoodsCommodityContent Structs
 * @subpackage Structs
 */
class UploadedDangerousGoodsCommodityContent extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Specifies detailed commodity information related to the regulations.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription
     */
    public $Description;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the total quantity of this commodity within the container.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PreciseQuantity
     */
    public $Quantity;
    /**
     * The InnerReceptacles
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the inner receptacles within the container - including the quantities of this commodity in the receptacles.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail[]
     */
    public $InnerReceptacles;
    /**
     * The RadionuclideDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the radioactive information for this commodity.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsRadionuclideDetail
     */
    public $RadionuclideDetail;
    /**
     * The NetExplosiveDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the net explosive mass of this commodity.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\NetExplosiveDetail
     */
    public $NetExplosiveDetail;
    /**
     * Constructor method for UploadedDangerousGoodsCommodityContent
     * @uses UploadedDangerousGoodsCommodityContent::setDescription()
     * @uses UploadedDangerousGoodsCommodityContent::setQuantity()
     * @uses UploadedDangerousGoodsCommodityContent::setInnerReceptacles()
     * @uses UploadedDangerousGoodsCommodityContent::setRadionuclideDetail()
     * @uses UploadedDangerousGoodsCommodityContent::setNetExplosiveDetail()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription $description
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PreciseQuantity $quantity
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail[] $innerReceptacles
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsRadionuclideDetail $radionuclideDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\NetExplosiveDetail $netExplosiveDetail
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription $description = null, \NicholasCreativeMedia\FedExPHP\Structs\PreciseQuantity $quantity = null, array $innerReceptacles = array(), \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsRadionuclideDetail $radionuclideDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\NetExplosiveDetail $netExplosiveDetail = null)
    {
        $this
            ->setDescription($description)
            ->setQuantity($quantity)
            ->setInnerReceptacles($innerReceptacles)
            ->setRadionuclideDetail($radionuclideDetail)
            ->setNetExplosiveDetail($netExplosiveDetail);
    }
    /**
     * Get Description value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription $description
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent
     */
    public function setDescription(\NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription $description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Quantity value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PreciseQuantity|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PreciseQuantity $quantity
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent
     */
    public function setQuantity(\NicholasCreativeMedia\FedExPHP\Structs\PreciseQuantity $quantity = null)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get InnerReceptacles value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail[]|null
     */
    public function getInnerReceptacles()
    {
        return $this->InnerReceptacles;
    }
    /**
     * Set InnerReceptacles value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail[] $innerReceptacles
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent
     */
    public function setInnerReceptacles(array $innerReceptacles = array())
    {
        foreach ($innerReceptacles as $uploadedDangerousGoodsCommodityContentInnerReceptaclesItem) {
            // validation for constraint: itemType
            if (!$uploadedDangerousGoodsCommodityContentInnerReceptaclesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail) {
                throw new \InvalidArgumentException(sprintf('The InnerReceptacles property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail, "%s" given', is_object($uploadedDangerousGoodsCommodityContentInnerReceptaclesItem) ? get_class($uploadedDangerousGoodsCommodityContentInnerReceptaclesItem) : gettype($uploadedDangerousGoodsCommodityContentInnerReceptaclesItem)), __LINE__);
            }
        }
        $this->InnerReceptacles = $innerReceptacles;
        return $this;
    }
    /**
     * Add item to InnerReceptacles value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent
     */
    public function addToInnerReceptacles(\NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail) {
            throw new \InvalidArgumentException(sprintf('The InnerReceptacles property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InnerReceptacles[] = $item;
        return $this;
    }
    /**
     * Get RadionuclideDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsRadionuclideDetail|null
     */
    public function getRadionuclideDetail()
    {
        return $this->RadionuclideDetail;
    }
    /**
     * Set RadionuclideDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsRadionuclideDetail $radionuclideDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent
     */
    public function setRadionuclideDetail(\NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsRadionuclideDetail $radionuclideDetail = null)
    {
        $this->RadionuclideDetail = $radionuclideDetail;
        return $this;
    }
    /**
     * Get NetExplosiveDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\NetExplosiveDetail|null
     */
    public function getNetExplosiveDetail()
    {
        return $this->NetExplosiveDetail;
    }
    /**
     * Set NetExplosiveDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\NetExplosiveDetail $netExplosiveDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent
     */
    public function setNetExplosiveDetail(\NicholasCreativeMedia\FedExPHP\Structs\NetExplosiveDetail $netExplosiveDetail = null)
    {
        $this->NetExplosiveDetail = $netExplosiveDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent
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
