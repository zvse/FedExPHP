<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTrackingDocumentsRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:GetTrackingDocumentsRequest
 * @subpackage Structs
 */
class GetTrackingDocumentsRequest extends AbstractStructBase
{
    /**
     * The WebAuthenticationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail
     */
    public $WebAuthenticationDetail;
    /**
     * The ClientDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
     */
    public $ClientDetail;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The SelectionDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail[]
     */
    public $SelectionDetails;
    /**
     * The TrackingDocumentSpecification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentSpecification
     */
    public $TrackingDocumentSpecification;
    /**
     * Constructor method for GetTrackingDocumentsRequest
     * @uses GetTrackingDocumentsRequest::setWebAuthenticationDetail()
     * @uses GetTrackingDocumentsRequest::setClientDetail()
     * @uses GetTrackingDocumentsRequest::setVersion()
     * @uses GetTrackingDocumentsRequest::setTransactionDetail()
     * @uses GetTrackingDocumentsRequest::setSelectionDetails()
     * @uses GetTrackingDocumentsRequest::setTrackingDocumentSpecification()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail[] $selectionDetails
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentSpecification $trackingDocumentSpecification
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, array $selectionDetails = array(), \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentSpecification $trackingDocumentSpecification = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setSelectionDetails($selectionDetails)
            ->setTrackingDocumentSpecification($trackingDocumentSpecification);
    }
    /**
     * Get WebAuthenticationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetTrackingDocumentsRequest
     */
    public function setWebAuthenticationDetail(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    /**
     * Get ClientDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetTrackingDocumentsRequest
     */
    public function setClientDetail(\NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    /**
     * Get Version value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetTrackingDocumentsRequest
     */
    public function setVersion(\NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetTrackingDocumentsRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get SelectionDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail[]|null
     */
    public function getSelectionDetails()
    {
        return $this->SelectionDetails;
    }
    /**
     * Set SelectionDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail[] $selectionDetails
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetTrackingDocumentsRequest
     */
    public function setSelectionDetails(array $selectionDetails = array())
    {
        foreach ($selectionDetails as $getTrackingDocumentsRequestSelectionDetailsItem) {
            // validation for constraint: itemType
            if (!$getTrackingDocumentsRequestSelectionDetailsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail) {
                throw new \InvalidArgumentException(sprintf('The SelectionDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail, "%s" given', is_object($getTrackingDocumentsRequestSelectionDetailsItem) ? get_class($getTrackingDocumentsRequestSelectionDetailsItem) : gettype($getTrackingDocumentsRequestSelectionDetailsItem)), __LINE__);
            }
        }
        $this->SelectionDetails = $selectionDetails;
        return $this;
    }
    /**
     * Add item to SelectionDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetTrackingDocumentsRequest
     */
    public function addToSelectionDetails(\NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail) {
            throw new \InvalidArgumentException(sprintf('The SelectionDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SelectionDetails[] = $item;
        return $this;
    }
    /**
     * Get TrackingDocumentSpecification value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentSpecification|null
     */
    public function getTrackingDocumentSpecification()
    {
        return $this->TrackingDocumentSpecification;
    }
    /**
     * Set TrackingDocumentSpecification value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentSpecification $trackingDocumentSpecification
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetTrackingDocumentsRequest
     */
    public function setTrackingDocumentSpecification(\NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentSpecification $trackingDocumentSpecification = null)
    {
        $this->TrackingDocumentSpecification = $trackingDocumentSpecification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetTrackingDocumentsRequest
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
