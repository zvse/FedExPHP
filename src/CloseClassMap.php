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
            'ClientDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ClientDetail',
            'CloseDocument' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CloseDocument',
            'CloseDocumentFormat' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CloseDocumentFormat',
            'CloseDocumentSpecification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CloseDocumentSpecification',
            'CloseManifestReferenceDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CloseManifestReferenceDetail',
            'CloseSmartPostDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CloseSmartPostDetail',
            'CloseWithDocumentsProcessingOptionsRequested' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CloseWithDocumentsProcessingOptionsRequested',
            'CloseWithDocumentsReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CloseWithDocumentsReply',
            'CloseWithDocumentsRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CloseWithDocumentsRequest',
            'CustomerImageUsage' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomerImageUsage',
            'DetailedDeliveryManifestDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DetailedDeliveryManifestDetail',
            'GroundCloseDocumentsReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\GroundCloseDocumentsReply',
            'GroundCloseReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\GroundCloseReply',
            'GroundCloseReportsReprintReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\GroundCloseReportsReprintReply',
            'GroundCloseReportsReprintRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\GroundCloseReportsReprintRequest',
            'GroundCloseRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\GroundCloseRequest',
            'GroundCloseWithDocumentsRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\GroundCloseWithDocumentsRequest',
            'HazardousMaterialsCertificationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\HazardousMaterialsCertificationDetail',
            'LinearMeasure' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LinearMeasure',
            'Localization' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Localization',
            'ManifestDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ManifestDetail',
            'ManifestFile' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ManifestFile',
            'Notification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Notification',
            'NotificationParameter' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NotificationParameter',
            'Op950Detail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Op950Detail',
            'ReprintGroundCloseDocumentsRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ReprintGroundCloseDocumentsRequest',
            'ShippingDocumentDispositionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentDispositionDetail',
            'ShippingDocumentEMailDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentEMailDetail',
            'ShippingDocumentEMailRecipient' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentEMailRecipient',
            'ShippingDocumentPart' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentPart',
            'ShippingDocumentPrintDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentPrintDetail',
            'ShippingDocumentStorageDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentStorageDetail',
            'SmartPostCloseReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SmartPostCloseReply',
            'SmartPostCloseRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SmartPostCloseRequest',
            'TransactionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TransactionDetail',
            'WebAuthenticationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\VersionId',
        );
    }
}
