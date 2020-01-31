<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseDocumentSpecification Structs
 * Meta informations extracted from the WSDL
 * - documentation: Contains all data required for close-time documents to be produced in conjunction with a specific set of shipments. For January 2010, there are no applicable options for the COD report, the Manifest, or the Multiweight Report (they
 * will only be available in TEXT format). Detail specifications will be added for those report types when customer-selectable options are implemented.
 * @subpackage Structs
 */
class CloseDocumentSpecification extends AbstractStructBase
{
    /**
     * The CloseDocumentTypes
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the types of close documents requested by the caller.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CloseDocumentTypes;
    /**
     * The DetailedDeliveryManifestDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DetailedDeliveryManifestDetail
     */
    public $DetailedDeliveryManifestDetail;
    /**
     * The HazardousMaterialsCertificationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\HazardousMaterialsCertificationDetail
     */
    public $HazardousMaterialsCertificationDetail;
    /**
     * The ManifestDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ManifestDetail
     */
    public $ManifestDetail;
    /**
     * The Op950Detail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the OP-950 document for hazardous materials.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Op950Detail
     */
    public $Op950Detail;
    /**
     * Constructor method for CloseDocumentSpecification
     * @uses CloseDocumentSpecification::setCloseDocumentTypes()
     * @uses CloseDocumentSpecification::setDetailedDeliveryManifestDetail()
     * @uses CloseDocumentSpecification::setHazardousMaterialsCertificationDetail()
     * @uses CloseDocumentSpecification::setManifestDetail()
     * @uses CloseDocumentSpecification::setOp950Detail()
     * @param string[] $closeDocumentTypes
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DetailedDeliveryManifestDetail $detailedDeliveryManifestDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\HazardousMaterialsCertificationDetail $hazardousMaterialsCertificationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ManifestDetail $manifestDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Op950Detail $op950Detail
     */
    public function __construct(array $closeDocumentTypes = array(), \NicholasCreativeMedia\FedExPHP\Structs\DetailedDeliveryManifestDetail $detailedDeliveryManifestDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\HazardousMaterialsCertificationDetail $hazardousMaterialsCertificationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ManifestDetail $manifestDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\Op950Detail $op950Detail = null)
    {
        $this
            ->setCloseDocumentTypes($closeDocumentTypes)
            ->setDetailedDeliveryManifestDetail($detailedDeliveryManifestDetail)
            ->setHazardousMaterialsCertificationDetail($hazardousMaterialsCertificationDetail)
            ->setManifestDetail($manifestDetail)
            ->setOp950Detail($op950Detail);
    }
    /**
     * Get CloseDocumentTypes value
     * @return string[]|null
     */
    public function getCloseDocumentTypes()
    {
        return $this->CloseDocumentTypes;
    }
    /**
     * Set CloseDocumentTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CloseDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CloseDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $closeDocumentTypes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseDocumentSpecification
     */
    public function setCloseDocumentTypes(array $closeDocumentTypes = array())
    {
        $invalidValues = array();
        foreach ($closeDocumentTypes as $closeDocumentSpecificationCloseDocumentTypesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\CloseDocumentType::valueIsValid($closeDocumentSpecificationCloseDocumentTypesItem)) {
                $invalidValues[] = var_export($closeDocumentSpecificationCloseDocumentTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CloseDocumentType::getValidValues())), __LINE__);
        }
        $this->CloseDocumentTypes = $closeDocumentTypes;
        return $this;
    }
    /**
     * Add item to CloseDocumentTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CloseDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CloseDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseDocumentSpecification
     */
    public function addToCloseDocumentTypes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CloseDocumentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CloseDocumentType::getValidValues())), __LINE__);
        }
        $this->CloseDocumentTypes[] = $item;
        return $this;
    }
    /**
     * Get DetailedDeliveryManifestDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DetailedDeliveryManifestDetail|null
     */
    public function getDetailedDeliveryManifestDetail()
    {
        return $this->DetailedDeliveryManifestDetail;
    }
    /**
     * Set DetailedDeliveryManifestDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DetailedDeliveryManifestDetail $detailedDeliveryManifestDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseDocumentSpecification
     */
    public function setDetailedDeliveryManifestDetail(\NicholasCreativeMedia\FedExPHP\Structs\DetailedDeliveryManifestDetail $detailedDeliveryManifestDetail = null)
    {
        $this->DetailedDeliveryManifestDetail = $detailedDeliveryManifestDetail;
        return $this;
    }
    /**
     * Get HazardousMaterialsCertificationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\HazardousMaterialsCertificationDetail|null
     */
    public function getHazardousMaterialsCertificationDetail()
    {
        return $this->HazardousMaterialsCertificationDetail;
    }
    /**
     * Set HazardousMaterialsCertificationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\HazardousMaterialsCertificationDetail $hazardousMaterialsCertificationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseDocumentSpecification
     */
    public function setHazardousMaterialsCertificationDetail(\NicholasCreativeMedia\FedExPHP\Structs\HazardousMaterialsCertificationDetail $hazardousMaterialsCertificationDetail = null)
    {
        $this->HazardousMaterialsCertificationDetail = $hazardousMaterialsCertificationDetail;
        return $this;
    }
    /**
     * Get ManifestDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ManifestDetail|null
     */
    public function getManifestDetail()
    {
        return $this->ManifestDetail;
    }
    /**
     * Set ManifestDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ManifestDetail $manifestDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseDocumentSpecification
     */
    public function setManifestDetail(\NicholasCreativeMedia\FedExPHP\Structs\ManifestDetail $manifestDetail = null)
    {
        $this->ManifestDetail = $manifestDetail;
        return $this;
    }
    /**
     * Get Op950Detail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Op950Detail|null
     */
    public function getOp950Detail()
    {
        return $this->Op950Detail;
    }
    /**
     * Set Op950Detail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Op950Detail $op950Detail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseDocumentSpecification
     */
    public function setOp950Detail(\NicholasCreativeMedia\FedExPHP\Structs\Op950Detail $op950Detail = null)
    {
        $this->Op950Detail = $op950Detail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CloseDocumentSpecification
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
