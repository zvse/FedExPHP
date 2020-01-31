<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentSpecification Structs
 * Meta informations extracted from the WSDL
 * - documentation: Contains all data required for additional (non-label) shipping documents to be produced in conjunction with a specific shipment.
 * @subpackage Structs
 */
class ShippingDocumentSpecification extends AbstractStructBase
{
    /**
     * The ShippingDocumentTypes
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the types of shipping documents requested by the shipper.
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $ShippingDocumentTypes;
    /**
     * The CertificateOfOrigin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CertificateOfOriginDetail
     */
    public $CertificateOfOrigin;
    /**
     * The CommercialInvoiceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CommercialInvoiceDetail
     */
    public $CommercialInvoiceDetail;
    /**
     * The CustomPackageDocumentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of each package-level custom document (the same specification is used for all packages).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail[]
     */
    public $CustomPackageDocumentDetail;
    /**
     * The CustomShipmentDocumentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of a shipment-level custom document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail[]
     */
    public $CustomShipmentDocumentDetail;
    /**
     * The ExportDeclarationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ExportDeclarationDetail
     */
    public $ExportDeclarationDetail;
    /**
     * The GeneralAgencyAgreementDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\GeneralAgencyAgreementDetail
     */
    public $GeneralAgencyAgreementDetail;
    /**
     * The NaftaCertificateOfOriginDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\NaftaCertificateOfOriginDetail
     */
    public $NaftaCertificateOfOriginDetail;
    /**
     * The Op900Detail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the OP-900 document for hazardous materials packages.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Op900Detail
     */
    public $Op900Detail;
    /**
     * The DangerousGoodsShippersDeclarationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the 1421c document for dangerous goods shipment.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\DangerousGoodsShippersDeclarationDetail
     */
    public $DangerousGoodsShippersDeclarationDetail;
    /**
     * The FreightAddressLabelDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the OP-900 document for hazardous materials.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\FreightAddressLabelDetail
     */
    public $FreightAddressLabelDetail;
    /**
     * The FreightBillOfLadingDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\FreightBillOfLadingDetail
     */
    public $FreightBillOfLadingDetail;
    /**
     * The ReturnInstructionsDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the return instructions document.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ReturnInstructionsDetail
     */
    public $ReturnInstructionsDetail;
    /**
     * Constructor method for ShippingDocumentSpecification
     * @uses ShippingDocumentSpecification::setShippingDocumentTypes()
     * @uses ShippingDocumentSpecification::setCertificateOfOrigin()
     * @uses ShippingDocumentSpecification::setCommercialInvoiceDetail()
     * @uses ShippingDocumentSpecification::setCustomPackageDocumentDetail()
     * @uses ShippingDocumentSpecification::setCustomShipmentDocumentDetail()
     * @uses ShippingDocumentSpecification::setExportDeclarationDetail()
     * @uses ShippingDocumentSpecification::setGeneralAgencyAgreementDetail()
     * @uses ShippingDocumentSpecification::setNaftaCertificateOfOriginDetail()
     * @uses ShippingDocumentSpecification::setOp900Detail()
     * @uses ShippingDocumentSpecification::setDangerousGoodsShippersDeclarationDetail()
     * @uses ShippingDocumentSpecification::setFreightAddressLabelDetail()
     * @uses ShippingDocumentSpecification::setFreightBillOfLadingDetail()
     * @uses ShippingDocumentSpecification::setReturnInstructionsDetail()
     * @param string[] $shippingDocumentTypes
     * @param \CommerceFedEx\FedExPHP\Structs\CertificateOfOriginDetail $certificateOfOrigin
     * @param \CommerceFedEx\FedExPHP\Structs\CommercialInvoiceDetail $commercialInvoiceDetail
     * @param \CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail[] $customPackageDocumentDetail
     * @param \CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail[] $customShipmentDocumentDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ExportDeclarationDetail $exportDeclarationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\GeneralAgencyAgreementDetail $generalAgencyAgreementDetail
     * @param \CommerceFedEx\FedExPHP\Structs\NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail
     * @param \CommerceFedEx\FedExPHP\Structs\Op900Detail $op900Detail
     * @param \CommerceFedEx\FedExPHP\Structs\DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\FreightAddressLabelDetail $freightAddressLabelDetail
     * @param \CommerceFedEx\FedExPHP\Structs\FreightBillOfLadingDetail $freightBillOfLadingDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ReturnInstructionsDetail $returnInstructionsDetail
     */
    public function __construct(array $shippingDocumentTypes = array(), \CommerceFedEx\FedExPHP\Structs\CertificateOfOriginDetail $certificateOfOrigin = null, \CommerceFedEx\FedExPHP\Structs\CommercialInvoiceDetail $commercialInvoiceDetail = null, array $customPackageDocumentDetail = array(), array $customShipmentDocumentDetail = array(), \CommerceFedEx\FedExPHP\Structs\ExportDeclarationDetail $exportDeclarationDetail = null, \CommerceFedEx\FedExPHP\Structs\GeneralAgencyAgreementDetail $generalAgencyAgreementDetail = null, \CommerceFedEx\FedExPHP\Structs\NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail = null, \CommerceFedEx\FedExPHP\Structs\Op900Detail $op900Detail = null, \CommerceFedEx\FedExPHP\Structs\DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail = null, \CommerceFedEx\FedExPHP\Structs\FreightAddressLabelDetail $freightAddressLabelDetail = null, \CommerceFedEx\FedExPHP\Structs\FreightBillOfLadingDetail $freightBillOfLadingDetail = null, \CommerceFedEx\FedExPHP\Structs\ReturnInstructionsDetail $returnInstructionsDetail = null)
    {
        $this
            ->setShippingDocumentTypes($shippingDocumentTypes)
            ->setCertificateOfOrigin($certificateOfOrigin)
            ->setCommercialInvoiceDetail($commercialInvoiceDetail)
            ->setCustomPackageDocumentDetail($customPackageDocumentDetail)
            ->setCustomShipmentDocumentDetail($customShipmentDocumentDetail)
            ->setExportDeclarationDetail($exportDeclarationDetail)
            ->setGeneralAgencyAgreementDetail($generalAgencyAgreementDetail)
            ->setNaftaCertificateOfOriginDetail($naftaCertificateOfOriginDetail)
            ->setOp900Detail($op900Detail)
            ->setDangerousGoodsShippersDeclarationDetail($dangerousGoodsShippersDeclarationDetail)
            ->setFreightAddressLabelDetail($freightAddressLabelDetail)
            ->setFreightBillOfLadingDetail($freightBillOfLadingDetail)
            ->setReturnInstructionsDetail($returnInstructionsDetail);
    }
    /**
     * Get ShippingDocumentTypes value
     * @return string[]
     */
    public function getShippingDocumentTypes()
    {
        return $this->ShippingDocumentTypes;
    }
    /**
     * Set ShippingDocumentTypes value
     * @uses \CommerceFedEx\FedExPHP\Enums\RequestedShippingDocumentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\RequestedShippingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $shippingDocumentTypes
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public function setShippingDocumentTypes(array $shippingDocumentTypes = array())
    {
        $invalidValues = array();
        foreach ($shippingDocumentTypes as $shippingDocumentSpecificationShippingDocumentTypesItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\RequestedShippingDocumentType::valueIsValid($shippingDocumentSpecificationShippingDocumentTypesItem)) {
                $invalidValues[] = var_export($shippingDocumentSpecificationShippingDocumentTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\RequestedShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->ShippingDocumentTypes = $shippingDocumentTypes;
        return $this;
    }
    /**
     * Add item to ShippingDocumentTypes value
     * @uses \CommerceFedEx\FedExPHP\Enums\RequestedShippingDocumentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\RequestedShippingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public function addToShippingDocumentTypes($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\RequestedShippingDocumentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\RequestedShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->ShippingDocumentTypes[] = $item;
        return $this;
    }
    /**
     * Get CertificateOfOrigin value
     * @return \CommerceFedEx\FedExPHP\Structs\CertificateOfOriginDetail|null
     */
    public function getCertificateOfOrigin()
    {
        return $this->CertificateOfOrigin;
    }
    /**
     * Set CertificateOfOrigin value
     * @param \CommerceFedEx\FedExPHP\Structs\CertificateOfOriginDetail $certificateOfOrigin
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public function setCertificateOfOrigin(\CommerceFedEx\FedExPHP\Structs\CertificateOfOriginDetail $certificateOfOrigin = null)
    {
        $this->CertificateOfOrigin = $certificateOfOrigin;
        return $this;
    }
    /**
     * Get CommercialInvoiceDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\CommercialInvoiceDetail|null
     */
    public function getCommercialInvoiceDetail()
    {
        return $this->CommercialInvoiceDetail;
    }
    /**
     * Set CommercialInvoiceDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\CommercialInvoiceDetail $commercialInvoiceDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public function setCommercialInvoiceDetail(\CommerceFedEx\FedExPHP\Structs\CommercialInvoiceDetail $commercialInvoiceDetail = null)
    {
        $this->CommercialInvoiceDetail = $commercialInvoiceDetail;
        return $this;
    }
    /**
     * Get CustomPackageDocumentDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail[]|null
     */
    public function getCustomPackageDocumentDetail()
    {
        return $this->CustomPackageDocumentDetail;
    }
    /**
     * Set CustomPackageDocumentDetail value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail[] $customPackageDocumentDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public function setCustomPackageDocumentDetail(array $customPackageDocumentDetail = array())
    {
        foreach ($customPackageDocumentDetail as $shippingDocumentSpecificationCustomPackageDocumentDetailItem) {
            // validation for constraint: itemType
            if (!$shippingDocumentSpecificationCustomPackageDocumentDetailItem instanceof \CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail) {
                throw new \InvalidArgumentException(sprintf('The CustomPackageDocumentDetail property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail, "%s" given', is_object($shippingDocumentSpecificationCustomPackageDocumentDetailItem) ? get_class($shippingDocumentSpecificationCustomPackageDocumentDetailItem) : gettype($shippingDocumentSpecificationCustomPackageDocumentDetailItem)), __LINE__);
            }
        }
        $this->CustomPackageDocumentDetail = $customPackageDocumentDetail;
        return $this;
    }
    /**
     * Add item to CustomPackageDocumentDetail value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public function addToCustomPackageDocumentDetail(\CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail) {
            throw new \InvalidArgumentException(sprintf('The CustomPackageDocumentDetail property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomPackageDocumentDetail[] = $item;
        return $this;
    }
    /**
     * Get CustomShipmentDocumentDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail[]|null
     */
    public function getCustomShipmentDocumentDetail()
    {
        return $this->CustomShipmentDocumentDetail;
    }
    /**
     * Set CustomShipmentDocumentDetail value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail[] $customShipmentDocumentDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public function setCustomShipmentDocumentDetail(array $customShipmentDocumentDetail = array())
    {
        foreach ($customShipmentDocumentDetail as $shippingDocumentSpecificationCustomShipmentDocumentDetailItem) {
            // validation for constraint: itemType
            if (!$shippingDocumentSpecificationCustomShipmentDocumentDetailItem instanceof \CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail) {
                throw new \InvalidArgumentException(sprintf('The CustomShipmentDocumentDetail property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail, "%s" given', is_object($shippingDocumentSpecificationCustomShipmentDocumentDetailItem) ? get_class($shippingDocumentSpecificationCustomShipmentDocumentDetailItem) : gettype($shippingDocumentSpecificationCustomShipmentDocumentDetailItem)), __LINE__);
            }
        }
        $this->CustomShipmentDocumentDetail = $customShipmentDocumentDetail;
        return $this;
    }
    /**
     * Add item to CustomShipmentDocumentDetail value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public function addToCustomShipmentDocumentDetail(\CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail) {
            throw new \InvalidArgumentException(sprintf('The CustomShipmentDocumentDetail property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomDocumentDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomShipmentDocumentDetail[] = $item;
        return $this;
    }
    /**
     * Get ExportDeclarationDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ExportDeclarationDetail|null
     */
    public function getExportDeclarationDetail()
    {
        return $this->ExportDeclarationDetail;
    }
    /**
     * Set ExportDeclarationDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ExportDeclarationDetail $exportDeclarationDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public function setExportDeclarationDetail(\CommerceFedEx\FedExPHP\Structs\ExportDeclarationDetail $exportDeclarationDetail = null)
    {
        $this->ExportDeclarationDetail = $exportDeclarationDetail;
        return $this;
    }
    /**
     * Get GeneralAgencyAgreementDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\GeneralAgencyAgreementDetail|null
     */
    public function getGeneralAgencyAgreementDetail()
    {
        return $this->GeneralAgencyAgreementDetail;
    }
    /**
     * Set GeneralAgencyAgreementDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\GeneralAgencyAgreementDetail $generalAgencyAgreementDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public function setGeneralAgencyAgreementDetail(\CommerceFedEx\FedExPHP\Structs\GeneralAgencyAgreementDetail $generalAgencyAgreementDetail = null)
    {
        $this->GeneralAgencyAgreementDetail = $generalAgencyAgreementDetail;
        return $this;
    }
    /**
     * Get NaftaCertificateOfOriginDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\NaftaCertificateOfOriginDetail|null
     */
    public function getNaftaCertificateOfOriginDetail()
    {
        return $this->NaftaCertificateOfOriginDetail;
    }
    /**
     * Set NaftaCertificateOfOriginDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public function setNaftaCertificateOfOriginDetail(\CommerceFedEx\FedExPHP\Structs\NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail = null)
    {
        $this->NaftaCertificateOfOriginDetail = $naftaCertificateOfOriginDetail;
        return $this;
    }
    /**
     * Get Op900Detail value
     * @return \CommerceFedEx\FedExPHP\Structs\Op900Detail|null
     */
    public function getOp900Detail()
    {
        return $this->Op900Detail;
    }
    /**
     * Set Op900Detail value
     * @param \CommerceFedEx\FedExPHP\Structs\Op900Detail $op900Detail
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public function setOp900Detail(\CommerceFedEx\FedExPHP\Structs\Op900Detail $op900Detail = null)
    {
        $this->Op900Detail = $op900Detail;
        return $this;
    }
    /**
     * Get DangerousGoodsShippersDeclarationDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsShippersDeclarationDetail|null
     */
    public function getDangerousGoodsShippersDeclarationDetail()
    {
        return $this->DangerousGoodsShippersDeclarationDetail;
    }
    /**
     * Set DangerousGoodsShippersDeclarationDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public function setDangerousGoodsShippersDeclarationDetail(\CommerceFedEx\FedExPHP\Structs\DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail = null)
    {
        $this->DangerousGoodsShippersDeclarationDetail = $dangerousGoodsShippersDeclarationDetail;
        return $this;
    }
    /**
     * Get FreightAddressLabelDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\FreightAddressLabelDetail|null
     */
    public function getFreightAddressLabelDetail()
    {
        return $this->FreightAddressLabelDetail;
    }
    /**
     * Set FreightAddressLabelDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\FreightAddressLabelDetail $freightAddressLabelDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public function setFreightAddressLabelDetail(\CommerceFedEx\FedExPHP\Structs\FreightAddressLabelDetail $freightAddressLabelDetail = null)
    {
        $this->FreightAddressLabelDetail = $freightAddressLabelDetail;
        return $this;
    }
    /**
     * Get FreightBillOfLadingDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\FreightBillOfLadingDetail|null
     */
    public function getFreightBillOfLadingDetail()
    {
        return $this->FreightBillOfLadingDetail;
    }
    /**
     * Set FreightBillOfLadingDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\FreightBillOfLadingDetail $freightBillOfLadingDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public function setFreightBillOfLadingDetail(\CommerceFedEx\FedExPHP\Structs\FreightBillOfLadingDetail $freightBillOfLadingDetail = null)
    {
        $this->FreightBillOfLadingDetail = $freightBillOfLadingDetail;
        return $this;
    }
    /**
     * Get ReturnInstructionsDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ReturnInstructionsDetail|null
     */
    public function getReturnInstructionsDetail()
    {
        return $this->ReturnInstructionsDetail;
    }
    /**
     * Set ReturnInstructionsDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ReturnInstructionsDetail $returnInstructionsDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
     */
    public function setReturnInstructionsDetail(\CommerceFedEx\FedExPHP\Structs\ReturnInstructionsDetail $returnInstructionsDetail = null)
    {
        $this->ReturnInstructionsDetail = $returnInstructionsDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentSpecification
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
