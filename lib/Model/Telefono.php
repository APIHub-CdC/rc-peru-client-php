<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class Telefono implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'Telefono';
    
    public static $rc_peTypes = [
        'fuente' => 'string',
        'telefono' => 'string',
        'codigo' => 'string',
        'fecha_actualizacion' => 'string'
    ];
    
    public static $rc_peFormats = [
        'fuente' => null,
        'telefono' => null,
        'codigo' => null,
        'fecha_actualizacion' => null
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
        'fuente' => 'fuente',
        'telefono' => 'telefono',
        'codigo' => 'codigo',
        'fecha_actualizacion' => 'fechaActualizacion'
    ];
    
    public static $setters = [
        'fuente' => 'setFuente',
        'telefono' => 'setTelefono',
        'codigo' => 'setCodigo',
        'fecha_actualizacion' => 'setFechaActualizacion'
    ];
    
    public static $getters = [
        'fuente' => 'getFuente',
        'telefono' => 'getTelefono',
        'codigo' => 'getCodigo',
        'fecha_actualizacion' => 'getFechaActualizacion'
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
        $this->container['fuente'] = isset($data['fuente']) ? $data['fuente'] : null;
        $this->container['telefono'] = isset($data['telefono']) ? $data['telefono'] : null;
        $this->container['codigo'] = isset($data['codigo']) ? $data['codigo'] : null;
        $this->container['fecha_actualizacion'] = isset($data['fecha_actualizacion']) ? $data['fecha_actualizacion'] : null;
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
    
    public function getFuente()
    {
        return $this->container['fuente'];
    }
    
    public function setFuente($fuente)
    {
        $this->container['fuente'] = $fuente;
        return $this;
    }
    
    public function getTelefono()
    {
        return $this->container['telefono'];
    }
    
    public function setTelefono($telefono)
    {
        $this->container['telefono'] = $telefono;
        return $this;
    }
    
    public function getCodigo()
    {
        return $this->container['codigo'];
    }
    
    public function setCodigo($codigo)
    {
        $this->container['codigo'] = $codigo;
        return $this;
    }
    
    public function getFechaActualizacion()
    {
        return $this->container['fecha_actualizacion'];
    }
    
    public function setFechaActualizacion($fecha_actualizacion)
    {
        $this->container['fecha_actualizacion'] = $fecha_actualizacion;
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
