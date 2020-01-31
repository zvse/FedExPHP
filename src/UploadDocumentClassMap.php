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
            'ClientDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ClientDetail',
            'DocumentGenerationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\DocumentGenerationDetail',
            'DocumentRequirementsDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\DocumentRequirementsDetail',
            'ImageUploadStatusDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ImageUploadStatusDetail',
            'Localization' => '\\CommerceFedEx\\FedExPHP\\Structs\\Localization',
            'Notification' => '\\CommerceFedEx\\FedExPHP\\Structs\\Notification',
            'NotificationParameter' => '\\CommerceFedEx\\FedExPHP\\Structs\\NotificationParameter',
            'PostShipmentUploadDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\PostShipmentUploadDetail',
            'TransactionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TransactionDetail',
            'UploadDocumentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadDocumentDetail',
            'UploadDocumentStatusDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadDocumentStatusDetail',
            'UploadDocumentsProcessingOptionsRequested' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadDocumentsProcessingOptionsRequested',
            'UploadDocumentsReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadDocumentsReply',
            'UploadDocumentsRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadDocumentsRequest',
            'UploadImageDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadImageDetail',
            'UploadImagesReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadImagesReply',
            'UploadImagesRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadImagesRequest',
            'WebAuthenticationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\CommerceFedEx\\FedExPHP\\Structs\\VersionId',
        );
    }
}
