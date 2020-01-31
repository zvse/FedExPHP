<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrievedArtifact Structs
 * @subpackage Structs
 */
class RetrievedArtifact extends AbstractStructBase
{
    /**
     * The AccessReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccessReference;
    /**
     * The HighestSeverity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HighestSeverity;
    /**
     * The Notifications
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Notification[]
     */
    public $Notifications;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of artifact.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the format of the artifact.
     * - minOccurs: 0
     * @var string
     */
    public $Format;
    /**
     * The FormatSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the schema or specific format definition used for the artifact.
     * - minOccurs: 0
     * @var string
     */
    public $FormatSpecification;
    /**
     * The ReferenceId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies a reference to the artifact that follows the naming convention defined for file storage.
     * - minOccurs: 0
     * @var string
     */
    public $ReferenceId;
    /**
     * The Parts
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ArtifactPart[]
     */
    public $Parts;
    /**
     * Constructor method for RetrievedArtifact
     * @uses RetrievedArtifact::setAccessReference()
     * @uses RetrievedArtifact::setHighestSeverity()
     * @uses RetrievedArtifact::setNotifications()
     * @uses RetrievedArtifact::setType()
     * @uses RetrievedArtifact::setFormat()
     * @uses RetrievedArtifact::setFormatSpecification()
     * @uses RetrievedArtifact::setReferenceId()
     * @uses RetrievedArtifact::setParts()
     * @param string $accessReference
     * @param string $highestSeverity
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $notifications
     * @param string $type
     * @param string $format
     * @param string $formatSpecification
     * @param string $referenceId
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ArtifactPart[] $parts
     */
    public function __construct($accessReference = null, $highestSeverity = null, array $notifications = array(), $type = null, $format = null, $formatSpecification = null, $referenceId = null, array $parts = array())
    {
        $this
            ->setAccessReference($accessReference)
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setType($type)
            ->setFormat($format)
            ->setFormatSpecification($formatSpecification)
            ->setReferenceId($referenceId)
            ->setParts($parts);
    }
    /**
     * Get AccessReference value
     * @return string|null
     */
    public function getAccessReference()
    {
        return $this->AccessReference;
    }
    /**
     * Set AccessReference value
     * @param string $accessReference
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RetrievedArtifact
     */
    public function setAccessReference($accessReference = null)
    {
        // validation for constraint: string
        if (!is_null($accessReference) && !is_string($accessReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accessReference)), __LINE__);
        }
        $this->AccessReference = $accessReference;
        return $this;
    }
    /**
     * Get HighestSeverity value
     * @return string|null
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    /**
     * Set HighestSeverity value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationSeverityType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationSeverityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $highestSeverity
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RetrievedArtifact
     */
    public function setHighestSeverity($highestSeverity = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\NotificationSeverityType::valueIsValid($highestSeverity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $highestSeverity, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\NotificationSeverityType::getValidValues())), __LINE__);
        }
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    /**
     * Get Notifications value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Notification[]|null
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $notifications
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RetrievedArtifact
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $retrievedArtifactNotificationsItem) {
            // validation for constraint: itemType
            if (!$retrievedArtifactNotificationsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($retrievedArtifactNotificationsItem) ? get_class($retrievedArtifactNotificationsItem) : gettype($retrievedArtifactNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RetrievedArtifact
     */
    public function addToNotifications(\NicholasCreativeMedia\FedExPHP\Structs\Notification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
            throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Notifications[] = $item;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ArtifactType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ArtifactType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RetrievedArtifact
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ArtifactType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ArtifactType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ArtifactFormatType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ArtifactFormatType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $format
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RetrievedArtifact
     */
    public function setFormat($format = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ArtifactFormatType::valueIsValid($format)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $format, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ArtifactFormatType::getValidValues())), __LINE__);
        }
        $this->Format = $format;
        return $this;
    }
    /**
     * Get FormatSpecification value
     * @return string|null
     */
    public function getFormatSpecification()
    {
        return $this->FormatSpecification;
    }
    /**
     * Set FormatSpecification value
     * @param string $formatSpecification
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RetrievedArtifact
     */
    public function setFormatSpecification($formatSpecification = null)
    {
        // validation for constraint: string
        if (!is_null($formatSpecification) && !is_string($formatSpecification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formatSpecification)), __LINE__);
        }
        $this->FormatSpecification = $formatSpecification;
        return $this;
    }
    /**
     * Get ReferenceId value
     * @return string|null
     */
    public function getReferenceId()
    {
        return $this->ReferenceId;
    }
    /**
     * Set ReferenceId value
     * @param string $referenceId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RetrievedArtifact
     */
    public function setReferenceId($referenceId = null)
    {
        // validation for constraint: string
        if (!is_null($referenceId) && !is_string($referenceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceId)), __LINE__);
        }
        $this->ReferenceId = $referenceId;
        return $this;
    }
    /**
     * Get Parts value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ArtifactPart[]|null
     */
    public function getParts()
    {
        return $this->Parts;
    }
    /**
     * Set Parts value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ArtifactPart[] $parts
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RetrievedArtifact
     */
    public function setParts(array $parts = array())
    {
        foreach ($parts as $retrievedArtifactPartsItem) {
            // validation for constraint: itemType
            if (!$retrievedArtifactPartsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ArtifactPart) {
                throw new \InvalidArgumentException(sprintf('The Parts property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ArtifactPart, "%s" given', is_object($retrievedArtifactPartsItem) ? get_class($retrievedArtifactPartsItem) : gettype($retrievedArtifactPartsItem)), __LINE__);
            }
        }
        $this->Parts = $parts;
        return $this;
    }
    /**
     * Add item to Parts value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ArtifactPart $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RetrievedArtifact
     */
    public function addToParts(\NicholasCreativeMedia\FedExPHP\Structs\ArtifactPart $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ArtifactPart) {
            throw new \InvalidArgumentException(sprintf('The Parts property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ArtifactPart, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Parts[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RetrievedArtifact
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
