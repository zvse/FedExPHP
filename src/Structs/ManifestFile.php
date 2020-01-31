<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManifestFile Structs
 * @subpackage Structs
 */
class ManifestFile extends AbstractStructBase
{
    /**
     * The FileName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FileName;
    /**
     * The File
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $File;
    /**
     * Constructor method for ManifestFile
     * @uses ManifestFile::setFileName()
     * @uses ManifestFile::setFile()
     * @param string $fileName
     * @param string $file
     */
    public function __construct($fileName = null, $file = null)
    {
        $this
            ->setFileName($fileName)
            ->setFile($file);
    }
    /**
     * Get FileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ManifestFile
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileName)), __LINE__);
        }
        $this->FileName = $fileName;
        return $this;
    }
    /**
     * Get File value
     * @return string|null
     */
    public function getFile()
    {
        return $this->File;
    }
    /**
     * Set File value
     * @param string $file
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ManifestFile
     */
    public function setFile($file = null)
    {
        // validation for constraint: string
        if (!is_null($file) && !is_string($file)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($file)), __LINE__);
        }
        $this->File = $file;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ManifestFile
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
