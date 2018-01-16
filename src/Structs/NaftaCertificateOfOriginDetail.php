<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NaftaCertificateOfOriginDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Data required to produce a Certificate of Origin document. Remaining content (business data) to be defined once requirements have been completed.
 * @subpackage Structs
 */
class NaftaCertificateOfOriginDetail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShippingDocumentFormat
     */
    public $Format;
    /**
     * The BlanketPeriod
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\DateRange
     */
    public $BlanketPeriod;
    /**
     * The ImporterSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which Party (if any) from the shipment is to be used as the source of importer data on the NAFTA COO form.
     * - minOccurs: 0
     * @var string
     */
    public $ImporterSpecification;
    /**
     * The SignatureContact
     * Meta informations extracted from the WSDL
     * - documentation: Contact information for "Authorized Signature" area of form.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Contact
     */
    public $SignatureContact;
    /**
     * The ProducerSpecification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProducerSpecification;
    /**
     * The Producers
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\NaftaProducer[]
     */
    public $Producers;
    /**
     * The CustomerImageUsages
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage[]
     */
    public $CustomerImageUsages;
    /**
     * Constructor method for NaftaCertificateOfOriginDetail
     * @uses NaftaCertificateOfOriginDetail::setFormat()
     * @uses NaftaCertificateOfOriginDetail::setBlanketPeriod()
     * @uses NaftaCertificateOfOriginDetail::setImporterSpecification()
     * @uses NaftaCertificateOfOriginDetail::setSignatureContact()
     * @uses NaftaCertificateOfOriginDetail::setProducerSpecification()
     * @uses NaftaCertificateOfOriginDetail::setProducers()
     * @uses NaftaCertificateOfOriginDetail::setCustomerImageUsages()
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocumentFormat $format
     * @param \CommerceFedEx\FedExPHP\Structs\DateRange $blanketPeriod
     * @param string $importerSpecification
     * @param \CommerceFedEx\FedExPHP\Structs\Contact $signatureContact
     * @param string $producerSpecification
     * @param \CommerceFedEx\FedExPHP\Structs\NaftaProducer[] $producers
     * @param \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage[] $customerImageUsages
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\ShippingDocumentFormat $format = null, \CommerceFedEx\FedExPHP\Structs\DateRange $blanketPeriod = null, $importerSpecification = null, \CommerceFedEx\FedExPHP\Structs\Contact $signatureContact = null, $producerSpecification = null, array $producers = array(), array $customerImageUsages = array())
    {
        $this
            ->setFormat($format)
            ->setBlanketPeriod($blanketPeriod)
            ->setImporterSpecification($importerSpecification)
            ->setSignatureContact($signatureContact)
            ->setProducerSpecification($producerSpecification)
            ->setProducers($producers)
            ->setCustomerImageUsages($customerImageUsages);
    }
    /**
     * Get Format value
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentFormat|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocumentFormat $format
     * @return \CommerceFedEx\FedExPHP\Structs\NaftaCertificateOfOriginDetail
     */
    public function setFormat(\CommerceFedEx\FedExPHP\Structs\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get BlanketPeriod value
     * @return \CommerceFedEx\FedExPHP\Structs\DateRange|null
     */
    public function getBlanketPeriod()
    {
        return $this->BlanketPeriod;
    }
    /**
     * Set BlanketPeriod value
     * @param \CommerceFedEx\FedExPHP\Structs\DateRange $blanketPeriod
     * @return \CommerceFedEx\FedExPHP\Structs\NaftaCertificateOfOriginDetail
     */
    public function setBlanketPeriod(\CommerceFedEx\FedExPHP\Structs\DateRange $blanketPeriod = null)
    {
        $this->BlanketPeriod = $blanketPeriod;
        return $this;
    }
    /**
     * Get ImporterSpecification value
     * @return string|null
     */
    public function getImporterSpecification()
    {
        return $this->ImporterSpecification;
    }
    /**
     * Set ImporterSpecification value
     * @uses \CommerceFedEx\FedExPHP\Enums\NaftaImporterSpecificationType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\NaftaImporterSpecificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $importerSpecification
     * @return \CommerceFedEx\FedExPHP\Structs\NaftaCertificateOfOriginDetail
     */
    public function setImporterSpecification($importerSpecification = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\NaftaImporterSpecificationType::valueIsValid($importerSpecification)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $importerSpecification, implode(', ', \CommerceFedEx\FedExPHP\Enums\NaftaImporterSpecificationType::getValidValues())), __LINE__);
        }
        $this->ImporterSpecification = $importerSpecification;
        return $this;
    }
    /**
     * Get SignatureContact value
     * @return \CommerceFedEx\FedExPHP\Structs\Contact|null
     */
    public function getSignatureContact()
    {
        return $this->SignatureContact;
    }
    /**
     * Set SignatureContact value
     * @param \CommerceFedEx\FedExPHP\Structs\Contact $signatureContact
     * @return \CommerceFedEx\FedExPHP\Structs\NaftaCertificateOfOriginDetail
     */
    public function setSignatureContact(\CommerceFedEx\FedExPHP\Structs\Contact $signatureContact = null)
    {
        $this->SignatureContact = $signatureContact;
        return $this;
    }
    /**
     * Get ProducerSpecification value
     * @return string|null
     */
    public function getProducerSpecification()
    {
        return $this->ProducerSpecification;
    }
    /**
     * Set ProducerSpecification value
     * @uses \CommerceFedEx\FedExPHP\Enums\NaftaProducerSpecificationType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\NaftaProducerSpecificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $producerSpecification
     * @return \CommerceFedEx\FedExPHP\Structs\NaftaCertificateOfOriginDetail
     */
    public function setProducerSpecification($producerSpecification = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\NaftaProducerSpecificationType::valueIsValid($producerSpecification)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $producerSpecification, implode(', ', \CommerceFedEx\FedExPHP\Enums\NaftaProducerSpecificationType::getValidValues())), __LINE__);
        }
        $this->ProducerSpecification = $producerSpecification;
        return $this;
    }
    /**
     * Get Producers value
     * @return \CommerceFedEx\FedExPHP\Structs\NaftaProducer[]|null
     */
    public function getProducers()
    {
        return $this->Producers;
    }
    /**
     * Set Producers value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\NaftaProducer[] $producers
     * @return \CommerceFedEx\FedExPHP\Structs\NaftaCertificateOfOriginDetail
     */
    public function setProducers(array $producers = array())
    {
        foreach ($producers as $naftaCertificateOfOriginDetailProducersItem) {
            // validation for constraint: itemType
            if (!$naftaCertificateOfOriginDetailProducersItem instanceof \CommerceFedEx\FedExPHP\Structs\NaftaProducer) {
                throw new \InvalidArgumentException(sprintf('The Producers property can only contain items of \CommerceFedEx\FedExPHP\Structs\NaftaProducer, "%s" given', is_object($naftaCertificateOfOriginDetailProducersItem) ? get_class($naftaCertificateOfOriginDetailProducersItem) : gettype($naftaCertificateOfOriginDetailProducersItem)), __LINE__);
            }
        }
        $this->Producers = $producers;
        return $this;
    }
    /**
     * Add item to Producers value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\NaftaProducer $item
     * @return \CommerceFedEx\FedExPHP\Structs\NaftaCertificateOfOriginDetail
     */
    public function addToProducers(\CommerceFedEx\FedExPHP\Structs\NaftaProducer $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\NaftaProducer) {
            throw new \InvalidArgumentException(sprintf('The Producers property can only contain items of \CommerceFedEx\FedExPHP\Structs\NaftaProducer, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Producers[] = $item;
        return $this;
    }
    /**
     * Get CustomerImageUsages value
     * @return \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage[]|null
     */
    public function getCustomerImageUsages()
    {
        return $this->CustomerImageUsages;
    }
    /**
     * Set CustomerImageUsages value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage[] $customerImageUsages
     * @return \CommerceFedEx\FedExPHP\Structs\NaftaCertificateOfOriginDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages = array())
    {
        foreach ($customerImageUsages as $naftaCertificateOfOriginDetailCustomerImageUsagesItem) {
            // validation for constraint: itemType
            if (!$naftaCertificateOfOriginDetailCustomerImageUsagesItem instanceof \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage) {
                throw new \InvalidArgumentException(sprintf('The CustomerImageUsages property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage, "%s" given', is_object($naftaCertificateOfOriginDetailCustomerImageUsagesItem) ? get_class($naftaCertificateOfOriginDetailCustomerImageUsagesItem) : gettype($naftaCertificateOfOriginDetailCustomerImageUsagesItem)), __LINE__);
            }
        }
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    /**
     * Add item to CustomerImageUsages value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage $item
     * @return \CommerceFedEx\FedExPHP\Structs\NaftaCertificateOfOriginDetail
     */
    public function addToCustomerImageUsages(\CommerceFedEx\FedExPHP\Structs\CustomerImageUsage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage) {
            throw new \InvalidArgumentException(sprintf('The CustomerImageUsages property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomerImageUsage, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomerImageUsages[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\NaftaCertificateOfOriginDetail
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
