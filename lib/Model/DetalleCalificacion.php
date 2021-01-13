<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class DetalleCalificacion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'DetalleCalificacion';
    
    public static $rc_peTypes = [
        'id_calificacion' => 'string',
        'porcentaje' => 'float',
        'monto' => 'float'
    ];
    
    public static $rc_peFormats = [
        'id_calificacion' => null,
        'porcentaje' => 'float',
        'monto' => 'float'
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
        'id_calificacion' => 'idCalificacion',
        'porcentaje' => 'porcentaje',
        'monto' => 'monto'
    ];
    
    public static $setters = [
        'id_calificacion' => 'setIdCalificacion',
        'porcentaje' => 'setPorcentaje',
        'monto' => 'setMonto'
    ];
    
    public static $getters = [
        'id_calificacion' => 'getIdCalificacion',
        'porcentaje' => 'getPorcentaje',
        'monto' => 'getMonto'
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
        $this->container['id_calificacion'] = isset($data['id_calificacion']) ? $data['id_calificacion'] : null;
        $this->container['porcentaje'] = isset($data['porcentaje']) ? $data['porcentaje'] : null;
        $this->container['monto'] = isset($data['monto']) ? $data['monto'] : null;
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
    
    public function getIdCalificacion()
    {
        return $this->container['id_calificacion'];
    }
    
    public function setIdCalificacion($id_calificacion)
    {
        $this->container['id_calificacion'] = $id_calificacion;
        return $this;
    }
    
    public function getPorcentaje()
    {
        return $this->container['porcentaje'];
    }
    
    public function setPorcentaje($porcentaje)
    {
        $this->container['porcentaje'] = $porcentaje;
        return $this;
    }
    
    public function getMonto()
    {
        return $this->container['monto'];
    }
    
    public function setMonto($monto)
    {
        $this->container['monto'] = $monto;
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
