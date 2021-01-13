<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class Entidad implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'Entidad';
    
    public static $rc_peTypes = [
        'descripcion_entidad' => 'string',
        'detalle_entidad' => '\rc\pe\Client\Model\DetalleEntidad[]'
    ];
    
    public static $rc_peFormats = [
        'descripcion_entidad' => null,
        'detalle_entidad' => null
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
        'descripcion_entidad' => 'descripcionEntidad',
        'detalle_entidad' => 'detalleEntidad'
    ];
    
    public static $setters = [
        'descripcion_entidad' => 'setDescripcionEntidad',
        'detalle_entidad' => 'setDetalleEntidad'
    ];
    
    public static $getters = [
        'descripcion_entidad' => 'getDescripcionEntidad',
        'detalle_entidad' => 'getDetalleEntidad'
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
        $this->container['descripcion_entidad'] = isset($data['descripcion_entidad']) ? $data['descripcion_entidad'] : null;
        $this->container['detalle_entidad'] = isset($data['detalle_entidad']) ? $data['detalle_entidad'] : null;
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
    
    public function getDescripcionEntidad()
    {
        return $this->container['descripcion_entidad'];
    }
    
    public function setDescripcionEntidad($descripcion_entidad)
    {
        $this->container['descripcion_entidad'] = $descripcion_entidad;
        return $this;
    }
    
    public function getDetalleEntidad()
    {
        return $this->container['detalle_entidad'];
    }
    
    public function setDetalleEntidad($detalle_entidad)
    {
        $this->container['detalle_entidad'] = $detalle_entidad;
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
