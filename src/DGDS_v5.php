<?php

namespace NicholasCreativeMedia\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class DGDS_v5
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'AddDangerousGoodsHandlingUnitReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AddDangerousGoodsHandlingUnitReply',
            'AddDangerousGoodsHandlingUnitRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AddDangerousGoodsHandlingUnitRequest',
            'Address' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Address',
            'AssociatedEnterpriseDocumentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AssociatedEnterpriseDocumentDetail',
            'ClientDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ClientDetail',
            'CompletedDangerousGoodsHandlingUnitGroup' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CompletedDangerousGoodsHandlingUnitGroup',
            'CompletedDangerousGoodsShipmentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CompletedDangerousGoodsShipmentDetail',
            'Contact' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Contact',
            'DangerousGoodsHandlingUnitShippingDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DangerousGoodsHandlingUnitShippingDetail',
            'DangerousGoodsInnerReceptacleDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DangerousGoodsInnerReceptacleDetail',
            'DangerousGoodsRadionuclideActivity' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DangerousGoodsRadionuclideActivity',
            'DangerousGoodsRadionuclideDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DangerousGoodsRadionuclideDetail',
            'DangerousGoodsSignatory' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DangerousGoodsSignatory',
            'DeleteDangerousGoodsHandlingUnitReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DeleteDangerousGoodsHandlingUnitReply',
            'DeleteDangerousGoodsHandlingUnitRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DeleteDangerousGoodsHandlingUnitRequest',
            'DeleteDangerousGoodsReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DeleteDangerousGoodsReply',
            'DeleteDangerousGoodsRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DeleteDangerousGoodsRequest',
            'Localization' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Localization',
            'ModifyDangerousGoodsHandlingUnitReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ModifyDangerousGoodsHandlingUnitReply',
            'ModifyDangerousGoodsHandlingUnitRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ModifyDangerousGoodsHandlingUnitRequest',
            'ModifyDangerousGoodsShipmentReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ModifyDangerousGoodsShipmentReply',
            'ModifyDangerousGoodsShipmentRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ModifyDangerousGoodsShipmentRequest',
            'NetExplosiveDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NetExplosiveDetail',
            'Notification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Notification',
            'NotificationParameter' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NotificationParameter',
            'PreciseQuantity' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PreciseQuantity',
            'RadioactiveDangerousGoodsHandlingUnitDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RadioactiveDangerousGoodsHandlingUnitDetail',
            'RecordedDangerousGoodsHandlingUnitGroup' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RecordedDangerousGoodsHandlingUnitGroup',
            'RecordedDangerousGoodsShipmentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RecordedDangerousGoodsShipmentDetail',
            'RetrieveDangerousGoodsReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RetrieveDangerousGoodsReply',
            'RetrieveDangerousGoodsRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RetrieveDangerousGoodsRequest',
            'ShipmentDryIceDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentDryIceDetail',
            'ShipmentDryIceProcessingOptionsRequested' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentDryIceProcessingOptionsRequested',
            'TrackingId' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackingId',
            'TrackingNumberUnit' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackingNumberUnit',
            'TransactionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TransactionDetail',
            'UploadDangerousGoodsProcessingOptionsRequested' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadDangerousGoodsProcessingOptionsRequested',
            'UploadDangerousGoodsReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadDangerousGoodsReply',
            'UploadDangerousGoodsRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadDangerousGoodsRequest',
            'UploadedDangerousGoodsCommodityContent' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadedDangerousGoodsCommodityContent',
            'UploadedDangerousGoodsCommodityDescription' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadedDangerousGoodsCommodityDescription',
            'UploadedDangerousGoodsContainer' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadedDangerousGoodsContainer',
            'UploadedDangerousGoodsContainerGroup' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadedDangerousGoodsContainerGroup',
            'UploadedDangerousGoodsHandlingUnit' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadedDangerousGoodsHandlingUnit',
            'UploadedDangerousGoodsHandlingUnitGroup' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadedDangerousGoodsHandlingUnitGroup',
            'UploadedDangerousGoodsShipmentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadedDangerousGoodsShipmentDetail',
            'ValidateDangerousGoodsProcessingOptionsRequested' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ValidateDangerousGoodsProcessingOptionsRequested',
            'ValidateDangerousGoodsReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ValidateDangerousGoodsReply',
            'ValidateDangerousGoodsRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ValidateDangerousGoodsRequest',
            'Weight' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Weight',
            'WebAuthenticationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\VersionId',
        );
    }
}
