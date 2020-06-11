<?php

namespace rc\pe\Client\Model;

use \ArrayAccess;
use \rc\pe\Client\ObjectSerializer;

class DeudasAFP implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $rc_peModelName = 'DeudasAFP';
    
    protected static $rc_peTypes = [
        'descripcion_entidad' => 'string',
        'fecha_reporte' => 'string',
        'clave_tipo_deuda' => 'string',
        'periodo_devengue' => 'string',
        'importe_deuda_fondo' => 'float',
        'importe_deuda_afp' => 'float',
        'clave_condicion_deuda' => 'string',
        'clave_situacion' => 'string'
    ];
    
    protected static $rc_peFormats = [
        'descripcion_entidad' => null,
        'fecha_reporte' => null,
        'clave_tipo_deuda' => null,
        'periodo_devengue' => null,
        'importe_deuda_fondo' => 'float',
        'importe_deuda_afp' => 'float',
        'clave_condicion_deuda' => null,
        'clave_situacion' => null
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
        'fecha_reporte' => 'fechaReporte',
        'clave_tipo_deuda' => 'claveTipoDeuda',
        'periodo_devengue' => 'periodoDevengue',
        'importe_deuda_fondo' => 'importeDeudaFondo',
        'importe_deuda_afp' => 'importeDeudaAFP',
        'clave_condicion_deuda' => 'claveCondicionDeuda',
        'clave_situacion' => 'claveSituacion'
    ];
    
    protected static $setters = [
        'descripcion_entidad' => 'setDescripcionEntidad',
        'fecha_reporte' => 'setFechaReporte',
        'clave_tipo_deuda' => 'setClaveTipoDeuda',
        'periodo_devengue' => 'setPeriodoDevengue',
        'importe_deuda_fondo' => 'setImporteDeudaFondo',
        'importe_deuda_afp' => 'setImporteDeudaAfp',
        'clave_condicion_deuda' => 'setClaveCondicionDeuda',
        'clave_situacion' => 'setClaveSituacion'
    ];
    
    protected static $getters = [
        'descripcion_entidad' => 'getDescripcionEntidad',
        'fecha_reporte' => 'getFechaReporte',
        'clave_tipo_deuda' => 'getClaveTipoDeuda',
        'periodo_devengue' => 'getPeriodoDevengue',
        'importe_deuda_fondo' => 'getImporteDeudaFondo',
        'importe_deuda_afp' => 'getImporteDeudaAfp',
        'clave_condicion_deuda' => 'getClaveCondicionDeuda',
        'clave_situacion' => 'getClaveSituacion'
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
        $this->container['fecha_reporte'] = isset($data['fecha_reporte']) ? $data['fecha_reporte'] : null;
        $this->container['clave_tipo_deuda'] = isset($data['clave_tipo_deuda']) ? $data['clave_tipo_deuda'] : null;
        $this->container['periodo_devengue'] = isset($data['periodo_devengue']) ? $data['periodo_devengue'] : null;
        $this->container['importe_deuda_fondo'] = isset($data['importe_deuda_fondo']) ? $data['importe_deuda_fondo'] : null;
        $this->container['importe_deuda_afp'] = isset($data['importe_deuda_afp']) ? $data['importe_deuda_afp'] : null;
        $this->container['clave_condicion_deuda'] = isset($data['clave_condicion_deuda']) ? $data['clave_condicion_deuda'] : null;
        $this->container['clave_situacion'] = isset($data['clave_situacion']) ? $data['clave_situacion'] : null;
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
    
    public function getFechaReporte()
    {
        return $this->container['fecha_reporte'];
    }
    
    public function setFechaReporte($fecha_reporte)
    {
        $this->container['fecha_reporte'] = $fecha_reporte;
        return $this;
    }
    
    public function getClaveTipoDeuda()
    {
        return $this->container['clave_tipo_deuda'];
    }
    
    public function setClaveTipoDeuda($clave_tipo_deuda)
    {
        $this->container['clave_tipo_deuda'] = $clave_tipo_deuda;
        return $this;
    }
    
    public function getPeriodoDevengue()
    {
        return $this->container['periodo_devengue'];
    }
    
    public function setPeriodoDevengue($periodo_devengue)
    {
        $this->container['periodo_devengue'] = $periodo_devengue;
        return $this;
    }
    
    public function getImporteDeudaFondo()
    {
        return $this->container['importe_deuda_fondo'];
    }
    
    public function setImporteDeudaFondo($importe_deuda_fondo)
    {
        $this->container['importe_deuda_fondo'] = $importe_deuda_fondo;
        return $this;
    }
    
    public function getImporteDeudaAfp()
    {
        return $this->container['importe_deuda_afp'];
    }
    
    public function setImporteDeudaAfp($importe_deuda_afp)
    {
        $this->container['importe_deuda_afp'] = $importe_deuda_afp;
        return $this;
    }
    
    public function getClaveCondicionDeuda()
    {
        return $this->container['clave_condicion_deuda'];
    }
    
    public function setClaveCondicionDeuda($clave_condicion_deuda)
    {
        $this->container['clave_condicion_deuda'] = $clave_condicion_deuda;
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
