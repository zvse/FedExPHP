<?php

namespace NicholasCreativeMedia\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class LocationsClassMap
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
            'AddressAncillaryDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AddressAncillaryDetail',
            'AddressToLocationRelationshipDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AddressToLocationRelationshipDetail',
            'CarrierDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CarrierDetail',
            'ClearanceCountryDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ClearanceCountryDetail',
            'ClearanceLocationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ClearanceLocationDetail',
            'ClientDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ClientDetail',
            'Contact' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Contact',
            'Dimensions' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Dimensions',
            'Distance' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Distance',
            'DistanceAndLocationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DistanceAndLocationDetail',
            'Holiday' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Holiday',
            'LatestDropOffDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LatestDropOffDetail',
            'LatestDropoffOverlayDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LatestDropoffOverlayDetail',
            'Localization' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Localization',
            'LocationCapabilityDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LocationCapabilityDetail',
            'LocationContactAndAddress' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LocationContactAndAddress',
            'LocationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LocationDetail',
            'LocationHours' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LocationHours',
            'LocationIdentificationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LocationIdentificationDetail',
            'LocationPackageLimitsDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LocationPackageLimitsDetail',
            'LocationSortDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LocationSortDetail',
            'LocationSupportedPackageDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LocationSupportedPackageDetail',
            'LocationSupportedShipmentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LocationSupportedShipmentDetail',
            'Notification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Notification',
            'NotificationParameter' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NotificationParameter',
            'ReservationAvailabilityDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ReservationAvailabilityDetail',
            'SearchLocationConstraints' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SearchLocationConstraints',
            'ValidateLocationAvailabilityRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ValidateLocationAvailabilityRequest',
            'RestrictionsAndPrivilegesPolicyDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RestrictionsAndPrivilegesPolicyDetail',
            'DateRange' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DateRange',
            'EnterprisePrivilegeDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\EnterprisePrivilegeDetail',
            'SearchLocationsReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SearchLocationsReply',
            'SearchLocationsRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SearchLocationsRequest',
            'ShippingHoliday' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingHoliday',
            'TimeRange' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TimeRange',
            'TransactionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TransactionDetail',
            'UniqueTrackingNumber' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UniqueTrackingNumber',
            'Weight' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Weight',
            'WebAuthenticationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\VersionId',
        );
    }
}
