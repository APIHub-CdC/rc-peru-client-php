<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class ResumenOtrasObligaciones implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'ResumenOtrasObligaciones';
    
    protected static $rc_peTypes = [
        'clave_fuente' => 'string',
        'info_fuente_informacion' => '\rc\pe\Client\Model\ResumenOtrasObligacionesInfoFuenteInformacion'
    ];
    
    protected static $rc_peFormats = [
        'clave_fuente' => null,
        'info_fuente_informacion' => null
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
        'clave_fuente' => 'claveFuente',
        'info_fuente_informacion' => 'infoFuenteInformacion'
    ];
    
    protected static $setters = [
        'clave_fuente' => 'setClaveFuente',
        'info_fuente_informacion' => 'setInfoFuenteInformacion'
    ];
    
    protected static $getters = [
        'clave_fuente' => 'getClaveFuente',
        'info_fuente_informacion' => 'getInfoFuenteInformacion'
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
        $this->container['clave_fuente'] = isset($data['clave_fuente']) ? $data['clave_fuente'] : null;
        $this->container['info_fuente_informacion'] = isset($data['info_fuente_informacion']) ? $data['info_fuente_informacion'] : null;
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
    
    public function getClaveFuente()
    {
        return $this->container['clave_fuente'];
    }
    
    public function setClaveFuente($clave_fuente)
    {
        $this->container['clave_fuente'] = $clave_fuente;
        return $this;
    }
    
    public function getInfoFuenteInformacion()
    {
        return $this->container['info_fuente_informacion'];
    }
    
    public function setInfoFuenteInformacion($info_fuente_informacion)
    {
        $this->container['info_fuente_informacion'] = $info_fuente_informacion;
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
