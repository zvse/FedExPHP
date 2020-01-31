<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedConsolidationDetail Structs
 * @subpackage Structs
 */
class CompletedConsolidationDetail extends AbstractStructBase
{
    /**
     * The ConsolidationShipments
     * Meta informations extracted from the WSDL
     * - documentation: The shipment-level artifacts constructed when confirming this consolidation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ConsolidationShipment[]
     */
    public $ConsolidationShipments;
    /**
     * The Documents
     * Meta informations extracted from the WSDL
     * - documentation: Contains all documents produced for this distribution consolidation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ConsolidationDocument[]
     */
    public $Documents;
    /**
     * Constructor method for CompletedConsolidationDetail
     * @uses CompletedConsolidationDetail::setConsolidationShipments()
     * @uses CompletedConsolidationDetail::setDocuments()
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidationShipment[] $consolidationShipments
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidationDocument[] $documents
     */
    public function __construct(array $consolidationShipments = array(), array $documents = array())
    {
        $this
            ->setConsolidationShipments($consolidationShipments)
            ->setDocuments($documents);
    }
    /**
     * Get ConsolidationShipments value
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationShipment[]|null
     */
    public function getConsolidationShipments()
    {
        return $this->ConsolidationShipments;
    }
    /**
     * Set ConsolidationShipments value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidationShipment[] $consolidationShipments
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedConsolidationDetail
     */
    public function setConsolidationShipments(array $consolidationShipments = array())
    {
        foreach ($consolidationShipments as $completedConsolidationDetailConsolidationShipmentsItem) {
            // validation for constraint: itemType
            if (!$completedConsolidationDetailConsolidationShipmentsItem instanceof \CommerceFedEx\FedExPHP\Structs\ConsolidationShipment) {
                throw new \InvalidArgumentException(sprintf('The ConsolidationShipments property can only contain items of \CommerceFedEx\FedExPHP\Structs\ConsolidationShipment, "%s" given', is_object($completedConsolidationDetailConsolidationShipmentsItem) ? get_class($completedConsolidationDetailConsolidationShipmentsItem) : gettype($completedConsolidationDetailConsolidationShipmentsItem)), __LINE__);
            }
        }
        $this->ConsolidationShipments = $consolidationShipments;
        return $this;
    }
    /**
     * Add item to ConsolidationShipments value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidationShipment $item
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedConsolidationDetail
     */
    public function addToConsolidationShipments(\CommerceFedEx\FedExPHP\Structs\ConsolidationShipment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\ConsolidationShipment) {
            throw new \InvalidArgumentException(sprintf('The ConsolidationShipments property can only contain items of \CommerceFedEx\FedExPHP\Structs\ConsolidationShipment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConsolidationShipments[] = $item;
        return $this;
    }
    /**
     * Get Documents value
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationDocument[]|null
     */
    public function getDocuments()
    {
        return $this->Documents;
    }
    /**
     * Set Documents value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidationDocument[] $documents
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedConsolidationDetail
     */
    public function setDocuments(array $documents = array())
    {
        foreach ($documents as $completedConsolidationDetailDocumentsItem) {
            // validation for constraint: itemType
            if (!$completedConsolidationDetailDocumentsItem instanceof \CommerceFedEx\FedExPHP\Structs\ConsolidationDocument) {
                throw new \InvalidArgumentException(sprintf('The Documents property can only contain items of \CommerceFedEx\FedExPHP\Structs\ConsolidationDocument, "%s" given', is_object($completedConsolidationDetailDocumentsItem) ? get_class($completedConsolidationDetailDocumentsItem) : gettype($completedConsolidationDetailDocumentsItem)), __LINE__);
            }
        }
        $this->Documents = $documents;
        return $this;
    }
    /**
     * Add item to Documents value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ConsolidationDocument $item
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedConsolidationDetail
     */
    public function addToDocuments(\CommerceFedEx\FedExPHP\Structs\ConsolidationDocument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\ConsolidationDocument) {
            throw new \InvalidArgumentException(sprintf('The Documents property can only contain items of \CommerceFedEx\FedExPHP\Structs\ConsolidationDocument, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Documents[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedConsolidationDetail
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
