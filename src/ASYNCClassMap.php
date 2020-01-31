<?php

namespace NicholasCreativeMedia\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class ASYNCClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'ArtifactPart' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ArtifactPart',
            'ArtifactRetrievalFilter' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ArtifactRetrievalFilter',
            'ClientDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ClientDetail',
            'Localization' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Localization',
            'Notification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Notification',
            'NotificationParameter' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NotificationParameter',
            'RetrieveJobResultsReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RetrieveJobResultsReply',
            'RetrieveJobResultsRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RetrieveJobResultsRequest',
            'RetrievedArtifact' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RetrievedArtifact',
            'TransactionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TransactionDetail',
            'WebAuthenticationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\VersionId',
        );
    }
}
