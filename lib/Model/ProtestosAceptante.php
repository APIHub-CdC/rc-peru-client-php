<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class ProtestosAceptante implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'ProtestosAceptante';
    
    public static $rc_peTypes = [
        'clave_tipo_valor' => 'string',
        'fecha_protesto' => 'string',
        'clave_situacion' => 'string',
        'fecha_aclaracion' => 'string',
        'monto' => 'float',
        'nombre_girador' => 'string'
    ];
    
    public static $rc_peFormats = [
        'clave_tipo_valor' => null,
        'fecha_protesto' => null,
        'clave_situacion' => null,
        'fecha_aclaracion' => null,
        'monto' => 'float',
        'nombre_girador' => null
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
        'clave_tipo_valor' => 'claveTipoValor',
        'fecha_protesto' => 'fechaProtesto',
        'clave_situacion' => 'claveSituacion',
        'fecha_aclaracion' => 'fechaAclaracion',
        'monto' => 'monto',
        'nombre_girador' => 'nombreGirador'
    ];
    
    public static $setters = [
        'clave_tipo_valor' => 'setClaveTipoValor',
        'fecha_protesto' => 'setFechaProtesto',
        'clave_situacion' => 'setClaveSituacion',
        'fecha_aclaracion' => 'setFechaAclaracion',
        'monto' => 'setMonto',
        'nombre_girador' => 'setNombreGirador'
    ];
    
    public static $getters = [
        'clave_tipo_valor' => 'getClaveTipoValor',
        'fecha_protesto' => 'getFechaProtesto',
        'clave_situacion' => 'getClaveSituacion',
        'fecha_aclaracion' => 'getFechaAclaracion',
        'monto' => 'getMonto',
        'nombre_girador' => 'getNombreGirador'
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
        $this->container['clave_tipo_valor'] = isset($data['clave_tipo_valor']) ? $data['clave_tipo_valor'] : null;
        $this->container['fecha_protesto'] = isset($data['fecha_protesto']) ? $data['fecha_protesto'] : null;
        $this->container['clave_situacion'] = isset($data['clave_situacion']) ? $data['clave_situacion'] : null;
        $this->container['fecha_aclaracion'] = isset($data['fecha_aclaracion']) ? $data['fecha_aclaracion'] : null;
        $this->container['monto'] = isset($data['monto']) ? $data['monto'] : null;
        $this->container['nombre_girador'] = isset($data['nombre_girador']) ? $data['nombre_girador'] : null;
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
    
    public function getClaveTipoValor()
    {
        return $this->container['clave_tipo_valor'];
    }
    
    public function setClaveTipoValor($clave_tipo_valor)
    {
        $this->container['clave_tipo_valor'] = $clave_tipo_valor;
        return $this;
    }
    
    public function getFechaProtesto()
    {
        return $this->container['fecha_protesto'];
    }
    
    public function setFechaProtesto($fecha_protesto)
    {
        $this->container['fecha_protesto'] = $fecha_protesto;
        return $this;
    }
    
    public function getClaveSituacion()
    {
        return $this->container['clave_situacion'];
    }
    
    public function setClaveSituacion($clave_situacion)
    {
        $this->container['clave_situacion'] = $clave_situacion;
        return $this;
    }
    
    public function getFechaAclaracion()
    {
        return $this->container['fecha_aclaracion'];
    }
    
    public function setFechaAclaracion($fecha_aclaracion)
    {
        $this->container['fecha_aclaracion'] = $fecha_aclaracion;
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
    
    public function getNombreGirador()
    {
        return $this->container['nombre_girador'];
    }
    
    public function setNombreGirador($nombre_girador)
    {
        $this->container['nombre_girador'] = $nombre_girador;
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
