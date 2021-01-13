<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class DeudoresOmisos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    public static $rc_peModelName = 'DeudoresOmisos';
    
    public static $rc_peTypes = [
        'tipo' => 'string',
        'periodo' => 'string',
        'clave_situacion' => 'string',
        'acreedor_concepto' => 'string',
        'fecha_reporte' => 'string',
        'monto_deuda' => 'float'
    ];
    
    public static $rc_peFormats = [
        'tipo' => null,
        'periodo' => null,
        'clave_situacion' => null,
        'acreedor_concepto' => null,
        'fecha_reporte' => null,
        'monto_deuda' => 'float'
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
        'tipo' => 'tipo',
        'periodo' => 'periodo',
        'clave_situacion' => 'claveSituacion',
        'acreedor_concepto' => 'acreedorConcepto',
        'fecha_reporte' => 'fechaReporte',
        'monto_deuda' => 'montoDeuda'
    ];
    
    public static $setters = [
        'tipo' => 'setTipo',
        'periodo' => 'setPeriodo',
        'clave_situacion' => 'setClaveSituacion',
        'acreedor_concepto' => 'setAcreedorConcepto',
        'fecha_reporte' => 'setFechaReporte',
        'monto_deuda' => 'setMontoDeuda'
    ];
    
    public static $getters = [
        'tipo' => 'getTipo',
        'periodo' => 'getPeriodo',
        'clave_situacion' => 'getClaveSituacion',
        'acreedor_concepto' => 'getAcreedorConcepto',
        'fecha_reporte' => 'getFechaReporte',
        'monto_deuda' => 'getMontoDeuda'
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
        $this->container['tipo'] = isset($data['tipo']) ? $data['tipo'] : null;
        $this->container['periodo'] = isset($data['periodo']) ? $data['periodo'] : null;
        $this->container['clave_situacion'] = isset($data['clave_situacion']) ? $data['clave_situacion'] : null;
        $this->container['acreedor_concepto'] = isset($data['acreedor_concepto']) ? $data['acreedor_concepto'] : null;
        $this->container['fecha_reporte'] = isset($data['fecha_reporte']) ? $data['fecha_reporte'] : null;
        $this->container['monto_deuda'] = isset($data['monto_deuda']) ? $data['monto_deuda'] : null;
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
    
    public function getTipo()
    {
        return $this->container['tipo'];
    }
    
    public function setTipo($tipo)
    {
        $this->container['tipo'] = $tipo;
        return $this;
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
    
    public function getClaveSituacion()
    {
        return $this->container['clave_situacion'];
    }
    
    public function setClaveSituacion($clave_situacion)
    {
        $this->container['clave_situacion'] = $clave_situacion;
        return $this;
    }
    
    public function getAcreedorConcepto()
    {
        return $this->container['acreedor_concepto'];
    }
    
    public function setAcreedorConcepto($acreedor_concepto)
    {
        $this->container['acreedor_concepto'] = $acreedor_concepto;
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
    
    public function getMontoDeuda()
    {
        return $this->container['monto_deuda'];
    }
    
    public function setMontoDeuda($monto_deuda)
    {
        $this->container['monto_deuda'] = $monto_deuda;
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
