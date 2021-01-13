<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class EndeudamientoProductoEntidad implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'EndeudamientoProductoEntidad';
    
    public static $rc_peTypes = [
        'clave_producto' => 'string',
        'informacion_entidad' => '\rc\pe\Client\Model\InformacionEntidad[]'
    ];
    
    public static $rc_peFormats = [
        'clave_producto' => null,
        'informacion_entidad' => null
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
        'clave_producto' => 'claveProducto',
        'informacion_entidad' => 'informacionEntidad'
    ];
    
    public static $setters = [
        'clave_producto' => 'setClaveProducto',
        'informacion_entidad' => 'setInformacionEntidad'
    ];
    
    public static $getters = [
        'clave_producto' => 'getClaveProducto',
        'informacion_entidad' => 'getInformacionEntidad'
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
        $this->container['clave_producto'] = isset($data['clave_producto']) ? $data['clave_producto'] : null;
        $this->container['informacion_entidad'] = isset($data['informacion_entidad']) ? $data['informacion_entidad'] : null;
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
    
    public function getClaveProducto()
    {
        return $this->container['clave_producto'];
    }
    
    public function setClaveProducto($clave_producto)
    {
        $this->container['clave_producto'] = $clave_producto;
        return $this;
    }
    
    public function getInformacionEntidad()
    {
        return $this->container['informacion_entidad'];
    }
    
    public function setInformacionEntidad($informacion_entidad)
    {
        $this->container['informacion_entidad'] = $informacion_entidad;
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
