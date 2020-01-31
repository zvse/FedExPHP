<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HazardousCommodityContent Structs
 * Meta informations extracted from the WSDL
 * - documentation: Documents the kind and quantity of an individual hazardous commodity in a package.
 * @subpackage Structs
 */
class HazardousCommodityContent extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Identifies and describes an individual hazardous commodity.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\HazardousCommodityDescription
     */
    public $Description;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the amount of the commodity in alternate units.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\HazardousCommodityQuantityDetail
     */
    public $Quantity;
    /**
     * The InnerReceptacles
     * Meta informations extracted from the WSDL
     * - documentation: This describes the inner receptacle details for a hazardous commodity within the dangerous goods container.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\HazardousCommodityInnerReceptacleDetail[]
     */
    public $InnerReceptacles;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - documentation: Customer-provided specifications for handling individual commodities.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\HazardousCommodityOptionDetail
     */
    public $Options;
    /**
     * The RadionuclideDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details of any radio active materials within the commodity.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\RadionuclideDetail
     */
    public $RadionuclideDetail;
    /**
     * The NetExplosiveDetail
     * Meta informations extracted from the WSDL
     * - documentation: The total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\NetExplosiveDetail
     */
    public $NetExplosiveDetail;
    /**
     * Constructor method for HazardousCommodityContent
     * @uses HazardousCommodityContent::setDescription()
     * @uses HazardousCommodityContent::setQuantity()
     * @uses HazardousCommodityContent::setInnerReceptacles()
     * @uses HazardousCommodityContent::setOptions()
     * @uses HazardousCommodityContent::setRadionuclideDetail()
     * @uses HazardousCommodityContent::setNetExplosiveDetail()
     * @param \CommerceFedEx\FedExPHP\Structs\HazardousCommodityDescription $description
     * @param \CommerceFedEx\FedExPHP\Structs\HazardousCommodityQuantityDetail $quantity
     * @param \CommerceFedEx\FedExPHP\Structs\HazardousCommodityInnerReceptacleDetail[] $innerReceptacles
     * @param \CommerceFedEx\FedExPHP\Structs\HazardousCommodityOptionDetail $options
     * @param \CommerceFedEx\FedExPHP\Structs\RadionuclideDetail $radionuclideDetail
     * @param \CommerceFedEx\FedExPHP\Structs\NetExplosiveDetail $netExplosiveDetail
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\HazardousCommodityDescription $description = null, \CommerceFedEx\FedExPHP\Structs\HazardousCommodityQuantityDetail $quantity = null, array $innerReceptacles = array(), \CommerceFedEx\FedExPHP\Structs\HazardousCommodityOptionDetail $options = null, \CommerceFedEx\FedExPHP\Structs\RadionuclideDetail $radionuclideDetail = null, \CommerceFedEx\FedExPHP\Structs\NetExplosiveDetail $netExplosiveDetail = null)
    {
        $this
            ->setDescription($description)
            ->setQuantity($quantity)
            ->setInnerReceptacles($innerReceptacles)
            ->setOptions($options)
            ->setRadionuclideDetail($radionuclideDetail)
            ->setNetExplosiveDetail($netExplosiveDetail);
    }
    /**
     * Get Description value
     * @return \CommerceFedEx\FedExPHP\Structs\HazardousCommodityDescription|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \CommerceFedEx\FedExPHP\Structs\HazardousCommodityDescription $description
     * @return \CommerceFedEx\FedExPHP\Structs\HazardousCommodityContent
     */
    public function setDescription(\CommerceFedEx\FedExPHP\Structs\HazardousCommodityDescription $description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Quantity value
     * @return \CommerceFedEx\FedExPHP\Structs\HazardousCommodityQuantityDetail|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param \CommerceFedEx\FedExPHP\Structs\HazardousCommodityQuantityDetail $quantity
     * @return \CommerceFedEx\FedExPHP\Structs\HazardousCommodityContent
     */
    public function setQuantity(\CommerceFedEx\FedExPHP\Structs\HazardousCommodityQuantityDetail $quantity = null)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get InnerReceptacles value
     * @return \CommerceFedEx\FedExPHP\Structs\HazardousCommodityInnerReceptacleDetail[]|null
     */
    public function getInnerReceptacles()
    {
        return $this->InnerReceptacles;
    }
    /**
     * Set InnerReceptacles value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\HazardousCommodityInnerReceptacleDetail[] $innerReceptacles
     * @return \CommerceFedEx\FedExPHP\Structs\HazardousCommodityContent
     */
    public function setInnerReceptacles(array $innerReceptacles = array())
    {
        foreach ($innerReceptacles as $hazardousCommodityContentInnerReceptaclesItem) {
            // validation for constraint: itemType
            if (!$hazardousCommodityContentInnerReceptaclesItem instanceof \CommerceFedEx\FedExPHP\Structs\HazardousCommodityInnerReceptacleDetail) {
                throw new \InvalidArgumentException(sprintf('The InnerReceptacles property can only contain items of \CommerceFedEx\FedExPHP\Structs\HazardousCommodityInnerReceptacleDetail, "%s" given', is_object($hazardousCommodityContentInnerReceptaclesItem) ? get_class($hazardousCommodityContentInnerReceptaclesItem) : gettype($hazardousCommodityContentInnerReceptaclesItem)), __LINE__);
            }
        }
        $this->InnerReceptacles = $innerReceptacles;
        return $this;
    }
    /**
     * Add item to InnerReceptacles value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\HazardousCommodityInnerReceptacleDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\HazardousCommodityContent
     */
    public function addToInnerReceptacles(\CommerceFedEx\FedExPHP\Structs\HazardousCommodityInnerReceptacleDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\HazardousCommodityInnerReceptacleDetail) {
            throw new \InvalidArgumentException(sprintf('The InnerReceptacles property can only contain items of \CommerceFedEx\FedExPHP\Structs\HazardousCommodityInnerReceptacleDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InnerReceptacles[] = $item;
        return $this;
    }
    /**
     * Get Options value
     * @return \CommerceFedEx\FedExPHP\Structs\HazardousCommodityOptionDetail|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \CommerceFedEx\FedExPHP\Structs\HazardousCommodityOptionDetail $options
     * @return \CommerceFedEx\FedExPHP\Structs\HazardousCommodityContent
     */
    public function setOptions(\CommerceFedEx\FedExPHP\Structs\HazardousCommodityOptionDetail $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Get RadionuclideDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\RadionuclideDetail|null
     */
    public function getRadionuclideDetail()
    {
        return $this->RadionuclideDetail;
    }
    /**
     * Set RadionuclideDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\RadionuclideDetail $radionuclideDetail
     * @return \CommerceFedEx\FedExPHP\Structs\HazardousCommodityContent
     */
    public function setRadionuclideDetail(\CommerceFedEx\FedExPHP\Structs\RadionuclideDetail $radionuclideDetail = null)
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
     * @return \CommerceFedEx\FedExPHP\Structs\HazardousCommodityContent
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
     * @return \CommerceFedEx\FedExPHP\Structs\HazardousCommodityContent
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
