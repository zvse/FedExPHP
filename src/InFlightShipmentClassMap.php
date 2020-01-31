<?php

namespace NicholasCreativeMedia\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class InFlightShipmentClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'Address' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Address',
            'AppointmentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AppointmentDetail',
            'AppointmentTimeDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AppointmentTimeDetail',
            'AssociatedAccount' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AssociatedAccount',
            'ClientDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ClientDetail',
            'Contact' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Contact',
            'ContactAndAddress' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ContactAndAddress',
            'CreditCard' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CreditCard',
            'CreditCardTransactionAttributesDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CreditCardTransactionAttributesDetail',
            'CreditCardTransactionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CreditCardTransactionDetail',
            'CreditFraudDetectionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CreditFraudDetectionDetail',
            'DeliveryRequestDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DeliveryRequestDetail',
            'DocumentFormatOptionsRequested' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DocumentFormatOptionsRequested',
            'InitiativeManifest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\InitiativeManifest',
            'LinearMeasure' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LinearMeasure',
            'LocalTimeRange' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LocalTimeRange',
            'Localization' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Localization',
            'Money' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Money',
            'Notification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Notification',
            'NotificationParameter' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NotificationParameter',
            'OperationalDocumentPart' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\OperationalDocumentPart',
            'OperationalDocumentSpecification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\OperationalDocumentSpecification',
            'ParsedContact' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ParsedContact',
            'ParsedContactAndAddress' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ParsedContactAndAddress',
            'ParsedPersonName' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ParsedPersonName',
            'Party' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Party',
            'Payor' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Payor',
            'ProcessDeliveryReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ProcessDeliveryReply',
            'ProcessDeliveryRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ProcessDeliveryRequest',
            'RatedDeliveryDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RatedDeliveryDetail',
            'RedirectToHoldAtLocationRequestDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RedirectToHoldAtLocationRequestDetail',
            'RerouteDeliveryDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RerouteDeliveryDetail',
            'ShippingDocumentDispositionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentDispositionDetail',
            'ShippingDocumentEMailDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentEMailDetail',
            'ShippingDocumentEMailRecipient' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentEMailRecipient',
            'ShippingDocumentFormat' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentFormat',
            'ShippingDocumentPrintDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentPrintDetail',
            'ShippingDocumentStorageDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentStorageDetail',
            'SignatureReleaseDocumentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SignatureReleaseDocumentDetail',
            'Surcharge' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Surcharge',
            'TaxpayerIdentification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TaxpayerIdentification',
            'TrackingId' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackingId',
            'TransactionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TransactionDetail',
            'UniqueTrackingNumber' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UniqueTrackingNumber',
            'UserDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UserDetail',
            'ValidateDeliveryReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ValidateDeliveryReply',
            'ValidateDeliveryRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ValidateDeliveryRequest',
            'WebAuthenticationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\VersionId',
        );
    }
}
