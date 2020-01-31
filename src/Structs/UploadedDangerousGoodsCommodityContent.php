<?php

namespace CommerceFedEx\FedExPHP\Structs;

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
     * @var \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription
     */
    public $Description;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the total quantity of this commodity within the container.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\PreciseQuantity
     */
    public $Quantity;
    /**
     * The InnerReceptacles
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the inner receptacles within the container - including the quantities of this commodity in the receptacles.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail[]
     */
    public $InnerReceptacles;
    /**
     * The RadionuclideDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the radioactive information for this commodity.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\DangerousGoodsRadionuclideDetail
     */
    public $RadionuclideDetail;
    /**
     * The NetExplosiveDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the net explosive mass of this commodity.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\NetExplosiveDetail
     */
    public $NetExplosiveDetail;
    /**
     * Constructor method for UploadedDangerousGoodsCommodityContent
     * @uses UploadedDangerousGoodsCommodityContent::setDescription()
     * @uses UploadedDangerousGoodsCommodityContent::setQuantity()
     * @uses UploadedDangerousGoodsCommodityContent::setInnerReceptacles()
     * @uses UploadedDangerousGoodsCommodityContent::setRadionuclideDetail()
     * @uses UploadedDangerousGoodsCommodityContent::setNetExplosiveDetail()
     * @param \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription $description
     * @param \CommerceFedEx\FedExPHP\Structs\PreciseQuantity $quantity
     * @param \CommerceFedEx\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail[] $innerReceptacles
     * @param \CommerceFedEx\FedExPHP\Structs\DangerousGoodsRadionuclideDetail $radionuclideDetail
     * @param \CommerceFedEx\FedExPHP\Structs\NetExplosiveDetail $netExplosiveDetail
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription $description = null, \CommerceFedEx\FedExPHP\Structs\PreciseQuantity $quantity = null, array $innerReceptacles = array(), \CommerceFedEx\FedExPHP\Structs\DangerousGoodsRadionuclideDetail $radionuclideDetail = null, \CommerceFedEx\FedExPHP\Structs\NetExplosiveDetail $netExplosiveDetail = null)
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
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription $description
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent
     */
    public function setDescription(\CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription $description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Quantity value
     * @return \CommerceFedEx\FedExPHP\Structs\PreciseQuantity|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param \CommerceFedEx\FedExPHP\Structs\PreciseQuantity $quantity
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent
     */
    public function setQuantity(\CommerceFedEx\FedExPHP\Structs\PreciseQuantity $quantity = null)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get InnerReceptacles value
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail[]|null
     */
    public function getInnerReceptacles()
    {
        return $this->InnerReceptacles;
    }
    /**
     * Set InnerReceptacles value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail[] $innerReceptacles
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent
     */
    public function setInnerReceptacles(array $innerReceptacles = array())
    {
        foreach ($innerReceptacles as $uploadedDangerousGoodsCommodityContentInnerReceptaclesItem) {
            // validation for constraint: itemType
            if (!$uploadedDangerousGoodsCommodityContentInnerReceptaclesItem instanceof \CommerceFedEx\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail) {
                throw new \InvalidArgumentException(sprintf('The InnerReceptacles property can only contain items of \CommerceFedEx\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail, "%s" given', is_object($uploadedDangerousGoodsCommodityContentInnerReceptaclesItem) ? get_class($uploadedDangerousGoodsCommodityContentInnerReceptaclesItem) : gettype($uploadedDangerousGoodsCommodityContentInnerReceptaclesItem)), __LINE__);
            }
        }
        $this->InnerReceptacles = $innerReceptacles;
        return $this;
    }
    /**
     * Add item to InnerReceptacles value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent
     */
    public function addToInnerReceptacles(\CommerceFedEx\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail) {
            throw new \InvalidArgumentException(sprintf('The InnerReceptacles property can only contain items of \CommerceFedEx\FedExPHP\Structs\DangerousGoodsInnerReceptacleDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InnerReceptacles[] = $item;
        return $this;
    }
    /**
     * Get RadionuclideDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsRadionuclideDetail|null
     */
    public function getRadionuclideDetail()
    {
        return $this->RadionuclideDetail;
    }
    /**
     * Set RadionuclideDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\DangerousGoodsRadionuclideDetail $radionuclideDetail
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent
     */
    public function setRadionuclideDetail(\CommerceFedEx\FedExPHP\Structs\DangerousGoodsRadionuclideDetail $radionuclideDetail = null)
    {
        $this->RadionuclideDetail = $radionuclideDetail;
        return $this;
    }
    /**
     * Get NetExplosiveDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\NetExplosiveDetail|null
     */
    public function getNetExplosiveDetail()
    {
        return $this->NetExplosiveDetail;
    }
    /**
     * Set NetExplosiveDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\NetExplosiveDetail $netExplosiveDetail
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent
     */
    public function setNetExplosiveDetail(\CommerceFedEx\FedExPHP\Structs\NetExplosiveDetail $netExplosiveDetail = null)
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
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent
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
