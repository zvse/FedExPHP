<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackingDocumentSpecification Structs
 * @subpackage Structs
 */
class TrackingDocumentSpecification extends AbstractStructBase
{
    /**
     * The DocumentTypes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DocumentTypes;
    /**
     * The BillOfLadingDocumentDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingBillOfLadingDocumentDetail
     */
    public $BillOfLadingDocumentDetail;
    /**
     * The FreightBillingDocumentDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingFreightBillingDocumentDetail
     */
    public $FreightBillingDocumentDetail;
    /**
     * The SignatureProofOfDeliveryDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingSignatureProofOfDeliveryDetail
     */
    public $SignatureProofOfDeliveryDetail;
    /**
     * Constructor method for TrackingDocumentSpecification
     * @uses TrackingDocumentSpecification::setDocumentTypes()
     * @uses TrackingDocumentSpecification::setBillOfLadingDocumentDetail()
     * @uses TrackingDocumentSpecification::setFreightBillingDocumentDetail()
     * @uses TrackingDocumentSpecification::setSignatureProofOfDeliveryDetail()
     * @param string[] $documentTypes
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingBillOfLadingDocumentDetail $billOfLadingDocumentDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingFreightBillingDocumentDetail $freightBillingDocumentDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingSignatureProofOfDeliveryDetail $signatureProofOfDeliveryDetail
     */
    public function __construct(array $documentTypes = array(), \NicholasCreativeMedia\FedExPHP\Structs\TrackingBillOfLadingDocumentDetail $billOfLadingDocumentDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\TrackingFreightBillingDocumentDetail $freightBillingDocumentDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\TrackingSignatureProofOfDeliveryDetail $signatureProofOfDeliveryDetail = null)
    {
        $this
            ->setDocumentTypes($documentTypes)
            ->setBillOfLadingDocumentDetail($billOfLadingDocumentDetail)
            ->setFreightBillingDocumentDetail($freightBillingDocumentDetail)
            ->setSignatureProofOfDeliveryDetail($signatureProofOfDeliveryDetail);
    }
    /**
     * Get DocumentTypes value
     * @return string[]|null
     */
    public function getDocumentTypes()
    {
        return $this->DocumentTypes;
    }
    /**
     * Set DocumentTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $documentTypes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentSpecification
     */
    public function setDocumentTypes(array $documentTypes = array())
    {
        $invalidValues = array();
        foreach ($documentTypes as $trackingDocumentSpecificationDocumentTypesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentType::valueIsValid($trackingDocumentSpecificationDocumentTypesItem)) {
                $invalidValues[] = var_export($trackingDocumentSpecificationDocumentTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentType::getValidValues())), __LINE__);
        }
        $this->DocumentTypes = $documentTypes;
        return $this;
    }
    /**
     * Add item to DocumentTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentSpecification
     */
    public function addToDocumentTypes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentType::getValidValues())), __LINE__);
        }
        $this->DocumentTypes[] = $item;
        return $this;
    }
    /**
     * Get BillOfLadingDocumentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingBillOfLadingDocumentDetail|null
     */
    public function getBillOfLadingDocumentDetail()
    {
        return $this->BillOfLadingDocumentDetail;
    }
    /**
     * Set BillOfLadingDocumentDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingBillOfLadingDocumentDetail $billOfLadingDocumentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentSpecification
     */
    public function setBillOfLadingDocumentDetail(\NicholasCreativeMedia\FedExPHP\Structs\TrackingBillOfLadingDocumentDetail $billOfLadingDocumentDetail = null)
    {
        $this->BillOfLadingDocumentDetail = $billOfLadingDocumentDetail;
        return $this;
    }
    /**
     * Get FreightBillingDocumentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingFreightBillingDocumentDetail|null
     */
    public function getFreightBillingDocumentDetail()
    {
        return $this->FreightBillingDocumentDetail;
    }
    /**
     * Set FreightBillingDocumentDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingFreightBillingDocumentDetail $freightBillingDocumentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentSpecification
     */
    public function setFreightBillingDocumentDetail(\NicholasCreativeMedia\FedExPHP\Structs\TrackingFreightBillingDocumentDetail $freightBillingDocumentDetail = null)
    {
        $this->FreightBillingDocumentDetail = $freightBillingDocumentDetail;
        return $this;
    }
    /**
     * Get SignatureProofOfDeliveryDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingSignatureProofOfDeliveryDetail|null
     */
    public function getSignatureProofOfDeliveryDetail()
    {
        return $this->SignatureProofOfDeliveryDetail;
    }
    /**
     * Set SignatureProofOfDeliveryDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingSignatureProofOfDeliveryDetail $signatureProofOfDeliveryDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentSpecification
     */
    public function setSignatureProofOfDeliveryDetail(\NicholasCreativeMedia\FedExPHP\Structs\TrackingSignatureProofOfDeliveryDetail $signatureProofOfDeliveryDetail = null)
    {
        $this->SignatureProofOfDeliveryDetail = $signatureProofOfDeliveryDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentSpecification
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
