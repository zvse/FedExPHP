<?php

namespace NicholasCreativeMedia\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class TrackClassMap
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
            'AvailableImagesDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AvailableImagesDetail',
            'ClientDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ClientDetail',
            'Commodity' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Commodity',
            'CompletedTrackDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CompletedTrackDetail',
            'Contact' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Contact',
            'ContactAndAddress' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ContactAndAddress',
            'ContentRecord' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ContentRecord',
            'CustomerExceptionRequestDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomerExceptionRequestDetail',
            'CustomsOptionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomsOptionDetail',
            'DateRange' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DateRange',
            'DeliveryOptionEligibilityDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DeliveryOptionEligibilityDetail',
            'Dimensions' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Dimensions',
            'Distance' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Distance',
            'DocumentPart' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DocumentPart',
            'EMailDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\EMailDetail',
            'EdtExciseCondition' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\EdtExciseCondition',
            'FaxDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\FaxDetail',
            'GetTrackingDocumentsReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\GetTrackingDocumentsReply',
            'GetTrackingDocumentsRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\GetTrackingDocumentsRequest',
            'LocalTimeRange' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LocalTimeRange',
            'Localization' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Localization',
            'Measure' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Measure',
            'Money' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Money',
            'NaftaCommodityDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NaftaCommodityDetail',
            'Notification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Notification',
            'NotificationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NotificationDetail',
            'NotificationParameter' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NotificationParameter',
            'PagingDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PagingDetail',
            'PieceCountVerificationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PieceCountVerificationDetail',
            'SendNotificationsReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SendNotificationsReply',
            'SendNotificationsRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SendNotificationsRequest',
            'ShipmentEventNotificationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentEventNotificationDetail',
            'ShipmentEventNotificationSpecification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentEventNotificationSpecification',
            'ShipmentNotificationFormatSpecification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentNotificationFormatSpecification',
            'SignatureImageDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SignatureImageDetail',
            'SpecialInstructionStatusDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SpecialInstructionStatusDetail',
            'StringBarcode' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\StringBarcode',
            'TrackAdvanceNotificationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackAdvanceNotificationDetail',
            'TrackChargeDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackChargeDetail',
            'TrackDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackDetail',
            'TrackEvent' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackEvent',
            'TrackInformationNoteDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackInformationNoteDetail',
            'TrackNotificationPackage' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackNotificationPackage',
            'TrackNotificationRecipientDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackNotificationRecipientDetail',
            'TrackOtherIdentifierDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackOtherIdentifierDetail',
            'TrackPackageIdentifier' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackPackageIdentifier',
            'TrackPackagingDescriptionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackPackagingDescriptionDetail',
            'TrackPayment' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackPayment',
            'TrackReconciliation' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackReconciliation',
            'TrackReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackReply',
            'TrackRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackRequest',
            'TrackReturnDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackReturnDetail',
            'TrackSelectionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackSelectionDetail',
            'TrackServiceDescriptionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackServiceDescriptionDetail',
            'TrackSpecialHandling' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackSpecialHandling',
            'TrackSpecialInstruction' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackSpecialInstruction',
            'TrackSplitShipmentPart' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackSplitShipmentPart',
            'TrackStatusAncillaryDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackStatusAncillaryDetail',
            'TrackStatusDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackStatusDetail',
            'TrackingBillOfLadingDocumentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackingBillOfLadingDocumentDetail',
            'TrackingDateOrTimestamp' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackingDateOrTimestamp',
            'TrackingDocument' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackingDocument',
            'TrackingDocumentDispositionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackingDocumentDispositionDetail',
            'TrackingDocumentEmailDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackingDocumentEmailDetail',
            'TrackingDocumentFormat' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackingDocumentFormat',
            'TrackingDocumentSpecification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackingDocumentSpecification',
            'TrackingFreightBillingDocumentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackingFreightBillingDocumentDetail',
            'TrackingSignatureProofOfDeliveryDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackingSignatureProofOfDeliveryDetail',
            'TransactionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TransactionDetail',
            'Weight' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Weight',
            'WebAuthenticationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\VersionId',
        );
    }
}
