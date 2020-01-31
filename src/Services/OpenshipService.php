<?php

namespace NicholasCreativeMedia\FedExPHP\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{

    /**
     * RateService constructor.
     * @param array $wsdlOptions
     * @param bool $resetSoapClient
     * @param bool $beta
     */
    public function __construct(array $wsdlOptions = array(), $resetSoapClient = true, $mode = 'test')
    {
        if ($mode === false) $mode = 'test';
        if ($mode === true) $mode = 'live';
        $default_options = [
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl-'.$mode.DIRECTORY_SEPARATOR.'OpenshipService_v17.wsdl',
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \CommerceFedEx\FedExPHP\OpenshipClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions);
        parent::__construct($options,$resetSoapClient,$mode);

        $this->version = new \CommerceFedEx\FedExPHP\Structs\VersionId('ship',17,0,0);
    }
    /**
     * Method to call the operation originally named modifyConsolidation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\ModifyConsolidationRequest $modifyConsolidationRequest
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyConsolidationReply|bool
     */
    public function modifyConsolidation(\CommerceFedEx\FedExPHP\Structs\ModifyConsolidationRequest $modifyConsolidationRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->modifyConsolidation($modifyConsolidationRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\ValidateOpenShipmentRequest $validateOpenShipmentRequest
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateOpenShipmentReply|bool
     */
    public function validateOpenShipment(\CommerceFedEx\FedExPHP\Structs\ValidateOpenShipmentRequest $validateOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->validateOpenShipment($validateOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retrieveOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\RetrieveOpenShipmentRequest $retrieveOpenShipmentRequest
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveOpenShipmentReply|bool
     */
    public function retrieveOpenShipment(\CommerceFedEx\FedExPHP\Structs\RetrieveOpenShipmentRequest $retrieveOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->retrieveOpenShipment($retrieveOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteOpenConsolidation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\DeleteOpenConsolidationRequest $deleteOpenConsolidationRequest
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteOpenConsolidationReply|bool
     */
    public function deleteOpenConsolidation(\CommerceFedEx\FedExPHP\Structs\DeleteOpenConsolidationRequest $deleteOpenConsolidationRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteOpenConsolidation($deleteOpenConsolidationRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createConsolidation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\CreateConsolidationRequest $createConsolidationRequest
     * @return \CommerceFedEx\FedExPHP\Structs\CreateConsolidationReply|bool
     */
    public function createConsolidation(\CommerceFedEx\FedExPHP\Structs\CreateConsolidationRequest $createConsolidationRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->createConsolidation($createConsolidationRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retrievePackageInOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\RetrievePackageInOpenShipmentRequest $retrievePackageInOpenShipmentRequest
     * @return \CommerceFedEx\FedExPHP\Structs\RetrievePackageInOpenShipmentReply|bool
     */
    public function retrievePackageInOpenShipment(\CommerceFedEx\FedExPHP\Structs\RetrievePackageInOpenShipmentRequest $retrievePackageInOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->retrievePackageInOpenShipment($retrievePackageInOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retrieveConsolidatedCommodities
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\RetrieveConsolidatedCommoditiesRequest $retrieveConsolidatedCommoditiesRequest
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveConsolidatedCommoditiesReply|bool
     */
    public function retrieveConsolidatedCommodities(\CommerceFedEx\FedExPHP\Structs\RetrieveConsolidatedCommoditiesRequest $retrieveConsolidatedCommoditiesRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->retrieveConsolidatedCommodities($retrieveConsolidatedCommoditiesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named modifyPackageInOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\ModifyPackageInOpenShipmentRequest $modifyPackageInOpenShipmentRequest
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyPackageInOpenShipmentReply|bool
     */
    public function modifyPackageInOpenShipment(\CommerceFedEx\FedExPHP\Structs\ModifyPackageInOpenShipmentRequest $modifyPackageInOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->modifyPackageInOpenShipment($modifyPackageInOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\DeleteShipmentRequest $deleteShipmentRequest
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentReply|bool
     */
    public function deleteShipment(\CommerceFedEx\FedExPHP\Structs\DeleteShipmentRequest $deleteShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteShipment($deleteShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\CreateOpenShipmentRequest $createOpenShipmentRequest
     * @return \CommerceFedEx\FedExPHP\Structs\CreateOpenShipmentReply|bool
     */
    public function createOpenShipment(\CommerceFedEx\FedExPHP\Structs\CreateOpenShipmentRequest $createOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->createOpenShipment($createOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePendingShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\DeletePendingShipmentRequest $deletePendingShipmentRequest
     * @return \CommerceFedEx\FedExPHP\Structs\DeletePendingShipmentReply|bool
     */
    public function deletePendingShipment(\CommerceFedEx\FedExPHP\Structs\DeletePendingShipmentRequest $deletePendingShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deletePendingShipment($deletePendingShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named confirmOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\ConfirmOpenShipmentRequest $confirmOpenShipmentRequest
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmOpenShipmentReply|bool
     */
    public function confirmOpenShipment(\CommerceFedEx\FedExPHP\Structs\ConfirmOpenShipmentRequest $confirmOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->confirmOpenShipment($confirmOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getConfirmOpenShipmentResults
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\GetConfirmOpenShipmentResultsRequest $getConfirmOpenShipmentResultsRequest
     * @return \CommerceFedEx\FedExPHP\Structs\GetConfirmOpenShipmentResultsReply|bool
     */
    public function getConfirmOpenShipmentResults(\CommerceFedEx\FedExPHP\Structs\GetConfirmOpenShipmentResultsRequest $getConfirmOpenShipmentResultsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getConfirmOpenShipmentResults($getConfirmOpenShipmentResultsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getConfirmConsolidationResults
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\GetConfirmConsolidationResultsRequest $getConfirmConsolidationResultsRequest
     * @return \CommerceFedEx\FedExPHP\Structs\GetConfirmConsolidationResultsReply|bool
     */
    public function getConfirmConsolidationResults(\CommerceFedEx\FedExPHP\Structs\GetConfirmConsolidationResultsRequest $getConfirmConsolidationResultsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getConfirmConsolidationResults($getConfirmConsolidationResultsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named modifyOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\ModifyOpenShipmentRequest $modifyOpenShipmentRequest
     * @return \CommerceFedEx\FedExPHP\Structs\ModifyOpenShipmentReply|bool
     */
    public function modifyOpenShipment(\CommerceFedEx\FedExPHP\Structs\ModifyOpenShipmentRequest $modifyOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->modifyOpenShipment($modifyOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named confirmConsolidation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationRequest $confirmConsolidationRequest
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationReply|bool
     */
    public function confirmConsolidation(\CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationRequest $confirmConsolidationRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->confirmConsolidation($confirmConsolidationRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createPendingShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\CreateOpenShipmentRequest $createPendingShipmentRequest
     * @return \CommerceFedEx\FedExPHP\Structs\CreateOpenShipmentReply|bool
     */
    public function createPendingShipment(\CommerceFedEx\FedExPHP\Structs\CreateOpenShipmentRequest $createPendingShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->createPendingShipment($createPendingShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getModifyOpenShipmentResults
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\GetModifyOpenShipmentResultsRequest $getModifyOpenShipmentResultsRequest
     * @return \CommerceFedEx\FedExPHP\Structs\GetModifyOpenShipmentResultsReply|bool
     */
    public function getModifyOpenShipmentResults(\CommerceFedEx\FedExPHP\Structs\GetModifyOpenShipmentResultsRequest $getModifyOpenShipmentResultsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getModifyOpenShipmentResults($getModifyOpenShipmentResultsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePackagesFromOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\DeletePackagesFromOpenShipmentRequest $deletePackagesFromOpenShipmentRequest
     * @return \CommerceFedEx\FedExPHP\Structs\DeletePackagesFromOpenShipmentReply|bool
     */
    public function deletePackagesFromOpenShipment(\CommerceFedEx\FedExPHP\Structs\DeletePackagesFromOpenShipmentRequest $deletePackagesFromOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deletePackagesFromOpenShipment($deletePackagesFromOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named reprintShippingDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\ReprintShippingDocumentsRequest $reprintShippingDocumentsRequest
     * @return \CommerceFedEx\FedExPHP\Structs\ReprintShippingDocumentsReply|bool
     */
    public function reprintShippingDocuments(\CommerceFedEx\FedExPHP\Structs\ReprintShippingDocumentsRequest $reprintShippingDocumentsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->reprintShippingDocuments($reprintShippingDocumentsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addPackagesToOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentRequest $addPackagesToOpenShipmentRequest
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentReply|bool
     */
    public function addPackagesToOpenShipment(\CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentRequest $addPackagesToOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->addPackagesToOpenShipment($addPackagesToOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCreateOpenShipmentResults
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\GetCreateOpenShipmentResultsRequest $getCreateOpenShipmentResultsRequest
     * @return \CommerceFedEx\FedExPHP\Structs\GetCreateOpenShipmentResultsReply|bool
     */
    public function getCreateOpenShipmentResults(\CommerceFedEx\FedExPHP\Structs\GetCreateOpenShipmentResultsRequest $getCreateOpenShipmentResultsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getCreateOpenShipmentResults($getCreateOpenShipmentResultsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retrieveConsolidation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\RetrieveConsolidationRequest $retrieveConsolidationRequest
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveConsolidationReply|bool
     */
    public function retrieveConsolidation(\CommerceFedEx\FedExPHP\Structs\RetrieveConsolidationRequest $retrieveConsolidationRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->retrieveConsolidation($retrieveConsolidationRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\DeleteOpenShipmentRequest $deleteOpenShipmentRequest
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteOpenShipmentReply|bool
     */
    public function deleteOpenShipment(\CommerceFedEx\FedExPHP\Structs\DeleteOpenShipmentRequest $deleteOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteOpenShipment($deleteOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentReply|\CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationReply|\CommerceFedEx\FedExPHP\Structs\ConfirmOpenShipmentReply|\CommerceFedEx\FedExPHP\Structs\CreateConsolidationReply|\CommerceFedEx\FedExPHP\Structs\CreateOpenShipmentReply|\CommerceFedEx\FedExPHP\Structs\DeleteOpenConsolidationReply|\CommerceFedEx\FedExPHP\Structs\DeleteOpenShipmentReply|\CommerceFedEx\FedExPHP\Structs\DeletePackagesFromOpenShipmentReply|\CommerceFedEx\FedExPHP\Structs\DeletePendingShipmentReply|\CommerceFedEx\FedExPHP\Structs\GetConfirmConsolidationResultsReply|\CommerceFedEx\FedExPHP\Structs\GetConfirmOpenShipmentResultsReply|\CommerceFedEx\FedExPHP\Structs\GetCreateOpenShipmentResultsReply|\CommerceFedEx\FedExPHP\Structs\GetModifyOpenShipmentResultsReply|\CommerceFedEx\FedExPHP\Structs\ModifyConsolidationReply|\CommerceFedEx\FedExPHP\Structs\ModifyOpenShipmentReply|\CommerceFedEx\FedExPHP\Structs\ModifyPackageInOpenShipmentReply|\CommerceFedEx\FedExPHP\Structs\ReprintShippingDocumentsReply|\CommerceFedEx\FedExPHP\Structs\RetrieveConsolidatedCommoditiesReply|\CommerceFedEx\FedExPHP\Structs\RetrieveConsolidationReply|\CommerceFedEx\FedExPHP\Structs\RetrieveOpenShipmentReply|\CommerceFedEx\FedExPHP\Structs\RetrievePackageInOpenShipmentReply|\CommerceFedEx\FedExPHP\Structs\ShipmentReply|\CommerceFedEx\FedExPHP\Structs\ValidateOpenShipmentReply
     */
    public function getResult()
    {
        return parent::getResult();
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
