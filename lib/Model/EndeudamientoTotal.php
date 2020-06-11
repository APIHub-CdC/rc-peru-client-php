<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class EndeudamientoTotal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'EndeudamientoTotal';
    
    protected static $rc_peTypes = [
        'clave_concepto' => 'string',
        'monto' => 'float',
        'porcentaje' => 'float'
    ];
    
    protected static $rc_peFormats = [
        'clave_concepto' => null,
        'monto' => 'float',
        'porcentaje' => 'float'
    ];
    
    public static function rc_peTypes()
    {
        return self::$rc_peTypes;
    }
    
    public static function rc_peFormats()
    {
        return self::$rc_peFormats;
    }
    
    protected static $attributeMap = [
        'clave_concepto' => 'claveConcepto',
        'monto' => 'monto',
        'porcentaje' => 'porcentaje'
    ];
    
    protected static $setters = [
        'clave_concepto' => 'setClaveConcepto',
        'monto' => 'setMonto',
        'porcentaje' => 'setPorcentaje'
    ];
    
    protected static $getters = [
        'clave_concepto' => 'getClaveConcepto',
        'monto' => 'getMonto',
        'porcentaje' => 'getPorcentaje'
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
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['clave_concepto'] = isset($data['clave_concepto']) ? $data['clave_concepto'] : null;
        $this->container['monto'] = isset($data['monto']) ? $data['monto'] : null;
        $this->container['porcentaje'] = isset($data['porcentaje']) ? $data['porcentaje'] : null;
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
    
    public function getClaveConcepto()
    {
        return $this->container['clave_concepto'];
    }
    
    public function setClaveConcepto($clave_concepto)
    {
        $this->container['clave_concepto'] = $clave_concepto;
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
    
    public function getPorcentaje()
    {
        return $this->container['porcentaje'];
    }
    
    public function setPorcentaje($porcentaje)
    {
        $this->container['porcentaje'] = $porcentaje;
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
