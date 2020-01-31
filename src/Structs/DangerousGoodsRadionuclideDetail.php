<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DangerousGoodsRadionuclideDetail Structs
 * @subpackage Structs
 */
class DangerousGoodsRadionuclideDetail extends AbstractStructBase
{
    /**
     * The Radionuclides
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the radionuclide(s) of this dangerous goods commodity (e.g. - U-238 or Tm-168).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Radionuclides;
    /**
     * The Activity
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the measure of radioactivity for this dangerous goods commodity.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\DangerousGoodsRadionuclideActivity
     */
    public $Activity;
    /**
     * The PhysicalForm
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the physical form or nature of the radioactive material.
     * - minOccurs: 0
     * @var string
     */
    public $PhysicalForm;
    /**
     * The ChemicalForm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ChemicalForm;
    /**
     * Constructor method for DangerousGoodsRadionuclideDetail
     * @uses DangerousGoodsRadionuclideDetail::setRadionuclides()
     * @uses DangerousGoodsRadionuclideDetail::setActivity()
     * @uses DangerousGoodsRadionuclideDetail::setPhysicalForm()
     * @uses DangerousGoodsRadionuclideDetail::setChemicalForm()
     * @param string[] $radionuclides
     * @param \CommerceFedEx\FedExPHP\Structs\DangerousGoodsRadionuclideActivity $activity
     * @param string $physicalForm
     * @param string $chemicalForm
     */
    public function __construct(array $radionuclides = array(), \CommerceFedEx\FedExPHP\Structs\DangerousGoodsRadionuclideActivity $activity = null, $physicalForm = null, $chemicalForm = null)
    {
        $this
            ->setRadionuclides($radionuclides)
            ->setActivity($activity)
            ->setPhysicalForm($physicalForm)
            ->setChemicalForm($chemicalForm);
    }
    /**
     * Get Radionuclides value
     * @return string[]|null
     */
    public function getRadionuclides()
    {
        return $this->Radionuclides;
    }
    /**
     * Set Radionuclides value
     * @throws \InvalidArgumentException
     * @param string[] $radionuclides
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsRadionuclideDetail
     */
    public function setRadionuclides(array $radionuclides = array())
    {
        foreach ($radionuclides as $dangerousGoodsRadionuclideDetailRadionuclidesItem) {
            // validation for constraint: itemType
            if (!is_string($dangerousGoodsRadionuclideDetailRadionuclidesItem)) {
                throw new \InvalidArgumentException(sprintf('The Radionuclides property can only contain items of string, "%s" given', is_object($dangerousGoodsRadionuclideDetailRadionuclidesItem) ? get_class($dangerousGoodsRadionuclideDetailRadionuclidesItem) : gettype($dangerousGoodsRadionuclideDetailRadionuclidesItem)), __LINE__);
            }
        }
        $this->Radionuclides = $radionuclides;
        return $this;
    }
    /**
     * Add item to Radionuclides value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsRadionuclideDetail
     */
    public function addToRadionuclides($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Radionuclides property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Radionuclides[] = $item;
        return $this;
    }
    /**
     * Get Activity value
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsRadionuclideActivity|null
     */
    public function getActivity()
    {
        return $this->Activity;
    }
    /**
     * Set Activity value
     * @param \CommerceFedEx\FedExPHP\Structs\DangerousGoodsRadionuclideActivity $activity
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsRadionuclideDetail
     */
    public function setActivity(\CommerceFedEx\FedExPHP\Structs\DangerousGoodsRadionuclideActivity $activity = null)
    {
        $this->Activity = $activity;
        return $this;
    }
    /**
     * Get PhysicalForm value
     * @return string|null
     */
    public function getPhysicalForm()
    {
        return $this->PhysicalForm;
    }
    /**
     * Set PhysicalForm value
     * @uses \CommerceFedEx\FedExPHP\Enums\PhysicalFormType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\PhysicalFormType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $physicalForm
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsRadionuclideDetail
     */
    public function setPhysicalForm($physicalForm = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\PhysicalFormType::valueIsValid($physicalForm)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $physicalForm, implode(', ', \CommerceFedEx\FedExPHP\Enums\PhysicalFormType::getValidValues())), __LINE__);
        }
        $this->PhysicalForm = $physicalForm;
        return $this;
    }
    /**
     * Get ChemicalForm value
     * @return string|null
     */
    public function getChemicalForm()
    {
        return $this->ChemicalForm;
    }
    /**
     * Set ChemicalForm value
     * @param string $chemicalForm
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsRadionuclideDetail
     */
    public function setChemicalForm($chemicalForm = null)
    {
        // validation for constraint: string
        if (!is_null($chemicalForm) && !is_string($chemicalForm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chemicalForm)), __LINE__);
        }
        $this->ChemicalForm = $chemicalForm;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsRadionuclideDetail
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
