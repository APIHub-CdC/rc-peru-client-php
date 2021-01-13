<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class Castigos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'Castigos';
    
    public static $rc_peTypes = [
        'descripcion_entidad' => 'string',
        'clave_estatus_pago' => 'string',
        'fecha_primer_castigo' => 'string',
        'fecha_ultimo_castigo' => 'string',
        'monto_ultimo_castigo' => 'float'
    ];
    
    public static $rc_peFormats = [
        'descripcion_entidad' => null,
        'clave_estatus_pago' => null,
        'fecha_primer_castigo' => null,
        'fecha_ultimo_castigo' => null,
        'monto_ultimo_castigo' => 'float'
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
        'descripcion_entidad' => 'descripcionEntidad',
        'clave_estatus_pago' => 'claveEstatusPago',
        'fecha_primer_castigo' => 'fechaPrimerCastigo',
        'fecha_ultimo_castigo' => 'fechaUltimoCastigo',
        'monto_ultimo_castigo' => 'montoUltimoCastigo'
    ];
    
    public static $setters = [
        'descripcion_entidad' => 'setDescripcionEntidad',
        'clave_estatus_pago' => 'setClaveEstatusPago',
        'fecha_primer_castigo' => 'setFechaPrimerCastigo',
        'fecha_ultimo_castigo' => 'setFechaUltimoCastigo',
        'monto_ultimo_castigo' => 'setMontoUltimoCastigo'
    ];
    
    public static $getters = [
        'descripcion_entidad' => 'getDescripcionEntidad',
        'clave_estatus_pago' => 'getClaveEstatusPago',
        'fecha_primer_castigo' => 'getFechaPrimerCastigo',
        'fecha_ultimo_castigo' => 'getFechaUltimoCastigo',
        'monto_ultimo_castigo' => 'getMontoUltimoCastigo'
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
        $this->container['descripcion_entidad'] = isset($data['descripcion_entidad']) ? $data['descripcion_entidad'] : null;
        $this->container['clave_estatus_pago'] = isset($data['clave_estatus_pago']) ? $data['clave_estatus_pago'] : null;
        $this->container['fecha_primer_castigo'] = isset($data['fecha_primer_castigo']) ? $data['fecha_primer_castigo'] : null;
        $this->container['fecha_ultimo_castigo'] = isset($data['fecha_ultimo_castigo']) ? $data['fecha_ultimo_castigo'] : null;
        $this->container['monto_ultimo_castigo'] = isset($data['monto_ultimo_castigo']) ? $data['monto_ultimo_castigo'] : null;
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
    
    public function getDescripcionEntidad()
    {
        return $this->container['descripcion_entidad'];
    }
    
    public function setDescripcionEntidad($descripcion_entidad)
    {
        $this->container['descripcion_entidad'] = $descripcion_entidad;
        return $this;
    }
    
    public function getClaveEstatusPago()
    {
        return $this->container['clave_estatus_pago'];
    }
    
    public function setClaveEstatusPago($clave_estatus_pago)
    {
        $this->container['clave_estatus_pago'] = $clave_estatus_pago;
        return $this;
    }
    
    public function getFechaPrimerCastigo()
    {
        return $this->container['fecha_primer_castigo'];
    }
    
    public function setFechaPrimerCastigo($fecha_primer_castigo)
    {
        $this->container['fecha_primer_castigo'] = $fecha_primer_castigo;
        return $this;
    }
    
    public function getFechaUltimoCastigo()
    {
        return $this->container['fecha_ultimo_castigo'];
    }
    
    public function setFechaUltimoCastigo($fecha_ultimo_castigo)
    {
        $this->container['fecha_ultimo_castigo'] = $fecha_ultimo_castigo;
        return $this;
    }
    
    public function getMontoUltimoCastigo()
    {
        return $this->container['monto_ultimo_castigo'];
    }
    
    public function setMontoUltimoCastigo($monto_ultimo_castigo)
    {
        $this->container['monto_ultimo_castigo'] = $monto_ultimo_castigo;
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
