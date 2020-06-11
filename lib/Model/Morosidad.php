<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class Morosidad implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'Morosidad';
    
    protected static $rc_peTypes = [
        'clave_tipo_entidad' => 'string',
        'entidad' => '\rc\pe\Client\Model\Entidad[]'
    ];
    
    protected static $rc_peFormats = [
        'clave_tipo_entidad' => null,
        'entidad' => null
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
        'clave_tipo_entidad' => 'claveTipoEntidad',
        'entidad' => 'entidad'
    ];
    
    protected static $setters = [
        'clave_tipo_entidad' => 'setClaveTipoEntidad',
        'entidad' => 'setEntidad'
    ];
    
    protected static $getters = [
        'clave_tipo_entidad' => 'getClaveTipoEntidad',
        'entidad' => 'getEntidad'
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
        $this->container['clave_tipo_entidad'] = isset($data['clave_tipo_entidad']) ? $data['clave_tipo_entidad'] : null;
        $this->container['entidad'] = isset($data['entidad']) ? $data['entidad'] : null;
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
    
    public function getClaveTipoEntidad()
    {
        return $this->container['clave_tipo_entidad'];
    }
    
    public function setClaveTipoEntidad($clave_tipo_entidad)
    {
        $this->container['clave_tipo_entidad'] = $clave_tipo_entidad;
        return $this;
    }
    
    public function getEntidad()
    {
        return $this->container['entidad'];
    }
    
    public function setEntidad($entidad)
    {
        $this->container['entidad'] = $entidad;
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
