<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class ConsultasInner implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'Consultas_inner';
    
    public static $rc_peTypes = [
        'clave_tipo_entidad' => 'string',
        'entidad' => 'string',
        'total_ultimos12_meses' => 'float',
        'consulta_mes' => '\rc\pe\Client\Model\ConsultaMes[]'
    ];
    
    public static $rc_peFormats = [
        'clave_tipo_entidad' => null,
        'entidad' => null,
        'total_ultimos12_meses' => null,
        'consulta_mes' => null
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
        'clave_tipo_entidad' => 'claveTipoEntidad',
        'entidad' => 'entidad',
        'total_ultimos12_meses' => 'totalUltimos12Meses',
        'consulta_mes' => 'consultaMes'
    ];
    
    public static $setters = [
        'clave_tipo_entidad' => 'setClaveTipoEntidad',
        'entidad' => 'setEntidad',
        'total_ultimos12_meses' => 'setTotalUltimos12Meses',
        'consulta_mes' => 'setConsultaMes'
    ];
    
    public static $getters = [
        'clave_tipo_entidad' => 'getClaveTipoEntidad',
        'entidad' => 'getEntidad',
        'total_ultimos12_meses' => 'getTotalUltimos12Meses',
        'consulta_mes' => 'getConsultaMes'
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
        $this->container['clave_tipo_entidad'] = isset($data['clave_tipo_entidad']) ? $data['clave_tipo_entidad'] : null;
        $this->container['entidad'] = isset($data['entidad']) ? $data['entidad'] : null;
        $this->container['total_ultimos12_meses'] = isset($data['total_ultimos12_meses']) ? $data['total_ultimos12_meses'] : null;
        $this->container['consulta_mes'] = isset($data['consulta_mes']) ? $data['consulta_mes'] : null;
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
    
    public function getTotalUltimos12Meses()
    {
        return $this->container['total_ultimos12_meses'];
    }
    
    public function setTotalUltimos12Meses($total_ultimos12_meses)
    {
        $this->container['total_ultimos12_meses'] = $total_ultimos12_meses;
        return $this;
    }
    
    public function getConsultaMes()
    {
        return $this->container['consulta_mes'];
    }
    
    public function setConsultaMes($consulta_mes)
    {
        $this->container['consulta_mes'] = $consulta_mes;
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
