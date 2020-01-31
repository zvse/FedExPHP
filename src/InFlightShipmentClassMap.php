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
            'Address' => '\\CommerceFedEx\\FedExPHP\\Structs\\Address',
            'AppointmentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\AppointmentDetail',
            'AppointmentTimeDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\AppointmentTimeDetail',
            'AssociatedAccount' => '\\CommerceFedEx\\FedExPHP\\Structs\\AssociatedAccount',
            'ClientDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ClientDetail',
            'Contact' => '\\CommerceFedEx\\FedExPHP\\Structs\\Contact',
            'ContactAndAddress' => '\\CommerceFedEx\\FedExPHP\\Structs\\ContactAndAddress',
            'CreditCard' => '\\CommerceFedEx\\FedExPHP\\Structs\\CreditCard',
            'CreditCardTransactionAttributesDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CreditCardTransactionAttributesDetail',
            'CreditCardTransactionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CreditCardTransactionDetail',
            'CreditFraudDetectionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CreditFraudDetectionDetail',
            'DeliveryRequestDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\DeliveryRequestDetail',
            'DocumentFormatOptionsRequested' => '\\CommerceFedEx\\FedExPHP\\Structs\\DocumentFormatOptionsRequested',
            'InitiativeManifest' => '\\CommerceFedEx\\FedExPHP\\Structs\\InitiativeManifest',
            'LinearMeasure' => '\\CommerceFedEx\\FedExPHP\\Structs\\LinearMeasure',
            'LocalTimeRange' => '\\CommerceFedEx\\FedExPHP\\Structs\\LocalTimeRange',
            'Localization' => '\\CommerceFedEx\\FedExPHP\\Structs\\Localization',
            'Money' => '\\CommerceFedEx\\FedExPHP\\Structs\\Money',
            'Notification' => '\\CommerceFedEx\\FedExPHP\\Structs\\Notification',
            'NotificationParameter' => '\\CommerceFedEx\\FedExPHP\\Structs\\NotificationParameter',
            'OperationalDocumentPart' => '\\CommerceFedEx\\FedExPHP\\Structs\\OperationalDocumentPart',
            'OperationalDocumentSpecification' => '\\CommerceFedEx\\FedExPHP\\Structs\\OperationalDocumentSpecification',
            'ParsedContact' => '\\CommerceFedEx\\FedExPHP\\Structs\\ParsedContact',
            'ParsedContactAndAddress' => '\\CommerceFedEx\\FedExPHP\\Structs\\ParsedContactAndAddress',
            'ParsedPersonName' => '\\CommerceFedEx\\FedExPHP\\Structs\\ParsedPersonName',
            'Party' => '\\CommerceFedEx\\FedExPHP\\Structs\\Party',
            'Payor' => '\\CommerceFedEx\\FedExPHP\\Structs\\Payor',
            'ProcessDeliveryReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\ProcessDeliveryReply',
            'ProcessDeliveryRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\ProcessDeliveryRequest',
            'RatedDeliveryDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\RatedDeliveryDetail',
            'RedirectToHoldAtLocationRequestDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\RedirectToHoldAtLocationRequestDetail',
            'RerouteDeliveryDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\RerouteDeliveryDetail',
            'ShippingDocumentDispositionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingDocumentDispositionDetail',
            'ShippingDocumentEMailDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingDocumentEMailDetail',
            'ShippingDocumentEMailRecipient' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingDocumentEMailRecipient',
            'ShippingDocumentFormat' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingDocumentFormat',
            'ShippingDocumentPrintDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingDocumentPrintDetail',
            'ShippingDocumentStorageDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingDocumentStorageDetail',
            'SignatureReleaseDocumentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\SignatureReleaseDocumentDetail',
            'Surcharge' => '\\CommerceFedEx\\FedExPHP\\Structs\\Surcharge',
            'TaxpayerIdentification' => '\\CommerceFedEx\\FedExPHP\\Structs\\TaxpayerIdentification',
            'TrackingId' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackingId',
            'TransactionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TransactionDetail',
            'UniqueTrackingNumber' => '\\CommerceFedEx\\FedExPHP\\Structs\\UniqueTrackingNumber',
            'UserDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\UserDetail',
            'ValidateDeliveryReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\ValidateDeliveryReply',
            'ValidateDeliveryRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\ValidateDeliveryRequest',
            'WebAuthenticationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\CommerceFedEx\\FedExPHP\\Structs\\VersionId',
        );
    }
}
