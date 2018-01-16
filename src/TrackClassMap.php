<?php

namespace CommerceFedEx\FedExPHP;

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
            'Address' => '\\CommerceFedEx\\FedExPHP\\Structs\\Address',
            'AppointmentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\AppointmentDetail',
            'AppointmentTimeDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\AppointmentTimeDetail',
            'AvailableImagesDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\AvailableImagesDetail',
            'ClientDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ClientDetail',
            'Commodity' => '\\CommerceFedEx\\FedExPHP\\Structs\\Commodity',
            'CompletedTrackDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CompletedTrackDetail',
            'Contact' => '\\CommerceFedEx\\FedExPHP\\Structs\\Contact',
            'ContactAndAddress' => '\\CommerceFedEx\\FedExPHP\\Structs\\ContactAndAddress',
            'ContentRecord' => '\\CommerceFedEx\\FedExPHP\\Structs\\ContentRecord',
            'CustomerExceptionRequestDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CustomerExceptionRequestDetail',
            'CustomsOptionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CustomsOptionDetail',
            'DateRange' => '\\CommerceFedEx\\FedExPHP\\Structs\\DateRange',
            'DeliveryOptionEligibilityDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\DeliveryOptionEligibilityDetail',
            'Dimensions' => '\\CommerceFedEx\\FedExPHP\\Structs\\Dimensions',
            'Distance' => '\\CommerceFedEx\\FedExPHP\\Structs\\Distance',
            'EMailDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\EMailDetail',
            'EdtExciseCondition' => '\\CommerceFedEx\\FedExPHP\\Structs\\EdtExciseCondition',
            'LocalTimeRange' => '\\CommerceFedEx\\FedExPHP\\Structs\\LocalTimeRange',
            'Localization' => '\\CommerceFedEx\\FedExPHP\\Structs\\Localization',
            'Measure' => '\\CommerceFedEx\\FedExPHP\\Structs\\Measure',
            'Money' => '\\CommerceFedEx\\FedExPHP\\Structs\\Money',
            'NaftaCommodityDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\NaftaCommodityDetail',
            'Notification' => '\\CommerceFedEx\\FedExPHP\\Structs\\Notification',
            'NotificationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\NotificationDetail',
            'NotificationParameter' => '\\CommerceFedEx\\FedExPHP\\Structs\\NotificationParameter',
            'PagingDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\PagingDetail',
            'PieceCountVerificationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\PieceCountVerificationDetail',
            'QualifiedTrackingNumber' => '\\CommerceFedEx\\FedExPHP\\Structs\\QualifiedTrackingNumber',
            'SendNotificationsReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\SendNotificationsReply',
            'SendNotificationsRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\SendNotificationsRequest',
            'ShipmentEventNotificationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentEventNotificationDetail',
            'ShipmentEventNotificationSpecification' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentEventNotificationSpecification',
            'ShipmentNotificationFormatSpecification' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentNotificationFormatSpecification',
            'SignatureImageDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\SignatureImageDetail',
            'SignatureProofOfDeliveryFaxReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\SignatureProofOfDeliveryFaxReply',
            'SignatureProofOfDeliveryFaxRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\SignatureProofOfDeliveryFaxRequest',
            'SignatureProofOfDeliveryLetterReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\SignatureProofOfDeliveryLetterReply',
            'SignatureProofOfDeliveryLetterRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\SignatureProofOfDeliveryLetterRequest',
            'SpecialInstructionStatusDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\SpecialInstructionStatusDetail',
            'StringBarcode' => '\\CommerceFedEx\\FedExPHP\\Structs\\StringBarcode',
            'TrackAdvanceNotificationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackAdvanceNotificationDetail',
            'TrackChargeDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackChargeDetail',
            'TrackDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackDetail',
            'TrackEvent' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackEvent',
            'TrackInformationNoteDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackInformationNoteDetail',
            'TrackNotificationPackage' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackNotificationPackage',
            'TrackNotificationRecipientDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackNotificationRecipientDetail',
            'TrackOtherIdentifierDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackOtherIdentifierDetail',
            'TrackPackageIdentifier' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackPackageIdentifier',
            'TrackPayment' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackPayment',
            'TrackReconciliation' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackReconciliation',
            'TrackReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackReply',
            'TrackRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackRequest',
            'TrackReturnDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackReturnDetail',
            'TrackSelectionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackSelectionDetail',
            'TrackServiceDescriptionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackServiceDescriptionDetail',
            'TrackSpecialHandling' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackSpecialHandling',
            'TrackSpecialInstruction' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackSpecialInstruction',
            'TrackSplitShipmentPart' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackSplitShipmentPart',
            'TrackStatusAncillaryDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackStatusAncillaryDetail',
            'TrackStatusDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackStatusDetail',
            'TrackingDateOrTimestamp' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackingDateOrTimestamp',
            'TransactionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TransactionDetail',
            'Weight' => '\\CommerceFedEx\\FedExPHP\\Structs\\Weight',
            'WebAuthenticationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\CommerceFedEx\\FedExPHP\\Structs\\VersionId',
        );
    }
}
