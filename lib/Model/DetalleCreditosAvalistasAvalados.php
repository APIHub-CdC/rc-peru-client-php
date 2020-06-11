<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class DetalleCreditosAvalistasAvalados implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'DetalleCreditos_avalistasAvalados';
    
    protected static $rc_peTypes = [
        'detalles_avalistas' => '\rc\pe\Client\Model\DetalleAvalistas[]',
        'detalles_avalados' => '\rc\pe\Client\Model\DetalleAvalados[]'
    ];
    
    protected static $rc_peFormats = [
        'detalles_avalistas' => null,
        'detalles_avalados' => null
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
        'detalles_avalistas' => 'detallesAvalistas',
        'detalles_avalados' => 'detallesAvalados'
    ];
    
    protected static $setters = [
        'detalles_avalistas' => 'setDetallesAvalistas',
        'detalles_avalados' => 'setDetallesAvalados'
    ];
    
    protected static $getters = [
        'detalles_avalistas' => 'getDetallesAvalistas',
        'detalles_avalados' => 'getDetallesAvalados'
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
        $this->container['detalles_avalistas'] = isset($data['detalles_avalistas']) ? $data['detalles_avalistas'] : null;
        $this->container['detalles_avalados'] = isset($data['detalles_avalados']) ? $data['detalles_avalados'] : null;
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
    
    public function getDetallesAvalistas()
    {
        return $this->container['detalles_avalistas'];
    }
    
    public function setDetallesAvalistas($detalles_avalistas)
    {
        $this->container['detalles_avalistas'] = $detalles_avalistas;
        return $this;
    }
    
    public function getDetallesAvalados()
    {
        return $this->container['detalles_avalados'];
    }
    
    public function setDetallesAvalados($detalles_avalados)
    {
        $this->container['detalles_avalados'] = $detalles_avalados;
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
