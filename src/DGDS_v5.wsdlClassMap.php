<?php

namespace CommerceFedEx\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class DGDS_v5.wsdlClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'AddDangerousGoodsHandlingUnitReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\AddDangerousGoodsHandlingUnitReply',
            'AddDangerousGoodsHandlingUnitRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\AddDangerousGoodsHandlingUnitRequest',
            'Address' => '\\CommerceFedEx\\FedExPHP\\Structs\\Address',
            'AssociatedEnterpriseDocumentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\AssociatedEnterpriseDocumentDetail',
            'ClientDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ClientDetail',
            'CompletedDangerousGoodsHandlingUnitGroup' => '\\CommerceFedEx\\FedExPHP\\Structs\\CompletedDangerousGoodsHandlingUnitGroup',
            'CompletedDangerousGoodsShipmentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CompletedDangerousGoodsShipmentDetail',
            'Contact' => '\\CommerceFedEx\\FedExPHP\\Structs\\Contact',
            'DangerousGoodsHandlingUnitShippingDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\DangerousGoodsHandlingUnitShippingDetail',
            'DangerousGoodsInnerReceptacleDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\DangerousGoodsInnerReceptacleDetail',
            'DangerousGoodsRadionuclideActivity' => '\\CommerceFedEx\\FedExPHP\\Structs\\DangerousGoodsRadionuclideActivity',
            'DangerousGoodsRadionuclideDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\DangerousGoodsRadionuclideDetail',
            'DangerousGoodsSignatory' => '\\CommerceFedEx\\FedExPHP\\Structs\\DangerousGoodsSignatory',
            'DeleteDangerousGoodsHandlingUnitReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\DeleteDangerousGoodsHandlingUnitReply',
            'DeleteDangerousGoodsHandlingUnitRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\DeleteDangerousGoodsHandlingUnitRequest',
            'DeleteDangerousGoodsReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\DeleteDangerousGoodsReply',
            'DeleteDangerousGoodsRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\DeleteDangerousGoodsRequest',
            'Localization' => '\\CommerceFedEx\\FedExPHP\\Structs\\Localization',
            'ModifyDangerousGoodsHandlingUnitReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\ModifyDangerousGoodsHandlingUnitReply',
            'ModifyDangerousGoodsHandlingUnitRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\ModifyDangerousGoodsHandlingUnitRequest',
            'ModifyDangerousGoodsShipmentReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\ModifyDangerousGoodsShipmentReply',
            'ModifyDangerousGoodsShipmentRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\ModifyDangerousGoodsShipmentRequest',
            'NetExplosiveDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\NetExplosiveDetail',
            'Notification' => '\\CommerceFedEx\\FedExPHP\\Structs\\Notification',
            'NotificationParameter' => '\\CommerceFedEx\\FedExPHP\\Structs\\NotificationParameter',
            'PreciseQuantity' => '\\CommerceFedEx\\FedExPHP\\Structs\\PreciseQuantity',
            'RadioactiveDangerousGoodsHandlingUnitDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\RadioactiveDangerousGoodsHandlingUnitDetail',
            'RecordedDangerousGoodsHandlingUnitGroup' => '\\CommerceFedEx\\FedExPHP\\Structs\\RecordedDangerousGoodsHandlingUnitGroup',
            'RecordedDangerousGoodsShipmentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\RecordedDangerousGoodsShipmentDetail',
            'RetrieveDangerousGoodsReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\RetrieveDangerousGoodsReply',
            'RetrieveDangerousGoodsRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\RetrieveDangerousGoodsRequest',
            'ShipmentDryIceDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentDryIceDetail',
            'ShipmentDryIceProcessingOptionsRequested' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentDryIceProcessingOptionsRequested',
            'TrackingId' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackingId',
            'TrackingNumberUnit' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackingNumberUnit',
            'TransactionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TransactionDetail',
            'UploadDangerousGoodsProcessingOptionsRequested' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadDangerousGoodsProcessingOptionsRequested',
            'UploadDangerousGoodsReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadDangerousGoodsReply',
            'UploadDangerousGoodsRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadDangerousGoodsRequest',
            'UploadedDangerousGoodsCommodityContent' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadedDangerousGoodsCommodityContent',
            'UploadedDangerousGoodsCommodityDescription' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadedDangerousGoodsCommodityDescription',
            'UploadedDangerousGoodsContainer' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadedDangerousGoodsContainer',
            'UploadedDangerousGoodsContainerGroup' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadedDangerousGoodsContainerGroup',
            'UploadedDangerousGoodsHandlingUnit' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadedDangerousGoodsHandlingUnit',
            'UploadedDangerousGoodsHandlingUnitGroup' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadedDangerousGoodsHandlingUnitGroup',
            'UploadedDangerousGoodsShipmentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadedDangerousGoodsShipmentDetail',
            'ValidateDangerousGoodsProcessingOptionsRequested' => '\\CommerceFedEx\\FedExPHP\\Structs\\ValidateDangerousGoodsProcessingOptionsRequested',
            'ValidateDangerousGoodsReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\ValidateDangerousGoodsReply',
            'ValidateDangerousGoodsRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\ValidateDangerousGoodsRequest',
            'Weight' => '\\CommerceFedEx\\FedExPHP\\Structs\\Weight',
            'WebAuthenticationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\CommerceFedEx\\FedExPHP\\Structs\\VersionId',
        );
    }
}
