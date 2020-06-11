<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class InformacionEntidad implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'InformacionEntidad';
    
    protected static $rc_peTypes = [
        'descripcion_entidad' => 'string',
        'clave_situacion' => 'string',
        'antiguedad' => 'float',
        'fecha_ultimo_reporte' => 'string',
        'vigente' => 'float',
        'refinanciada' => 'float',
        'vencida' => 'float',
        'judicial' => 'float',
        'deuda_total' => 'float'
    ];
    
    protected static $rc_peFormats = [
        'descripcion_entidad' => null,
        'clave_situacion' => null,
        'antiguedad' => null,
        'fecha_ultimo_reporte' => null,
        'vigente' => 'float',
        'refinanciada' => 'float',
        'vencida' => 'float',
        'judicial' => 'float',
        'deuda_total' => 'float'
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
        'descripcion_entidad' => 'descripcionEntidad',
        'clave_situacion' => 'claveSituacion',
        'antiguedad' => 'antiguedad',
        'fecha_ultimo_reporte' => 'fechaUltimoReporte',
        'vigente' => 'vigente',
        'refinanciada' => 'refinanciada',
        'vencida' => 'vencida',
        'judicial' => 'judicial',
        'deuda_total' => 'deudaTotal'
    ];
    
    protected static $setters = [
        'descripcion_entidad' => 'setDescripcionEntidad',
        'clave_situacion' => 'setClaveSituacion',
        'antiguedad' => 'setAntiguedad',
        'fecha_ultimo_reporte' => 'setFechaUltimoReporte',
        'vigente' => 'setVigente',
        'refinanciada' => 'setRefinanciada',
        'vencida' => 'setVencida',
        'judicial' => 'setJudicial',
        'deuda_total' => 'setDeudaTotal'
    ];
    
    protected static $getters = [
        'descripcion_entidad' => 'getDescripcionEntidad',
        'clave_situacion' => 'getClaveSituacion',
        'antiguedad' => 'getAntiguedad',
        'fecha_ultimo_reporte' => 'getFechaUltimoReporte',
        'vigente' => 'getVigente',
        'refinanciada' => 'getRefinanciada',
        'vencida' => 'getVencida',
        'judicial' => 'getJudicial',
        'deuda_total' => 'getDeudaTotal'
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
        $this->container['descripcion_entidad'] = isset($data['descripcion_entidad']) ? $data['descripcion_entidad'] : null;
        $this->container['clave_situacion'] = isset($data['clave_situacion']) ? $data['clave_situacion'] : null;
        $this->container['antiguedad'] = isset($data['antiguedad']) ? $data['antiguedad'] : null;
        $this->container['fecha_ultimo_reporte'] = isset($data['fecha_ultimo_reporte']) ? $data['fecha_ultimo_reporte'] : null;
        $this->container['vigente'] = isset($data['vigente']) ? $data['vigente'] : null;
        $this->container['refinanciada'] = isset($data['refinanciada']) ? $data['refinanciada'] : null;
        $this->container['vencida'] = isset($data['vencida']) ? $data['vencida'] : null;
        $this->container['judicial'] = isset($data['judicial']) ? $data['judicial'] : null;
        $this->container['deuda_total'] = isset($data['deuda_total']) ? $data['deuda_total'] : null;
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
    
    public function getClaveSituacion()
    {
        return $this->container['clave_situacion'];
    }
    
    public function setClaveSituacion($clave_situacion)
    {
        $this->container['clave_situacion'] = $clave_situacion;
        return $this;
    }
    
    public function getAntiguedad()
    {
        return $this->container['antiguedad'];
    }
    
    public function setAntiguedad($antiguedad)
    {
        $this->container['antiguedad'] = $antiguedad;
        return $this;
    }
    
    public function getFechaUltimoReporte()
    {
        return $this->container['fecha_ultimo_reporte'];
    }
    
    public function setFechaUltimoReporte($fecha_ultimo_reporte)
    {
        $this->container['fecha_ultimo_reporte'] = $fecha_ultimo_reporte;
        return $this;
    }
    
    public function getVigente()
    {
        return $this->container['vigente'];
    }
    
    public function setVigente($vigente)
    {
        $this->container['vigente'] = $vigente;
        return $this;
    }
    
    public function getRefinanciada()
    {
        return $this->container['refinanciada'];
    }
    
    public function setRefinanciada($refinanciada)
    {
        $this->container['refinanciada'] = $refinanciada;
        return $this;
    }
    
    public function getVencida()
    {
        return $this->container['vencida'];
    }
    
    public function setVencida($vencida)
    {
        $this->container['vencida'] = $vencida;
        return $this;
    }
    
    public function getJudicial()
    {
        return $this->container['judicial'];
    }
    
    public function setJudicial($judicial)
    {
        $this->container['judicial'] = $judicial;
        return $this;
    }
    
    public function getDeudaTotal()
    {
        return $this->container['deuda_total'];
    }
    
    public function setDeudaTotal($deuda_total)
    {
        $this->container['deuda_total'] = $deuda_total;
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
