<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class Exportaciones implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'Exportaciones';
    
    public static $rc_peTypes = [
        'periodo' => 'string',
        'monto' => 'float'
    ];
    
    public static $rc_peFormats = [
        'periodo' => null,
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
        'periodo' => 'periodo',
        'monto' => 'monto'
    ];
    
    public static $setters = [
        'periodo' => 'setPeriodo',
        'monto' => 'setMonto'
    ];
    
    public static $getters = [
        'periodo' => 'getPeriodo',
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
        $this->container['periodo'] = isset($data['periodo']) ? $data['periodo'] : null;
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
    
    public function getPeriodo()
    {
        return $this->container['periodo'];
    }
    
    public function setPeriodo($periodo)
    {
        $this->container['periodo'] = $periodo;
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
