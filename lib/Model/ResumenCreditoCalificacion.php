<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class ResumenCreditoCalificacion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'ResumenCredito_calificacion';
    
    protected static $rc_peTypes = [
        'periodo' => 'string',
        'detalle' => '\rc\pe\Client\Model\DetalleCalificacion[]'
    ];
    
    protected static $rc_peFormats = [
        'periodo' => null,
        'detalle' => null
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
        'periodo' => 'periodo',
        'detalle' => 'detalle'
    ];
    
    protected static $setters = [
        'periodo' => 'setPeriodo',
        'detalle' => 'setDetalle'
    ];
    
    protected static $getters = [
        'periodo' => 'getPeriodo',
        'detalle' => 'getDetalle'
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
        $this->container['periodo'] = isset($data['periodo']) ? $data['periodo'] : null;
        $this->container['detalle'] = isset($data['detalle']) ? $data['detalle'] : null;
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
    
    public function getDetalle()
    {
        return $this->container['detalle'];
    }
    
    public function setDetalle($detalle)
    {
        $this->container['detalle'] = $detalle;
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
