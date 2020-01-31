<?php

namespace NicholasCreativeMedia\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class UploadDocumentClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'ClientDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ClientDetail',
            'DocumentGenerationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DocumentGenerationDetail',
            'DocumentRequirementsDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DocumentRequirementsDetail',
            'ImageUploadStatusDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ImageUploadStatusDetail',
            'Localization' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Localization',
            'Notification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Notification',
            'NotificationParameter' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NotificationParameter',
            'PostShipmentUploadDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PostShipmentUploadDetail',
            'TransactionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TransactionDetail',
            'UploadDocumentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadDocumentDetail',
            'UploadDocumentStatusDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadDocumentStatusDetail',
            'UploadDocumentsProcessingOptionsRequested' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadDocumentsProcessingOptionsRequested',
            'UploadDocumentsReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadDocumentsReply',
            'UploadDocumentsRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadDocumentsRequest',
            'UploadImageDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadImageDetail',
            'UploadImagesReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadImagesReply',
            'UploadImagesRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadImagesRequest',
            'WebAuthenticationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\VersionId',
        );
    }
}
