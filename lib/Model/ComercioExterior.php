<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class ComercioExterior implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'ComercioExterior';
    
    public static $rc_peTypes = [
        'exportaciones' => '\rc\pe\Client\Model\Exportaciones[]',
        'importaciones' => '\rc\pe\Client\Model\Importaciones[]'
    ];
    
    public static $rc_peFormats = [
        'exportaciones' => null,
        'importaciones' => null
    ];
    
    public static function rc_peTypes()
    {
        return self::$rc_peTypes;
    }
    
    public static function rc_peFormats()
    {
        return self::$rc_peFormats;
    }
    
    public static $attributeMap = [
        'exportaciones' => 'exportaciones',
        'importaciones' => 'importaciones'
    ];
    
    public static $setters = [
        'exportaciones' => 'setExportaciones',
        'importaciones' => 'setImportaciones'
    ];
    
    public static $getters = [
        'exportaciones' => 'getExportaciones',
        'importaciones' => 'getImportaciones'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$rc_peModelName;
    }
    
    
    
    public $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['exportaciones'] = isset($data['exportaciones']) ? $data['exportaciones'] : null;
        $this->container['importaciones'] = isset($data['importaciones']) ? $data['importaciones'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getExportaciones()
    {
        return $this->container['exportaciones'];
    }
    
    public function setExportaciones($exportaciones)
    {
        $this->container['exportaciones'] = $exportaciones;
        return $this;
    }
    
    public function getImportaciones()
    {
        return $this->container['importaciones'];
    }
    
    public function setImportaciones($importaciones)
    {
        $this->container['importaciones'] = $importaciones;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
