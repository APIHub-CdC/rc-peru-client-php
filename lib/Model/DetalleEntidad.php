<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class DetalleEntidad implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'DetalleEntidad';
    
    public static $rc_peTypes = [
        'clave_situacion' => 'string',
        'monto' => 'float',
        'fecha_vencimiento' => 'string',
        'fecha_reporte' => 'string'
    ];
    
    public static $rc_peFormats = [
        'clave_situacion' => null,
        'monto' => 'float',
        'fecha_vencimiento' => null,
        'fecha_reporte' => null
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
        'clave_situacion' => 'claveSituacion',
        'monto' => 'monto',
        'fecha_vencimiento' => 'fechaVencimiento',
        'fecha_reporte' => 'fechaReporte'
    ];
    
    public static $setters = [
        'clave_situacion' => 'setClaveSituacion',
        'monto' => 'setMonto',
        'fecha_vencimiento' => 'setFechaVencimiento',
        'fecha_reporte' => 'setFechaReporte'
    ];
    
    public static $getters = [
        'clave_situacion' => 'getClaveSituacion',
        'monto' => 'getMonto',
        'fecha_vencimiento' => 'getFechaVencimiento',
        'fecha_reporte' => 'getFechaReporte'
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
        $this->container['clave_situacion'] = isset($data['clave_situacion']) ? $data['clave_situacion'] : null;
        $this->container['monto'] = isset($data['monto']) ? $data['monto'] : null;
        $this->container['fecha_vencimiento'] = isset($data['fecha_vencimiento']) ? $data['fecha_vencimiento'] : null;
        $this->container['fecha_reporte'] = isset($data['fecha_reporte']) ? $data['fecha_reporte'] : null;
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
    
    public function getClaveSituacion()
    {
        return $this->container['clave_situacion'];
    }
    
    public function setClaveSituacion($clave_situacion)
    {
        $this->container['clave_situacion'] = $clave_situacion;
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
    
    public function getFechaVencimiento()
    {
        return $this->container['fecha_vencimiento'];
    }
    
    public function setFechaVencimiento($fecha_vencimiento)
    {
        $this->container['fecha_vencimiento'] = $fecha_vencimiento;
        return $this;
    }
    
    public function getFechaReporte()
    {
        return $this->container['fecha_reporte'];
    }
    
    public function setFechaReporte($fecha_reporte)
    {
        $this->container['fecha_reporte'] = $fecha_reporte;
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
