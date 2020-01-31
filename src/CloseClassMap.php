<?php

namespace NicholasCreativeMedia\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class CloseClassMap
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
            'CloseDocument' => '\\CommerceFedEx\\FedExPHP\\Structs\\CloseDocument',
            'CloseDocumentFormat' => '\\CommerceFedEx\\FedExPHP\\Structs\\CloseDocumentFormat',
            'CloseDocumentSpecification' => '\\CommerceFedEx\\FedExPHP\\Structs\\CloseDocumentSpecification',
            'CloseManifestReferenceDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CloseManifestReferenceDetail',
            'CloseSmartPostDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CloseSmartPostDetail',
            'CloseWithDocumentsProcessingOptionsRequested' => '\\CommerceFedEx\\FedExPHP\\Structs\\CloseWithDocumentsProcessingOptionsRequested',
            'CloseWithDocumentsReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\CloseWithDocumentsReply',
            'CloseWithDocumentsRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\CloseWithDocumentsRequest',
            'CustomerImageUsage' => '\\CommerceFedEx\\FedExPHP\\Structs\\CustomerImageUsage',
            'DetailedDeliveryManifestDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\DetailedDeliveryManifestDetail',
            'GroundCloseDocumentsReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\GroundCloseDocumentsReply',
            'GroundCloseReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\GroundCloseReply',
            'GroundCloseReportsReprintReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\GroundCloseReportsReprintReply',
            'GroundCloseReportsReprintRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\GroundCloseReportsReprintRequest',
            'GroundCloseRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\GroundCloseRequest',
            'GroundCloseWithDocumentsRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\GroundCloseWithDocumentsRequest',
            'HazardousMaterialsCertificationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\HazardousMaterialsCertificationDetail',
            'LinearMeasure' => '\\CommerceFedEx\\FedExPHP\\Structs\\LinearMeasure',
            'Localization' => '\\CommerceFedEx\\FedExPHP\\Structs\\Localization',
            'ManifestDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ManifestDetail',
            'ManifestFile' => '\\CommerceFedEx\\FedExPHP\\Structs\\ManifestFile',
            'Notification' => '\\CommerceFedEx\\FedExPHP\\Structs\\Notification',
            'NotificationParameter' => '\\CommerceFedEx\\FedExPHP\\Structs\\NotificationParameter',
            'Op950Detail' => '\\CommerceFedEx\\FedExPHP\\Structs\\Op950Detail',
            'ReprintGroundCloseDocumentsRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\ReprintGroundCloseDocumentsRequest',
            'ShippingDocumentDispositionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingDocumentDispositionDetail',
            'ShippingDocumentEMailDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingDocumentEMailDetail',
            'ShippingDocumentEMailRecipient' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingDocumentEMailRecipient',
            'ShippingDocumentPart' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingDocumentPart',
            'ShippingDocumentPrintDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingDocumentPrintDetail',
            'ShippingDocumentStorageDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingDocumentStorageDetail',
            'SmartPostCloseReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\SmartPostCloseReply',
            'SmartPostCloseRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\SmartPostCloseRequest',
            'TransactionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TransactionDetail',
            'WebAuthenticationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\CommerceFedEx\\FedExPHP\\Structs\\VersionId',
        );
    }
}
