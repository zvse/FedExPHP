<?php

namespace CommerceFedEx\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class PickupClassMap
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
            'AssociatedAccount' => '\\CommerceFedEx\\FedExPHP\\Structs\\AssociatedAccount',
            'CancelPickupReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\CancelPickupReply',
            'CancelPickupRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\CancelPickupRequest',
            'ClientDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ClientDetail',
            'CodAddTransportationChargesDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CodAddTransportationChargesDetail',
            'CodDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CodDetail',
            'CompletedFreightPickupDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CompletedFreightPickupDetail',
            'CompletedFreightPickupLineItem' => '\\CommerceFedEx\\FedExPHP\\Structs\\CompletedFreightPickupLineItem',
            'Contact' => '\\CommerceFedEx\\FedExPHP\\Structs\\Contact',
            'ContactAndAddress' => '\\CommerceFedEx\\FedExPHP\\Structs\\ContactAndAddress',
            'CreatePickupReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\CreatePickupReply',
            'CreatePickupRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\CreatePickupRequest',
            'CustomDeliveryWindowDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CustomDeliveryWindowDetail',
            'DateRange' => '\\CommerceFedEx\\FedExPHP\\Structs\\DateRange',
            'DeliveryOnInvoiceAcceptanceDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\DeliveryOnInvoiceAcceptanceDetail',
            'DetentionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\DetentionDetail',
            'Dimensions' => '\\CommerceFedEx\\FedExPHP\\Structs\\Dimensions',
            'Distance' => '\\CommerceFedEx\\FedExPHP\\Structs\\Distance',
            'EMailDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\EMailDetail',
            'EMailLabelDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\EMailLabelDetail',
            'EMailRecipient' => '\\CommerceFedEx\\FedExPHP\\Structs\\EMailRecipient',
            'EmailOptionsRequested' => '\\CommerceFedEx\\FedExPHP\\Structs\\EmailOptionsRequested',
            'EtdDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\EtdDetail',
            'ExpressFreightPickupDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ExpressFreightPickupDetail',
            'ExtraLaborDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ExtraLaborDetail',
            'FaxDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\FaxDetail',
            'FlatbedTrailerDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\FlatbedTrailerDetail',
            'FreightGuaranteeDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\FreightGuaranteeDetail',
            'FreightPickupDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\FreightPickupDetail',
            'FreightPickupLineItem' => '\\CommerceFedEx\\FedExPHP\\Structs\\FreightPickupLineItem',
            'FreightServiceCenterDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\FreightServiceCenterDetail',
            'HoldAtLocationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\HoldAtLocationDetail',
            'HomeDeliveryPremiumDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\HomeDeliveryPremiumDetail',
            'InternationalControlledExportDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\InternationalControlledExportDetail',
            'InternationalTrafficInArmsRegulationsDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\InternationalTrafficInArmsRegulationsDetail',
            'Localization' => '\\CommerceFedEx\\FedExPHP\\Structs\\Localization',
            'MarkingOrTaggingDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\MarkingOrTaggingDetail',
            'Money' => '\\CommerceFedEx\\FedExPHP\\Structs\\Money',
            'NonBusinessTimeDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\NonBusinessTimeDetail',
            'Notification' => '\\CommerceFedEx\\FedExPHP\\Structs\\Notification',
            'NotificationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\NotificationDetail',
            'NotificationParameter' => '\\CommerceFedEx\\FedExPHP\\Structs\\NotificationParameter',
            'PalletShrinkwrapDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\PalletShrinkwrapDetail',
            'PalletsProvidedDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\PalletsProvidedDetail',
            'Party' => '\\CommerceFedEx\\FedExPHP\\Structs\\Party',
            'Payment' => '\\CommerceFedEx\\FedExPHP\\Structs\\Payment',
            'Payor' => '\\CommerceFedEx\\FedExPHP\\Structs\\Payor',
            'PendingShipmentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\PendingShipmentDetail',
            'PendingShipmentProcessingOptionsRequested' => '\\CommerceFedEx\\FedExPHP\\Structs\\PendingShipmentProcessingOptionsRequested',
            'PickupAvailabilityReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\PickupAvailabilityReply',
            'PickupAvailabilityRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\PickupAvailabilityRequest',
            'PickupDangerousGoodsDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\PickupDangerousGoodsDetail',
            'PickupOriginDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\PickupOriginDetail',
            'PickupPackageSpecialServicesRequested' => '\\CommerceFedEx\\FedExPHP\\Structs\\PickupPackageSpecialServicesRequested',
            'PickupScheduleOption' => '\\CommerceFedEx\\FedExPHP\\Structs\\PickupScheduleOption',
            'PickupShipmentAttributes' => '\\CommerceFedEx\\FedExPHP\\Structs\\PickupShipmentAttributes',
            'PriorityAlertDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\PriorityAlertDetail',
            'RecommendedDocumentSpecification' => '\\CommerceFedEx\\FedExPHP\\Structs\\RecommendedDocumentSpecification',
            'RequestedPickupPackageDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\RequestedPickupPackageDetail',
            'ReturnAssociationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ReturnAssociationDetail',
            'ReturnEMailDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ReturnEMailDetail',
            'ReturnShipmentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ReturnShipmentDetail',
            'Rma' => '\\CommerceFedEx\\FedExPHP\\Structs\\Rma',
            'ShipmentAssemblyDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentAssemblyDetail',
            'ShipmentDryIceDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentDryIceDetail',
            'ShipmentDryIceProcessingOptionsRequested' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentDryIceProcessingOptionsRequested',
            'ShipmentEventNotificationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentEventNotificationDetail',
            'ShipmentEventNotificationSpecification' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentEventNotificationSpecification',
            'ShipmentNotificationFormatSpecification' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentNotificationFormatSpecification',
            'ShipmentSpecialServicesRequested' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentSpecialServicesRequested',
            'SmsDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\SmsDetail',
            'SortAndSegregateDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\SortAndSegregateDetail',
            'SpecialEquipmentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\SpecialEquipmentDetail',
            'SpecialEquipmentLineItem' => '\\CommerceFedEx\\FedExPHP\\Structs\\SpecialEquipmentLineItem',
            'StorageDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\StorageDetail',
            'TaxpayerIdentification' => '\\CommerceFedEx\\FedExPHP\\Structs\\TaxpayerIdentification',
            'TrackingId' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackingId',
            'TransactionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TransactionDetail',
            'UploadDocumentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadDocumentDetail',
            'UploadDocumentReferenceDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadDocumentReferenceDetail',
            'WeighingDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\WeighingDetail',
            'Weight' => '\\CommerceFedEx\\FedExPHP\\Structs\\Weight',
            'WebAuthenticationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\CommerceFedEx\\FedExPHP\\Structs\\VersionId',
        );
    }
}
