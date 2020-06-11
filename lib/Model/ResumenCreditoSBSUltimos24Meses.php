<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class ResumenCreditoSBSUltimos24Meses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'ResumenCredito_SBSUltimos24Meses';
    
    protected static $rc_peTypes = [
        'condicion24_meses' => '\rc\pe\Client\Model\Condicion24Meses[]',
        'calificacion24_meses' => '\rc\pe\Client\Model\Calificacion24Meses[]',
        'situacion24_meses' => '\rc\pe\Client\Model\Situacion24Meses[]'
    ];
    
    protected static $rc_peFormats = [
        'condicion24_meses' => null,
        'calificacion24_meses' => null,
        'situacion24_meses' => null
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
        'condicion24_meses' => 'condicion24Meses',
        'calificacion24_meses' => 'calificacion24Meses',
        'situacion24_meses' => 'situacion24Meses'
    ];
    
    protected static $setters = [
        'condicion24_meses' => 'setCondicion24Meses',
        'calificacion24_meses' => 'setCalificacion24Meses',
        'situacion24_meses' => 'setSituacion24Meses'
    ];
    
    protected static $getters = [
        'condicion24_meses' => 'getCondicion24Meses',
        'calificacion24_meses' => 'getCalificacion24Meses',
        'situacion24_meses' => 'getSituacion24Meses'
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
        $this->container['condicion24_meses'] = isset($data['condicion24_meses']) ? $data['condicion24_meses'] : null;
        $this->container['calificacion24_meses'] = isset($data['calificacion24_meses']) ? $data['calificacion24_meses'] : null;
        $this->container['situacion24_meses'] = isset($data['situacion24_meses']) ? $data['situacion24_meses'] : null;
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
    
    public function getCondicion24Meses()
    {
        return $this->container['condicion24_meses'];
    }
    
    public function setCondicion24Meses($condicion24_meses)
    {
        $this->container['condicion24_meses'] = $condicion24_meses;
        return $this;
    }
    
    public function getCalificacion24Meses()
    {
        return $this->container['calificacion24_meses'];
    }
    
    public function setCalificacion24Meses($calificacion24_meses)
    {
        $this->container['calificacion24_meses'] = $calificacion24_meses;
        return $this;
    }
    
    public function getSituacion24Meses()
    {
        return $this->container['situacion24_meses'];
    }
    
    public function setSituacion24Meses($situacion24_meses)
    {
        $this->container['situacion24_meses'] = $situacion24_meses;
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
