<?php

namespace CommerceFedEx\FedExPHP;

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
            'Address' => '\\CommerceFedEx\\FedExPHP\\Structs\\Address',
            'AddressAncillaryDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\AddressAncillaryDetail',
            'AddressToLocationRelationshipDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\AddressToLocationRelationshipDetail',
            'CarrierDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CarrierDetail',
            'ClearanceCountryDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ClearanceCountryDetail',
            'ClearanceLocationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ClearanceLocationDetail',
            'ClientDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ClientDetail',
            'Contact' => '\\CommerceFedEx\\FedExPHP\\Structs\\Contact',
            'Distance' => '\\CommerceFedEx\\FedExPHP\\Structs\\Distance',
            'DistanceAndLocationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\DistanceAndLocationDetail',
            'Holiday' => '\\CommerceFedEx\\FedExPHP\\Structs\\Holiday',
            'LatestDropOffDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\LatestDropOffDetail',
            'LatestDropoffOverlayDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\LatestDropoffOverlayDetail',
            'Localization' => '\\CommerceFedEx\\FedExPHP\\Structs\\Localization',
            'LocationContactAndAddress' => '\\CommerceFedEx\\FedExPHP\\Structs\\LocationContactAndAddress',
            'LocationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\LocationDetail',
            'LocationHours' => '\\CommerceFedEx\\FedExPHP\\Structs\\LocationHours',
            'LocationIdentificationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\LocationIdentificationDetail',
            'LocationSortDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\LocationSortDetail',
            'Notification' => '\\CommerceFedEx\\FedExPHP\\Structs\\Notification',
            'NotificationParameter' => '\\CommerceFedEx\\FedExPHP\\Structs\\NotificationParameter',
            'ReservationAvailabilityDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ReservationAvailabilityDetail',
            'SearchLocationConstraints' => '\\CommerceFedEx\\FedExPHP\\Structs\\SearchLocationConstraints',
            'SearchLocationsReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\SearchLocationsReply',
            'SearchLocationsRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\SearchLocationsRequest',
            'ShippingHoliday' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingHoliday',
            'TimeRange' => '\\CommerceFedEx\\FedExPHP\\Structs\\TimeRange',
            'TransactionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TransactionDetail',
            'UniqueTrackingNumber' => '\\CommerceFedEx\\FedExPHP\\Structs\\UniqueTrackingNumber',
            'WebAuthenticationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\CommerceFedEx\\FedExPHP\\Structs\\VersionId',
        );
    }
}
